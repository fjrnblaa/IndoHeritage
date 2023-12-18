<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Review;

class Konten extends Model
{
    use HasFactory;

    protected $table = 'konten';

    public $timestamps = false;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nama'
    ];

    public function reviews(){
        return $this->hasMany(Review::class, 'konten_id', 'id');
    }
}
