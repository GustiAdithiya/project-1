<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::latest()->paginate(5);
        return view('produk.index', compact('produk'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produk.create');
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
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        // $input = $request->all();

        // if ($image = $request->file('image')) {
        //     $destinationPath = 'image/';
        //     $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
        //     $image->move($destinationPath, $profileImage);
        //     $input['image'] = "$profileImage";
        // }

        // Produk::create($request->all());

        $file = $request->file('image');
        $nama_file = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move('image/', $nama_file);
        $upload = new Produk;
        $upload->image = $nama_file;
        $upload->nama = $request->input('nama');
        $upload->kategori = $request->input('kategori');
        $upload->harga = $request->input('harga');
        $upload->stok = $request->input('stok');
        $upload->save();

        return redirect()->route('produk.index')->with('succes', 'Data Berhasil di Input');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Produk $produk)
    {
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Produk $produk)
    {
        $request->validate([
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required',
            'stok' => 'required',
        ]);

        //$produk->update($request->all());

        $file = $request->file('image');
        $nama_file = date('YmdHis') . "." . $file->getClientOriginalExtension();
        $file->move('image/', $nama_file);
        $produk->image = $nama_file;
        $produk->nama = $request->input('nama');
        $produk->kategori = $request->input('kategori');
        $produk->harga = $request->input('harga');
        $produk->stok = $request->input('stok');
        $produk->update();

        return redirect()->route('produk.index')->with('succes', 'Produk Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Produk $produk)
    {
        $produk->delete();

        return redirect()->route('produk.index')->with('succes', 'Produk Berhasil di Hapus');
    }
}
