<?php

$laptop = ['asus', 'lenovo', 'acer', 'hp', 'dell', 'axioo'];
// nambhkan alaman di awal array
array_unshift($laptop, 'toshiba', 'apple');
echo "Array setelah di tambah elemen adalah :\n ";
foreach ($laptop as $k) {
    echo "<br>" . $k;
};
?>