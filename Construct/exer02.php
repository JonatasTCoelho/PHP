<?php

class SalaVirtual{

    public $aluno;
    public $professor;
    public $materia;
    public $qtdaluno = 21;

    public function Controle_alunos($aluno){
        if($qtdaluno > 20){
            print "ERRO";
        }else{
            $this->aluno = $aluno;
        }
    }
}

?>