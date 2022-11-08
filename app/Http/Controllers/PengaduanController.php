<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;

class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengaduans = Pengaduan::get();
        return view('pengaduan.index',compact('pengaduans'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('pengaduan.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nik'=>'required'
        ]);

        Pengaduan::create([
            'tgl_pengaduan'=>$request->get('tgl_pengaduan'),
            'nik'=>$request->get('nik'),
            'isi_laporan'=>$request->get('isi_laporan'),
            'foto'=>$request->get('foto'),
            'status'=>$request->get('status')
        ]);
        return redirect()->back()->with('message', 'Pengaduan berhasil ditambahkan');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function edit(c $c)
    {
        $pengaduan = Pengaduan::find($id);
        return view('pengaduan.edit',compact(('pengaduan')));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, c $c)
    {
        $this->validate($request, [
            'nik'=>'required'
        ]);

        $pengaduan = Pengaduan::find($id);
        $pengaduan->update($request->all());
        return redirect()->back()->with('message', 'Pengaduan berhasil diupdate!');    

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\c  $c
     * @return \Illuminate\Http\Response
     */
    public function destroy(c $c)
    {
        Pengaduan::find($id)->delete();
        return redirect()->back()->with('message', 'Pengaduan berhasil dihapus!');

    }
}
