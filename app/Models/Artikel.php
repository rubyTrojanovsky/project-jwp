<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    public $table ="artikel";
    protected $fillable = [
        'judul',
        'isi_artikel',
    ];
    public function komentar(){
        return $this->hasMany(Komentar::class);
    }
    use HasFactory;
}
