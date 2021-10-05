<?php

namespace App\Http\Controllers;

use App\Models\Hospital;
use App\Models\Provinces;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;

class HospitalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Session::put('menu', 'hospital');
        $hospital = Hospital::all();
        $province = Provinces::all();
        // return dd($hospital);
        return view('dashboard.hospital_list', ['hospital' => $hospital, 'province' => $province]);
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
        // return $request->all();
        // $request->validate([
        //     'name_hospital',
        //     'phone_hospital',
        //     'wa_hospital',
        //     'email_hospital',
        //     'operation_info_hospital',
        //     'address_hospital',
        //     'link_maps_hospital',

        // ]);

        Hospital::create([
            'name_hospital' => $request->name_hospital,
            'phone_hospital' => $request->phone_hospital,
            'wa_hospital' => $request->wa_hospital,
            'email_hospital' => $request->email_hospital,
            'operation_info_hospital' => $request->operation_info_hospital,
            'address_hospital' => $request->address_hospital,
            'link_maps_hospital' => $request->link_maps_hospital,
            // 'longitude' => $request->longitude,
            // 'latitude' => $request->latitude,
            'id_province' => $request->province,
            'id_regency' => $request->regency,
            'id_district' => $request->district,
            'id_village' => $request->village,
            'stok_plasdar' => $request->plasdar
        ]);
        // return dd($hsptl);
        return redirect('hospital');
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
        // $request->validate([
        //     'name_hospital',
        //     'phone_hospital',
        //     'wa_hospital',
        //     'email_hospital',
        //     'operation_info_hospital',
        //     'address_hospital',
        //     'link_maps_hospital',
        // ]);

        // $hsptl = Hospital::find($id);
        // $data = $request->all();
        // $hsptl->fill($data)->save();
        Hospital::find($id)->update([
            'name_hospital' => $request->name_hospital,
            'phone_hospital' => $request->phone_hospital,
            'wa_hospital' => $request->wa_hospital,
            'email_hospital' => $request->email_hospital,
            'operation_info_hospital' => $request->operation_info_hospital,
            'address_hospital' => $request->address_hospital,
            'link_maps_hospital' => $request->link_maps_hospital,
            // 'longitude' => $request->longitude,
            // 'latitude' => $request->latitude,
            'id_province' => $request->province,
            'id_regency' => $request->regency,
            'id_district' => $request->district,
            'id_village' => $request->village
        ]);
        // return dd($hsptl);
        return redirect('hospital');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Hospital::find($id)->delete();
        return redirect('hospital');
    }
}
