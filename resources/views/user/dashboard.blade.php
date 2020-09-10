@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Pengguna</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Data Pennguna</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                	<a class="btn btn-primary" href="\user\add" role="button">Tambah User</a>
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-short="ascending">ID</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">NAMA</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">EMAIL</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">ALAMAT</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">NO HP</th>
                       <!--  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th> -->
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>

                      @foreach($user as $p)
                      <tr role="row" class="add">
                        <td>{{ $p->id }}</td>
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->alamat }}</td>
                        <td>{{ $p->nohp }}</td>
                        <!-- <td><img class="center" alt="image" height="200" width="300" src="\img\product\{{ $p->image }}"></td> -->
                        <td>
                          <a href="/user/edit/{{ $p->id }}" class="open_modal_ubah btn btn-sm btn-primary shadow-sm"><i class="fa fa-cog"></i></a>
                          
                          <a href="/user/delete/{{ $p->id }}" class="btn btn-danger btn-sm delete-link"><i class="fa fa-trash"></i></a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
