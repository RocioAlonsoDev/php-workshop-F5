<?php 
//Declara una variable por cada tipo de dato y asignar un valor
    $numero = 1;
    $mascota = 'Gato';
    $trabaja = false;
    $asistencia = array('Maite','Nati','Alba');
    $tiene_alas = NULL;

//Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
//booleano (que imprima true o false), un array y un valor nulo (que imprima NULL)
    var_dump($trabaja);
    var_dump($asistencia);
    var_dump($tiene_alas);

//¿Qué tipo de dato son las siguientes variables?
//Fácil
    $nombre = "Luna";
    $apellido = "Lovegood";
    $edad = 42;
    $Ravenclaw = true;

    var_dump("$nombre $apellido");
    var_dump($edad);
    var_dump($Ravenclaw);

//Medio
    $promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
    $nombre_completo = $nombre . " " .$apellido;
    $presento_examen = (bool) 1;

    var_dump($promedio);
    var_dump($nombre_completo);
    var_dump($presento_examen);

//Avanzado
    $numero_preguntas = 5 + "5";
    $numero_respuestas = "5" + 5;
    $promedio_maximo = $numero_respuestas / 1.0;
    $nargles = 3 + "5 nargles";

    var_dump($numero_preguntas);
    var_dump($numero_respuestas);
    var_dump($promedio_maximo);
    var_dump($nargles);

//Suponiendo estas variables
    $es_un_michi_grande = true;
    $le_gusta_comer = true;
    $sabe_volar = false;
    $tiene_2_patas = false;

// ¿Cuál es el resultado según las tablas de verdad?
    if($es_un_michi_grande && $le_gusta_comer){
        echo "true \n";
    };
    print_r(($es_un_michi_grande || $sabe_volar ? 'true' : 'false')."\n");
    print_r(($sabe_volar || $tiene_2_patas ? 'true' : 'false')."\n");
    echo (!$le_gusta_comer ? 'true' : 'false')."\n";
    echo (!$le_gusta_comer || $es_un_michi_grande ? 'true' : 'false')."\n";

// Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
// variable original.
    echo strtoupper($nombre)."\n";

// Imprime en pantalla la longitud de la variable tipo string.
    echo strlen($nombre)."\n";

// Imprime en pantalla la cantidad de palabras de la variable tipo string.
    echo str_word_count($nombre_completo)."\n";

// Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
// variable original.
    echo strrev($nombre)."\n";

// Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
    $mascota = 'Michi';
    echo $mascota."\n";

// Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
    $numero_a = 5;
    $numero_b = 3;
    echo $numero_a.$numero_b."\n";

// Suma ambas variables de tipo integer e imprime en pantalla.
    echo $numero_a+$numero_b."\n";

// Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
// consola
    $numero_c = 1;
    $numero_d = 0;
    var_dump($numero_c);
    var_dump($numero_d);

// a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
// en pantalla y consola.
    var_dump((bool) $numero_c);
    var_dump((bool) $numero_d);

// Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
// en pantalla y por consola el resultado
    function sumar($num1,$num2){
        echo $num1+$num2."\n";
    }
    sumar(5,99);

// Crear función que determine si un número es par o impar. Imprime por consola y pantalla
    function paroimpar($num){
        if($num%2==0){
            echo "Par\n";
        }else{
            echo "Impar\n";
        }
    }
    paroimpar(88);

// Crear un array de 10 números
    $sorteo = array(2,5,6,9,12,33,24,55,10,1);

// Obtén el largo del array e imprime en pantalla y consola.
    echo count($sorteo)."\n";

// Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
    array_push($sorteo,100);
    var_dump($sorteo);

// Ahora agrega 2 elementos más a tu array e imprime en pantalla.
    array_push($sorteo,8,25);
    var_dump($sorteo);

// Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
    $sorteo_2 = array(66,71,34);
    var_dump(array_merge($sorteo,$sorteo_2));

// Crear una función que imprima en consola y pantalla todos los números de un array en una lista
    function make_list($arr){
        foreach($arr as &$element){
            echo "-".$element."\n";
        }
        echo "\n";
    }
    make_list($sorteo);

// Crear una función que añade un número al array
    function addNumber($num){
        array_push($sorteo,$num);
    }

// Crear una función que elimine los números pares de ese array.
    function eraseEven($arr){
        foreach($arr as $key => $value){
            if($value % 2 == 0){
                unset($arr[$key]);
            }
        }
        make_list(array_values($arr));
    }
    eraseEven($sorteo);

// Crear una función que devuelva el número mayor de un array.
    function getBiggestNumber($arr){
        echo max($arr)."\n";
    }
    getBiggestNumber($sorteo);

// Crear una función que devuelva el número menor de un array.
    function getSmallestNumber($arr){
        echo min($arr)."\n";
    }
    getSmallestNumber($sorteo);

// Crear un función que convierta en minúsculas todas las letras de un texto.
    function tolowercase($string){
        echo strtolower($string)."\n";
    }
    tolowercase('ROBIN');

// Crear una función que convierta en mayúsculas todas las letras de un texto.
    function touppercase($string){
        echo strtoupper($string)."\n";
    }
    touppercase('robin');

// Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
// en mayúscula.
    $coders = array('rocío','lili','maggie','sara');
    function capitalize($arr){
        foreach($arr as &$value){
            $value = ucfirst($value); 
        }
        make_list($arr); 
    }
    capitalize($coders);

// Crear una clase coche con sus atributos y un atributo puede ser de tipo array
// Crear una función que devuelva la marca del carro.
// Crear una función que devuelva la cantidad de puertas que tiene el carro.
// Crear una función que devuelva un atributo del array.
    class Coche{
        public string $matricula;
        public array $modelo;
        public int $puertas = 4;
        public function __construct(string $matricula,array $modelo){
            $this->matricula = $matricula;
            $this->modelo = $modelo;
        }
        public function getMarca(){
            return $this->modelo[0];
        }
        public function getModelo(){
            return $this->modelo[1];
        }
        public function getPuertas(){
            return $this->puertas." puertas";
        }
        public function talk(){
            return "Tengo un ".$this->modelo[0]." ".$this->modelo[1]." con matrícula ".$this->matricula;
        }
    }

    $mi_coche = new Coche("AAA111",['Honda','Fit']);
    echo $mi_coche->talk();
    echo "\n";
    echo $mi_coche->getMarca();
    echo "\n";
    echo $mi_coche->getPuertas()
?>