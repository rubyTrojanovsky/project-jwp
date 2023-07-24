<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\Komentar;

class ArtikelController extends Controller
{


    public function all()
    {
        $artikel = Artikel::latest();
        //jika ada pencarian pada search bar, maka artikel yang diambil akan sesuai dengan pencarian
        if(request('cari')){
           $artikel = Artikel::where('judul','like',"%".request('cari')."%");
        }
        return view('artikel', [
            'title' => "Artikel",
            'artikel' => $artikel->get(), 
        ]);
    }

    public function view(Artikel $single)
    {
        $komentar=Komentar::where('article_id',$single->id)->latest()->get();
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