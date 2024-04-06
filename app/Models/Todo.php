<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Queue\Failed\PrunableFailedJobProvider;

class Todo extends Model
{
    use HasFactory;


    protected $filelable = [
        'title', 'user_id', 'is_complete'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}



