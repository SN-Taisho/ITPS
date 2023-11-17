<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserDetails extends Model
{
    use HasFactory;

    protected $fillable = [
        'age',
        'credit',
        'programme',
        'coach',
        'user_id'
    
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }

    public function arsenal(){
        return $this->hasMany( Arsenal::class ,'user_details_id');
    }
}
