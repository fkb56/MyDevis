<?php

namespace App\Http\Controllers;

use App\Mail\Message;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
	// Envoi du mail aux utilisateurs
	public function sendMessage (Request $request) {

		#1. Validation de la requête
		$this->validate($request, [
			'first_name' => ['required', 'bail', 'string'] ,
			'last_name' => ['required', 'bail', 'string'] ,
			'email' => ['nullable', 'email', 'string'] ,
			'phone' => ['required', 'numeric'] ,
			'message' => ['required', 'bail', 'string'] ,
		]);

		#2. Récupération des utilisateurs
		$users = User::all();

		#3. Envoi du mail
		Mail::to($users)->bcc("fkcb@live.fr")
			->queue(new Message($request->all()));

		return redirect()->back()->withText("Message envoyé");
	}
}
