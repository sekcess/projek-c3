<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    // protected $fillable = ['judul_berita', 'slug', 'excerpt', isi_berita'];

    //melindungi id, field lain bisa di sini menggunakan mass assignment / menambahkan data sekali jalan
    protected $guarded = ['id'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    
}
