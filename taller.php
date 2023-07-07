<?php 



// 1) Declara una variable por cada tipo de dato y asignar un valor
// Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor
// booleano (que imprima true o false), un array y un valor nulo (que imprima NULL)
    
    function ejercicio1(){
        $numero = 1;
        $mascota = 'Gato';
        $trabaja = false;
        $asistencia = array('Maite','Nati','Alba');
        $tiene_alas = NULL;

        var_dump($trabaja);
        echo "<br>";
        var_dump($asistencia);
        echo "<br>";
        var_dump($tiene_alas);
        echo "<br>";
    }
    
//¿Qué tipo de dato son las siguientes variables?
//Fácil
    function ejercicio2(){
        $nombre = "Luna";
        $apellido = "Lovegood";
        $edad = 42;
        $Ravenclaw = true;
        var_dump("$nombre $apellido");
        echo "<br>";
        var_dump($edad);
        echo "<br>";
        var_dump($Ravenclaw);
        echo "<br>";   
    }
    
//Medio
    function ejercicio3(){
        $nombre = "Luna";
        $apellido = "Lovegood";
        $promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
        $nombre_completo = $nombre . " " .$apellido;
        $presento_examen = (bool) 1;
        var_dump($promedio);
        echo "<br>";
        var_dump($nombre_completo);
        echo "<br>";
        var_dump($presento_examen);
        echo "<br>";
    }

//Avanzado
    function ejercicio4(){
        $numero_preguntas = 5 + "5";
        $numero_respuestas = "5" + 5;
        $promedio_maximo = $numero_respuestas / 1.0;
        $nargles = 3 + "5 nargles";

        var_dump($numero_preguntas);
        echo "<br>";
        var_dump($numero_respuestas);
        echo "<br>";
        var_dump($promedio_maximo);
        echo "<br>";
        var_dump($nargles);
        echo "<br>";
    }
    

//Suponiendo estas variables
// ¿Cuál es el resultado según las tablas de verdad?
    function ejercicio5(){
        $es_un_michi_grande = true;
        $le_gusta_comer = true;
        $sabe_volar = false;
        $tiene_2_patas = false;


        if($es_un_michi_grande && $le_gusta_comer){
            echo "true \n";
        };
        print_r(($es_un_michi_grande || $sabe_volar ? 'true' : 'false')."\n");
        print_r(($sabe_volar || $tiene_2_patas ? 'true' : 'false')."\n");
        echo (!$le_gusta_comer ? 'true' : 'false')."\n";
        echo (!$le_gusta_comer || $es_un_michi_grande ? 'true' : 'false')."\n";
    }
    
// Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la
// variable original.
    function ejercicio6(){
        echo strtoupper("hola")."\n";
    }
    
// Imprime en pantalla la longitud de la variable tipo string.
    function ejercicio7(){
        echo strlen("adiós")."\n";
    }

// Imprime en pantalla la cantidad de palabras de la variable tipo string.
    function ejercicio8(){
        echo str_word_count("Rocío Alonso")."\n";
    }

// Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la
// variable original.
    function ejercicio9(){
        echo strrev("zorra")."\n";
    }
    
// Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
    function ejercicio10(){
        $mascota = 'Michi';
        echo $mascota."\n";
    }

// Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
// Suma ambas variables de tipo integer e imprime en pantalla.
    function ejercicio11(){
        $numero_a = 5;
        $numero_b = 3;
        echo "$numero_a + $numero_b  = ";
        echo $numero_a+$numero_b."\n";
    }

// Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y
// consola
// a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato
// en pantalla y consola.
    function ejercicio12(){
        $numero_c = 1;
        $numero_d = 0;
        var_dump($numero_c);
        echo "<br>";
        var_dump($numero_d);
        echo "<br>";
        var_dump((bool) $numero_c);
        echo "<br>";
        var_dump((bool) $numero_d);
        echo "<br>";
    }

// Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime
// en pantalla y por consola el resultado
    function ejercicio13(){
        function sumar($num1,$num2){
        echo $num1+$num2."\n";
        }
        sumar(5,99);
    }

// Crear función que determine si un número es par o impar. Imprime por consola y pantalla
    function ejercicio14(){
        function paroimpar($num){
            if($num%2==0){
                echo "Par\n";
            }else{
                echo "Impar\n";
            }
        }
        paroimpar(88);
    }

// Crear un array de 10 números
    $sorteo = array(2,5,6,9,12,33,24,55,10,1);

// Obtén el largo del array e imprime en pantalla y consola.
    function ejercicio15($arr){
        echo count($arr)."\n";
    }

// Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
    function ejercicio16($arr){
        array_push($arr,100);
        var_dump($arr);
    }

// Ahora agrega 2 elementos más a tu array e imprime en pantalla.
    function ejercicio17($arr){
        array_push($arr,8,25);
        var_dump($arr);
    }
    
// Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
    function ejercicio18($arr){
        $sorteo_2 = array(66,71,34);
        var_dump(array_merge($arr,$sorteo_2));
    }

// Crear una función que imprima en consola y pantalla todos los números de un array en una lista
    function make_list($arr){
        foreach($arr as &$element){
            echo "-".$element."<br>";
        }
        echo "\n";
    }
    function ejercicio19($arr){
        make_list($arr);
    }

// Crear una función que añade un número al array
    function ejercicio20($arr){
        function addNumber($num,$arr){
            array_push($arr,$num);
            var_dump($arr);
        }
        addNumber(4,$arr);
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
    function ejercicio21($arr){
        eraseEven($arr);
    }
    

// Crear una función que devuelva el número mayor de un array.
    function getBiggestNumber($arr){
        echo max($arr)."\n";
    }
    function ejercicio22($arr){
        getBiggestNumber($arr);
    }
    

// Crear una función que devuelva el número menor de un array.
    function getSmallestNumber($arr){
        echo min($arr)."\n";
    }
    function ejercicio23($arr){
        getSmallestNumber($arr);
    }
    

// Crear un función que convierta en minúsculas todas las letras de un texto.
    function tolowercase($string){
        echo strtolower($string)."\n";
    }
    function ejercicio24(){
        tolowercase('ROBIN');
    }

// Crear una función que convierta en mayúsculas todas las letras de un texto.
    function touppercase($string){
        echo strtoupper($string)."\n";
    }
    function ejercicio25(){
        touppercase('robin');
    }

// Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre
// en mayúscula.
    $coders = array('rocío','lili','maggie','sara');
    function capitalize($arr){
        foreach($arr as &$value){
            $value = ucfirst($value); 
        }
        make_list($arr); 
    }
    function ejercicio26($arr){
        capitalize($arr);
    }
    

// Crear una clase coche con sus atributos y un atributo puede ser de tipo array
// Crear una función que devuelva la marca del carro.
// Crear una función que devuelva la cantidad de puertas que tiene el carro.
// Crear una función que devuelva un atributo del array.
    
    function ejercicio27(){
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
        echo "<br>";
        echo $mi_coche->getMarca();
        echo "<br>";
        echo $mi_coche->getPuertas();
    }
    
?>