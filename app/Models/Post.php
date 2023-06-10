<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    use SoftDeletes;
    protected $fillable = ['title', 'description', 'type'];
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
