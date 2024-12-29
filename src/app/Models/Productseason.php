<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productseason extends Model
{
    use HasFactory;
//DB書き込みをコメントアウト
    protected $fillable = ['product_id', 'season_id'];
}
