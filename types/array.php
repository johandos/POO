Ejemplo 1
<?php
    //array retorna solo el de valor true
    $array = array(
        1    => "a",
        "1"  => "b",
        1.5  => "c",
        true => "d",
    );

    var_dump($array);
?>

</br>
Ejemplo 2

<?php
    // retorna todos
    $array = [
        "foo" => "bar",
        "bar" => "foo",
        100   => -100,
        -100  => 100,
    ];

    var_dump($array);
?>

</br>
Ejemplo 3

<?php
    //se le asigna la clave 7 a la d por la clave mayor anterior
    $array = array(
        "a",
        "b",
        6 => "c",
        "d",
    );
    var_dump($array);
?>
