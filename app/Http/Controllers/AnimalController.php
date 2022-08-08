<?php

namespace App\Http\Controllers;

use App\Models\Animal;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index() {
        $animals = Animal::with('details')->get();

        return inertia('Animal',[
            'animals' => $animals
        ]);
    }
}
