<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Theme extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function topics(){
        return $this->hasMany(Topic::class);
    }
}
