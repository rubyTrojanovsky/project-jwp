<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{
    public function all()
    {
        $komentar = Komentar::latest()-> get();
        return view('komentar', [
            'title' => "Artikel",
            'komentar' => $komentar
        ]);
    }
    public function saveKomentar(Request $request)
    {
        // dd($request->isi_artikel);
        $komentar = Komentar::create([
            'artikel_id' => $request->id,
            'nama' => $request->nama,
            'email' => $request->email,
            'isi_komentar' => $request->isi_komentar,
        ]);

        return redirect('/artikel/{id}'); 
    }
}
