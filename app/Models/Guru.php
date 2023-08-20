<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;
    protected $visible = ['n_guru', 'n_wakel',  'jenis_kelamin', 'mapel'];
    protected $fillable = ['n_guru', 'n_wakel',  'jenis_kelamin', 'mapel'];
    public $timestamps = true;
}
