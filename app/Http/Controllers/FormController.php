<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create()
    {
        return view('forms');
    }
    public function submit(Request $request)
    {
        // Handle form submission logic here
        // For example, you can access form data using $request->input('fieldname')

        $email = $request->input('email');
        $password = $request->input('password');
        // Process the data as needed (e.g., store it in the database)

        // Redirect back or to a success page
        return response()->json(['success'=>'Form submitted successfully!']);
    }
}
