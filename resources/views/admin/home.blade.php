@extends('layouts.app2')

@section('content')
<section class="content-header">
      <div class="container-fluid">
            <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner">
            <h3>{{$product}}</h3>

            <p>Jumlah Produk</p>
          </div>
          <div class="icon">
            <i class="ion ion-bag"></i>
          </div>
          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner">
            <h3>{{$order}}</h3>

            <p>Jumlah Pesanan</p>
          </div>
          <div class="icon">
            <i class="ion ion-stats-bars"></i>
          </div>
          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner">
            <h3>{{$customer}}</h3>

            <p>Jumlah Pengguna</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner">
            <h3>{{$admin}}</h3>

            <p>Jumlah admin</p>
          </div>
          <div class="icon">
            <i class="ion ion-pie-graph"></i>
          </div>
          <a href="#" class="small-box-footer"> <i class="fas fa-arrow-circle-right"></i></a>
        </div>
      </div>
      <!-- ./col -->
    </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
      	<div class="col-sm-6">
      		<div class="card card-primary">
      			<div class="card-header">
              		<h3 class="card-title">Konfirmasi Pesanan</h3>
          		</div>
          		<div  class="card-body">
          			<div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-short="ascending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KODE</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TANGGAL</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">HARGA</th>
                       <!--  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th> -->
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
                    	<?php $no = 1; ?>
                      @foreach($konfirmasi as $k)
                      <tr role="row" class="add">
                        <td>{{$no++}}</td>
                        <td>{{$k->kode}}</td>
                        <td>{{$k->tanggal}}</td>
                        <td>Rp. {{number_format($k->jumlah_harga)}}</td>
                        <!-- <td><img class="center" altirm="image" height="200" width="300" src="\img\product\"></td> -->
                        <td>
                          <a href="/admin/konfirmasi/{{$k->id}}" class="open_modal_ubah btn btn-sm btn-success shadow-sm">Konfirmasi</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>

              </div>
          		</div>
      		</div>
      	</div>
      	<div class="col-sm-6">
      		<div class="card card-secondary">
      			<div class="card-header">
              		<h3 class="card-title">Pesanan Berhasil Di Konfirmasi</h3>
          		</div>
          		<div  class="card-body">
          			<div id="exaple2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                  <div class="col-sm-12 col-md-6"></div>
                  <div class="col-sm-12 col-md-6"></div>
                </div>
                <div class="row">
                <div class="col-sm-12">
                  <table id="example2" class="table table-bordered table-hover dataTable" role="grid" aria-describedby="example2_info">
                    <thead>
                      <tr role="row">
                        <th class="sorting_asc" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-short="ascending">NO</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">KODE</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">TANGGAL</th>
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">HARGA</th>
                       <!--  <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">GAMBAR</th> -->
                        <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1">AKSI</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php $no = 1; ?>
                      @foreach($cancel as $k)
                      <tr role="row" class="add">
                        <td>{{$no++}}</td>
                        <td>{{$k->kode}}</td>
                        <td>{{$k->tanggal}}</td>
                        <td>Rp. {{number_format($k->jumlah_harga)}}</td>
                        <!-- <td><img class="center" altirm="image" height="200" width="300" src="\img\product\"></td> -->
                        <td>
                          <a href="/admin/cancel/{{$k->id}}" class="open_modal_ubah btn btn-sm btn-danger shadow-sm">Cancel</a>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>    
                </div>
                </div>
                
              </div>
          		</div>
      		</div>
      	</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
@endsection
