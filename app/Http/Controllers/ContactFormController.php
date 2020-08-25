<?php

namespace App\Http\Controllers;

use App\ContactForm;
use App\Events\ContactFormSubmittedByTheVisitorEvent;
use App\Events\NewSubscriptionNewsletterByVisitorEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;

class ContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'company' => 'nullable',
            'message' => 'required|max:300'
        ]);

        $contactForm = ContactForm::firstOrCreate([
            'name' => request('name'),
            'email' => request('email'),
            'company' => request('company'),
            'message' => request('message')
        ]);

        // Event fires
        event(new ContactFormSubmittedByTheVisitorEvent($contactForm));
        return response()->json(['message' => 'Thank you for contact!'], 200);
        // test codes
        //        return redirect('home');
        //        return redirect()->action('HomeController@index');
        //        https://youtu.be/a5STZK4ZQz0?t=814
        //        return redirect('/candidates/'.$candidate->id);
        //        return redirect(url('/candidates/'));
        //        return redirect('/candidates');
        //        return redirect()->route('candidates.index', [$candidate])->with('status', 'Profile updated!');
        //        return redirect()->route('home', [$candidate])->with('status', 'Profile updated!');
        //        return back()->withInput();
        //        return view('welcome');


        //        We use json response because of Axio
        //        return response()->json(['message' => 'Thank you for submit your application!'], 200);
        //        return [
        //            'redirect' => route('welcome'),
        //            'message'   => 'Your information submitted successfully!'
        //        ];

    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function storeNewsletter(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|unique:contact_forms,email',
        ]);

        $contactForm = ContactForm::firstOrCreate([
            'email' => request('email'),
            'newsletter' => true
        ]);

        event(new NewSubscriptionNewsletterByVisitorEvent($contactForm));

        return response()->json(['message' => 'Thank you for the newsletter subscription!'], 200);
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function show(ContactForm $contactForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactForm $contactForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContactForm $contactForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactForm  $contactForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactForm $contactForm)
    {
        //
    }
}
