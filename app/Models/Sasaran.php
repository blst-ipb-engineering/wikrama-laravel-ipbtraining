<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sasaran extends Model
{
    use HasFactory;

    protected $fillable = ['perspektif_id', 'nama_sasaran'];
    protected $table = 'tb_perspektif';
}

