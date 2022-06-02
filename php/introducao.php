<center>

<h2>POO - PHP</h2>
<?php

    class pessoa{
        var $nome;
        var $idade;
        function __construct($n, $i){
            $this->nome = $n;
            $this->idade = $i;       
        }
        function escrever(){
            echo $this->nome;
            echo $this->idade;
        }
        function aniversario(){
            $this->idade++;
        }
    }

    class ninja extends pessoa{
        var $arma;
        function __construct($n, $i, $a){
            $this->nome = $n;
            $this->idade = $i;
            $this->arma = $a;
        }

        function morrer(){
            $this->nome = $this->nome . ' morreu com honra';
        }
    }

    $p1 = new pessoa('Filipe', 17);
    $p2 = new pessoa('Gabriela', 18);
    $n1 = new ninja('Scorpion', 24, 'mugai-ryu-kunai');
    $n2 = new ninja('Sub-zero', 27, 'ice-sword');

        
    echo $p1->nome . ' possui ' . $p1->idade . ' anos de idade. <br/>';
    echo $p2->nome.' possui '.$p2->idade.' anos de idade. <br/>';
    echo $n2->nome. ' possui ' .$n2->idade. ' anos e usa como arma uma: '.$n2->arma.'. <br/>';
    echo $n1->nome. ' possui ' .$n1->idade. ' anos e usa como arma uma: '.$n1->arma.'. <br/>';

    $n1->morrer();
    $n2->aniversario();
    $p1->aniversario();
    $p2->aniversario();

    echo '<br/> E depois de três aniversários e uma morte: <br/><br/>';
    echo $p1->nome . ' possui ' . $p1->idade . ' anos de idade. <br/>';
    echo $p2->nome.' possui '.$p2->idade.' anos de idade. <br/>';
    echo $n2->nome. ' possui ' .$n2->idade. ' anos e usa como arma uma: '.$n2->arma.'. <br/>';
    echo $n1->nome. ' possui ' .$n1->idade. ' anos e usa como arma uma: '.$n1->arma.'. <br/>';

    print("<br>");

    /*class Actor {
        public function __construct($show, $character) {
         $this->show = $show;
         $this->character = $character;
        }
      
        public function details() {
          echo "Millie is as badass as " . $this->character . " in " . $this->show . ".\n";
        }
      }
      
      $millie = new Actor('Stranger Things', 'Eleven');
      $millie->details();
    */

?>
</center>