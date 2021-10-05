<?php

namespace App\Http\Controllers;

use App\Models\Penerima;
use Illuminate\Http\Request;

class PenerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $donor = Penerima::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'status_cov' => $request->status_cov,
            'tgl_lahir' => $request->tgl_lahir,
            'negatif' => $request->negatif,
            'positif' => $request->positif,
            'alamat' => $request->alamat,

        ]);
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
        $donor = Penerima::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'status_cov' => $request->status_cov,
            'tgl_lahir' => $request->tgl_lahir,
            'negatif' => $request->negatif,
            'positif' => $request->positif,
            'alamat' => $request->alamat,

        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Penerima::find($id)->delete();
    }
}
