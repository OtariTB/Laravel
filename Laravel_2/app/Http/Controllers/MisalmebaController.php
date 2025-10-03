<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisalmebaController extends Controller
{
    //
    public function showForm()
    {
        return view('misalmeba');
    }

    // პასუხების დამუშავება
    public function generateGreeting(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'favorite_color' => 'required|string|max:255',
            'favorite_activity' => 'required|string',
        ]);

        $saxeli = $request->input('user_name');
        $feri = $request->input('favorite_color');
        $aqtivoba = $request->input('favorite_activity');

        // შედეგის გენერაცია
        $greeting = "გამარჯობა, {$saxeli}! სასიამოვნოა შენი გაცნობა. "
                  . "ვიცით, რომ შენი საყვარელი ფერია {$feri} და თავისუფალ დროს {$aqtivoba} გიყვარს. მშვენიერი არჩევანია!";

        // შედეგის ჩვენება
        return view('misalmeba_pas', compact('greeting'));
    }
}
