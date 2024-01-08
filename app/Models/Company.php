<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Task;

class Company extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'task_id'
    ];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
