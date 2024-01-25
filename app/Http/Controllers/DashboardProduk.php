<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Produk;
use Illuminate\Http\Request;

class DashboardProduk extends Controller
{
    public function index(){
        $data = Produk::all();
        return view('pages.dashboard-produk', ['data'=>$data]);
    }
   
    public function create()
    {
        return view('pages.dashboard-tambahProduk');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate form
        $this->validate($request, [
            'img'     => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'barang'     => 'required',
            'kategori'   => 'required',
            'hargaJual'   => 'required',
            'hargaBeli'   => 'required',
            'stok'   => 'required'
        ]);

        //upload image
        $img = $request->file('img');
        $img->storeAs('public/posts', $img->hashName());

        //create post
        Produk::create([
            'img'     => $img->hashName(),
            'barang'     => $request->barang,
            'kategori'   => $request->kategori,
            'hargaJual'   => $request->hargaJual,
            'hargaBeli'   => $request->hargaBeli,
            'stok'   => $request->stok
          
        ]);

        //redirect to index
        return redirect()->route('dashboard-produk.index')->with(['success' => 'Data Berhasil Disimpan!']);
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
