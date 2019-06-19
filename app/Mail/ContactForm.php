<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable {

    use Queueable,
        SerializesModels;

    protected $name;
    protected $email;
    protected $phone;
    protected $date;
    protected $message;
    
    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPhone() {
        return $this->phone;
    }

    public function getDate() {
        return $this->date;
    }

    public function getMessage() {
        return $this->message;
    }

    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function setPhone($phone) {
        $this->phone = $phone;
        return $this;
    }

    public function setDate($date) {
        $this->date = $date;
        return $this;
    }

    public function setMessage($message) {
        $this->message = $message;
        return $this;
    }

    
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $properties = []) {
         
        if (isset($properties['name'])) {
            
            $this->setName($properties['name']);
        }
        if (isset($properties['email'])) {
            
            $this->setEmail($properties['email']);
        }
        if (isset($properties['phone'])) {
            
            $this->setPhone($properties['phone']);
        }
        if (isset($properties['date'])) {
            
            $this->setDate($properties['date']);
        }
        if (isset($properties['message'])) {
            
            $this->setMessage($properties['message']);
        }
            
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build() {
        return $this->view('emails.email-template', [
                    'name' => $this->getName(),
                    'email' => $this->getEmail(),
                    'phone' => $this->getPhone(),
                    'date' => date_format(date_create($this->getDate()), 'd/M/Y'),
                    'msg' => $this->getMessage()
                ])->subject('Nova poruka sa kontakt forme');
    }

}
