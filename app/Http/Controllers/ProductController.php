<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;



class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Product::with('jenis')->paginate(1000);
        return view('product.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Product;
        return view('product.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $model = new Product;
        $model->name = $request->name;
        $model->harga = $request->harga;
        $model->jenis_id = $request->jenis_id;
        $model->save();

        return redirect('product');
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
        $model = Product::find($id);
        return view('product.edit', compact('model'));
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
        $model = Product::find($id);
        $model->name = $request->name;
        $model->harga = $request->harga;
        $model->jenis_id = $request->jenis_id;
        $model->save();

        return redirect('product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = Product::find($id);
        $model->delete();

        return redirect('product');
    }
           // public function delete($id)
    // {
    //     $pesanan_detail = PesananDetail::where('id', $id)->first();

    //     $pesanan = Pesanan::where('id', $pesanan_detail->pesanan_id)->first();
    //     $pesanan->total_harga = $pesanan->total_harga-$pesanan_detail->total_harga;
    //     $pesanan->update();

    //     $pesanan_detail->delete();
    //     return Redirect('/pemesanan');
    // }
}
