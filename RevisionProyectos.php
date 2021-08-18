<?php

namespace App\Utils;

use Symfony\Component\Workflow\Registry;
use App\Entity\Proyecto;

class RevisionProyectos{
    private $workflows;
    public function __construct(Registry $workflows)
    {
     $this->workflows=$workflows;
    }

    public function comprobarEstado(Proyecto $proyecto){
        if($this->workflows->can($proyecto, 'revision')){
            if($this->comprobarTareas($proyecto)){
                $this->workflows->apply($proyecto, 'finalizacion');
            }else{
                $this->workflows->apply($proyecto, 'revision');
            }
            $this->getDoctrine()->getManager()->flush();
        }
    }

    public function comprobarTareas(Proyecto $proyecto):bool{
        $flag=true;
        $tareas=$proyecto->tareas;
        foreach($tareas as $tarea){
            if($tarea->estado != 'terminada'){
                $flag=false;
            }
        }
        return $flag;
    }
}