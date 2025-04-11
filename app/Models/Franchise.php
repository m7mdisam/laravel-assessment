<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Franchise extends Model
{
    use HasFactory;

    protected $table = 'objects';

    protected $fillable = ['name', 'type_id', 'franchise_id', 'parent_id'];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->type_id = 1;
        });

        static::addGlobalScope('type_id', function ($query) {
            $query->where('type_id', 1);
        });
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'franchise_id');
    }

    public function parents()
    {
        return $this->hasMany(ParentModel::class, 'franchise_id');
    }

}
