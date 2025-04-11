<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $table = 'objects';

    protected $fillable = ['name', 'type_id', 'franchise_id', 'parent_id'];

    protected static function booted()
    {
        static::creating(function ($model) {
            $model->type_id = 2;
        });

        static::addGlobalScope('type_id', function ($query) {
            $query->where('type_id', 2);
        });
    }

    public function franchise()
    {
        return $this->belongsTo(Franchise::class, 'franchise_id');
    }

}
