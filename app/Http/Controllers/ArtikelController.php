<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;

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

    public function view(Artikel $single)
    {
        return $single;
        
        return $artikel;
        return view('single-post', [
            'title' => "Artikel",
            'artikel' => $single,
        ]);
    }

    // public function add()
    // {

    //     return view('tulis-artikel', ['title' => "Artikel"]);
    // }

    public function save(Request $request)
    {
        // dd($request->isi_artikel);
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