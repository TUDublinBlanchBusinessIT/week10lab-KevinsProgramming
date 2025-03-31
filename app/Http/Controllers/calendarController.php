<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event; // Ensure you import the Event model
class CalendarController extends Controller
{
    public function display()
    {
        return view('calendar.display');
    }

    public function json()
    {
        $content = Event::all()->toJson();
        return response($content)->withHeaders([
            'Content-Type' => 'application/json',
            'charset' => 'UTF-8'
        ]);
    }
}

?>