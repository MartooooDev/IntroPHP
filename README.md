# IntroPHP

This is a repository I made to help me studying the PHP language from scratch.

Just a reminder that I'm not a teacher, I'm a student, so some things can be misunderstood by me or by whoever is reading this.
It's also important to note that I'm writing this just because it's the way I learn best (and i'm not actually hoping that someone will see this someday xD ).

With all of that said, if you're reading this, thank you, and I hope we can learn together :).

### First steps

To begin with PHP, on your VSCode, create a folder and call it "public". Inside it, create an archive and call it "index.php"

When you start a server, the file that the system will search to make the homepage of the website is that index file.

To start the PHP integrated server, you can use the command `php -S localhost:3000 -t public` on your VSCode terminal, so it will start a server on the port 3000, and will search for the index.php file inside that public folder you created previously.

Well, after starting your server and with the index file created, we can start by placing the basic php structure on the file. It looks like this:

```php
<?php
	#Your code goes here
?>
```

All the PHP code you want to be executed must be between the `<?php` and `?>` for it to be recognized as something to be executed.

For begginers, let's do the basic code ritual everyone knows you must do when starting a new language:

```php
<?php
	echo "Hello World!";
?>
```

After saving this file, go to your browser and insert the address you specified when starting the server. In my case, it was "localhost:3000", as defined by the command I told about earlier.

As you probably can see, `echo` is the function similar to python's print, where it only shows what you told it to show you on the screen, but in a browser website.

---

### Include and require

The include and require keywords are used to "import" other php archives into one php archive and execute them all in one, or cross-execute some files.

Usually, we put these on the top of the file, just to keep it organized. It needs the keyword followed by the path to that file inside your folders

```php
<?php
	include "./file2";
	//or
	require "./file2";
?>
```

The difference between them is that, as the name says, the `require` **must **be working for the file to load and execute without erros. If it doesn't, the main file won't execute as well.

Meanwhile, when using `include`, the file will try to execute anyway, even with errors within it.

There are variations to these keywords: the `include_once` and `require_once` . These make sure that the files are being executed only one time in the application they are included.

---

### Variables

Variables are a way to represent values using names that you can decide. This helps to keep track of what you're using, calculating, measuring, etc., using significant names.

A variable in PHP is defined using `$`, so, to define a variable to store a name, we should do:

```php
<?php
	$name	= 	"Martin";
	echo	$name;
?>
```

Now, as you can see, I already put the `echo` command to see if it is working correctly, and you can do it on your system just to make sure , but it is working here :).

Variables can be of some different types:

* Strings
  * Any text or number inside single or double quote marks.
    * "this is a string";
    * "123";
* Numbers
  * Numbers are divided into two groups: the Integers and the Floats (or doubles)
    * Integers refer to all numbers lower or greater then 0 that aren't fractions
      * 0
      * -2
      * 3
      * -100
      * 1000
    * Floats refer to integers+fractionary numbers
      * 1.2
      * 5.0
      * 12.4
      * 541.34412
      * 3.141593
* Booleans
  * Booleans refer to only two simple keywords:
    * True
    * False
* Arrays
  * Arrays are like a box, that contains some values inside. That means its a data type to store multiple values inside of it.
    * [1,2,3,4,5] (Array of integers)
    * ["Martin", "Marcus", "John", "Julia"] (Array of Strings)
* Objects
  * Objects are instances of classes on PHP. See Object Oriented Programing on PHP to undestand more.
    * ```php
      <?php
      class Person(){
      }
      echo gettype(new Person);
      ?>

      ```
* Null
  * It's the absence of value. That means it represents something that has none of the datatypes and no value whatsoever.

---

### Constants

Constants are, as they say, constants. They are a kind of "counterpart" to the variables, meaning that the value wont change.

To define a constand, we use the function `define(x, y)`, where x is the constant name and y is the value it'll receive. As stated, it cannot be changed. 

If we try to define the same constant twice with different values, it'll return an error, saying that it is already defined.

```php
<?php
	define("NAME", "Marto");
?>
```

PHP has some pre-defined constants on it's core, for example:

* \_\_FUNCTION_\_: when inside a funcion, returns the function name;
* \_\_METHOD\_\_:  when inside a function or method, returns the function or method name;
* DIRECTORY_SEPARATOR: substitutes the "/";


If we want to know if a constant is already defined or not, we can use a conditional structure:

```php
<?php
	define("NAME", "MARTIN");

	if(defined(NAME)){
		echo "this constant is already defined";
	}

?>
```

This will print the message if the constant is already defined.

If you don't know yet about conditionals, we'll see that later in this page.


Another thing you can do is return all the constants the php has defined:

```php
<?php
	$cons=get_defined_constants(true);
	var_dump($cons);

?>
```

This will return a big message on the page, that seems like an error, but it's not. It shows every constant defined by php system that you can use.

---

### Extra: PHP Cheatsheet

| Command   | Example                 | Description                                                         |
| --------- | ----------------------- | ------------------------------------------------------------------- |
| echo      | echo "Hello World";     | Prints the message between quotes on the page.                      |
| gettype() | gettype("Hello World"); | Function to return the datatype of the argument between parentesis. |


---

### Extra 2: PHP with HTML on the same file

Within a PHP file, it is possible to include your HTML code aswell. It is simple as putting one structure after another:

```php
<?php
	$name= "Martin";
?>

<html>
	<head>
	</head>

	<body>
		<h2>Welcome <?php echo $nome ?> </h2>
	</body>
</html>
```


This allows the utilization of the PHP funcionalities directly with HTML. Even though this seems useful, it is not used too often anymore.
