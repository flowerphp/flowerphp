<?php


namespace tc\Session;


class SessionConfig
{
    private $session_name;

    public function setNameSession($name)
    {
        $this->session_name = $name;
    }

    /**
     * @return mixed
     */
    public function getSessionName()
    {
        return $this->session_name;
    }
}