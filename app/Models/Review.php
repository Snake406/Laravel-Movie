<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
        use HasFactory;
        protected $fillable = ['rating','review_text','review_date'];//movieId_fk
        public function movie()
        {
            //One
            //One company has may contacts
            return $this->belongsTo(Movie::class);
        }
}
