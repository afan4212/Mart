@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Details Product</h1>
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
              <h3 class="card-title">Details Product</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <div class="row">
            @foreach($product as $p)
            <div class="col-12 col-sm-6">
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
                <img src="/img/product/{{ $p->image }}" class="product-image" alt="Product Image">
              </div>
            </div>
            <div class="col-12 col-sm-6">
              <h3 class="my-3">{{ $p->nama_barang }}</h3>
              <p>{{ $p->keterangan }}</p>
              <hr>
              <div class="row">
                </div>
                <div class="col-12 col-sm-6">
                  <h4>Jumlah</h4>
                    <label class="btn btn-default text-center">
                      <span class="text-xl">{{ $p->stok }}</span>
                      
                    </label>
                </div>
              </div>
              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0">
                  Rp {{ $p->harga }}
                </h2>
              </div>
              @endforeach
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
