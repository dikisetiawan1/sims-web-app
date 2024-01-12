@extends('layouts.dashboard')


@section('content')
<div class="container mt-4">
    Daftar Produk
    <div class="row mt-3">
        <div class="col-3 input-group-sm">
            <input type="text" name="search" id="search" aria-label="Small" class="form-control" placeholder="Cari Barang">
        </div>
        <div class="col-2 mr-auto input-group-sm" >
           <select name="category" id="category" aria-label="Small" class="form-control">
            <option selected>Semua</option>
            <option value="Alat Olahraga">Alat Olahraga</option>
            <option value="Alat Musik">Alat Musik</option>
           </select>
        </div>
        <div class="col-2" style="margin-right: -50px">
            <a href="excel.php" class="btn btn-success btn-sm ">
             <img src="/img/MicrosoftExcelLogo.png" alt="">
             Export Excel
         </a>
         </div>
         <div class="col-2 " style="margin-right: -22px">
            <a href="tambahProduk.php" class="btn btn-danger btn-sm">
             <img src="/img/PlusCircle.png" alt="">
             Tambah Produk
         </a>
         </div>
    
    </div>
    <div class="row">
        <div class="col-12 mt-4">
            <div class="card">
                <div class="card-body">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis iste, nihil nobis quibusdam pariatur nisi incidunt doloremque cumque accusantium cupiditate, totam neque temporibus minus.

                </div>
            </div>
        </div>
    </div>
 </div>
@endsection
