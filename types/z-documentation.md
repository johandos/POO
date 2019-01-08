1. **Basic syntax**
	* PHP tags 
		* ``<?php ?>  se permite la etiqueta <? ?> habilitando``
		``la directiva short_open_tag ``
	* Escaping from HTML
		* ``es más eficiente abandonar el modo intérprete de PHP`` ``que enviar todo el texto a través de **echo** o **print**.``
	* Instruction separation: _Punto y coma_
	* Comments

2. **types**
	* Booleans
	* Integers
	* Floating point numbers
	* Strings
	* Arrays
		* es un mapa ordenado. Un mapa es un tipo de datos que asocia valores con claves
	* Iterables
		* tipo de parámetro para indicar que una función requiere un conjunto de valores, pero que no importa la forma del dicho conjunto ya que se utiizará con foreach.
	* Objects
	* Resources
	    * bzopen() Similar a la función fopen(), solamente 'r' (lectura) y 'w' (escritura) están soportados. Todo lo demás hará que bzopen devuelva FALSE.
	* NULL
	* Callbacks / Callables
	    * e pueden indicar con la declaración de tipo callable a partir de PHP 5.4. Esta documentación utilizó la información del tipo callback con el mismo propósito.
          Algunas funciones como call_user_func() o usort() aceptan como parámetro funciones de llamada de retorno definidas por el usuario
	* Pseudo-types and variables used in this documentation
	    * mixed
	    * number
	    * callback
	    * array|object 
	    * void
	* Type Juggling

3. **Variables**
 	* Basics
	* Predefined Variables
	* Variable scope
	* Variable variables
	* Variables From External Sources

************
	