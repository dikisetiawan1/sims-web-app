<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class DashboardProduk extends Controller
{
    public function index(){
        $data = Produk::paginate(9);
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

    $request->validate([
        'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'nama_produk' => 'required',
        'kategori_product' => 'required',
        'harga_jual' => 'required',
        'harga_beli' => 'required',
        'stok' => 'required'
    ]);

    $image = $request->file('img');
    $image->storeAs('public/produk', $image->hashName());

    Produk::create([
        'img' => $image->hashName(),
        'nama_produk' => $request->nama_produk,
        'kategori_product' => $request->kategori_product,
        'harga_jual' => $request->harga_jual,
        'harga_beli' => $request->harga_beli,
        'stok' => $request->stok

    ]);

    Session::flash('success','Data berhasil ditambahkan!');

        //redirect to index
        return redirect()->route('produk');
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
        $data = Produk::find($id);
        return view('pages.admin.updateProduk',compact('data'));
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
        // get data model from database
        $data = Produk::find($id);
        // validate form, before going to database
        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'nama_produk' => 'required',
            'kategori_product' => 'required',
            'harga_jual' => 'required',
            'harga_beli' => 'required',
            'stok' => 'required'
        ]);
        // adding new image
        $image = $request->file('img');
        $image->storeAs('public/produk', $image->hashName());
        // delete old image
        Storage::delete('public/produk/'.$image->$id);
    
        // update all new data
        $data->update([
            'img' => $image->hashName(),
            'nama_produk' => $request->nama_produk,
            'kategori_product' => $request->kategori_product,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'stok' => $request->stok
    
        ]);

        return redirect()->route('produk');

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
