<?php

namespace App;

use Illuminate\Bus\Queueable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Mailtrap extends Mailable
{
    use Queueable,SerializesModels;
    private $token;
    public function __construct($token)
    {
        $this->token=$token;
    }
    public function build(){
        return $this->from("mail@exemple.com", "snapmail")->subject("hello")->view("mail")->with(array("token"=>$this->token));
    }
}
