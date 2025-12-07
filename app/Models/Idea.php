<?php

namespace App\Models;

use App\Models\Comment as ModelsComment;
Use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{

    use HasFactory;
    protected $fillable = [
        'user_id',
        'content',
        'like'
    ];
    
    // protected $guarded = [
    //     'id',
    //     'created_at',
    //     'updated_at'
    // ];

    public function comments(){
        return $this->hasMany(ModelsComment::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
