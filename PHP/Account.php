<?php 
class Account
{
    protected $id;
    protected $name;
    protected $document;
    protected $email;
    protected $password;

    public function __construct($id, $name, $document, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->document = $document;
        $this->email = $email;
        $this->password = $password;
    }
}