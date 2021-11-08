extends('layouts.app')
@section('titulo', 'Crear Solicitud de proveedores')
@section('css')
@endsection
@section('content')
<div class="row d-flex justify-content-center">
    <div class="col-md-6 col-sm-12">
        <div class="card mt-3 ">
            <div class="card-header">
                <div class="card-title">Agregar nueva solicitud de proveedores</div>
                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('solicitudes_provee_encab.store') }}" >
                    @csrf
                    <div class="card-body">
                    {{-- Nombre --}}
                      <div class="form-group">
                        <label for="nombre">Solicitud proveedor</label>
                        <input type="text" class="form-control @if($errors->has('nombre')) is-invalid @endif" id="nombre" name="nombre" placeholder="Digite el nombre de la solicitud proveedor"
                         value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                        <div class="text-danger">
                            {{ $errors->first('nombre') }}
                        </div>
                        @endif
                      </div>

                    {{-- descripcion --}}
                    <div class="form-group">
                        <label for="descripcion">Descripcion de categoria</label>
                        <input type="text" class="form-control @if($errors->has('descripcion')) is-invalid @endif" id="descripcion" name="descripcion" placeholder="Digite el nombre de la solicitud proveedor" value="{{ old('descripcion') }}">
                        @if ($errors->has('descripcion'))
                        <div class="text-danger">
                            {{ $errors->first('descripcion') }}
                        </div>
                        @endif
                      </div>


                    <!-- /.card-body -->

                    <div class="">
                      <button type="submit" class="btn btn-primary"> <i class="fas fa-save"></i> Guardar</button>
                    </div>
                  </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('plugins')

@endsection
@section('javascript')
@endsection
