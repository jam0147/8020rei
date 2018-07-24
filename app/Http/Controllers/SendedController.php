<?php

namespace App\Http\Controllers;

use App\Sended;
use App\Received;
use App\Template;
use Illuminate\Http\Request;
use Illuminate\Pagination\Environment;
use Twilio;
use App\Notifications\SmsNotification;
class SendedController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*Paginator::setPageName();
        $messages_received = Received::paginate(10);
        Paginator::setPageName();
        $messages_sended = Sended::paginate(10);
        */
        

        $messages_received = Received::paginate(10, ['*'], 'received');
        $messages_sended = Sended::paginate(10, ['*'], 'sended');
        # use default 'page' for this
    
        //$messages_received = Received::paginate(10);
       // $messages_sended = Sended::paginate(10);
        return view('sms.index', compact('messages_sended', 'messages_received'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
        $templates = Template::all();
        return view('sms.create', compact('templates'));
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'phone_number' => 'required|max:20',
            'body' => 'required|max:160'
            ],
            ['phone_number.required' => 'The to field is required',
            'body.required' => 'The body is required',]);

            $from = $request->input('phone_number');
            $body = $request->input('body');

            $user = $request->user();
            $message = 'llego un mensaje';
            
            $user->notify(new SmsNotification($message));

            Twilio::message($request->phone_number, $request->body);
            Sended::create(['phone_number' => $from, 'body' => $body, 'template_id' => 1]);
    
            return redirect()->route('sms.index')->with('status', 'SMS sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sended  $sended
     * @return \Illuminate\Http\Response
     */
    public function show(Sended $sended)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sended  $sended
     * @return \Illuminate\Http\Response
     */
    public function edit(Sended $sended)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sended  $sended
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sended $sended)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sended  $sended
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sended $sended)
    {
        //
    }
}
