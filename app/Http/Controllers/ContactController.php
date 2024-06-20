<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    //
    public function index()
{
    $contacts = Auth::user()->contacts;
    return view('contacts.index', compact('contacts'));
}

public function create()
{
    return view('contacts.create');
}

public function store(Request $request)
{
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ]);

    Auth::user()->contacts()->create($request->all());

    return redirect()->route('contacts.index');
}

}
