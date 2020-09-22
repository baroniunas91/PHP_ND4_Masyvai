<?php
echo '1) -------------------------------------------';
echo '<br>';
// Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai 
// nuo 5 iki 25.

foreach(range(0,29) as $value) {
    $arr[] = rand(5, 25);
}
print_r($arr);

echo '<br>';
echo '2) -------------------------------------------';
echo '<br>';
$count = 0;
foreach($arr as $value) {
    if($value > 10) {
        $count++;
    }
}
echo '<br>';
echo "a) Masyve yra $count reikšmių didesnių už 10";
echo '<br>';
$max = max($arr);
echo "b) Didžiausia masyvo reikšmė - $max";
echo '<br>';
$sum = array_sum($arr);
echo "c) Visų reikšmių sumą - $sum";
echo '<br>';

$newArr = [];
foreach($arr as $key => $value) {
    $newArr[] = $value - $key;
}
echo 'd)';
echo '<br>';
print_r($newArr);
echo '<br>'
;
foreach(range(1, 10) as $value) {
    $arr[] = rand(5, 25);
}
echo 'e)';
echo '<br>';
print_r($arr);
echo '<br>';
echo '<br>';
echo 'f)';
echo '<br>';
$porinisMasyvas = [];
$neporinisMasyvas = [];

foreach($arr as $key => $value) {
    if($key % 2 == 0) {
        $porinisMasyvas[$key] = $value;
    } else {
        $neporinisMasyvas[$key] = $value;
    }
}
echo 'Porinis masyvas';
echo '<br>';
print_r($porinisMasyvas);
echo '<br>';
echo '<br>';
echo 'Neporinis masyvas';
echo '<br>';
print_r($neporinisMasyvas);
echo '<br>';
echo '<br>';
echo 'g)';
echo '<br>';
foreach($porinisMasyvas as $key => $value) {
    if($value > 15) {
        $porinisMasyvas[$key] = 0;
    }
}
print_r($porinisMasyvas);
echo '<br>';
echo '<br>';
echo 'h)';
echo '<br>';
foreach($porinisMasyvas as $key => $value) {
    if($value > 10) {
        echo "Pirmas (mažiausias) indeksas, kurio elemento reikšmė didesnė už 10 yra - $key";
        break;
    }
}
echo '<br>';
echo '<br>';
echo 'i)';
echo '<br>';
echo 'Esamas masyvas:';
echo '<br>';
print_r($arr);
echo '<br>';
echo '<br>';
echo 'Ištrinu iš masyvo elementus su poriniais indeksais';
foreach($arr as $key => $value) {
    if($key % 2 == 0) {
        unset($arr[$key]);
    }
}
echo '<br>';
print_r($arr);
// Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
// b) Raskite didžiausią masyvo reikšmę;
// c) Suskaičiuokite visų reikšmių sumą;
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g) Masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;
echo '<br>';
echo '<br>';
echo '3) -------------------------------------------';
echo '<br>';
// Sugeneruokite masyvą, kurio reikšmės atsitiktinės raidės A, B, C ir D, o ilgis 200. 
// Suskaičiuokite kiek yra kiekvienos raidės.

$letters = [
    'A',
    'B',
    'C',
    'D'
];
$myArray = [];
foreach(range(1, 200) as $value) {
    $myArray[] = $letters[rand(0, 3)];
}
echo 'Sugeneruotas masyvas:';
echo '<br>';
print_r($myArray);
echo '<br>';
echo '<br>';
echo 'Suskaičiuojame kiek yra kiekvienos raidės masyve:';
echo '<br>';
$myArray = array_count_values($myArray);
print_r($myArray);

echo '<br>';
echo '<br>';
echo '4) -------------------------------------------';
echo '<br>';
// Išrūšiuokite 3 uždavinio masyvą pagal abecėlę.
ksort($myArray);
print_r($myArray);

echo '<br>';
echo '5) -------------------------------------------';
echo '<br>';
// Sugeneruokite 3 masyvus pagal 3 uždavinio sąlygą. Sudėkite masyvus, sudėdami atitinkamas reikšmes. 
// Paskaičiuokite kiek unikalių reikšmių kombinacijų gavote.

