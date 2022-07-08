@extends('plantilla')
@section('content')
    <section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Blog</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Inicio</a></li>
                <li class="breadcrumb-item active">Blog</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
    </section>
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <button class="btn btn-primary float-right">Guardar Cambios</button>
            </div>
            <div class="card-body">
                @foreach ($blog as $key => $value)

                @endforeach
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                {{-- Dominio --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Dominio</span>
                                    </div>
                                    <input type="text" class="form-control" name="dominio" value="{{$value->dominio}}" required>
                                </div>
                                {{-- Servidor --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Servidor</span>
                                    </div>
                                    <input type="text" class="form-control" name="dominio" value="{{$value->servidor}}" required>
                                </div>
                                {{-- Titulo --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Título</span>
                                    </div>
                                    <input type="text" class="form-control" name="dominio" value="{{$value->titulo}}" required>
                                </div>
                                {{-- Descripcion --}}
                                <div class="input-group mb-3">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Descripción</span>
                                    </div>
                                    <textarea name="descripcion" class="form-control" rows="3" required>{{$value->descripcion}}</textarea>
                                </div>
                                <hr class="pb-2">
                                {{-- Palabras Claves --}}
                                <div class="form-group mb-3">
                                    <label>Palabras Claves</label>
                                    @php
                                        $tags = json_decode($value->palabras_claves, true);
                                        $palabras_claves="";
                                        foreach ($tags as $key => $value) {
                                            $palabras_claves .=$value. ",";
                                        }
                                    @endphp
                                    <input type="text" class="form-control" name="palabras_claves" value="{{$palabras_claves}}" required>
                                </div>
                                <hr class="pb-2">
                                {{-- Redes Sociales --}}
                                <label>Redes Sociales</label>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-append">
                                                <span class="input-group-text">Icono</span>
                                            </div>
                                            <select id="icono_red" class="form-control">
                                                <option value="fab fa-facebook-f, #1475E0">facebook</option>
                                                <option value="fab fa-facebook-f, #1475E0">instagram</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- /.card-body -->
            <div class="card-footer">
            Footer
            </div>
            <!-- /.card-footer-->
        </div>
        <!-- /.card -->

    </section>
@endsection
