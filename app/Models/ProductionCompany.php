<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductionCompany extends Model
{
    use HasFactory;
    protected $fillable = ['company_name','founded_year','website','email','address'];

    public function movie(){
    //to many
    return $this->hasMany(Movie::class);
    }
}
