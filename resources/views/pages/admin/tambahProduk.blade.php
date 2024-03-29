@extends('layouts.dashboard')
@section('content')
            <div class="container mt-4">
              Daftar Produk > Tambah Produk
              <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
                @csrf
            <div class="row mt-4">
              <div class="col-4 ">
                <label for="">Kategori</label>
                <select name="kategori_product" id="" class="form-control" >
                  <option selected>Pilih Kategori</option>
                  <option value="1">Alat Olahraga</option>
                  <option value="2">Alat Musik</option>
                </select>
                @error('kategori_product')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                  
              </div>
              <div class="col-8 ">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama barang" >
                @error('nama_produk')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>

            <div class="row mt-4 ">
              <div class="col-4">
                <label for="">Harga Jual</label>
                <div class="input-group">
                <span class="input-group-addon">Rp. </span>
                <input type="text" name="harga_jual" id="jual" class="form-control" >
                </div>
                @error('harga_jual')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col-4 ">  
                <label for="">Harga Beli</label>
                <div class="input-group">
                  <span class="input-group-addon">Rp. </span>
                  <input type="text" name="harga_beli" id="beli" class="form-control" >
                  </div>
                @error('harga_beli')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col-4 ">
                <label for="">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan jumlah stok barang" >
                @error('stok')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>
            
            <div class="row mt-4">
              <div class="col-4">
              <label for="">Upload Image</label>
              <input type="file" name="img" id="fileInput" accept="image/*" onchange="previewImage(event)">
              @error('img')
              <div class="alert alert-danger">{{$message}}</div>
              @enderror
            </div>
          </div>
            <div class="row mt-4">
              <div class="col-12">
                <div id="imagePreview" >
                  <img src="/img/image.png" alt="">
                </div>
              </div>
            </div>
          

            <div class="row mt-3 " >
              <div class="col-12 d-flex justify-content-end">
                <a href="{{route('produk')}}" class="btn btn-outline-primary col-sm-2 mx-2 "> Batalkan</a>
                <button type="submit" class="btn btn-primary col-sm-2" onclick="submitForm()">Simpan</button>
              </div>
            </div>
          </form>
            </div>
            
            {{-- loading overlay --}}
            <div class="loading-overlay" id="loadingOverlay">
              <div class="loading-spinner"></div>
          </div>
      
         
@endsection
