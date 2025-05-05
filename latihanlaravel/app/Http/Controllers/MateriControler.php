<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Pest\Mutate\Cache\NullStore;

class MateriControler extends Controller
{
    public function index(){
        return view('materi.index');
    }

    public function detail($id = Null): void{

    }
}