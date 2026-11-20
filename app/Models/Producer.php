<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producer extends Model
{
        use HasFactory;
        protected $fillable = ['producer_first_name','producer_last_name','producer_date_at_birth','producer_salary'];

        public function movie(){
        //One genre has many movies
        //to many
        return $this->hasMany(Movie::class);
    }
}
