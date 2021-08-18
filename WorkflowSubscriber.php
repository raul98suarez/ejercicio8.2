<?php

namespace App\Subscriber;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use App\Repository\EnviarMail;


class WorkflowSubscriber implements EventSubscriberInterface
{
    private $enviarMail;
    public function __construct(EnviarMail $enviarMail)
    {
        $this->enviarMail=$enviarMail;
    }

    public static function getSubscribedEvents()
    {
        return array(
            'workflow.tramitar_proyecto.revision'=>'proyectoRevision',
            'workflow.tramitar_proyecto.creacion'=>'proyectoCreacion',
            'workflow.tramitar_proyecto.finalizacion'=>'proyectoFinalizacion',
            'workflow.tramitar_tarea.finalizacion'=>'tareaFinalizacion'
        );
    }
    public function proyectoRevision(){
        $this->enviarMail->sendEmail("PROYECTO","APROBADO");
    }
    public function proyectoCreacion(){
        $this->enviarMail->sendEmail("PROYECTO","EN PROCESO");
    }
    public function proyectoFinalizacion(){
        $this->enviarMail->sendEmail("PROYECTO","TERMINADO");
    }
    public function tareaFinalizacion(){
        $this->enviarMail->sendEmail("TAREA","TERMINADA");
    }
}