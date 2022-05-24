<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    use HasFactory;

    protected $guarded = [
        'admin_id',
        'created_at',
        'updated_at'
    ];

    protected $table = "admins";
    protected $primaryKey = "admin_id";
    protected $fillable = [
        'admin_id','nama','pekerjaan','status'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function transaction() {
        return $this->hasMany(Transaction::class);
    }

    public function confirmation() {
        return $this->hasMany(Transaction::class);
    }

}
