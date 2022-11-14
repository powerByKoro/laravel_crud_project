<?php

namespace App\Http\Controllers;

use App\Events\TestEvent;
use Illuminate\Http\Request;

class MakeEventController extends Controller
{
    public function index(Request $request)
    {
        event(new TestEvent($request->input(['event'])));

        return redirect('/');
    }
}
