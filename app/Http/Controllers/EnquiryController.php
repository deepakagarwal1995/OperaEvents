<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        try {
            $enquiry = new Enquiry;

            // Handle the image upload if there is one
            if ($request->hasFile('image')) {
                $destinationPath = 'public/images';
                $imageName = time() . '.' . $request->image->extension();
                $request->image->storeAs($destinationPath, $imageName);
                $enquiry->image = 'images/'.$imageName;
            }

            // Assign other request data to the enquiry instance
            $enquiry->fill($request->except('image'));

            // Save the enquiry instance to the database
            $enquiry->save();

            return redirect()->route('thanku');
        } catch (\Exception $e) {
        }
    }

    public function thanku(){
        $name = Enquiry::latest()->first();
        return view('visitors.thanku',compact('name'));
    }
}
