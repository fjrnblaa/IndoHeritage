<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $fillable = ['code', 'title', 'description', 'image'];

    /**
     * Summary of scopeCari
     * @param mixed $query
     * @return mixed
     */
    public function scopeFilter($query)
    {
        if (request('search')) {
            return $query->where('title', 'like', '%'.request('search').'%');
        }
    }

}
