<?php

namespace App\Http\Controllers;

use App\Models\Ujian;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Requests\ValidasiUjian;
use App\Http\Requests\ValidasiEditUjian;

class UjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $ujian = Ujian::paginate(6);
        return view('index', compact('ujian'));
    }

    public function index()
    {
        $ujian = Ujian::all();
        return view('admin.ujian.index', compact('ujian'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.ujian.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidasiUjian $request)
    {
        $request->validated();
$ujian = new Ujian();
        $ujian->jenis=$request->jenis;
        $ujian->jumlah=$request->jumlah;
        $ujian->soal=$request->soal;

        $ujian->save();
        return redirect()->route('ujian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function show(Ujian $ujian)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ujian = Ujian::where('id', $id)->first();
        return view('admin.ujian.edit', compact('ujian'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function update(ValidasiEditUjian $request, $id)
    {
        $ujian = Ujian::where('id', $id)->first();
        $data = $request->all();
        $ujian->update($data);
        return redirect('ujian');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ujian  $ujian
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ujian = Ujian::find($id);

        $ujian->delete();
        return redirect('ujian');
    }
}
