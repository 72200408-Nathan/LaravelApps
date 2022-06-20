<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Mahasiswa72200408;

class Mahasiswa72200408Controller extends Controller
{
    public function mahasiswa()
    {
        $cari = $request->cari;
        $mahasiswa = Mahasiswa72200408::where('nim', 'like', '%'.$cari.'%')->paginate();
        $mahasiswa = Mahasiswa72200408::where('nama', 'like', '%'.$cari.'%')->paginate();
        return view('mahasiswa', ['mahasiswa' => $mahasiswa72200408]);
    }

    public function formahasiswa72200408()
    {
        return view('formahasiswa72200408');
    }

    public function simpanmahasiswa(Request $request){
        $minat = implode(",", $request->get("minat"));
        Mahasiswa72200408::create([
            'nim' => $request->nim,
            'nama' => $request->nama,
            'gender' => $request->gender,
            'jurusan' => $request->jurusan,
            'minat' => $minat
        ]);
        return redirect("/mahasiswa")->with('alert', 'Berhasil Disimpan');
    }

    public function editmahasiswa($nim)
    {
        $mahasiswa = Mahasiswa72200408::find($nim);
        return view('editmahasiswa', ['mahasiswa72200408' => $mahasiswa]);
    }

    public function updatemahasiswa($nim, Request $request)
    {
        $minat = implode(',', $request->minat);
        $mahasiswa = Mahasiswa72200408::find($nim);
        $mahasiswa -> nim = $request -> nim;
        $mahasiswa -> nama = $request -> nama;
        $mahasiswa -> gender = $request -> gender;
        $mahasiswa -> jurusan = $request -> jurusan;
        $mahasiswa -> minat = $minat;
        $mahasiswa -> save();
        return redirect('/mahasiswa72200408')->with('alert', 'Berhasil Diubah');
    }

    public function hapusmahasiswa($nim)
    {
        $mahasiswa = Mahasiswa72200408::find($nim);
        $mahasiswa->delete();
        return redirect('/mahasiswa72200408')->with('alert', 'Berhasil Dihapus');
    }

    public function destroy($id)
{
    Post::find($id)->delete();
    return back()->with('success','Data Berhasl Dihapus');
}
}