<?php
$piezasDisponibles = 
[   
    'rey_b','rey_n','reina_b','reina_n','torre_b','torre_b','torre_n',
    'caballo_b','caballo_n','alfil_b','alfil_n','alfil_n','peon_b',
    'peon_b','peon_b','peon_b','peon_b','peon_n','peon_n','peon_n',
    'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
    'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
    'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
    'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
    'vacio','vacio','vacio','vacio','vacio','vacio','vacio','vacio',
    'vacio','vacio','vacio','vacio'
];

$rutaimg='/';

$tablero = [
    'fila1' => [],
    'fila2' => [],
    'fila3' => [],
    'fila4' => [],
    'fila5' => [],
    'fila6' => [],
    'fila7' => [],
    'fila8' => [],
] ;

// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     $tablero[0][$i] = $pieza ;
//     unset($piezasDisponibles[$indice]);
// }

foreach ($tablero as $fila => $pieza) {
    $indice = array_rand($piezasDisponibles);
    $pieza = $piezasDisponibles[$indice];
    unset($piezasDisponibles[$indice]);
}

print_r($tablero);








// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
// for ($i=0; $i < 8; $i++) { 
//     $indice = array_rand($piezasDisponibles);
//     $pieza = $piezasDisponibles[$indice];
//     echo $pieza . '<br>';
//     unset($piezasDisponibles[$indice]);
// }
?>


