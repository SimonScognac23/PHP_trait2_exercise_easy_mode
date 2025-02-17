<?php


// istanzio un trait contenente come logica tutte le operazioni matematiche e sfrutto il trait in una classe esterna Rettangolo

trait Calculator{
// nel trait ci andra la logica dle trait stesso




    public function sum($a, $b) {  // somma
        return $a + $b;
    }



    public function sub($a, $b) {  // sottrazione
        return $a - $b;
    }




    public function mul($a, $b) {  // moltiplicazione
        return $a * $b;
    }




    public function div($a, $b) {  // divisione
        return $a / $b;
    }



    public function sqr($a) {
        return sqrt($a);  // radice quadrata
    }










}


class Rettangolo {

    use Calculator;  // Implemento il trait nella classe Rettangolo

    private $base;
    private $altezza;

    public function __construct(int $_base, int $_altezza) {
        $this->base = $_base;
        $this->altezza = $_altezza;
    }






    public function getArea(){   // area
        return $this->mul($this->base, $this->altezza);    // invochiamo la funzione mul con i parametri in ingresso di base e altezza

    }





    public function getPerimeter(){

        $sum = $this->sum($this->base, $this->altezza);  // nella variabile sum vi è riportato il valore di somma di base + altezza

        $result = $this->mul($sum, 2); // invochiamo mul che è l moltiplicazione che avra come parametri in ingresso sum e 2, appunto dobbiamo moltiplicare per 2

        return $result;
    }






    public function getDiagonal(){

        $baseSquare = $this->base**2;  // qui ottengo base alla seconda
        $heightSquare = $this->altezza**2;

        $sum = $this->sum($baseSquare, $heightSquare );    // invoco la funzione sum per sommare i 2 parametri


        $result = $this->sqr($sum);  // qui facciamo la radice quadrata di result

        return $result;
    }
}




$rettangolo = new Rettangolo(5 ,2);

echo $rettangolo->getArea() . "\n";

echo $rettangolo->getPerimeter() . "\n";

echo $rettangolo->getDiagonal() . "\n";