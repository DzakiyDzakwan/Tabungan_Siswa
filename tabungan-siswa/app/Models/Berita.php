<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = [
        'berita_id',
        'created_at',
        'updated_at'
    ];

    public function admin() {
        return $this->belongsTo(Admin::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
