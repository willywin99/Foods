<?php

namespace App\Http\Controllers;

use App\v1\Food;
use Illuminate\Http\Request;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $foods = Food::all();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $foods
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $food = new Food();
        $food->nama = $request->nama;
        $food->daerah_asal = $request->daerah_asal;
        $food->kategori_makanan = $request->kategori_makanan;
        $food->teknik_memasak = $request->teknik_memasak;
        $food->suhu_penyajian = $request->suhu_penyajian;
        $food->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Makanan berhasil ditambahkan'
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\v1\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food, $id)
    {
        $tampungFood = Food::find($id);
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => $tampungFood
        ], 200);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\v1\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food, $id)
    {
        $tampungFood = Food::find($id);
        $tampungFood->nama = $request->nama;
        $tampungFood->daerah_asal = $request->daerah_asal;
        $tampungFood->kategori_makanan = $request->kategori_makanan;
        $tampungFood->teknik_memasak = $request->teknik_memasak;
        $tampungFood->suhu_penyajian = $request->suhu_penyajian;
        // dd($tampungFood);
        $tampungFood->save();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Makanan berhasil diubah'
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\v1\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food, $id)
    {
        $food = Food::find($id);
        $food->delete();
        return response()->json([
            'status' => 'success',
            'statuscode' => 200,
            'data' => 'Makanan berhasil dihapus'
        ], 200);
    }
}
