<?php


class Message extends Guest
{
    private $message;

    public function __construct($name, $age, $origin, $stayLen, $msg)
    {
        parent::__construct($name, $age, $origin, $stayLen, $msg);
    }

}