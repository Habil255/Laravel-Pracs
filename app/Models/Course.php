<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Lecturer;

class Course extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function lecturer(){
        return $this->hasOne(Lecturer::class);
    }
}
