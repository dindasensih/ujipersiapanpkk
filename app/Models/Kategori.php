<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $guarded = ['id'];

    //relasi dengan artikel

    public function artikel()
    {
        return $this->hasMany(Artikel::class);
    }
}
