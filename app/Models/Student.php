<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'objects';

    protected $fillable = ['name', 'type_id', 'franchise_id', 'parent_id'];

    protected static function booted()
    {
        static::creating(function ($student) {
            $student->type_id = 4;
        });
        
        static::addGlobalScope('type_id', function ($query) {
            $query->where('type_id', 4); // Only fetch students
        });
    }

    public function parent()
    {
        return $this->belongsTo(ParentModel::class, 'parent_id');
    }
}
