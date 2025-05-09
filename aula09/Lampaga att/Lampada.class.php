<style>
    body {
        background-color: #000000;
        color: #ffffff;
        font-family: 'Arial Black', Gadget, sans-serif;
        padding: 20px;
        margin: 0;
        background-image: 
            radial-gradient(circle at 10% 20%, rgba(255, 0, 0, 0.1) 0%, transparent 20%),
            radial-gradient(circle at 90% 80%, rgba(255, 0, 0, 0.1) 0%, transparent 20%);
    }
    
    .lampada {
        background-color: #0a0a0a;
        border: 3px solid #ff0000;
        border-radius: 0;
        padding: 25px;
        margin: 30px auto;
        max-width: 600px;
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.5);
        position: relative;
        overflow: hidden;
    }
    
    .lampada::before, .lampada::after {
        content: '';
        position: absolute;
        width: 100%;
        height: 15px;
        background: 
            linear-gradient(135deg, transparent 10px, #ff0000 10px, #ff0000 12px, transparent 12px),
            linear-gradient(225deg, transparent 10px, #ff0000 10px, #ff0000 12px, transparent 12px);
        background-size: 20px 20px;
        left: 0;
    }
    
    .lampada::before {
        top: 0;
    }
    
    .lampada::after {
        bottom: 0;
        transform: rotate(180deg);
    }
    
    .lampada h2 {
        color: #ff0000;
        text-align: center;
        border-bottom: 2px solid #ff0000;
        padding-bottom: 15px;
        margin-bottom: 20px;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-size: 24px;
        text-shadow: 0 0 10px rgba(255, 0, 0, 0.7);
    }
    
    .lampada p {
        margin: 15px 0;
        padding: 10px;
        border-left: 4px solid #ff0000;
        padding-left: 15px;
        background-color: rgba(255, 0, 0, 0.05);
        transition: all 0.3s ease;
    }
    
    .lampada p:hover {
        background-color: rgba(255, 0, 0, 0.15);
        transform: translateX(5px);
    }
    
    .lampada .destaque {
        color: #ff0000;
        font-weight: bold;
        text-shadow: 0 0 5px rgba(255, 0, 0, 0.5);
    }
    
    .lampada .status-box {
        display: inline-block;
        padding: 8px 15px;
        margin-top: 10px;
        background-color: #ff0000;
        color: #000000;
        font-weight: bold;
        border: 2px solid #000000;
        box-shadow: 0 0 10px rgba(255, 0, 0, 0.8);
    }
    
    /* Efeitos de espinhos nas bordas */
    .spike-border {
        position: relative;
    }
    
    .spike-border::after {
        content: '';
        position: absolute;
        bottom: -10px;
        left: 0;
        width: 100%;
        height: 10px;
        background: 
            linear-gradient(135deg, transparent 7px, #ff0000 7px) 0 0,
            linear-gradient(225deg, transparent 7px, #ff0000 7px) 0 0;
        background-size: 15px 10px;
        background-repeat: repeat-x;
    }
</style>

<?php
    class lampada{
        public $Fabricante;
        public $Tensao;
        public $Potencia;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status =True;
        }

        public function Desligar(){
                
        }
        public function MostrarDados(){
            echo '<div class="lampada">';
            echo '<h2>Dados da Lâmpada</h2>';

            echo '<p><span class="destaque">Fabricante:</span> '.$this->Fabricante.'</p>';
            echo '<p><span class="destaque">Tensão:</span> '.$this->Tensao.'</p>';
            echo '<p><span class="destaque">Potência:</span> '.$this->Potencia.'</p>';
            echo '<p><span class="destaque">Cor:</span> '.$this->Cor.'</p>';
            echo '<p><span class="destaque">Status:</span> '.$this->Status.'</p>';

            if ($this->Status == 1){
                echo "O Status é: Ligada <br>";
            }else {
                echo "O Status é: Desligada <br>";
            }

            echo '</div>';
        }
    }



?>