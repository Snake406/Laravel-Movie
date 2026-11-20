<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        $movies = Movie::all();//select * from contacts
        return view('movie.index', compact('movies'));
    }
    
    public function create(){
        $movies = Movie::all();//select * from contacts
        return view('movie.create', compact('movies'));
    }
    
    public function details(int $id){
        $movie = Movie::find($id);
        return view('movie.details',compact('movie'));
    }
        
}   
