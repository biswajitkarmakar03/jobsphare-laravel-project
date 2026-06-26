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

// CREATE
Route::get('/jobs/create', function(){
    return view('jobs.create');
});

// SHOW
Route::get('/jobs/{id}', function (int $id) {

    $job = Job::findOrFail($id);

    return view('jobs.show', ['job' => $job]);
});

// STORE
Route::post('/jobs', function(){

    // validate
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

// EDIT
Route::get('jobs/{id}/edit', function(int $id){
    $job = Job::findOrFail($id);

    return view('jobs.edit', ['job' => $job]);
});

// UPDATE
Route::patch('/jobs/{id}', function (int $id) {
    // validate
    request()->validate([
        'title' => ['required', 'min:3'],
        'salary' => ['required']
    ]);

    // authorize (on hold)
    // update the job
    $job = Job::findOrFail($id);

    $job->update([
        'title' => request('title'),
        'salary' => request('salary'),
    ]);
    // and persist
    // redirect to the job page  
    return redirect('/jobs/' . $job->id);  
});

// DESTROY
Route::delete('/jobs/{id}', function (int $id) {

    $job = Job::findOrFail($id);
    $job->delete();
    
    return redirect('/jobs');

});

// SERVICES
Route::get('/services', function(){
    return view('vendor.services');
});

Route::get('contact', function(){
    return view('vendor.contact');
});