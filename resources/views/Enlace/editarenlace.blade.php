@extends('layout.admin')

@section('menubar')
        <div class="header collapse d-lg-flex p-0" id="headerMenuCollapse">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-lg order-lg-first">
                <ul class="nav nav-tabs border-0 flex-column flex-lg-row">
                  <li class="nav-item">
                    <a href="{{ Route('welcome') }}" class="nav-link"><i class="fe fe-home"></i> Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('sector.index') }}" class="nav-link"><i class="fe fe-file-text"></i> Sector</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('dependencia.index') }}" class="nav-link"><i class="fe fe-file-text"></i> Dependencia</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('persona.index') }}" class="nav-link"><i class="fe fe-users"></i> Personas</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('enlace.index') }}" class="nav-link"><i class="fe fe-link-2"></i> Enlace</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ Route('usuario.index') }}" class="nav-link"><i class="fe fe-user"></i> Usuario</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
@stop

@section('contenido')
<div class="col-12">
  <form action="{{ route('enlace.update', $enlace->id_tipoenlace) }}" method="POST" class="card">
    @method('PUT')
    @csrf
    <div class="card-header">
      <h3 class="card-title">Gestion de enlaces</h3>
    </div>
    <div class="card-body">
      <div class="form-group">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el nombre..." value="{{ $enlace->nombre_enlace }}">
      </div>
    </div>                
    <div class="card-footer text-right">
      <button type="submit" class="btn btn-primary ml-auto">Guardar</button>
      <a href="{{ route('enlace.index') }}" class="btn btn-danger ml-auto">Cancelar</a>
    </div>
  </form>
</div>
@stop