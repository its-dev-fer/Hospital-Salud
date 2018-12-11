@extends('layouts.app')

@section('content')
        <div class="alert alert-success" style="
        position: fixed;
        bottom: 2px;
        right: 10px;
        z-index: 10;
        display: none;
        width: 30%;
        " id="success" role="alert">
            Datos guardados exitosamente
        </div>
        <div class="alert alert-danger" style="
        position: fixed;
        bottom: 2px;
        right: 10px;
        z-index: 10;
        display: none;
        width: 30%;
        " id="danger" role="alert">
            Ups, algo salio mal. Verifica tus datos!
        </div>
        <!-- Show table with Fifteen elements-->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead class="thead-dark">
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
        <nav aria-label="Page navigation example" style="margin-left:10px">
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
        <!-- Options of table -->

        <div class="btn-group dropdown btn_options">
            <button type="button" class="dropdown-toggle" style="background-color: transparent; border:0px; color: #00BFA5; margin-top: 3px; " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Opciones
            </button>
            <div class="dropdown-menu">
                <div class="dropdown-item" data-toggle="collapse" href="#collapseExample">Columnas</div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox"  id="1" value="show"  onclick="_onclick(this.id)" ><p># de unidades</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="2" value="show"  onclick="_onclick(this.id)" ><p># de prog</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="3" value="show"  onclick="_onclick(this.id)"><p># de unidad</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="4" value="show"  onclick="_onclick(this.id)" ><p>Caducidad</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="5" value="show"  onclick="_onclick(this.id)"><p>Defecto de conversión</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="6" value="show"  onclick="_onclick(this)"><p># de cs</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="7" value="show"  onclick="_onclick(this.id)" ><p># de registro</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="8" value="show"  onclick="_onclick(this.id)" ><p>Nombre del que desecha</p>
                </div>
                <div class="dropdown-item option-item" style="display: flex">
                    <input type="checkbox" id="9" value="show"  onclick="_onclick(this.id)"><p>Nombre del personal PBI</p>
                </div>
                <div class="dropdown-divider"></div>
                <div class="dropdown-item option-item" data-toggle="modal" data-target="#exampleModal">Formulario</div>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Formulario para desechos</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Insert -->
                    <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Numero de prog</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="num_prog" id="num_prog" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Numero de unidades</span>
                            </div>
                            <input type="number" class="form-control input-form-desechos" name="num_unidad" id="num_unidad" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Caducidad</span>
                            </div>
                            <input type="date" class="form-control input-form-desechos" name="caducidad" id="caducidad" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Defecto de conversión</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="defecto_conservacion" id="defecto_conservacion" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Numero de cs</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="num_cs" id="num_cs" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Numero de registro</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="num_registro" id="num_registro" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nombre de quien desecha</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="nombre_desechador" id="nombre_desechador" required>
                        </div>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nombre del personal PBI</span>
                            </div>
                            <input type="text" class="form-control input-form-desechos" name="nombre_ppbi" id="nombre_ppbi" required>
                        </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-success"  value="Insertar" id="buttonInsert">
                    <input type="button" class="btn btn-secondary" value="Cerrar" data-dismiss="modal">
                </div>
                </div>
            </div>
        </div>
        <script src="{{ URL::asset('js/Tables.js') }}"></script>
        @endsection
