<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
