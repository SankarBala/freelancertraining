<?php

namespace App\Http\Controllers;

use App\Models\QueryMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class QueryMessageController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'subject' => ['string', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
        ]);


        $query = new QueryMessage;
        $query->name = $request->name;
        $query->email = $request->email;
        $query->subject = $request->subject;
        $query->message = $request->message;
        $query->status = "new";
        $query->save();

        Session::flash('message', 'Message sent successfully');

        return redirect()->route('contact');
    }
}
