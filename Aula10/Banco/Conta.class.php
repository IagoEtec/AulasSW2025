<?php
    class Conta{
        public $Nome;
        public $Cpf;
        private $Saldo;

        public function Sacar($valor){
            if($valor>$this->Saldo){
                return "Saldo insuficiente";
            }else{
            $this->Saldo = $this->Saldo - $valor;
            $resultado = "Saque efetuado. Seu saldo atual é de R$" . $this->Saldo;
            return $resultado;}
        }

        public function Depositar($valor){
            $this->Saldo = $this->Saldo + $valor;
            $resultado = "Deposito efetuado. Seu saldo atual é de R$" . $this->Saldo;
            return $resultado;
        }

        public function ConsultarSaldo(){
            echo "Nome: " . $this->Nome . "<br>";
            echo "Cpf: " . $this->Cpf . "<br>";
            echo "Saldo: " . $this->Saldo . "<br>";

        }

    }


?>