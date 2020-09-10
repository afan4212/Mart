@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Tambah User</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah User</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <form action="/user/store" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama </label>
                          <input type="text" name="nama" class="form-control" placeholder="Nama ..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="umur">Alamat</label>
                          <input type="text" name="alamat" class="form-control" placeholder="Alamat" required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Email</label>
                          <input type="text" name="email" class="form-control" placeholder="Email.." required="required">
                        </div>
                      </div>
                      <div class="col-md-6">
                       <!--  <div class="form-group">
                          <label for="alamat">Berat Product</label>
                          <input type="text" name="berat" class="form-control" placeholder="Berat Product" required="required">
                        </div> -->
                        <div class="form-group">
                          <label for="alamat">Password</label>
                          <input type="text" name="password" class="form-control" placeholder="Password..." required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">No HP</label>
                          <input type="text" name="nohp" class="form-control" placeholder="Nomor Hp..." required="required">
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Comfirm</button>
                      <button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button>
                    </div>
                  </form>
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
      </div>
      <!-- /.row -->
    </section>
@endsection
