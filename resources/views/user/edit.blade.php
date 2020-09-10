@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
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
              <h3 class="card-title">Edit User</h3>
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
                @foreach($user as $p)
                  <form action="/user/update" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$p->id}}" required="required">
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama </label>
                          <input type="text" name="nama" class="form-control" value="{{ $p->name }}">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" class="form-control" value="{{ $p->alamat }}" >
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" name="email" class="form-control" value="{{ $p->email }}" >
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" name="password" class="form-control"  >
                        </div>
                        <div class="form-group">
                          <label for="nohp">No HP</label>
                          <input type="text" name="nohp" class="form-control" value="{{ $p->nohp }}" >
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button class="btn btn-success" type="submit" value="upload"> Comfirm</button>
                      <a href="\product\dashboard"><button type="reset" class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancel</button></a>
                    </div>
                  </form>
                  @endforeach
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
