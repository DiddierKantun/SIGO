@extends('layout.admin')


@section('contenido')
<div class="col-12">
                <form action="" method="" class="card">
                  @csrf
                  <div class="card-header">
                  <h3 class="card-title">Filtros</h3>
                  </div>
                  <div class="card-body">
                  <div class="row">
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="form-label">Sector</label>
                        <select name="dependencia" class="form-control custom-select">
                            <option value="">Seleccionar...</option>
                              @foreach($sector as $sec)
                              <option value="{{ $sec->id_sector }}"> {{ $sec->nombre_sector }}</option>
                              @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-5">
                      <div class="form-group">
                        <label class="form-label">Dependencia</label>
                        <select name="dependencia" class="form-control custom-select">
                            <option value="">Seleccionar...</option>
                              @foreach($dependencia as $depen)
                              <option value="{{ $depen->id_dependencia }}"> {{ $depen->nombre_dependencia }}</option>
                              @endforeach
                            </select>
                      </div>
                    </div>
                    <div class="col-sm-6 col-md-2">
                      <div class="form-group">
                        <label class="form-label"></label>
                        <button style="" type="submit" class="btn btn-info ml-auto">Buscar</button>
                      </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{ Route('directorio.excel') }}" type="submit" class="btn btn-success ml-auto">Exportar excel</a>
                </div>
              </form>

            </div>

<div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer"><table class="table card-table table-vcenter text-nowrap datatable dataTable no-footer" id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                      <thead>
                        <tr role="row">
                        <th class="w-1 sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Clave: activate to sort column descending" style="width: 45.28px;">No.</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Sector</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Siglas</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Dependencia</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Direccion</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Cargo titular</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Titulo titular</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Nombre titular</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo personal</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono personal</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Cargo enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Titulo enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Nombre enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo personal</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono personal</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Cargo enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Titulo enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Nombre enlace</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Correo personal</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono institucional</th>
                        <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Nombre: activate to sort column ascending" style="width: 130.88px;">Telefono personal</th>
                    </tr>
                      </thead>
                      <tbody>
                          <?php echo $cadena; ?>
                      </tbody>
                    </table>
                    <script>
                      require(['datatables', 'jquery'], function(datatable, $) {
                      	    $('.datatable').DataTable();
                      	  });
                    </script>
                  </div>
                </div>
              </div>
@stop
