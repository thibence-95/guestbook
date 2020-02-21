<?php


class Guest
{
    private $name;
    private $age;
    private $origin;
    private $stayLen;
    private $msg;
    private $data;

    public function __construct($name, $age, $origin, $stayLen, $msg)
    {
        $this->name = $name;
        $this->age = (int)$age;
        $this->origin = $origin;
        $this->stayLen = $stayLen;
        $this->msg = $msg;

    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getOrigin()
    {
        return $this->origin;
    }

    public function setOrigin($origin): void
    {
        $this->origin = $origin;
    }

    public function getStayLen()
    {
        return $this->stayLen;
    }

    public function getMsg()
    {
        return $this->msg;
    }

    public function guestMessage()
    {
        $this->data = $data = getJsonData("Data/guestmsg.json");

        foreach ($data as $guest) {
            echo $guest->name. ", ". $guest->age. " from ".$guest->origin. " says: ". $guest->message; ;
        }

    }

}