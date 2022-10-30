<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('dashboard.application.index', [
            'apps' => Application::latest()->where('receiver_id', auth()->user()->id)->get()
        ]);
    }

    public function show(Application $application)
    {
        return view('dashboard.application.show', [
            'app' => $application
        ]);
    }

    public function store(Request $request)
    {


















        
        $validatedData = $request->validate([
            'title' => 'required',
            'receiver_id' => 'required'
        ]);

        $validatedData['applicant_id'] = auth()->user()->id;

        Application::create($validatedData);

        return redirect('/jobs')->with('success', 'Jobs application has been applied!');
    }

    public function destroy(Application $application)
    {
        Application::destroy($application->id);

        return redirect('/dashboard/applications')->with('success', 'Applicant has been deleted');
    }
}
