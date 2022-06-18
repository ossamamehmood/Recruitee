<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index()
    {
        return view('jobs', [
            'listings' => Listing::with(['user'])->latest()->Filter(request(['search', 'tag']))->paginate(5)->withQueryString()
        ]);
    }

    public function show(Listing $listing)
    {
        return view('job', [
            'listing' => $listing
        ]);
    }
}
