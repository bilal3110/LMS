<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class StudentPortal extends Authenticatable
{
    use HasApiTokens,HasFactory, Notifiable;
    protected $table = 'student_portal';
    protected $primaryKey = 'portal_id';

    protected $fillable = [
        'stud_name',
        'stud_email',
        'stud_father',
        'stud_mother',
        'stud_phone',
        'stud_address',
        'stud_rollNo',
        'stud_class',
        'stud_section',
        'stud_image',
        'portal_email',
        'stud_password',
    ];

    protected $hidden = ['stud_password', 'remember_token'];

    public function getAuthPassword()
    {
        return $this->stud_password;
    }
    
    public function subjects()
    {
        return $this->hasMany(subjects::class, 'class_name', 'stud_class');
    }
    

}
