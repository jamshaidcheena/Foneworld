<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class RoleManager extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
     
 
     
       protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'role_type',
        'user_permission',
        'customer_id',
        'is_active',
       
        
    ];
    

   

   
}
