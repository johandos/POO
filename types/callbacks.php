<?php
    // An example callback function
    function my_callback_function() {
        echo 'my_callback_function hello world!<br>';
    }

    // An example callback method
    class MyClass {
        static function myCallbackMethod() {
            echo 'myCallbackMethod hello world!<br>';
        }
    }

    // Type 1: Simple callback
    call_user_func('my_callback_function');

    // Type 2: Static class method call
    call_user_func(array('MyClass', 'myCallbackMethod'));

?>