$myArray1 = [];
foreach(range(1, 200) as $value) {
    $myArray1[] = $letters[rand(0, 3)];
}
// echo '<br>';
// print_r($myArray1);
// echo '<br>';
$myArray2 = [];
foreach(range(1, 200) as $value) {
    $myArray2[] = $letters[rand(0, 3)];
}
// echo '<br>';
// print_r($myArray2);
// echo '<br>';
$myArray3 = [];
foreach(range(1, 200) as $value) {
    $myArray3[] = $letters[rand(0, 3)];
}
// echo '<br>';
// print_r($myArray3);
// echo '<br>';

$arraysSum = [];
foreach (array_keys($myArray1 + $myArray2 + $myArray3) as $key) {
    $arraysSum[$key] = $myArray1[$key] . $myArray2[$key] . $myArray3[$key];
}

echo '<br>';
echo 'Masyvų suma:';
echo '<br>';
print_r($arraysSum);
echo '<br>';
echo '<br>';
echo 'Paskaičiuojame kiek unikalių reikšmių kombinacijų gavome';
echo '<br>';
$arraysSum = array_count_values($arraysSum);
print_r($arraysSum);

echo '<br>';
echo '6) -------------------------------------------';
echo '<br>';

// Sugeneruokite du masyvus, kurių reikšmės yra atsitiktiniai skaičiai nuo 100 iki 999. Masyvų ilgiai 100. 
// Masyvų reikšmės turi būti unikalios savo masyve (t.y. neturi kartotis).
$uniqueArray = [];
$uniqueArray2 = [];
while(count($uniqueArray) < 100 || count($uniqueArray2) < 100) {
    if(count($uniqueArray) < 100) {
        $sk = rand(100, 999);
        array_push($uniqueArray, $sk);
        $uniqueArray = array_unique($uniqueArray);
    }
    if(count($uniqueArray2) < 100) {
        $sk2 = rand(100, 999);
        array_push($uniqueArray2, $sk2);
        $uniqueArray2 = array_unique($uniqueArray2);
    }
}
echo '<br>';
echo 'Unikalus pirmas masyvas:';
echo '<br>';
print_r($uniqueArray);
echo '<br>';
echo '<br>';
echo 'Unikalus antras masyvas:';
echo '<br>';
print_r($uniqueArray2);
echo '<br>';
echo '<br>';
echo '7) -------------------------------------------';
echo '<br>';
echo 'Masyvas sudarytas iš pirmo masyvo reikšmių, tačiau jei ta reikšmė yra antrame unikaliame masyve, pirmo masyvo reikšmė yra neįtraukiama:';
echo '<br>';
// Sugeneruokite masyvą, kuris būtų sudarytas iš reikšmių, 
// kurios yra pirmame 6 uždavinio masyve, bet nėra antrame 6 uždavinio masyve.
$masyvas = [];
foreach($uniqueArray as $key => $value) {
    $unikalus = true;
    foreach($uniqueArray2 as $key2 => $value2) {
        if($uniqueArray[$key] === $uniqueArray2[$key2]) {
            $unikalus = false;
            break;
        }
    }
    if($unikalus) {
        $masyvas[] = $uniqueArray[$key];
    }
}
print_r($masyvas);

echo '<br>';
echo '8) -------------------------------------------';
echo '<br>';
// Sugeneruokite masyvą iš elementų, kurie kartojasi abiejuose 6 uždavinio masyvuose.

$masyvasKartojasi = [];
foreach($uniqueArray as $key => $value) {
    $unikalus = true;
    foreach($uniqueArray2 as $key2 => $value2) {
        if($uniqueArray[$key] === $uniqueArray2[$key2]) {
            $unikalus = false;
            break;
        }
    }
    if(!($unikalus)) {
        $masyvasKartojasi[] = $uniqueArray[$key];
    }
}
echo 'Masyvas iš elementų, kurie kartojasi abiejuose 6 uždavinio unikaliuose masyvuose';
echo '<br>';
print_r($masyvasKartojasi);
echo '<br>';

