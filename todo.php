<?php

$items = array();
$key = 1;

do {
    foreach ($items as $key => $item) {
        $key++;
        echo "[{$key}] {$item}\n";
    }

    echo '(N)ew item, (R)emove item, (Q)uit : ';

    $input = trim(fgets(STDIN));

    if ($input == 'N' || $input == 'n') {
        echo 'Enter item: ';
        $items[] = trim(fgets(STDIN));
    } elseif ($input == 'R' || $input =='r') {
        echo 'Enter item number to remove: ';
        $key = trim(fgets(STDIN));
        --$key;
        unset($items[$key]);
      }

} while (($input != 'Q') && ($input != 'q'));

echo "Goodbye!\n";

exit(0);