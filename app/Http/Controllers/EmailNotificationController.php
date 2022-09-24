<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\EmailNotification;
use App\Models\User;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Inertia\Inertia;
use Mail;

class EmailNotificationController extends Controller
{
     /**
     * Write code on Method
     *  
     * @return response()
     */
    public function sendEmail(Request $request)
    {
        $userEmail  =  User::where('id', $request->id)->pluck('email');

        $mailData = [
            'title' => 'Your appointment has been APPROVE!',
            'body' => 'This is for testing email.'
        ];
         
        FacadesMail::to($userEmail)->send(new EmailNotification($mailData));
           
        return Inertia::render('Admin/Appointment');
    }
}
