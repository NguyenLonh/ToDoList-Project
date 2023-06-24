<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $table = 'todos';
    protected $fillable = [
        'title','goal','bonus','punish', 'person_id', 'description', 'deadline'
    ];

    public function person(){
        return $this->belongsTo(Person::class);
    }
}
