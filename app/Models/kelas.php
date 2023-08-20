<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kelas extends Model
{
    use HasFactory;
    protected $visible = ['kls', 'n_kls',  'ruangan', 'wakel'];
    protected $fillable = ['kls', 'n_kls',  'ruangan', 'wakel'];
    public $timestamps = true;
}
