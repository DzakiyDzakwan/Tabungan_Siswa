<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $guarded = [
        'transaction_id',
        'created_at',
        'updated_at'
    ];
    
    public function siswa() {
        return $this->belongsTo(Siswa::class);
    }

    public function admin() {
        return $this->belongsTo(Admin::class);
    }
}
