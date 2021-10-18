<?php

namespace App\Http\Controllers;

use App\MLowonganModel as LowModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LowonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tb_lowongan = LowModel::join('user_bos','user_bos.id_bos','tb_lowongan.id_bos')
                       ->select('user_bos.nama','tb_lowongan.*')
                       // ->orderBy('created_at','DESC')
                       ->get();
        // dd($divmst);
        return view('perusahaan/lowongan_perusahaan.index',compact('tb_lowongan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $data = [
            'usrbos' => DB::table('user_bos')->get(),
        ];
        // dd($data);
        return view('perusahaan/lowongan_perusahaan.create',$data);
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\MLowonganModel  $mLowonganModel
     * @return \Illuminate\Http\Response
     */
    public function show(MLowonganModel $mLowonganModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MLowonganModel  $mLowonganModel
     * @return \Illuminate\Http\Response
     */
    public function edit(MLowonganModel $mLowonganModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MLowonganModel  $mLowonganModel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MLowonganModel $mLowonganModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MLowonganModel  $mLowonganModel
     * @return \Illuminate\Http\Response
     */
    public function destroy(MLowonganModel $mLowonganModel)
    {
        //
    }
}
