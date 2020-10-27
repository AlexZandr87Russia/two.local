<?php
function zero_one($n){
    for ($i = 0; $i <= $n; $i++){
        $affordable[] = ($i % 2 == 0) ? 0 : 1;
    }
    print_r($affordable);
}
zero_one(10);