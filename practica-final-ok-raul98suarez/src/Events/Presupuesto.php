<?php
namespace App\Events;

use Symfony\Contracts\EventDispatcher\Event;

class Presupuesto extends Event{
    private $algo;
    function __construct()
    {
        $algo=true;
    }
}