<?php
require_once('html/header.html');

$juegos = 
[   
    'Rust' => 2440.99,
    'Grand Theft Auto V' => 849.05,
    'Hogwarts Legacy' => 5999.00,
    'Red Dead Redemption II' => 2499.30,
    'Elden Ring' => 6499.00,
    'Spider-Man Remastered' => 4999.00,
    'Cult Of The Lamb' => 1199.00
];

$gta = 0;
$gtaTotal = 0;

$rust = 0;
$rustTotal = 0;

$hogwartsLegacy = 0;
$hogwartsLegacyTotal = 0;

$rDP2 = 0;
$rDP2Total = 0;

$eldenRign = 0;
$eldenRignTotal = 0;

$spiderMan = 0;
$spiderManTotal = 0;

$cultOfTheLamb  = 0;
$cultOfTheLambTotal  = 0;

$total = 0;
for ($i=0; $i < 10 ; $i++) { 
    $juego = array_rand($juegos);
    $precio = $juegos[$juego];
    $precio = $precio - ($precio * 0.90);
    $total += $precio;
    switch($juego){
    case 'Rust':     
            $rust++;
            $rustTotal+= $precio;
            break;
    case 'Grand Theft Auto V':
            $gta++;
            $gtaTotal += $precio;
            break;
    case 'Hogwarts Legacy':               
            $hogwartsLegacy++;
            $hogwartsLegacyTotal+= $precio;
            break;
    case 'Red Dead Redemption II':        
            $rDP2++;
            $rDP2Total+= $precio;
            break;
    case 'Elden Ring':
            $eldenRign++;
            $eldenRignTotal+= $precio;
            break;
    case 'Spider-Man Remastered':        
            $spiderMan++;
            $spiderManTotal+= $precio;
            break;
    case 'Cult Of The Lamb':    
            $cultOfTheLamb ++;
            $cultOfTheLambTotal += $precio;
            break;
    }
}
for ($i=0; $i < 190 ; $i++) { 
    $juego = array_rand($juegos);
    $precio = $juegos[$juego];
    $precio = $precio - ($precio * 0.70);
    $total += $precio;
    switch($juego){
        case 'Rust':     
                $rust++;
                $rustTotal+= $precio;
                break;
        case 'Grand Theft Auto V':
                $gta++;
                $gtaTotal += $precio;
                break;
        case 'Hogwarts Legacy':               
                $hogwartsLegacy++;
                $hogwartsLegacyTotal+= $precio;
                break;
        case 'Red Dead Redemption II':        
                $rDP2++;
                $rDP2Total+= $precio;
                break;
        case 'Elden Ring':
                $eldenRign++;
                $eldenRignTotal+= $precio;
                break;
        case 'Spider-Man Remastered':        
                $spiderMan++;
                $spiderManTotal+= $precio;
                break;
        case 'Cult Of The Lamb':    
                $cultOfTheLamb ++;
                $cultOfTheLambTotal += $precio;
                break;
        }
}
for ($i=0; $i < 300 ; $i++) { 
    $juego = array_rand($juegos);
    $precio = $juegos[$juego];
    $precio = $precio - ($precio * 0.50);
    $total += $precio;
    switch($juego){
        case 'Rust':     
                $rust++;
                $rustTotal+= $precio;
                break;
        case 'Grand Theft Auto V':
                $gta++;
                $gtaTotal += $precio;
                break;
        case 'Hogwarts Legacy':               
                $hogwartsLegacy++;
                $hogwartsLegacyTotal+= $precio;
                break;
        case 'Red Dead Redemption II':        
                $rDP2++;
                $rDP2Total+= $precio;
                break;
        case 'Elden Ring':
                $eldenRign++;
                $eldenRignTotal+= $precio;
                break;
        case 'Spider-Man Remastered':        
                $spiderMan++;
                $spiderManTotal+= $precio;
                break;
        case 'Cult Of The Lamb':    
                $cultOfTheLamb ++;
                $cultOfTheLambTotal += $precio;
                break;
        }
}
for ($i=0; $i < 500 ; $i++) { 
    $juego = array_rand($juegos);
    $precio = $juegos[$juego];
    $precio = $precio - ($precio * 0.40);
    $total += $precio;
    switch($juego){
        case 'Rust':     
                $rust++;
                $rustTotal+= $precio;
                break;
        case 'Grand Theft Auto V':
                $gta++;
                $gtaTotal += $precio;
                break;
        case 'Hogwarts Legacy':               
                $hogwartsLegacy++;
                $hogwartsLegacyTotal+= $precio;
                break;
        case 'Red Dead Redemption II':        
                $rDP2++;
                $rDP2Total+= $precio;
                break;
        case 'Elden Ring':
                $eldenRign++;
                $eldenRignTotal+= $precio;
                break;
        case 'Spider-Man Remastered':        
                $spiderMan++;
                $spiderManTotal+= $precio;
                break;
        case 'Cult Of The Lamb':    
                $cultOfTheLamb ++;
                $cultOfTheLambTotal += $precio;
                break;
        }
}
?>
<main>

<section>
<h2><?php echo 'Total Recaudado $' . $total ?>;</h2>

</section>

echo 'Rust' . $rust . '<br>';
echo 'Rust' . $rustTotal . '<br>';
echo 'Grand Theft Auto V' . $gta . '<br>';
echo 'Grand Theft Auto V' . $gtaTotal . '<br>';

echo 'Hogwarts Legacy' . $hogwartsLegacy . '<br>';
echo 'Hogwarts Legacy' . $hogwartsLegacyTotal . '<br>';

echo 'Red Dead Redemption II' . $rDP2 . '<br>';
echo 'Red Dead Redemption II' . $rDP2Total . '<br>';

echo 'Elden Ring' . $eldenRign . '<br>';
echo 'Elden Ring' . $eldenRignTotal . '<br>';

echo 'Spider-Man Remastered' . $spiderMan . '<br>';
echo 'Spider-Man Remastered' . $spiderManTotal . '<br>';

echo 'Cult Of The Lamb' . $cultOfTheLamb . '<br>';
echo 'Cult Of The Lamb' . $cultOfTheLambTotal . '<br>';

</main>



<?php

 require_once('html/footer.html');

?>

