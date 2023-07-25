<?php
class TotalNumber {
    private int $total;

    public function __construct() {
        $this->total = 0;
    }

    public function calculateTotal(int $limit) {
        for ($i = 0; $i < $limit; $i++) {
            $this->total += $i;
        }
        return $this->total;
    }
}

$totalNumber = new TotalNumber();
$limit = 15;
$total = $totalNumber->calculateTotal($limit);
var_dump($total);

// (期待する出力)
// int(105)

// $total = 0;
// for ($i = 0; $i < 15; $i++) {
//     $total += $i;
// }
// var_dump($total);