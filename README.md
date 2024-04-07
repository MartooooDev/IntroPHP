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
* Booleans
* Arrays
* Objects
* Null
