@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    Daftar Produk
    <div class="row mt-3">
        <div class="col-3 input-group-sm input-group">
            <span class="icon"></span>
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-search" style="color: #ffffff;"></i></span>
              </div>
              <form action="{{route('cari-produk')}}" method="get">
                <input type="text" name="cari" id="cari" aria-label="Small" class="form-control" placeholder="Cari Barang" onchange="this.form.submit()">
              </form>
        </div>
        <div class="col-2 mr-auto input-group-sm" >
         
           <select name="kategori_product" onchange="this.form.submit()" aria-label="Small" class="form-control">
            @foreach($kategori as $item)
            <option value="{{$item->id}}">{{$item->kategori_product}}</option>   
            @endforeach
           </select>
    
        </div>
        <div class="col-2" style="margin-right: -50px">
            <a href="excel.php" class="btn btn-success btn-sm ">
             <img src="/img/MicrosoftExcelLogo.png" alt="">
             Export Excel
         </a>
         </div>
         <div class="col-2 " style="margin-right: -22px">
            <a href="{{route('tambah-produk')}}" class="btn btn-danger btn-sm">
             <img src="/img/PlusCircle.png" alt="">
             Tambah Produk
         </a>
         </div>
    
    </div>
    <div class="row">
        <div class="col-12 mt-4">
           @if(session('success'))
           <div class="alert alert-success alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong>{{session('success')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session('info'))
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong>{{session('info')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          @elseif(session('warning'))
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
            <strong>{{session('warning')}}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
           @endif
            <div class="card">
                <div class="card-body">
                    {{-- @if(count($data) >0) --}}
                  <table class="table table striped">
                    <tr>
                        <thead>
                            <th>No</th>
                            <th>Image</th>
                            <th>Nama Produk</th>
                            <th>Kategori Produk</th>
                            <th>Harga Beli(Rp)</th>
                            <th>Harga Jual(Rp)</th>
                            <th>Stok Produk</th>
                            <th>Aksi</th>
                        </thead>
                    </tr>
                    <tr>
                        <div class="number" hidden>
                            {{$no= 1}}
                        </div>
                        @foreach( $data as $item)
                        <tbody>
                            <td>{{$no}}</td>
                            <td>
                                <img src="{{Storage::url('public/produk/').$item->img }}"  style="width: 22px">
                            </td>
                            <td>{{$item->nama_produk}}</td>
                            <td>{{$item->kategori_produk}}</td>
                            <td>{{rupiah($item->harga_beli)}}</td>
                            <td>{{rupiah($item->harga_jual)}}</td>
                            <td>{{$item->stok}}</td>
                            <td>
                                <a href="{{ route('produk-edit', $item->id) }}"><img src="/img/edit.png" alt="" class="mr-2"></a>
                                <a href="{{ route('produk-destroy', $item->id) }}" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')"><img src="/img/delete.png" alt=""></a>
                              
                            </td>
                        </tbody>
                        <div class="number" hidden>
                            {{$no++}}
                        </div>
                        @endforeach
                    </tr>

                  </table>
                  {{-- @else
                  <div class="alert alert-danger">
                    <h5>Data produk masih kosong, silahkan tambahkan dahulu!</h5>
                  </div>
                  @endif --}}

                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

