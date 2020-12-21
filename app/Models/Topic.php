<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;
    protected $table = "topics";
    protected $fillable = [
    'topic_name',
    'duration',
    'product_id',
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\Product');
    }


}
