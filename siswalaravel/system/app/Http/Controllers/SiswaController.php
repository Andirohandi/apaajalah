<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\ValidasiSiswa;

use App\Siswa;
use App\Kelas;

use DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$siswa		= DB::table("siswa")
						->join("kelas","siswa.id_kelas","=","kelas.id_kelas" )
						->select("siswa.*","kelas.*")
						->get();
		//$siswa	= Siswa::paginate(5);
		return view("adminsiswa",compact('siswa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$kelas	= Kelas::all();
		return view("tambahsiswa",compact('kelas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidasiSiswa $request)
    {
        $siswa	= new Siswa;
		$siswa->nama_siswa 	= $request->nama;
		$siswa->id_kelas 	= $request->kelas;
		$siswa->alamat 		= $request->alamat;
		$siswa->save();
		
		Return redirect("adminsiswa")->with("message","Siswa berhasil ditambahkan");
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
        $siswa	= Siswa::findorFail($id);
		$kelas	= Kelas::all();
		return view("ubahsiswa",compact('siswa','kelas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidasiSiswa $request)
    {
        $siswa	= Siswa::findorFail($request->id);
		$siswa->nama_siswa 	= $request->nama;
		$siswa->id_kelas 	= $request->kelas;
		$siswa->alamat 		= $request->alamat;
		$siswa->save();
		Return redirect("adminsiswa")->with("message","Siswa berhasil diubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $siswa = Siswa::findorFail($id);
		$siswa->delete();
		return redirect('adminsiswa')->with('message','Berhasil menghapus kelas');
    }
}
