<?php 
    namespace Projeto\DAO;

    class Login{
        private string $email;
        private string $senha;

        public function __construct(string $email, string $senha){
            $this->email = $email;
            $this->senha =$senha;
        }

        public function __get(string $dado): mixed {
            return $this->dado;
        }

        public function __set(string $variavel, string $novoDado): void {
            $this->variavel = $novoDado;
        }

        public function imprimir(): string{
            return "<br>Usuário: ".$this->email.
                   "Senha: ".$this->senha;
        }
    }
?>