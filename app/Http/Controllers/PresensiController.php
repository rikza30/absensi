<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DateTime;
use DateTimeZone;
use App\Models\Presensi;

class PresensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view ('rekap');
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
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['name','=',auth()->user()->name],
            ['tgl','=',$tanggal],
        ])->first();
        if ($presensi){
            return redirect('home')->with('succes','Data Berhasil di Input');
        }else{
            Presensi::create([
                'name' => auth()->user()->name,
                'tgl' => $tanggal,
                'jammasuk' => $localtime,
            ])->with('succes','Data Berhasil di Input');
        }

        return redirect('home')->with('succes','Data Berhasil di Input');
    } 

    public function presensipulang(){
        $timezone = 'Asia/Jakarta'; 
        $date = new DateTime('now', new DateTimeZone($timezone)); 
        $tanggal = $date->format('Y-m-d');
        $localtime = $date->format('H:i:s');

        $presensi = Presensi::where([
            ['name','=',auth()->user()->name],
            ['tgl','=',$tanggal],
        ])->first();
        
        $dt=[
            'jamkeluar' => $localtime,
            'jamkerja' => date('H:i:s', strtotime($localtime) - strtotime($presensi->jammasuk))
        ];

        if ($presensi->jamkeluar == ""){
            $presensi->update($dt);
            return redirect('home')->with('succes','Data Berhasil di Input');
        }else{
            return redirect('home')->with('succes','Data Berhasil di Input');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function halamanrekap()
    {
        return view('Presensi.halaman-rekap');
    }

    public function show ($tglawal, $tglakhir)
    {
        $presensi = Presensi::with('user')->whereBetween('tgl', [$tglawal, $tglakhir])->orderBy('tgl','asc')->get();
        return view('presensi.rekap', compact('presensi'));
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
