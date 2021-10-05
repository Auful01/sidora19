<?php

namespace App\Http\Controllers;

use App\Models\Pendonor;
use Illuminate\Http\Request;

class PendonorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $donor = Pendonor::all();
        return view('user.pendonor.pendonor', ['donor' => $donor]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.pendonor.tambahDonor');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lahir = $request->tgl_lahir;
        // return ();
        $donor = Pendonor::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'status_cov' => $request->status_cov,
            'tgl_lahir' => $request->tgl_lahir,
            'negatif' => $request->negatif,
            'positif' => $request->positif,
            'alamat' => $request->alamat,
            'status_donor' => $request->status_donor,
            'usia' => date("Y") - date("Y", strtotime($lahir)),
            'berat_badan' => $request->berat_badan
        ]);

        return redirect()->route('donor.index');
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
        $donor = Pendonor::find($id);
        return view('user.pendonor.editDonor', ['donor' => $donor]);
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
        $donor = Pendonor::find($id)->update([
            'nama' => $request->nama,
            'email' => $request->email,
            'phone' => $request->phone,
            'gender' => $request->gender,
            'status_cov' => $request->status_cov,
            'tgl_lahir' => $request->tgl_lahir,
            'negatif' => $request->negatif,
            'positif' => $request->positif,
            'alamat' => $request->alamat,
            'status_donor' => $request->status_donor

        ]);
        return redirect()->route('donor.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pendonor::find($id)->delete();

        return redirect()->route('donor.index');
    }
}
