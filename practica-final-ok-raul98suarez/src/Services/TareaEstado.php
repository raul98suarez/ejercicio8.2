<?php

namespace App\Services\TareaEstado;


/**
 * Servicio encargado de asignar los estados de las Tareas
 */
final class TareaEstado
{
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
        return true;
    }
}
