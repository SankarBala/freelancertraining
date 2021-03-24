<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Subscription;

class SubscriptionController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(Subscription::class)
            ]
        ]);

        $subcription = new Subscription;
        $subcription->email = $request['email'];
        $subcription->save();


        return "Subscribed to our newsletter successfully.";
    }
}
