<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactMessage;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $subject;
    public $body;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'subject' => 'required|string|max:255',
        'body' => 'required|string|max:5000',
    ];


    public function submit()
    {
        $this->validate();

        ContactMessage::create([
            'name' => $this->name,
            'email' => $this->email,
            'subject' => $this->subject,
            'body' => $this->body,
        ]);

        session()->flash('success', 'Messaggio inviato con successo!');
        $this->reset();
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
