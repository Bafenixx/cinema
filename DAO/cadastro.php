<?php 
    namespace Projeto\DAO;

    class Cadastro{
        private string $nomeCadastrado;
        private string $dtNascimento;
        private string $emailCadastrado;
        private string $senhaCadastrada;

        public function __construct(string $nomeCadastrado, string $dtNascimento, string $emailCadastrado, string $senhaCadastrada){
            $this->nomeCadastrado = $nomeCadastrado;
            $this->dtNascimento = $dtNascimento;
            $this->emailCadastrado = $emailCadastrado;
            $this->senhaCadastrada = $senhaCadastrada;
        }

        public function __get(string $dado): mixed {
            return $this->dado;
        }

        public function __set(string $variavel, string $novoDado): void {
            $this->variavel = $novoDado;
        }

        public function imprimir(): string {
            return "<br>Nome: ".$this->nomeCadastrado.
                   "<br>Data de Nascimento: ".$this->dtNascimento.
                   "<br>Email: ".$this->emailCadastrado.
                   "<br>Senha: ".$this->senhaCadastrada;
        }

    }
?>