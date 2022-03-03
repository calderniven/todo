<?php

namespace App\Http\Controllers;

use App\Models\InboundMessage;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm() {
        return view('contact_form');
    }

    public function submitContactForm(Request $request) {
        $inboundMessage = new InboundMessage($request->only(['name', 'email', 'message']));
        $inboundMessage->save();
    }
}
