<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    use HasFactory;
    public $table = "karyawan"; 
    protected $primarykey ="id";
    public $incrementing=false;
    protected $keyType="string";
    
    protected $fillable = ['id', 'nama', 'jabatan', 'alamat', 'umur', 'created_at'];
}
