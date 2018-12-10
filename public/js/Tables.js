$(document).ready(function(){
    fetch_customer_data()
    var page = 1;
    $('.page-link').click(function(){
        page = $(this).attr('id')
        page = page.substring(5);
        fetch_customer_data(page, 15)
    })

    function fetch_customer_data(page=1, perPage = 15){
        $.ajax({
            url: "/desechos/show",
            method: 'GET',
            data:{page:page, perPage:perPage},
            dataType: 'json',
            success: function(data){
                $('tbody').html(data)
            }
        })
    }
    $("#buttonInsert").click(function(){
        var num_prog = $('#num_prog').val()
        var num_unidad = $('#num_unidad').val()
        var caducidad = $('#caducidad').val()
        var defecto_conservacion = $('#defecto_conservacion').val()
        var num_cs = $('#num_cs').val()
        var num_registro = $('#num_registro').val()
        var nombre_desechador = $('#nombre_desechador').val()
        var nombre_pbi = $('#nombre_ppbi').val()


        $.ajax({
            url: "/desechos/insert",
            method: 'GET',
            data:{
                num_prog:num_prog,
                num_unidad:num_unidad,
                caducidad:caducidad,
                defecto_conservacion:defecto_conservacion,
                num_cs:num_cs,
                num_registro:num_registro,
                nombre_desechador:nombre_desechador,
                nombre_pbi:nombre_pbi
            },
            success: function(data){
                if(data === "sucess"){
                    $("#success").show()
                    setTimeout(function(){ $("#success").hide(); }, 5000);
                    fetch_customer_data(page, 15)
                }else{
                    $("#danger").show()
                    setTimeout(function(){ $("#danger").hide(); }, 5000);
                }
            },
            error:function(xhr,a,b){
              console.log(xhr.responseText);
            }
        })
    })
})
