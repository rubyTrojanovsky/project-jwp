<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    public $table ="komentar";
    protected $fillable = [
        'article_id',
        'nama',
        'email',
        'isi_komentar'
    ];
    use HasFactory;
}
