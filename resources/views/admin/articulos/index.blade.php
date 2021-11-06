@extends('layouts.app')
@section('titulo', 'Articulos')
@section('css')
<link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.css') }}">
@endsection
@section('content')
    <div class="container-fluid">
        <h1 class="text-black-50">Articulos</h1>
    </div>
    <div class="card">
        <div class="card-header">
            <div class="card-title">Tabla de articulos</div>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button>
              </div>
        </div>
        <div class="card-body">
            <table id="table_id" class="table table-bordered table-striped dataTable" role="grid" aria-describedby="example1_info">
                <thead>
                <tr role="row">
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" >ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Categoria</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Stock</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Acciones</th>
                </tr>

                </thead>
                <tfoot>
                    <th class="sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 123.031px;">ID</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Categoria</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Nombre</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Stock</th>
                    <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" >Acciones</th>
                </tfoot>
              </table>

        </div>
        <div class="card-footer">
            Pie de carta
        </div>
    </div>
@endsection
@section('plugins')
<script type="text/javascript" src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="https://cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"></script>
@endsection
@section('javascript')
<script type="text/javascript">
var table = $(document).ready(function () {
    $.noConflict();
    $('#table_id').DataTable({
        language:{
            url: "https://cdn.datatables.net/plug-ins/1.11.3/i18n/es_es.json"
        },
        buttons: [
            'copy', 'excel', 'pdf'
        ],
        processing: true,
        serverSide: true,
        ajax: "{{ route('articulos.index') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'categoria_id', name: 'categoria_id'},
            {data: 'nombre', name: 'nombre'},
            {data: 'stock', name: 'stock'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
});
</script>
@endsection
