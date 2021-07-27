<?php

namespace App\Services\ProyectoEstado;


/**
 * Servicio encargado de asignar los estados de los Proyectos
 */
final class ProyectoEstado
{
    /**
     * Asigna el estado de Aprobado a un proyecto
     * @param $proyecto Proyecto al que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function proyectoAprobado(Proyecto $proyecto):bool
    {
        return true;
    }

    /**
     * Asigna el estado de Enproceso a un proyecto
     * @param $proyecto Proyecto al que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function proyectoEnproceso(Proyecto $proyecto):bool
    {
        return true;
    }

    /**
     * Asigna el estado de Terminado a un proyecto
     * @param $proyecto Proyecto al que se le asigna el estado
     * 
     * @return true Si todo a salido bien 
     * @return false Si algo salio mal 
     * 
     */
    public function proyectoTerminado(Proyecto $proyecto):bool
    {
        return true;
    }
}
