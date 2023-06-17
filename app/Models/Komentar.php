<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    public $table ="komentar";
    public function artikel(){
        return $this->belongsTo(Artikel::class);
    }
    protected $fillable = [
        'article_id',
        'nama',
        'email',
        'isi_komentar'
    ];
    use HasFactory;
}
