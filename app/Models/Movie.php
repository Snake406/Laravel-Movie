<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $fillable = ['movie_name','movie_cost','movie_length','genre'];//producerId_fk and genreId_FK
    public function producer()
        {
            return $this->belongsTo(Producer::class);
    }
    
    public function review(){
        return $this->hasMany(Review::class);
    }
    public function director(){
        return $this->belongsTo(Director::class);
    }
    public function production_company(){
        return $this->belongsTo(ProductionCompany::class);
    }
}
