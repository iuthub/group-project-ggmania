<?php

namespace App\Http\Controllers;
use Mail;
use Illuminate\Http\Request;
use App\Models\Feedback;
use App\Mail\FeedbackMail;

class FeedbackController extends Controller
{
    public function Feedback(Request $request)
    {
        $feedback=[
        'Name'=>  $request->Name,
        'Surname' => $request->Surname,
        'Mail' => $request->Mail,
        'FeedbackContent'=> $request->FeedbackContent];


        Mail::to('ipprojecttestmail@gmail.com')->send(new FeedbackMail($feedback));
        return redirect()->back()->with('message_sent','Your message has been sent');
     }
}
