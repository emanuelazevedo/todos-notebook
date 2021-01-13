<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoList extends Model
{
    use HasFactory;
    protected $primaryKey = 'todolist_id';
    protected $fillable = ['title'];

    public function todos() {
        return $this->hasMany('App\Todo', 'todolist_id', 'todolist_id');
    }
}
