<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Auth;
use App\Contact;
use App\User;

class ContactsController extends Controller
{
    public function index(){
        $user = Auth::user();
        return view("/contacts/index",compact('user'));
    }

    public function create(){
        return view("/contacts/create");
    }

    public function store(){
        $data = request()->validate([
            //If something is not here will be skipped, to avoid that u can => ''
            'name' => 'required',
            'category' => '',
            'email' => '',
            'phone' => '',
            'image'=> 'image',
        ]);
        if(request('image')) {
            $imagePath = request('image')->store('uploads', 'public');
            $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
            $image->save();

            $imageArray = ['image' => $imagePath];
        }

        auth()->user()->contacts()->create(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect('/contact');
    }

    public function destroy(Contact $contact){
        $contact->delete();
        return redirect('/contact'); 
    }


}
