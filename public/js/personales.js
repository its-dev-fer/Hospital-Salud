$(document).ready(function(){
    $boton=$(this)

    $(".alta").click(function(){
        sendLocalRequest(
            $.parseJSON($(this).attr('data-user')).id,
            '/alta',
            $(this)
        )
    })

    $(".baja").click(function(){
        sendLocalRequest(
            $.parseJSON($(this).attr('data-user')).id,
            '/baja',
            $(this)
        )
    })
    
})


function sendLocalRequest(userid, URL, boton){
    $.ajax({
        url: URL,
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data:{
            id: userid
        },
        beforeSend: function(){
            boton.prop("disabled", true)
        }
    })
    .done(function(response){
        boton.prop("disabled", false)     
    })
    .fail(function(error){
        alert("Ups, algo ha salido mal. Inténtalo más tarde...")
        console.log("error: ", error)
    })
}
