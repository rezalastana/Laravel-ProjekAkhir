<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function artikels() {
        $pertanyaan = Pertanyaan::all();
        
        return view('layouts.crud.pertanyaan', compact('pertanyaan'));
    }

    public function create() {
        return view('layouts.crud.create');
    }

    public function store(Request $request) {
        $pertanyaan = Pertanyaan::create([
            "judul" => $request["judul"],
            "isi" => $request["isi"],
            "tag" => $request["tag"],
            "tanggal_dibuat" => $request["tanggal_dibuat"],
            "tanggal_diperbarui" => $request["tanggal_diperbarui"]
        ]);

        return redirect('/pertanyaan');
    }

    public function detail($id) {
        $output = Pertanyaan::where('id', $id)->first();
        // dd($jawaban);
        return view('layouts.crud.detail',compact('output'));
    }

    public function edit($id) {
        $data = Pertanyaan::where('id',$id)->first();
        // $data = $request->all();
        // unset($data["_token"]);
        // unset($data["_method"]);
        // dd($data);
        // PertanyaanModel::update($data);
        return view('layouts.crud.edit', compact('id'));
    }

    public function update(Request $request) {
        $output = Pertanyaan::where('id',$request->id)->first();

        $output->judul = $request->judul;
        $output->isi = $request->isi;
        $output->tanggal_dibuat = $request->tanggal_dibuat;
        $output->tanggal_diperbarui = $request->tanggal_diperbarui;
        $output->save();
        return redirect('/pertanyaan', compact('id'));
    }

    public function destroy($id) {
        Pertanyaan::where('id',$id)->delete();
        return redirect('/pertanyaan');
    }
}
