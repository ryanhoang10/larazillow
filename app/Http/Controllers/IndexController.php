<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {

        $listing = Listing::find(10);
        
        return inertia(
            'Index/Index', 
            [
                'message' => 'Hello from Laravel'
            ]
        );
    }

    public function show()
    {
        return inertia('Index/Show');
    }
}
