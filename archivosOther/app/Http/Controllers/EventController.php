<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Carbon\Carbon;

class EventController extends Controller
{
    public function index()
    {
        $actual_date = Carbon::now()->format('d-m-Y');
        $yDate = $actual_date->format('Y');
        $mDate = $actual_date->format('m');
        $dDate = $actual_date->format('d');

        $events = [];
        $data = Event::all();
        if($data->count()) {
            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                    $value->title,
                    true,
                    new \DateTime($value->start_date),
                    new \DateTime($value->end_date.' +1 day'),
                    null,
                    // Add color and link on event
                    [
                        'color' => '#ff0000',
                        'url' => 'pass here url and any route',
                    ]
                );
            }
        }

        $calendar = Calendar::addEvents($events);
        return view('layouts.fullcalendar')->with('calendar', $calendar)->with('actual_date', $actual_date);

        /**->with('calendar', $calendar)->with('yDate', $yDate)
        ->with('mDate', $mDate)->with('dDate', $dDate);
        **/
    }
}
