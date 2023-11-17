<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arsenal extends Model
{
    use HasFactory;

    protected $fillable = [
        'tournament',
        'date',
        'oiling_lenght',
        'remarks',
        'atl_centre',
        'atl_track',
        'atl_outside',
        'btf_back',
        'btf_middle',
        'btf_front',
        'sanding',
        'polishing',
        'img',
        'user_details_id'
    
    ];

    public function user(){
        return $this->belongsTo(User::class , 'user_id');
    }
}
