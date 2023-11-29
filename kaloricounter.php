<?php
    abstract class Makanan{
        private $namaMakanan;
        private $kalori;
        
        public function getNama(){
            echo $this->namaMakanan;
        }
        public function getKalori(){
            echo $this->kalori;
        }

        public function __construct($namaMakanan, $kalori){
            $this->namaMakanan = $namaMakanan;
            $this->kalori = $kalori;
        }
    }


    class Ayam extends Makanan{

    }  
    class Tempe extends Makanan{

    }

    class Tahu extends Makanan{

    }

    class Nasi extends Makanan{
        
    }

    class Telur extends Makanan{
        
    }

    class Daging extends Makanan{
        
    }


    $ayamgoreng = new Ayam("Ayam Goreng", 245.9);
    $ayamrebus = new Ayam("Ayam rebus", 150);
    $ayambakar = new Ayam("Ayam bakar", 216);
    $sateayam = new Ayam("Sate ayam", 466);
    $sotoayam = new Ayam("Soto Ayam", 130);
    $sotosapi = new Daging("Soto sapi", 91);
    $baksosapi = new Daging("Bakso sapi", 202);
    $baksoayam = new Ayam("Bakso ayam", 161);
    $steak = new Daging("Steak sapi", 252);
    $rendang = new Daging("Rendang", 195);
    $gulaisapi = new Daging("Gulai sapi", 109);
    $nasiputih = new Nasi("Nasi putih", 129);
    $nasigoreng = new Nasi("Nasi goreng", 168);
    $telurgoreng = new Telur("Telur goreng", 154);
    $telurrebus = new Telur("Telur rebus", 154);
    $tempegoreng = new Tempe("Tempe goreng", 255);
    $temperebus = new Tempe("Tempe goreng", 196);
    $tahugoreng = new Tahu("Tahu goreng", 271);
    $tahurebus = new Tahu("Tahu rebus", 154);
    $beefpizza = new Daging("Beef pizza", 301);
    $burger = new Daging("Burger", 258);

?>
