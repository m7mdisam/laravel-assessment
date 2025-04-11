<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Object extends Model
{
    use HasFactory;

    protected $table = 'objects';

    protected $fillable = ['name', 'type_id', 'franchise_id', 'parent_id'];
}
