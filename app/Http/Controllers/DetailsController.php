<?php

namespace App\Http\Controllers;

use App\Models\Details;
use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index() {
        $details = Details::with('animal')->get();

        return inertia('Details',[
            'details' => $details
        ]);
    }
}
