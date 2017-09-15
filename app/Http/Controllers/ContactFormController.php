<?php

namespace App\Http\Controllers;

use App\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    /**
     * Show the page to create a new project.
     */
//    public function create()
//    {
////        return view('projects.create', [
////            'projects' => Project::all()
////        ]);
//        return view('work_with_us', [
//            'projects' => Project::all()
//        ]);
//    }
    /**
     * Store a new project in the database.
     */
    public function store()
    {
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'company' => 'nullable',
            "message" => 'required|max:300'
        ]);
        ContactForm::forceCreate([
            'name' => request('name'),
            'email' => request('email'),
            'company' => request('company'),
            'message' => request('message')
        ]);
        return ['message' => 'Project Created!'];
    }
}
