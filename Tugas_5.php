<?php
echo "<b>Soal 1</b><br>";
$string = "D3 Rekayasa Perangkat Lunak Aplikasi";

echo substr($string, 3) . "<br>";
echo substr($string, -8) . "<br>";
echo substr($string, 3, 24) . "<br><br>";

// -----------------------------------------------

echo "<b>Soal 2</b>";
$strings = array(
    'Saya adalah Abdullah',
    'Saya punya seekor kucing yang sangat lucu',
    'Setiap hari ku ajak dia bermain'
);
$strings2 = str_replace(
    array(
        'Abdullah',
        'kucing',
        'lucu',
        'bermain'
    ),
    array(
        'Abdurrahman',
        'bebek',
        'gemuk',
        'berenang'
    ),
    $strings
);
foreach ($strings2 as $value) {
    echo "<br>";
    echo $value;
}
echo "<br><br>";

// ----------------------------------------------------

echo "<b>Soal 3</b><br>";
$str = 'My Password';
$user = 'username';
echo sprintf("The md5 hashed password of %s: %s\n", $str, md5($str.$user));
echo "<br>";
echo sprintf("The sha1 hashed password of %s: %s\n", $str, sha1($str.$user));
echo "<br>";
echo sprintf("The bin2hex hashed password of %s: %s\n", $str, bin2hex($str.$user));
echo "<br><br>";

function primeNumber($head, $last) {
    if ($head >= $last) {
        echo "Error: head more than last";
    } else {
        $size = 0;
        for ($head; $head <= $last; $head++) {
            $count = 0;
            for ($i = 1; $i <= $last; $i++) {
                if ($head % $i == 0) {
                    $count++;
                }
            }
            if ($count == 2) {
                echo "$head ";
                $size++;
            }
        }
        echo "<br>jumlah bilangan prima: $size<br><br>";
    }
}

// ------------------------------------------------------

echo "<b>Soal 4</b><br>";
function is_prime($num)
{
    $flag = 0;
    if ($num == 1 || $num == 0) {
        $flag = 1;
    }
    $square = floor(sqrt($num));
    for ($i = 2; $i <= $square; $i++) {
        if ($num % $i == 0) {
            $flag = 1;
            break;
        }
    }

    if ($flag == 0) {
        return true;
    } else {
        return false;
    }
}

function cek_prima($n, $m)
{
    if ($n > $m) {
        echo "<br>Nilai maksimum harus lebih tinggi dari nilai minimum";
    } else {
        $total = 0;
        for ($i = $n; $i < $m; $i++) {
            if (is_prime($i)) {
                echo $i . ',';
                $total++;
            }
        }
        echo "<br>Jumlah bilangan prima " . $total;
    }
}

cek_prima(1, 10);
echo "<br><br>";

// ------------------------------------------------------

echo "<b>Soal 5</b><br>";
function primeNumberEnhanced($head, $last) {
    $size = 0;
    for ($i = $head; $i <= $last; $i++) {
        if (thisPrime($i)) {
            echo "$i ";
            $size++;
        }
    }
    echo "<br>jumlah bilangan prima: " . $size . "<br><br>";
}

function thisPrime($number) {
    if ($number == 1) {
        return false;
    }

    if ($number == 2) {
        return true;
    }

    $x = sqrt($number);
    $x = floor($x);

    for ($i = 2; $i <= $x; $i++) {
        if ($number % $i == 0) {
            break;
        }
    }

    if ($x == $i-1) {
        return true;
    } else {
        return false;
    }
}

primeNumberEnhanced(1, 30);
?>