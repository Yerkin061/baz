<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\EmailGmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{
    public function send(){
        $objDemo=new\stdClass();
        $objDemo->demo_one='Demo one Value';
        $objDemo->demo_two='Demo two Value';
        $objDemo->sender='Yerkin';
        $objDemo->receiver='Yerkin08';

        Mail::to("Sagadilda Yerkin")->send(new MailGmail($objDemo));
    }
}