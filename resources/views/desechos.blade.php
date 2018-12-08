<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Desechos</title>
        <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('css/styleDesechos.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('js/main.js') }}"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="{{ URL::asset('js/Tables.js') }}"></script>
    </head>
    <body >
        <div class="alert alert-success" id="success" role="alert">
            Datos guardados exitosamente
        </div>
        <div class="alert alert-danger" id="danger" role="alert">
            Ups, algo salio mal. Verifica tus datos!
        </div>
        <h1>Desecho de unidades</h1>
        <!-- Show table with Fifteen elements-->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" id="col_1"># de unidad</th>
                        <th scope="col" id="col_2"># de prog</th>
                        <th scope="col" id="col_3"># de unidades</th>
                        <th scope="col" id="col_4">Caducidad</th>
                        <th scope="col" id="col_5">Defecto de conversión</th>
                        <th scope="col" id="col_6"># de cs</th>
                        <th scope="col" id="col_7"># de registro</th>
                        <th scope="col" id="col_8">Nombre de quien desecha</th>
                        <th scope="col" id="col_9">Nombre del personal PBI</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
        <nav aria-label="Page navigation example">
            <ul class="pagination">
                @php 
                    $sizeArray = ceil(($size/15));
                @endphp
                @for($i=1; $i <= $sizeArray; $i++)
                    @if($sizeArray >= 1)
                        <li class="page-item"><a class="page-link" id="page_{{ $i }}" >{{ $i }}</a></li>
                    @endif
                @endfor
            </ul>
        </nav>
        <!-- Insert -->
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de prog</span>
                </div>
                <input type="text" class="form-control" name="num_prog" id="num_prog" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de unidades</span>
                </div>
                <input type="number" class="form-control" name="num_unidad" id="num_unidad" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Caducidad</span>
                </div>
                <input type="date" class="form-control" name="caducidad" id="caducidad" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Defecto de conversión</span>
                </div>
                <input type="text" class="form-control" name="defecto_conservacion" id="defecto_conservacion" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de cs</span>
                </div>
                <input type="text" class="form-control" name="num_cs" id="num_cs" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Numero de registro</span>
                </div>
                <input type="text" class="form-control" name="num_registro" id="num_registro" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre de quien desecha</span>
                </div>
                <input type="text" class="form-control" name="nombre_desechador" id="nombre_desechador" required>
            </div>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nombre del personal PBI</span>
                </div>
                <input type="text" class="form-control" name="nombre_ppbi" id="nombre_ppbi" required>
            </div>
            
            <input type="button" value="Insertar" id="buttonInsert">

        <!-- Options of table -->
        <div>
            <div style="display: flex">
                <input type="checkbox"  id="1" value="show"  onclick="_onclick(this.id)" ><p># de unidades</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="2" value="show"  onclick="_onclick(this.id)" ><p># de prog</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="3" value="show"  onclick="_onclick(this.id)"><p># de unidad</p>
            </div>  
            <div style="display: flex">
                <input type="checkbox" id="4" value="show"  onclick="_onclick(this.id)" ><p>Caducidad</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="5" value="show"  onclick="_onclick(this.id)"><p>Defecto de conversión</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="6" value="show"  onclick="_onclick(this)"><p># de cs</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="7" value="show"  onclick="_onclick(this.id)" ><p># de registro</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="8" value="show"  onclick="_onclick(this.id)" ><p>Nombre del que desecha</p>
            </div>
            <div style="display: flex">
                <input type="checkbox" id="9" value="show"  onclick="_onclick(this.id)"><p>Nombre del personal PBI</p>
            </div>
        </div>
    </body>
</html>
