<?php
class TotalNumber {
    private $total;

    public function __construct() {
        $this->total = 0;
    }

    public function calculateTotal($limit) {
        for ($i = 0; $i < $limit; $i++) {
            $this->total += $i;
            var_dump($this->total);
        }
    }
}

$limit = 5;
$totalNumber = new TotalNumber();
$totalNumber->calculateTotal($limit);


// $total = 0;

// for ($i = 0; $i < 5; $i++) {
//     $total += $i;
//     var_dump($total);
// }
