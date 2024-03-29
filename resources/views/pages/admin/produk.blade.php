@extends('layouts.dashboard')

@section('content')
<div class="container mt-4">
    Daftar Produk
    <div class="row mt-3">
        <div class="col-3 input-group-sm input-group">
            <span class="icon"></span>
            <div class="input-group-prepend">
                {{-- <span class="input-group-text" id="basic-addon1"><i class="fas fa-search" style="color: #ffffff;"></i></span> --}}
              </div>
              <form action="{{route('cari-produk')}}" method="get">
                <input type="text" name="cari" id="cari" aria-label="Small" class="form-control" placeholder="Cari Barang" onchange="this.form.submit()">
              </form>
        </div>
        <div class="col-2 mr-auto input-group-sm" >
         <form action="{{route('filter-kategori-produk')}}" method='get'>
           <select name="kategori_product" onchange="this.form.submit()" aria-label="Small" class="form-control">
            <option  value="">Semua</option>
            @foreach($kategori as $item)
              <option value="{{$item->id}}" {{($kategori_produk == $item->id ) ? "selected" : " "}}>{{$item->kategori_product}}</option>   
            @endforeach
           </select>
          </form>
    
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
                    @if(count($data) >0)
                  <table class="table table striped">
                    <tr>
                        <thead>
                            <th>No <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Image <img src="img/sorting.png" alt="" style="width: 20px"> </th>
                            <th>Nama Produk <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Kategori Produk <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Harga Beli(Rp) <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Harga Jual(Rp) <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Stok Produk <img src="img/sorting.png" alt="" style="width: 20px"></th>
                            <th>Aksi <img src="img/sorting.png" alt="" style="width: 20px"></th>
                        </thead>
                    </tr>
                    <tr>
                        @foreach( $data as $item)
                        <tbody>
                            <td>{{$data->firstItem() + $loop->index}}</td>
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
                        @endforeach
                    </tr>
                  </table>
                  {{-- jumlah data per halaman --}}
                  <div class="row my-2">
                  <div class="col-4 mt-2">
                    <p>Show {{ $data->lastItem() }} from {{ $data->total() }}</p>
                 </div>
                 {{-- paginasi data --}}
                  <div class="col-2" style="margin-left: 475px">
                    {{$data->links('vendor.pagination.custom')}}
                 </div>
                </div>

                  @else
                  <div class="alert alert-danger">
                    <h5>Data produk masih kosong, silahkan tambahkan dahulu!</h5>
                  </div>
                  @endif

                </div>
            </div>
        </div>
    </div>
 </div>
@endsection

