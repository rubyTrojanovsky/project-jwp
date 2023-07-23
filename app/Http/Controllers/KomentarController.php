<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Komentar;

class KomentarController extends Controller
{

    public function saveKomentar(Request $request)
    {
        $komentar=$request->all();
        Komentar::create($komentar);
        return redirect()->back(); 
    }
}
