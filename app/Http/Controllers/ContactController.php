<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if (request()->has('search')) {
            $search = $request->input('search');

            $contacts = Contact::where('name', 'like', "%$search%")
                ->orWhere('nickname', 'like', "%$search%")
                ->orWhere('phone_number', 'like', "%$search%")
                ->paginate(10);

            return view('contacts.index', compact('contacts'));
        }
        $contacts = Contact::paginate(10);

        return view('contacts.index', compact('contacts'));
    }

    // public function search(Request $request)
    // {
    //     $search = $request->input('search');

    //     $contacts = Contact::where('name', 'like', "%$search%")
    //         ->orWhere('nickname', 'like', "%$search%")
    //         ->orWhere('phone_number', 'like', "%$search%")
    //         ->paginate(10);

    //     return view('contacts.index', compact('contacts'));
    // }
}
