<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;
use App\Models\Property;

class Project extends Model
{
    use HasFactory;

    protected $table = 'projects';
    protected $fillable = [
        'arch',
        'file_path',
        'user_id',
    ];

    public function  scopeSelection($query)
    {

        return $query->select('id', 'arch', 'file_path', 'user_id');
    }
    
    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments(){
        return $this->hasMany(Comment::class, 'project_id');
    }
    
    public function props(){
        return $this->hasMany(Property::class, 'project_id');
    }

}
