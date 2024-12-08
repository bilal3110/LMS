<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class courseApply extends Model
{
    use HasFactory;

    protected $table = "course_apply"; 
    protected $primaryKey = "ca_id";

    // Allow mass assignment for these fields
    protected $fillable = [
        'name',
        'father_name',
        'contact',
        'email',
        'address',
        'course_id',
        'is_horizon_student',
    ];
}
