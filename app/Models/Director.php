<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
        use HasFactory;
        protected $fillable = ['director_first_name','director_last_name','director_date_at_birth','director_salary'];

        public function movie(){
        //to many
        return $this->hasMany(Movie::class);
    }
}
