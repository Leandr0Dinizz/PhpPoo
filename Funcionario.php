<?php
    namespace PHP\Modelo;

    class Funcionario{
        private int $matricula;
        private string $nome;
        private float $salario;
        private string $cargo;
        private string $endereco;
        private string $telefone;

        //Construtor
        public function __construct(int $matricula, string $nome, float $salario,
                                    string $cargo, string $endereco, string $telefone){


                $this->matricula = $matricula;
                $this->nome = $nome;
                $this->salario = $salario;
                $this->cargo = $cargo;
                $this->endereco = $endereco;
                $this->telefone = $telefone;
        }//fim do construct

         public function getMatricula():int      
        {

            return $this->matricula;

        }//fim do getMatricula

        public function getNome():string
        {

            return $this->nome;

        }//fim do getNome


        public function getSalario():float      
        {

            return $this->salario;
        }//fim getSalario    


        public function getCargo():string   
        {

            return $this->cargo;
        }//fim getCargo


        public function getEndereco():string      
        {

            return $this->endereco;
        }//fim do getEndereco


        public function getTelefone():string     
        {

            return $this->salario;
        }

        /////////////////////////////////////////////

        public function setMatricula(int $matricula):int      
        {

            return $this->matricula;

        }//fim do setMatricula

        public function setNome(string $nome):string
        {

            return $this->nome;

        }//fim do setNome


        public function setSalario(float $salario):float      
        {

            return $this->salario;
        }//fim setSalario    


        public function setCargo(string $cargo):string   
        {

            return $this->cargo;
        }//fim setCargo


        public function setEndereco(string $endereco):string      
        {

            return $this->endereco;
        }//fim do setEndereco


        public function setTelefone(string $telefone):string     
        {

            return $this->telefone;
        }

        public function imprimir():string
        {
            return "<br>Matricula: ".$this->getMatricula().
                   "<br>Nome: ".$this->getNome().
                   "<br>Telefone: ".$this->getTelefone().
                   "<br>Endereco: ".$this->getEndereco().
                   "<br>Cargo: ".$this->getCargo().
                   "<br>Salario: ".$this->getSalario(); 
        }

    }//fim da classe
?>