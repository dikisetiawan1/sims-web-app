@extends('layouts.dashboard')
@section('content')
            <div class="container mt-4">
              Daftar Produk > Update Produk
              <form action="{{route('produk-update', $data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
            <div class="row mt-4">
              <div class="col-4 ">
                <label for="">Kategori</label>
                <select name="kategori_product" id="" class="form-control">
                  <option value="Alat Olahraga" selected>Alat Olahraga</option>
                  <option value="Alat Musik" selected>Alat Musik</option>   
                </select>
              </div>
              <div class="col-8 ">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama barang" value="{{$data->nama_produk}}">
              </div>
            </div>

            <div class="row mt-4 ">
              <div class="col-4">
                <label for="">Harga Jual</label>
                <input type="text" name="harga_jual" id="harga_jual" class="form-control" placeholder="Rp. xxx" value="{{$data->harga_jual}}">
              </div>
              <div class="col-4 ">
                <label for="">Harga Beli</label>
                <input type="text" name="harga_beli" id="harga_beli" class="form-control" placeholder="Rp.xxx" value="{{$data->harga_beli}}">
              </div>
              <div class="col-4 ">
                <label for="">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan jumlah stok barang" value="{{$data->stok}}">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12">
                <label for="">Upload Image</label> <br>
                <input type="file" name="img" id="fileInput" accept="image/*" onchange="previewImage(event)" />
                <div id="imagePreview" >
                  <img src="{{Storage::url('public/produk/').$data->img }}" alt="" >
                </div>
              </div>
            </div>

            <div class="row mt-3 " >
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary col-sm-2 mx-2 ">Batalkan</button>
                <button type="submit" class="btn btn-primary col-sm-2">Simpan</button>
              </div>
            </div>
          </form>
            </div>
@endsection
