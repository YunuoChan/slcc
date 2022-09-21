<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Redirect;
use App\Mail\EmailNotification;
use App\Models\User;

class EmailNotificationController extends Controller
{
     /**
     * Write code on Method
     *  
     * @return response()
     */
    public function sendEmail($userId)
    {
        $userEmail  =  User::where('id', $userId)->pluck('email');

        $mailData = [
            'title' => 'Your appointment has been APPROVE!',
            'body' => 'This is for testing email.'
        ];
         
        Mail::to($userEmail)->send(new EmailNotification($mailData));
           
        return redirect()->to('/appointments'); 
    }
}
