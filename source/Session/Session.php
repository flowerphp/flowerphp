<?php


namespace tc\Session;


class Session
{
    private $session_status;

    public function __construct(SessionConfig $sessionConfig)
    {

        $this->session_status = session_status();
        session_name($sessionConfig->getSessionName());
        return $this->runSession();
    }

    private function runSession()
    {
        return session_start();
    }

    public function destorySession()
    {
        return session_destroy();
    }

    public function abortSession()
    {
        return session_abort();
    }

    public function deleteSession()
    {
        $unsetted = session_unset();
        $destroyed = session_destroy();

        if ($unsetted && $destroyed)
        {
            return true;
        } else {
            return false;
        }
    }

    public function unsetSession()
    {
        return session_unset();
    }

    /**
     * @return int
     */
    public function getSessionStatus(): int
    {
        return $this->session_status;
    }
}