<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use Illuminate\Support\Facades\Auth;

class TicketsController extends Controller
{
    public function store(Request $request)
    {
        $ticket = new Ticket;
        $ticket->name = $request['name'];
        $ticket->weight = $request['weight'];
        $ticket->description = $request['description'];
        $ticket->origin = $request['origin'];
        $ticket->destination = $request['destination'];
        $ticket->track_number = $request['qr'];

        $ticket->belongs_to_company = Auth::user()['belongs_to_company'];
        $ticket->status = 'packaged';
        $ticket->registered_by = Auth::user()['name'];
        $ticket->registered_by_id = Auth::user()['user_id'];

        if($request->hasFile('photo_front')||$request->hasFile('photo_side_1')||$request->hasFile('photo_side_2')||$request->hasFile('photo_back')){
            $destinationPath = 'images/packages/';

            if ($request->hasFile('photo_front')) {
                $file_front = $request->file('photo_front');
                $filename_front = session('session_name').time().'front.'.$file_front->getClientOriginalExtension();
                $file_front->move($destinationPath,$filename_front);
                $ticket->image_front = $destinationPath.$filename_front;
            }
            if ($request->hasFile('photo_side')) {
                $file_side = $request->file('photo_side');
                $filename_side = session('session_name').time().'side.'.$file_side->getClientOriginalExtension();
                $file_side->move($destinationPath,$filename_side);
                $ticket->image_left = $destinationPath.$filename_side;
            }

             if ($request->hasFile('photo_side_alt')) {
                $file_side_alt = $request->file('photo_side_alt');
                $filename_side_alt = session('session_name').time().'side_alt.'.$file_side_alt->getClientOriginalExtension();
                $file_side_alt->move($destinationPath,$filename_side_alt);
                $ticket->image_right = $destinationPath.$filename_side_alt;
            }

            if ($request->hasFile('photo_back')) {
                $file_back = $request->file('photo_back');
                $filename_back = session('session_name').time().'back.'.$file_back->getClientOriginalExtension();
                $file_back->move($destinationPath,$filename_back);
                $ticket->image_back = $destinationPath.$filename_back;
            }
        }
        $ticket->save();

        return redirect()->route('register-ticket-view')->with("success","Ticket de rastreo de paquete agregado con éxito.");
    }

    public function index()
    {
        $tickets = Ticket::all();

        return view('admin.tickets',['tickets'=>$tickets]);
    }

    public function view($id)
    {
        $ticket = Ticket::all()->where('track_number','=',$id)->first();
        if(isset($ticket)){
            return view('ticket-view',['ticket'=>$ticket]);
        }else{
            return view('ticket-not-found');
        }
    }

    public function find(Request $request)
    {
        $track_numer = $request['id'];

        return redirect()->route('ticket-view',$track_numer);
    }

}
