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


  $(document).delegate('.baja','click',function(){
    $id = $(this).data("user");
    $btn = $(this);
    console.log($id);
    $confirmacion = confirm("Esá seguro de esta operación? No se podrá revertir en un futuro.");
    if($confirmacion){
      $.ajax({
        url: '/baja',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          id: $id
        },
      })
      .done(function(response) {
        $btn.removeClass("btn-danger");
        $btn.removeClass("baja");
        $btn.addClass("darAlta");
        $btn.addClass("btn-success");
        $btn.text("Activar");
      })
      .fail(function(xhr, responseText, error) {
        alert("No se pudo borrar el usuario, intente más tarde");
        console.log(xhr.responseText);
      });
    }
  });


  $(document).delegate('.darAlta','click',function(){
    $id = $(this).data("user");
    $btn = $(this);
    console.log($id);
    $confirmacion = confirm("Esá seguro de esta operación? No se podrá revertir en un futuro.");
    if($confirmacion){
      $.ajax({
        url: '/activar',
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        dataType: 'json',
        data: {
          id: $id
        },
      })
      .done(function(response) {
        $btn.removeClass("btn-success");
        $btn.removeClass("darAlta");
        $btn.addClass("baja");
        $btn.addClass("btn-danger");
        $btn.text("Dar de baja");
      })
      .fail(function(xhr, responseText, error) {
        alert("No se pudo borrar el usuario, intente más tarde");
        console.log(xhr.responseText);
      });
    }
  });


});
/*


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
*/
