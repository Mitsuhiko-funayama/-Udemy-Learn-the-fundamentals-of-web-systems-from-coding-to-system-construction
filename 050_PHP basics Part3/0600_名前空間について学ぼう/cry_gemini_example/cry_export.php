<?php

require_once 'bird.php';

require_once 'dog.php';

// 犬のVoiceを使いたいとき
$dog = new \Animal\Dog\Voice();
$dog->cry(); // ワンワン！

echo '<br>';

// 鳥のVoiceを使いたいとき
$bird = new \Animal\Bird\Voice();
$bird->cry(); // ピピピッ！