<?php

namespace App\Models;

use Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class adminSignup extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = 'admin_signup';
    protected $primaryKey = 'admin_id';
    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_phone',
        'admin_password',
    ];

    public function getAuthPassword()
    {
        return $this->admin_password;
    }
    
    
    public function setAdminPasswordAttribute($value)
    {
        $this->attributes['admin_password'] = Hash::make($value);
    }  
}
