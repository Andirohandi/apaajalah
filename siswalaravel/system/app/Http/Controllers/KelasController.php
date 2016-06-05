<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Kelas;

use App\Http\Requests\KelasValidasi;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$kelas	= Kelas::paginate(5);
        return view("adminkelas",compact('kelas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('tambahkelas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KelasValidasi $request)
    {
        $kelas = new Kelas;
		$kelas->nama = $request->nama;
		$kelas->save();
		
		Return redirect('adminkelas')->with('message','Kelas berhasil ditambahkan...');
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
        $kelas	= Kelas::findorFail($id);
		return view('ubahkelas',compact('kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(KelasValidasi $request, $id)
    {
        $kelas	= Kelas::findorFail($id);
		$kelas->nama	= $request->nama;
		$kelas->save();
		
		return redirect('adminkelas')->with('message','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::findorFail($id);
		$kelas->delete();
		return redirect('adminkelas')->with('message','Berhasil menghapus kelas');
    }
}
