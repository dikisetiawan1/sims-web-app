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
                <select name="kategori_product" id="" class="form-control" >
                  @foreach($kategori as $item)
                  <option value="{{$item ->id}}" {{ $item->id == $data->kategori_product ? 'selected' : '' }}>{{$item ->kategori_product}}</option>   
                  @endforeach
                </select>
                @error('kategori_product')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col-8 ">
                <label for="">Nama Barang</label>
                <input type="text" name="nama_produk" id="nama_produk" class="form-control" placeholder="Masukkan nama barang" value="{{$data->nama_produk}}" >
                @error('nama_produk')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row mt-4 ">
              <div class="col-4">
                <label for="">Harga Jual</label>
                <input type="text" name="harga_jual" id="harga_jual" class="form-control" placeholder="Rp. xxx" value="{{$data->harga_jual}}" >
                @error('harga_jual')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col-4 ">
                <label for="">Harga Beli</label>
                <input type="text" name="harga_beli" id="harga_beli" class="form-control" placeholder="Rp.xxx" value="{{$data->harga_beli}}" >
                @error('harga_beli')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
              <div class="col-4 ">
                <label for="">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan jumlah stok barang" value="{{$data->stok}}" >
                @error('stok')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
                
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-4">
                <label for="">Upload Image</label>
                <input type="file" name="img" id="fileInput"  accept="image/*" onchange="previewImage(event)">
                @error('img')
                <div class="alert alert-danger">{{$message}}</div>
                @enderror
              </div>
            </div>
            <div class="row mt-4">
              <div class="col-12">
                <div id="imagePreview" >
                  <img src="{{Storage::url('public/produk/').$data->img }}" alt="" >
                </div>
              </div>
            </div>
          </div>

            <div class="row mt-3 " >
              <div class="col-12 d-flex justify-content-end">
                <a href="{{route("produk")}}" class="btn btn-outline-primary col-sm-2 mx-2 ">Batalkan</a>
                <button type="submit" class="btn btn-primary col-sm-2" onclick="submitForm()">Simpan</button>
              </div>
            </div>
          </form>
            </div>
             {{-- loading overlay --}}
             <div class="loading-overlay" id="loadingOverlay">
              {{-- <div class="loading-spinner"></div> --}}
              <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
          </div>
@endsection
