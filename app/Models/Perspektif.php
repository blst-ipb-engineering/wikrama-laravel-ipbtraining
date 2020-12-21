<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perspektif extends Model
{
    use HasFactory;

    protected $fillable = ['nama_perspektif'];
    protected $table = 'tb_perspektif';
}
