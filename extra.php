<?php 

class Aluno{
    private $nome;
    private $matricula;
    private $curso;

    public function __construct($nome, $matricula, $curso){
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getMatriculas(){
        return $this->matricula;
    }
    public function getCurso(){
        return $this->curso;
    }
    public function setNome($novoNome){
        $this->nome = $novoNome;
    }
    public function setMatriculas($novoMatricula){
        $this->matricula = $novoMatricula;
    }
    public function setCurso($novoCurso){
        $this->curso = $novoCurso;
    }
}

class CadastrarAluno extends Aluno{

    public function cadastrar($nome, $matricula, $curso){
        $alunos = array(
            $this->nome,
            $this->matricula,
            $this->curso
        );
    }
    public function MostrarCadastrados(){
        foreach
    }
}



?>