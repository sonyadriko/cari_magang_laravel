<?php

namespace App\Http\Controllers;

use App\MSiswaModel as Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
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
        return view('registersiswa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Request()->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'sekolah' => 'required',
            'jurusan' => 'required',
            'alamat' => 'required',
            // 'nisn' => 'required',
            // 'kota' => 'required',
            // 'no_telp' => 'required',
            'email' => 'required',
            'password' => 'required',
            // 'foto_siswa' => 'file|image|mimes:jpg,png,jpeg|max:1500000',
            // 'hak_akses' => 'required',
        ],[
            'nama.required' => 'The Nama field is required.',
            'jenis_kelamin.required' => 'The Jenis Kelamin field is required.',
            'sekolah.required' => 'The Sekolah field is required.',
            'jurusan.required' => 'The Jurusan field is required.',
            'alamat.required' => 'The Alamat field is required.',
            // 'nisn.required' => 'The NISN field is required.',
            // 'kota.required' => 'The Kota field is required.',
            // 'no_telp.required' => 'The No Telepon field is required.',
            'email.required' => 'The Email field is required.',
            'password.required' => 'The Password field is required.',
            // 'foto_siswa.mimes' => 'The Foto Siswa file incorrect',
            // 'foto_siswa.file' => 'The Foto Siswa must be a file',
            // 'foto_siswa.required' => 'The Foto Siswa field is required.',
            // 'hak_akses.required' => 'The Hak Akses field is required.',
        ]);

        // $file = Request()->foto_siswa;
        // $fileName = Request()->nama.'.'.$file->extension();
        // $file->move(public_path('picture'),$fileName);

        // dd($request);
        Siswa::create([
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'sekolah' => $request->sekolah, 
            'jurusan' => $request->jurusan,
            'alamat' => $request->alamat,
            // 'nisn' => $request->nisn, 
            // 'kota' => $request->kota,
            // 'no_telp' => $request->no_telp,
            'email' => $request->email, 
            'password' => \Hash::make($request->password),
            // 'foto_siswa' => $request->foto_siswa,
            // 'hak_akses' => $request->hak_akses,
        ]);
        return redirect('/login');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MSiswaModel  $mSiswaModel
     * @return \Illuminate\Http\Response
     */
    public function show(MSiswaModel $mSiswaModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MSiswaModel  $mSiswaModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MSiswaModel $mSiswaModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MSiswaModel  $mSiswaModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MSiswaModel $mSiswaModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MSiswaModel  $mSiswaModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MSiswaModel $mSiswaModel)
    {
        //
    }
}
