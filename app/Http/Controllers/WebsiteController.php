<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactMessage;
use App\Mail\ContactMessageMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class WebsiteController extends Controller
{
    // return home page
    public function homePage()
    {
        return view('pages.home');
    }

    // return about page
    public function aboutPage()
    {
        return view('pages.about');
    }

    // return where to apply page
    public function whereToApplyPage()
    {
        return view('pages.apply');
    }

    // return locations page
    public function locationsPage()
    {
        return view('pages.locations');
    }

    // return products page
    public function productsPage()
    {
        return view('pages.products');
    }

    // return weather silicone page
    public function weatherSiliconeSealantPage()
    {
        return view('pages.weather');
    }

    // return structural silicone page
    public function structuralSiliconeSealantPage()
    {
        return view('pages.structural');
    }

    // return neutral silicone page
    public function neutralSiliconeSealantPage()
    {
        return view('pages.neutral');
    }

    // return certifications page
    public function certificationsPage()
    {
        return view('pages.certifications');
    }

    // return contact page
    public function contactPage()
    {
        return view('pages.contact');
    }

    // verify password
    public function verifyPassword(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:3|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        if ($request->password != 'BONDSEALANT') {
            return response()->json([
                'error' => ['Invalid Password!']
            ]);
        }
        Session::put('password', $request->password);
        return response()->json(['success' => 'Post created successfully.']);
    }

    // send contact mail
    public function postContactForm(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName'  => 'required|min:2|max:100',
            'email'     => 'required|min:2|max:255',
            'phone'     => 'nullable|min:10|max:100',
            'subject'   => 'required|min:2|max:255',
            'message'   => 'required|min:5',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }

        $contactMessage = ContactMessage::create([
            'name'      => $request->fullName,
            'email'     => $request->email,
            'phone'     => $request->phone,
            'subject'   => $request->subject,
            'message'   => $request->message
        ]);

        Mail::to('jasrazkhan@bondsealant.com')->send(new ContactMessageMail($contactMessage));
        return response()->json(['success' => 'Form created successfully.']);
    }
}