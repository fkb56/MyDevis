<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Message extends Mailable
{
	use Queueable, SerializesModels;

	// Données transmises à la vue
	public $data;

	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($data)
	{
		$this->data = $data;
	}


	/**
	 * Build the message.
	 *
	 * @return Message
	 */
	public function build(): Message
	{
		return $this->from('fkcb@live.fr')
			->subject("Demande de contact")
			->view('emails.contact');
	}
}