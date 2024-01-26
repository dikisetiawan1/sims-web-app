<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardProduk extends Controller
{
    public function index(){
        $data = Produk::get();
        return view('pages.admin.produk', ['data'=>$data]);
    }

    public function create()
    {
        return view('pages.admin.tambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $produk = new Produk();

       $produk->nama_produk= $request->nama_produk;
       $produk->kategori_product= $request->kategori_product;
       $produk->harga_jual= $request->harga_jual;
       $produk->harga_beli= $request->harga_beli;
       $produk->stok= $request->stok;
       $produk->img= $request->img;

       $produk->save();

        //redirect to index
        return redirect()->route('produk')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
