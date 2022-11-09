<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class dotaHero extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $table = 'heros';
    protected $dates = ['deleted_at'];
}
