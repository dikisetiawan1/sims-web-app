@extends('layouts.dashboard')
@section('content')
            <div class="container mt-4">
              Daftar Produk > Tambah Produk
            <div class="row mt-4">
              <div class="col-4">
                <label for="">Kategori</label>
                <select name="kategori" id="" class="form-control">
                  <option selected>Pilih Kategori</option>
                  <option value="Alat Olahraga">Alat Olahraga</option>
                  <option value="Alat Musik">Alat Musik</option>
                </select>
              </div>
              <div class="col-8">
                <label for="">Nama Barang</label>
                <input type="text" name="barang" id="barang" class="form-control" placeholder="Masukkan nama barang">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-4">
                <label for="">Harga Jual</label>
                <input type="text" name="hargaJual" id="hargaJual" class="form-control" placeholder="Rp. xxx">
              </div>
              <div class="col-4">
                <label for="">Harga Beli</label>
                <input type="text" name="hargaBeli" id="hargaBeli" class="form-control" placeholder="Rp.xxx">
              </div>
              <div class="col-4">
                <label for="">Stok</label>
                <input type="text" name="stok" id="stok" class="form-control" placeholder="Masukkan jumlah stok barang">
              </div>
            </div>

            <div class="row mt-4">
              <div class="col-12">
                <label for="">Upload Image</label> <br>
                <input type="file" id="upload" name="upload" onchange="readURL(this);"/>
                  <img id="image" width="100%" height="165px" />
              
              </div>
            </div>

            <div class="row mt-3" >
              <div class="col-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-outline-primary col-sm-2 mx-2 ">Batalkan</button>
                <button type="submit" class="btn btn-primary col-sm-2">Simpan</button>
              </div>
              
            </div>
            </div>
@endsection
