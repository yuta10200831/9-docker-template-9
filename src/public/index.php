<?php
class TotalNumber {
    private int $total;

    public function __construct() {
        $this->total = 0;
    }

    public function calculateTotal(int $limit) {
        for ($i = 0; $i < $limit; $i++) {
            $this->total += $i;
            var_dump($this->total);
        }
    }
}

$limit = 5;
$totalNumber = new TotalNumber();
$totalNumber->calculateTotal($limit);



// (期待する結果)
// int(0)
// int(1)
// int(3)
// int(6)
// int(10)

// $total = 0;

// for ($i = 0; $i < 5; $i++) {
//     $total += $i;
//     var_dump($total);
// }
