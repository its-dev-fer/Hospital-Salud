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
        <form action="{{route('insert')}}" method="POST">
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
                        <td class="row_1" id="r[1]i[1]c[1]" onclick="addInput(this.id)" >sbadjkb</td>
                        <td class="row_2" id="r[1]i[2]c[1]" onclick="addInput(this.id)">jksdh</td>
                        <td class="row_3" id="r[1]i[3]c[1]" onclick="addInput(this.id)">sadas</td>
                        <td class="row_4" id="r[1]i[4]c[1]" onclick="addInput(this.id)">dsffd</td>
                        <td class="row_5" id="r[1]i[5]c[1]" onclick="addInput(this.id)">sdsa</td>
                        <td class="row_6" id="r[1]i[6]c[1]" onclick="addInput(this.id)">dsad</td>
                        <td class="row_7" id="r[1]i[7]c[1]" onclick="addInput(this.id)">eqewe</td>
                        <td class="row_8" id="r[1]i[8]c[1]" onclick="addInput(this.id)">sads</td>
                        <td class="row_9" id="r[1]i[9]c[1]" onclick="addInput(this.id)">asdsad</td>
                    </tr>
                    <tr>
                        <td class="row_1" id="r[2]i[1]c[1]" onclick="addInput(this.id)" >dsads</td>
                        <td class="row_2" id="r[2]i[2]c[1]" onclick="addInput(this.id)">jksdh</td>
                        <td class="row_3" id="r[2]i[3]c[1]" onclick="addInput(this.id)">sadas</td>
                        <td class="row_4" id="r[2]i[4]c[1]" onclick="addInput(this.id)">dsffd</td>
                        <td class="row_5" id="r[2]i[5]c[1]" onclick="addInput(this.id)">sdsa</td>
                        <td class="row_6" id="r[2]i[6]c[1]" onclick="addInput(this.id)">sdsa</td>
                        <td class="row_7" id="r[2]i[7]c[1]" onclick="addInput(this.id)">eqewe</td>
                        <td class="row_8" id="r[2]i[8]c[1]" onclick="addInput(this.id)">sads</td>
                        <td class="row_9" id="r[2]i[9]c[1]" onclick="addInput(this.id)">asdsad</td>
                    </tr>
                </tbody>
            </table>
            @csrf
            <input type="submit" value="enviar">
        </form>
    </div>
    
    <div >
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

    function addInput(_id){
        let condition = _id.substring(_id.indexOf("c")+2, _id.length-1)
        if(condition == "1"){
            let newId = _id.substring(0, _id.indexOf("c"));
            newId = newId + "c[2]"
            let object = document.getElementById(_id);
            let valueObject  = object.innerHTML;
            let valueId = _id.substring(_id.indexOf("i")+2, _id.indexOf("c")-1)
            object.innerHTML = "";
            object.setAttribute("id", newId);
            let mainElement = document.createElement("INPUT")
            mainElement.setAttribute("type", "text")
            mainElement.setAttribute("value", valueObject)
            mainElement.setAttribute("name", valueId)
            object.appendChild(mainElement)
        }else if(condition == "2"){
            let newId = _id.substring(0, _id.indexOf("c"));
            newId = newId + "c[0]"
            let object = document.getElementById(_id);
            object.setAttribute("id", newId);
        }else{
            let newId = _id.substring(0, _id.indexOf("c"));
            newId = newId + "c[1]"
            let object = document.getElementById(_id)
            object.setAttribute("id", newId);
            let valueChildNode = object.childNodes[0].value
            var textnode = document.createTextNode(valueChildNode)
            object.replaceChild(textnode, object.childNodes[0])
        }

    }

</script>
