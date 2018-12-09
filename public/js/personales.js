$(document).ready(function(){
  //Fer
  $("#_2_welcome").click(function(){
    $("#welcome_tab").show();
    $("#notifications_tab").hide();
  });

  $("#_2_notifications").click(function(){
    $("#welcome_tab").hide();
    $("#notifications_tab").show();
  });

  $("#_2_bitacoras_menu").click(function(){
    $("#welcome_tab").hide();
    $("#notifications_tab").hide();
    $("#bitacoras_tab").show();
  });







  //Aveno

    $boton=$(this)    $(".alta").click(function(){
        sendLocalRequest(
            $.parseJSON($(this).attr('data-user')).id,
            'alta',
            $(this)
        )
    })

    $(".baja").click(function(){
        sendLocalRequest(
            $.parseJSON($(this).attr('data-user')).id,
            'baja',
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
