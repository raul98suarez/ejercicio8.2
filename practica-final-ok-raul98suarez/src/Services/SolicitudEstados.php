<?php

namespace App\Services\SolicitudEstados;

use App\Events\Presupuesto;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;

/**
 * Servicio encargado de asignar los estados de las Solicitudes
 */
final class SolicitudEstados
{
    /**
     * Asigna el estado de pendiente a una solicitud
     * @param $solicitud Solicitud a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function solicitudPendiente(EventDispatcherInterface $dispatcher,SolicitudPresupuesto $solicitud):bool
    {
        $evento=new Presupuesto();
        $dispatcher->dispatch($evento,'solicitud.pendiente');
        return true;
    }

    /**
     * Asigna el estado de aprobado a una solicitud
     * @param $solicitud Solicitud a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function solicitudAprobada(EventDispatcherInterface $dispatcher, SolicitudPresupuesto $solicitud):bool
    {
        return true;
    }

    /**
     * Asigna el estado de rechazado a una solicitud
     * @param $solicitud Solicitud a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function solicitudRechazada(EventDispatcherInterface $dispatcher, SolicitudPresupuesto $solicitud):bool
    {
        return true;
    }
}
