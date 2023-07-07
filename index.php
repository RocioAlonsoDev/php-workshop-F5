<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Taller PHP</title>
</head>
<body>
    <?php 
    include 'taller.php'
    ?>
    <h2>
        Declara una variable por cada tipo de dato y asignar un valor.
        <br>
        Muestra el valor de esa variable en consola y en pantalla .
        <br> 
        Averigua cómo imprimir el valor booleano (que imprima true o false), 
        un array y un valor nulo (que imprima NULL)
    </h2>
    <p>
        <?php 
            ejercicio1();
        ?>
    </p>
    <h2>¿Qué tipo de dato son las siguientes variables?</h2>
    <h3>Fácil</h3>
    <p>
        <?php 
            ejercicio2();
        ?>
    </p>
    <h3>Medio</h3>
    <p>
        <?php 
            ejercicio3();
        ?>
    </p>
    <h3>Difícil</h3>
    <p>
        <?php 
            ejercicio4();
        ?>
    </p>
    <h2>¿Cuál es el resultado según las tablas de verdad?</h2>
    <p>
        <?php 
            ejercicio5();
        ?>
    </p>
    <h2>Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.</h2>
    <p>
        <?php 
            ejercicio6();
        ?>
    </p>
    <h2>Imprime en pantalla la longitud de la variable tipo string.</h2>
    <p>
        <?php 
            ejercicio7();
        ?>
    </p>
    <h2>Imprime en pantalla la cantidad de palabras de la variable tipo string.</h2>
    <p>
        <?php 
            ejercicio8();
        ?>
    </p>
    <h2>Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.</h2>
    <p>
        <?php 
            ejercicio9();
        ?>
    </p>
    <h2>Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.</h2>
    <p>
        <?php 
            ejercicio10();
        ?>
    </p>
    <h2>Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla. Suma ambas variables de tipo integer e imprime en pantalla.</h2>
    <p>
        <?php 
            ejercicio11();
        ?>
    </p>
    <h2>Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola a las variables 
        anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.</h2>
    <p>
        <?php 
            ejercicio12();
        ?>
    </p>
    <h2>Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado</h2>
    <p>
        <?php 
            ejercicio13();
        ?>
    </p>
    <h2>Crear función que determine si un número es par o impar. Imprime por consola y pantalla</h2>
    <p>
        <?php 
            ejercicio14();
        ?>
    </p>
    <h2>Crear un array de 10 números.
        <br>
        Obtén el largo del array e imprime en pantalla y consola.
    </h2>
    <p>
        <?php 
            ejercicio15($sorteo);
        ?>
    </p>
    <h2>Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla.</h2>
    <p>
        <?php 
            ejercicio16($sorteo);
        ?>
    </p>
    <h2>Ahora agrega 2 elementos más a tu array e imprime en pantalla.</h2>
    <p>
        <?php 
            ejercicio17($sorteo);
        ?>
    </p>
    <h2>Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.</h2>
    <p>
        <?php 
            ejercicio18($sorteo);
        ?>
    </p>
    <h2>Crear una función que imprima en consola y pantalla todos los números de un array en una lista</h2>
    <p>
        <?php 
            ejercicio19($sorteo);
        ?>
    </p>
    <h2>Crear una función que añade un número al array</h2>
    <p>
        <?php 
            ejercicio20($sorteo);
        ?>
    </p>
    <h2>Crear una función que elimine los números pares de ese array.</h2>
    <p>
        <?php 
            ejercicio21($sorteo);
        ?>
    </p>
    <h2>Crear una función que devuelva el número mayor de un array.</h2>
    <p>
        <?php 
            ejercicio22($sorteo);
        ?>
    </p>
    <h2>Crear una función que devuelva el número menor de un array.</h2>
    <p>
        <?php 
            ejercicio23($sorteo);
        ?>
    </p>
    <h2>Crear un función que convierta en minúsculas todas las letras de un texto.</h2>
    <p>
        <?php 
            ejercicio24();
        ?>
    </p>
    <h2>Crear una función que convierta en mayúsculas todas las letras de un texto.</h2>
    <p>
        <?php 
            ejercicio25();
        ?>
    </p>
    <h2>Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre en mayúscula.</h2>
    <p>
        <?php 
            ejercicio26($coders);
        ?>
    </p>
    <h2>Crear una clase coche con sus atributos y un atributo puede ser de tipo array.
        <br>
        Crear una función que devuelva la marca del carro.
        <br>
        Crear una función que devuelva la cantidad de puertas que tiene el carro.
        <br>
        Crear una función que devuelva un atributo del array.
    </h2>
    <p>
        <?php 
            ejercicio27();
        ?>
    </p>
    
</body>
</html>