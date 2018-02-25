<?php
/**
 * Created by PhpStorm.
 * User: max
 * Date: 25.02.2018
 * Time: 15:39
 */

namespace Core\Observer;


class Login implements \SplSubject
{
    const LOGIN_WRONG_PASS = 0;
    private $observers;

    function __construct()
    {
        $this->observers = array();
    }

    function attach(\SplObserver $observer)
    {
        $this->observers[] = $observer;
    }

    function detach(\SplObserver $observer)
    {
        $newObserver = array();
        foreach ($this->observers as $obs) {
            if (($obs !== $observer)) {
                $newObserver[] = $obs;
            }
        }
        $this->observers = $newObserver;
    }

    function notify()
    {
        foreach ($this->observers as $obs) {
            $obs->update($this);
        }
    }

    function getStatus()
    {
        return self::LOGIN_WRONG_PASS;
    }
}