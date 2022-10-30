<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class DashboardListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.listing.index', [
            'lists' => Listing::where('user_id', auth()->user()->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.listing.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5',
            'tags' => 'required',
            'website' => 'required',
            'description' => 'required',
            'location' => 'required'
        ]);

        $validatedData['company'] = auth()->user()->name;
        $validatedData['user_id'] = auth()->user()->id;

        Listing::create($validatedData);

        return redirect('/dashboard/lists')->with('success', 'New job has been listed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Listing  $list
     * @return \Illuminate\Http\Response
     */
    public function show(Listing $list)
    {
        // Prevent another user access another lists
        if (auth()->user()->id !== $list->user_id) {
            abort(403);
        }

        return view('dashboard.listing.show', [
            'listing' => $list
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Listing  $list
     * @return \Illuminate\Http\Response
     */
    public function edit(Listing $list)
    {
        // Prevent another user access another lists
        if (auth()->user()->id !== $list->user_id) {
            abort(403);
        }

        return view('dashboard.listing.edit', [
            'listing' => $list,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Listing  $list
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Listing $list)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:5',
            'tags' => 'required',
            'website' => 'required',
            'description' => 'required',
            'location' => 'required'
        ]);


        Listing::where('id', $list->id)
            ->update($validatedData);

        return redirect('/dashboard/lists')->with('success', 'List has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Listing  $list
     * @return \Illuminate\Http\Response
     */
    public function destroy(Listing $list)
    {
        Listing::destroy($list->id);

        return redirect('/dashboard/lists')->with('success', 'List has been deleted');
    }
}
