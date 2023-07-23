<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Komentar;

class ArtikelController extends Controller
{
    public function all()
    {
        $artikel = Artikel::latest()-> get();
        return view('artikel', [
            'title' => "Artikel",
            'artikel' => $artikel
        ]);
    }

    public function view(Artikel $single,)
    {
        $komentar=Komentar::latest()-> get();
        return view('single-post', [
            'title' => "Artikel",
            'artikel' => $single,
            'komentar' => $komentar,
        ]);
    }

    public function save(Request $request)
    {
        $artikel = Artikel::create([
            'judul' => $request->judul,
            'isi_artikel' => $request->isi_artikel,
        ]);

        return redirect('/artikel'); 
    }

    public function delete($id){
        $artikel = Artikel::where('id',$id)->delete();
        return redirect('/artikel');
    }
    
    }