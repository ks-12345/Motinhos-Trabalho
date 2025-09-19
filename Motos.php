<?php

class Moto {
    private $marca;
    private $modelo;
    private $ano;
    private $preco;
    
     private $status;



    public function __construct($marca, $modelo, $ano, $preco, $status) {
        $this->setMarca($marca);
        $this->setModelo($modelo);
        $this->setAno($ano);
        $this->setPreco($preco);
        $this->setStatus($status);
       
    }

     public function Mover(){
    echo "🏍️ A moto " . $this->getMarca() . " está andando...\n";
}

public function Combustivel(){
    echo "⛽ A moto está sendo abastecida.\n";
}

 public function getMarca() {
    return $this->marca; 
 }

 public function getModelo() {
    return $this->modelo; 
 }
 public function getAno() {
    return $this->ano; 
 }
 public function getPreco() {
    return $this->preco; 
 }

 public function getStatus() {
    return $this->status; 
 }

// ---------------------------

 public function setMarca($marca) {
       $this->marca=(strtolower($marca)); 
 }

 public function setModelo($modelo) {
    $this->modelo =(strtolower($modelo));
 }
 public function setAno($ano) {
    $this->ano = (intval($ano));; 
 }
 public function setPreco($preco) {
    $this->preco = (intval($preco)); 
 }

 public function setStatus($status) {
    $this->status = (boolval($status)); 
 }
public function exibirInfo(){
    echo "🔹 Marca: " . $this->getMarca() . "\n";
    echo "🔸 Modelo: " . $this->getModelo() . "\n";
    echo "📅 Ano: " . $this->getAno() . "\n";
    echo "💰 Preço: R$ " . $this->getPreco() . "\n";
    echo "✅ Status: " . ($this->getStatus() ? "Disponível" : "Indisponível") . "\n";
}
    }
// Criação dos objetos
$moto1 = new Moto("Suzuki", "Suzuki GSX-S1000 GT", "2022", "92600.00", true);
$moto2 = new Moto("Yamaha", "XJ6", "2019", "45924.00", false);
$moto3 = new Moto("BMW Motorrad", "K 1600 Bagger", "2023", "245000.00", true);
$moto4 = new Moto("Ducati", "Ducati Panigale V4 SP2 30 Anniversario 916", "2024", "45995.00", true);
$moto5 = new Moto("Kawasaki", "Ninja 650", "2025", "49350.00", true);

echo "🏁🚦🚨🚧🚀🚲🚗🚙🚚🚐🚜🚘🚖🚔🚍🚦🏁\n";
echo "================= GARAGEM DE MOTOS =================\n\n";
echo "-----------------------------------------------------------------\n\n";
$moto1->exibirInfo();
echo "\n";
echo "➡️ ";
$moto1->Mover();
echo "⛽ ";
$moto1->Combustivel();
echo "\n\n-----------------------------------------------------------------\n\n";

$moto2->exibirInfo();
echo "\n";
echo "➡️ ";
$moto2->Mover();
echo "⛽ ";
$moto2->Combustivel();
echo "\n\n-----------------------------------------------------------------\n\n";

$moto3->exibirInfo();
echo "\n";
echo "➡️ ";
$moto3->Mover();
echo "⛽ ";
$moto3->Combustivel();
echo "\n\n-----------------------------------------------------------------\n\n";

$moto4->exibirInfo();
echo "\n";
echo "➡️ ";
$moto4->Mover();
echo "⛽ ";
$moto4->Combustivel();
echo "\n\n-----------------------------------------------------------------\n\n";

$moto5->exibirInfo();
echo "\n";
echo "➡️ ";
$moto5->Mover();
echo "⛽ ";
$moto5->Combustivel();
echo "\n\n-----------------------------------------------------------------\n\n";
echo "🏁🚦🚨🚧🚀🚲🚗🚙🚚🚐🚜🚘🚖🚔🚍🚦🏁\n";


// $moto1->Mover();
// echo PHP_EOL;
// $moto1->Combustivel();
// echo PHP_EOL;

// $moto2->Mover();
// echo PHP_EOL;
// $moto2->Combustivel();
// echo PHP_EOL;

// $moto3->Mover();
// echo PHP_EOL;
// $moto3->Combustivel();
// echo PHP_EOL;

// $moto4->Mover();
// echo PHP_EOL;
// $moto4->Combustivel();
// echo PHP_EOL;

// $moto5->Mover();
// echo PHP_EOL;
// $moto5->Combustivel();
// echo PHP_EOL;
?>
    