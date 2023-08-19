<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Studer extends Model
{
    use HasFactory;
    use HasFactory;
    protected $visible = ['nama', 'kelas',  'jk'];
    protected $fillable = [
        "nama",
        "kelas",
        "jk"
    ];
    public $timestamps = true;
}
