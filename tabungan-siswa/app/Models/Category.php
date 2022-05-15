<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [
        'category_id',
        'created_at',
        'updated_at'
    ];

    public function berita() {
        return $this->hasMany(Berita::class);
    } 
}
