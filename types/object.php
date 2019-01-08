Ejemplo 1
<?php
var_dump(json_encode([
    new \stdClass,
    new class{},
    (object)[],
]))
?>

<br>
Ejemplo 2
<?php
    class stdObject {
        public function __construct(array $arguments = array()) {
            if (!empty($arguments)) {
                foreach ($arguments as $property => $argument) {
                    $this->{$property} = $argument;
                }
            }
        }

        public function __call($method, $arguments) {
            $arguments = array_merge(array("stdObject" => $this), $arguments); // Note: method argument 0 will always referred to the main class ($this).
            if (isset($this->{$method}) && is_callable($this->{$method})) {
                return call_user_func_array($this->{$method}, $arguments);
            } else {
                throw new Exception("Fatal error: Call to undefined method stdObject::{$method}()");
            }
        }
    }

    // Usage.

    $obj = new stdObject();
    $obj->name = "Nick";
    $obj->surname = "Doe";
    $obj->age = 20;
    $obj->adresse = null;

    var_dump($obj);


?>

<br>
Ejemplo 3
<?php
    $x = (object) array('a'=>'A', 'b'=>'B', 'C');
    echo '<pre>'.print_r($x, true).'</pre>';
?>