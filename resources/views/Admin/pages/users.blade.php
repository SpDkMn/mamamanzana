@extends('Admin.layout.template')

@section('css-1')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables/dataTables.bootstrap.css')}}">
@stop

@section('content')
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Usuarios
            <small> --- </small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-group"></i> Inicio</a></li>
            <li class="active">Usuarios</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Sexo</th>
                        <th>R. Edad</th>
                        <th>Foto</th>
                        <th>Ultima sesión</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Oscar Shimabukuro</td>
                        <td>Oscar@Shimabukuro.com</td>
                        <td>Indefinido :v</td>
                        <td>24</td>
                        <td><img src="{{asset('dist/img/photo2.png')}}" width="80px"></td>
                        <td>06/06/06 06:06:06</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Oscar Shimabukuro</td>
                        <td>Oscar@Shimabukuro.com</td>
                        <td>Indefinido :v</td>
                        <td>24</td>
                        <td><img src="{{asset('dist/img/photo2.png')}}" width="80px"></td>
                        <td>06/06/06 06:06:06</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Oscar Shimabukuro</td>
                        <td>Oscar@Shimabukuro.com</td>
                        <td>Indefinido :v</td>
                        <td>24</td>
                        <td><img src="{{asset('dist/img/photo2.png')}}" width="80px"></td>
                        <td>06/06/06 06:06:06</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Oscar Shimabukuro</td>
                        <td>Oscar@Shimabukuro.com</td>
                        <td>Indefinido :v</td>
                        <td>24</td>
                        <td><img src="{{asset('dist/img/photo2.png')}}" width="80px"></td>
                        <td>06/06/06 06:06:06</td>
                      </tr>
                      <tr>
                        <td>1</td>
                        <td>Oscar Shimabukuro</td>
                        <td>Oscar@Shimabukuro.com</td>
                        <td>Indefinido :v</td>
                        <td>24</td>
                        <td><img src="{{asset('dist/img/photo2.png')}}" width="80px"></td>
                        <td>06/06/06 06:06:06</td>
                      </tr>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->

@endsection

@section('script-src-2')
    <!-- DataTables -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables/dataTables.bootstrap.min.js')}}"></script>
    <!-- SlimScroll -->
    <script src="{{asset('plugins/slimScroll/jquery.slimscroll.min.js')}}"></script>
@endsection

@section('script-src-1')
    <script>
      $(function () {
        $('#example1').DataTable();
      });
    </script>
@endsection
