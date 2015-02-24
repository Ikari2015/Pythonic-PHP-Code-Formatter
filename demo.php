<title>Pythonic PHP Formatter</title>
<h1>Pythonic PHP Formatter</h1>
<p>
<a href="https://github.com/lincanbin/Pythonic-PHP-Code-Formatter" target="_blank">Fork on Github: https://github.com/lincanbin/Pythonic-PHP-Code-Formatter</a></p>
<hr />
<form action="?" method="post">
	<p>
		<h3>Input:</h3>
		<textarea rows="16" cols="100" name="input">
<?php
/*
 * Pythonic PHP Code Formatter
 * https://github.com/lincanbin/Pythonic-PHP-Code-Formatter
 *
 * Copyright 2014, Lin Canbin
 * http://www.94cb.com/Pythonic-PHP-Code-Formatter
 *
 * Licensed under the Apache License, Version 2.0:
 * http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Pythonic PHP code formatter. 
 */
if(isset($_POST['input'])){
	echo htmlspecialchars($_POST['input']);
}else{
echo '&lt;?php
// base class with member properties and methods
class Vegetable
{
	
	public $edible;
	public $color;
	
	function Vegetable($edible, $color = "green"){
		$this->edible = $edible;
		$this->color  = $color;
	}
	
	function is_edible(){
		return $this->edible;
	}
	
	function what_color(){
		return $this->color;
	}
	
} // end of class Vegetable

// extends the base class
class Spinach extends Vegetable{
	
	public $cooked = false;
	
	function Spinach(){
		$this->Vegetable(true, "green");
	}
	
	function cook_it(){
		$this->cooked = true;
	}
	
	function is_cooked(){
		return $this->cooked;
	}
	
} // end of class Spinach
?&gt;';
}
?>
		</textarea>
	</p>
	<p>
		<input type="submit" value="Format" />
	</p>
	<hr />
	<p>
		<h3>Output:</h3>
		<textarea rows="16" cols="100">
<?php
require(dirname(__FILE__) . "/src/Pythonic.PHP.Formatter.class.php");
if(isset($_POST['input'])){
	$PythonicPHPFormatter = new PythonicPHPFormatter($_POST['input']);
	echo htmlspecialchars($PythonicPHPFormatter->format());
}
?>
		</textarea>
		<pre>
<?php
if(isset($_POST['input'])){
	$tokens = token_get_all($_POST['input']);
	//var_dump(trim($tokens[51][1]));
	//var_dump($tokens);
	echo htmlspecialchars($PythonicPHPFormatter->format());
}
?>
		</pre>
	</p>
</form>