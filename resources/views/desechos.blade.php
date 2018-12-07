<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Desechos</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="main.js"></script>
    </head>
    <body>
        <h1>Desecho de unidades</h1>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" id="col_1"># de unidades</th>
                        <th scope="col" id="col_2"># de prog</th>
                        <th scope="col" id="col_3"># de unidad</th>
                        <th scope="col" id="col_4">Caducidad</th>
                        <th scope="col" id="col_5">Defecto de conversión</th>
                        <th scope="col" id="col_6"># de cs</th>
                        <th scope="col" id="col_7"># de registro</th>
                        <th scope="col" id="col_8">Nombre de quien desecha</th>
                        <th scope="col" id="col_9">Nombre del personal PBI</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="row_1">sbadjkb</td>
                        <td class="row_2">jksdh</td>
                        <td class="row_3">sadas</td>
                        <td class="row_4">dsffd</td>
                        <td class="row_5">sdsa</td>
                        <td class="row_6">dsad</td>
                        <td class="row_7">eqewe</td>
                        <td class="row_8">sads</td>
                        <td class="row_9">asdsad</td>
                    </tr>
                    <tr>
                        <td class="row_1">dsads</td>
                        <td class="row_2">jksdh</td>
                        <td class="row_3">sadas</td>
                        <td class="row_4">dsffd</td>
                        <td class="row_5">sdsa</td>
                        <td class="row_6">sdsa</td>
                        <td class="row_7">eqewe</td>
                        <td class="row_8">sads</td>
                        <td class="row_9">asdsad</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <form action="{{route('insert')}}" method="POST">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de prog</span>
                </div>
                <input type="text" class="form-control" name="1" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de unidades</span>
                </div>
                <input type="text" class="form-control" name="2" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Caducidad</span>
                </div>
                <input type="text" class="form-control" name="3" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Defecto de conversión</span>
                </div>
                <input type="text" class="form-control" name="4" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de cs</span>
                </div>
                <input type="text" class="form-control" name="5" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de registro</span>
                </div>
                <input type="text" class="form-control" name="6" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre de quien desecha</span>
                </div>
                <input type="text" class="form-control" name="7" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del personal PBI</span>
                </div>
                <input type="text" class="form-control" name="8" required>
            </div>
            @csrf
            <input type="submit" value="Oprimir">
        </form>

        <div>
            <div style="display: flex">
                <input type="checkbox"  id="1" value="show" checked="checked" onclick="_onclick(this.id)" >
                <p># de unidades</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="2" value="show" checked="checked" onclick="_onclick(this.id)" ><p># de prog</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="3" value="show" checked="checked" onclick="_onclick(this.id)"><p># de unidad</p>
            </div>  
            <div style="display: flex">
                <input type="checkbox" id="4" value="show" checked="checked" onclick="_onclick(this.id)" ><p>Caducidad</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="5" value="show" checked="checked" onclick="_onclick(this.id)"><p>Defecto de conversión</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="6" value="show" checked="checked" onclick="_onclick(this)"><p># de cs</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="7" value="show" checked="checked" onclick="_onclick(this.id)" ><p># de registro</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="8" value="show" checked="checked" onclick="_onclick(this.id)" ><p>Nombre del que desecha</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="9" value="show" checked="checked" onclick="_onclick(this.id)"><p>Nombre del personal PBI</p>
            </div>
        </div>
    </body>
</html>


<script>

    function _onclick(id){
        let newObject =  document.getElementById(id).value;
        var all_row=document.getElementsByClassName("row_"+id);
        
        if(newObject == "show"){

            for(var i=0;i<all_row.length;i++){
                all_row[i].style.display="none";
            }
            document.getElementById("col_"+id).style.display="none";
            document.getElementById(id).value="hide";
        }else{
            for(var i=0;i<all_row.length;i++){
                all_row[i].style.display="table-cell";
            }
            document.getElementById("col_"+id).style.display="table-cell";
            document.getElementById(id).value="show";
        }
    }

</script>
