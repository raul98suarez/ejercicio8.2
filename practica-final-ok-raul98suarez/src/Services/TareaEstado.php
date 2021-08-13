<?php

namespace App\Services\TareaEstado;

use App\Repository\EnviarMail;

/**
 * Servicio encargado de asignar los estados de las Tareas
 */
final class TareaEstado
{

    private $enviarMail;
    public function __construct(EnviarMail $enviarMail)
    {
        $this->enviarMail=$enviarMail;
    }

    /**
     * Asigna el estado de Sin asignar a una Tarea
     * @param $tarea Tarea a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function tareaSinasignar(Tarea $tarea):bool
    {
        $this->enviarMail->sendEmail("TAREA","SINASIGNAR");
        return true;
    }

    /**
     * Asigna el estado de Asignada a una Tarea
     * @param $tarea Tarea a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function tareaAsignada(Tarea $tarea):bool
    {
        $this->enviarMail->sendEmail("TAREA","ASIGNADA");
        return true;
    }

    /**
     * Asigna el estado de Terminada a una Tarea
     * @param $tarea Tarea a la que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function tareaTerminada(Tarea $tarea):bool
    {
        $this->enviarMail->sendEmail("TAREA","TERMINADA");
        return true;
    }
}
