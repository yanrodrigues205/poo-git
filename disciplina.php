<?php
class Disciplina{
     private $materia;
     private $aulas;
     private $professor;

     function __construct($materia, $aulas, $professor){
          $this->materia = $materia;
          $this->aulas = $aulas;
          $this->professor = $professor;
     }

     public function getMateria(){
          return $this->materia;
     }
     public function getAula(){
          return $this->aulas;
     }
     public function getProfessor(){
          return $this->professor;
     }
     public function setMateria($materia){
          $this->materia = $materia;
     }
     public function setAula($aulas){
          $this->aulas = $aulas;
     }
     public function setProfessor($professor){
        $this->professor = $professor;
     }


    function materia_verifica(){
            if($this->materia != '' || $this->aulas != '' || $this->professor != ''){
                if($this->aulas >= 10){
                    echo "<h1>matéria aprovada com sucesso!</h1>";
                }else{
                    echo "<h1> a matéria não foi aprovada, quantidade de aulas invalidas!</h1>";
                }
            }else{
                echo "<a>Essa materia esta irregular, algums dos campos estão vazios!</a>";
            }
    }
}
?>