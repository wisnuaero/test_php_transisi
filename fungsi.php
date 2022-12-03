<?php
// function for count total lowercase letter on character
function count_($letter)
{
    $string = $letter;
    $lowerCase = 0;
    $matches = array();
    if (preg_match_all("/[a-z]/", $string, $matches) > 0) {
        foreach ($matches[0] as $match) {
            $lowerCase += strlen($match);
        }
    }
    return $lowerCase;
}

// function ngram
// unigram
function unigram($data)
{
    $result = explode(" ", $data);
    return implode(", ", $result);
}
// bigram
function bigram($data)
{
    $input = explode(" ", $data);
    $x = 0;
    $bigram = '';
    foreach ($input as $item) {
        if ($x < 1) {
            $bigram .= $item . ' ';
            $x++;
        } else {
            $bigram .= $item . ', ';
            $x = 0;
        }
    }
    $bigram = substr($bigram, 0, -2);
    return $bigram;
}
// trigram
function trigram($data)
{
    $input = explode(" ", $data);
    $y = 0;
    $trigram = '';
    foreach ($input as $item) {
        if ($y < 2) {
            $trigram .= $item . ' ';
            $y++;
        } else {
            $trigram .= $item . ', ';
            $y = 0;
        }
    }
    $trigram = substr($trigram, 0, -2);
    return $trigram;
}

// fucntion calc
function calc($input)
{
    $color['black']  = [1, 2, 5, 7, 10, 11];
    $color['white'] = [3, 4, 6, 8, 9, 12];

    if (in_array($input, $color['black'])) {
        return 'style="background : black; color: white;"';
    } else {
        return 'style="background : white"';
    }
}

// function encrypt
// patternnya : +1 -2 +3...-n
function encrypt($input)
{
    $arr = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    $input = strtoupper($input);
    $arr_input = str_split($input);
    $add = true;
    $result = '';
    $x = 1;
    $temp = 0;
    for ($i = 0; $i < count($arr_input); $i++) {
        $temp = array_search($arr_input[$i], $arr);
        if ($add == true) {
            $result .= $arr[$temp + $x];
            $add = false;
        } else {
            $n = $temp - $x;
            if ($n < 0) {
                $n = count($arr) + ($n);
            }
            $result .= $arr[$n];
            $add = true;
        }
        $x++;
    }
    return $result;
}