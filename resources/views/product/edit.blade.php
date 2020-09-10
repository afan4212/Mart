@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Product</h1>
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
              <h3 class="card-title">Edit Product</h3>
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
                @foreach($product as $p)
                  <form action="/product/update" method="post"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                      <div class="form-group">
                          <input type="hidden" name="id" class="form-control" value="{{$p->id}}" required="required">
                        </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="nama">Nama Product</label>
                          <input type="text" name="nama" class="form-control" value="{{ $p->nama_barang }}" required="required">
                        </div>
                        <!-- <div class="form-group">
                          <label for="umur">Kategori Product</label>
                          <input type="text" name="kategori" class="form-control" value="{{ $p->kategoriProduct }}" required="required">
                        </div> -->
                        <div class="form-group">
                          <label for="status">Keterangan Product</label>
                          <input type="text" name="keterangan" class="form-control" value="{{ $p->keterangan }}" required="required">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="alamat">Harga Product</label>
                          <input type="text" name="harga" class="form-control" value="{{ $p->harga }}" required="required">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Jumlah Product</label>
                          <input type="text" name="jumlah" class="form-control" value="{{ $p->stok }}" required="required">
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
