<?php

use App\Models\Employer;
use App\Models\Job;
use Illuminate\Support\Facades\Route;

// HOME
Route::get('/', function () {
    return view ('vendor.home');

});

// INDEX
Route::get('/jobs', function(){
    
    $jobs = Job::with('employer')->paginate(5);

    return view('jobs.index', [
        'jobs' => $jobs
    ]);
});

//CREATE
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

//SHOW
Route::get('/jobs/{id}', function (int $id) {

    $job = Job::findOrFail($id);

    return view('jobs.show', ['job' => $job]);
});

//STORE
Route::post('/jobs', function(){

    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    Job::create([
        'title' => request('title'),
        'salary' => request('salary'),
        'employer_id' => 1
    ]);

    return redirect('/jobs');
});

//EDIT
Route::get('jobs/{id}/edit', function(){
    
});

//SERVICES
Route::get('/services', function(){
    return view('vendor.services');
});

Route::get('contact', function(){
    return view('vendor.contact');
});