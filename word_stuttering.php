<?php
function return_starter_word($word) {
    $two_letters = substr($word, 0, 2);
    return $two_letters . "... " . $two_letters . "... " . $word . "?";
}

$word = "country";
$word_stuttered = return_starter_word($word);

echo "Stuttered : " . $word_stuttered;