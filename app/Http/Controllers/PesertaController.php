<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class pesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function beranda()
    {
        $peserta = User::paginate(6);
        return view('index', compact('peserta'));
    }

    public function index()
    {
        $peserta = User::where('roles', 'user')->get();
        return view('admin.peserta.index', compact('peserta'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.peserta.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $peserta = new User();
        $peserta->nama=$request->nama;
        $peserta->asalsekolah=$request->asalsekolah;
        $peserta->jeniskelamin=$request->jeniskelamin;
        $peserta->username=$request->username;
        $peserta->password=bcrypt($request->password);
        $peserta->roles='user';

        $peserta->save();
        return redirect()->route('peserta');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function show(peserta $peserta)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $peserta = User::where('id', $id)->first();
        return view('admin.peserta.edit', compact('peserta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $peserta = User::where('id', $id)->first();

        $peserta->nama=$request->nama;
        $peserta->asalsekolah=$request->asalsekolah;
        $peserta->jeniskelamin=$request->jeniskelamin;
        $peserta->username=$request->username;
        $peserta->password=bcrypt($request->password);

        $peserta->update();
        return redirect('peserta');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\peserta  $peserta
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $peserta = User::find($id);

        $peserta->delete();
        return redirect('peserta');
    }
}
