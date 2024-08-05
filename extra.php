<?php 

class Aluno {
    private $nome;
    private $matricula;
    private $curso;

    public function __construct($nome, $matricula, $curso) {
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->curso = $curso;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setNome($novoNome) {
        $this->nome = $novoNome;
    }

    public function setMatricula($novoMatricula) {
        $this->matricula = $novoMatricula;
    }

    public function setCurso($novoCurso) {
        $this->curso = $novoCurso;
    }
}

class CadastrarAluno {
    private $alunos;

    public function __construct() {
        $this->alunos = array();
    }

    public function cadastrar($nome, $matricula, $curso) {
        if ($this->verificarMatricula($matricula)) {
            echo "Matrícula já cadastrada. Por favor, insira uma matrícula diferente.";
            return;
        }

        $aluno = new Aluno($nome, $matricula, $curso);
        array_push($this->alunos, $aluno);
    }

    public function mostrarCadastrados() {
        foreach ($this->alunos as $aluno) {
            echo "Nome: " . $aluno->getNome() . "<br>";
            echo "Matrícula: " . $aluno->getMatricula() . "<br>";
            echo "Curso: " . $aluno->getCurso() . "<br><br>";
        }
    }

    public function editarAluno($matricula, $novoNome, $novoCurso) {
        foreach ($this->alunos as $aluno) {
            if ($aluno->getMatricula() == $matricula) {
                $aluno->setNome($novoNome);
                $aluno->setCurso($novoCurso);
                return;
            }
        }
        echo "Aluno não encontrado.";
    }

    public function excluirAluno($matricula) {
        foreach ($this->alunos as $key => $aluno) {
            if ($aluno->getMatricula() == $matricula) {
                unset($this->alunos[$key]);
                return;
            }
        }
        echo "Aluno não encontrado.";
    }

    private function verificarMatricula($matricula) {
        foreach ($this->alunos as $aluno) {
            if ($aluno->getMatricula() == $matricula) {
                return true;
            }
        }
        return false;
    }
}

echo 'Alunos cadastrados: <br><br>';
$cadastro = new CadastrarAluno();
$cadastro->cadastrar("João", "12345", "Ciência da Computação");
$cadastro->cadastrar("Maria", "67890", "Engenharia de Software");
$cadastro->mostrarCadastrados();

echo '<br>Editar Aluno: <br>';
$cadastro->editarAluno("12345", "João Pedro", "Ciência da Computação");
$cadastro->mostrarCadastrados();

echo '<br>Excluir Aluno: <br>';
$cadastro->excluirAluno("67890");
$cadastro->mostrarCadastrados();


?>