echo '9) -------------------------------------------';
echo '<br>';
echo 'Masyvas, kurio indeksai sudaryti iš pirmo 6 uždavinio masyvo reikšmių, o reikšmės iš antrojo masyvo.';
echo '<br>';
// Sugeneruokite masyvą, kurio indeksus sudarytų pirmo 6 uždavinio masyvo reikšmės, o jo reikšmės iš būtų 
// antrojo masyvo.
$mixArray = [];
foreach($uniqueArray as $key => $value) {
    $mixArray[$value] = $uniqueArray2[$key];
}
print_r($mixArray);
echo '<br>';
echo '10) -------------------------------------------';
echo '<br>';
// Sugeneruokite 10 skaičių masyvą pagal taisyklę: Du pirmi skaičiai- atsitiktiniai nuo 5 iki 25. 
// Trečias, pirmo ir antro suma. Ketvirtas- antro ir trečio suma. Penktas trečio ir ketvirto suma ir t.t.
$skaiciuMasyvas = [];
foreach(range(1, 10) as $key => $value) {
    if($key <= 1) {
        $skaiciuMasyvas[$key] = rand(5, 25);
    } else {
        $skaiciuMasyvas[$key] = $skaiciuMasyvas[$key-2] + $skaiciuMasyvas[$key-1];
    }
}
print_r($skaiciuMasyvas);
echo '<br>';
echo '<br>';
echo '11) -------------------------------------------';
echo '<br>';
// Sugeneruokite 101 elemento masyvą su atsitiktiniais skaičiais nuo 0 iki 300. Reikšmes kurios tame masyve yra 
// ne unikalios pergeneruokite iš naujo taip, kad visos reikšmės masyve būtų unikalios. Išrūšiuokite masyvą taip, 
// kad jo didžiausia reikšmė būtų masyvo viduryje, o einant nuo jos link masyvo pradžios ir pabaigos reikšmės mažėtų. 
// Paskaičiuokite pirmos ir antros masyvo dalies sumas (neskaičiuojant vidurinės). Jeigu sumų skirtumas 
// (modulis, absoliutus dydis) yra didesnis nei | 30 | rūšiavimą kartokite. (Kad sumos nesiskirtų viena nuo 
// kitos daugiau nei per 30)
$masyvas101 = [];
$masyvas101pirmaPuse = [];
$masyvas101antraPuse = [];
$naujasMasyvas = [];
$bendraSuma = 0;

while(true) {

    while(count($masyvas101) < 101) {
        $sk = rand(0, 300);
        array_push($masyvas101, $sk);
        $masyvas101 = array_unique($masyvas101);
    }
    $max = -1;
    $maxKey = -1;
    foreach($masyvas101 as $key => $value) {
        if($value > $max) {
            $max = $value;
            $maxKey = $key;
        }
    }
    $temp = $masyvas101[49];
    $masyvas101[49] = $masyvas101[$maxKey];
    $masyvas101[$maxKey] = $temp;

    foreach($masyvas101 as $key => $value) {
        if($key < 49) {
            $masyvas101pirmaPuse[] = $value;
        } else if($key > 49) {
            $masyvas101antraPuse[] = $value;
        }
    }
    sort($masyvas101pirmaPuse);
    rsort($masyvas101antraPuse);
    $sum1 = array_sum($masyvas101pirmaPuse);
    $sum2 = array_sum($masyvas101antraPuse);
    $bendraSuma = $sum1 - $sum2;
    $bendraSuma = abs($bendraSuma);
    if($bendraSuma <= 30) {
        break;
    }
    $masyvas101 = [];
    $masyvas101pirmaPuse = [];
    $masyvas101antraPuse = [];
}

foreach(range(0, 100) as $key) {
    if($key < 49) {
        $naujasMasyvas[] = $masyvas101pirmaPuse[$key];
    } else if($key == 49) {
        $naujasMasyvas[] = $masyvas101[49];
    } else if($key > 49) {
        $naujasMasyvas[] = $masyvas101antraPuse[$key-50];
    }
}

echo '<br>';
print_r($naujasMasyvas);
echo '<br>';
echo '<br>';
echo "Pirmos pusės masyvo ir antros pusės masyvų skirtumas: $bendraSuma";