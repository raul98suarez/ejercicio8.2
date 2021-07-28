<?php

namespace App\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\EventDispatcher\EventDispatcher;



class Subscribers implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            'solicitud.pendiente'=>'pendiete',
            'solicitud.aprobado'=>'aprobado',
            'solicitud.rechazado'=>'rechazado',
            'onPresupuestoSolicitado'=>'solicitudPendiente',
            'onPresupuestoAprobado'=>'solicitudAprobada'
        );
    }

    public function aprobado()
    {

    }
    public function pendiete()
    {

    }
    public function rechazado()
    {

    }
}
