<!DOCTYPE html>
<html>
<head>
	<title>My Web Page</title>
</head>
<body>
<?php

	class stringfun {
		public function __construct{
			echo 'string object is created </br>';
		}

		public function __destruct{
			echo 'string object is destroyed </br>';
		}

		public function strrevFun() {
			echo '<h1>reverse function</h1>';
			echo strrev("Information System");
			echo '<hr>';
		}
		public function levenshteinFun() {
			echo '<h1>levenshtein function</h1>';
			echo levenshtein("Hello World","ello World");
			echo "<br>";
			echo levenshtein("Hello World","ello World",10,20,30);
			echo '<hr>';
		}
		public function joinFun() {
			echo '<h1>join function</h1>';
			$arr = array('Hello','World!','Beautiful','Day!');
			echo join(" ",$arr);
			echo '<hr>';
		}
		public function parse_strFun() {
			echo '<h1>parse_string function</h1>';
			parse_str("name=Peter&age=43");
			echo $name."<br>";
			echo $age;
			echo '<hr>';
		}
		public function similar_textFun() {
			echo '<h1>similar text function</h1>';
			echo similar_text("Hello World","Hello Peter");
			echo '<hr>';
		}
		public function str_shuffleFun() {
			echo '<h1>string shuffle function</h1>';
			echo str_shuffle("Hello World");
			echo '<hr>';
		}
		public function str_replaceFun() {
			echo '<h1>string replace function</h1>';
			echo str_replace("world","Peter","Hello world!");
			echo '<hr>';
		}
		public function strposFun() {
			echo '<h1>String Position function</h1>';
			echo strpos("I love php, I love php too!","php");
			echo '<hr>';
		}
		public function strstrFun() {
			echo '<h1>strstr function</h1>';
			echo strstr("Hello world!","world");
			echo '<hr>';
		}
		public function ucfirstFun() {
			echo '<h1>ucfirst function</h1>';
			echo ucfirst("hello world!");
			echo '<hr>';
		}
	}

	$ob1 = new stringfun();
	$ob1->strrevFun();
	$ob1->levenshteinFun();
	$ob1->joinFun();
	$ob1->parse_strFun();
	$ob1->similar_textFun();
	$ob1->str_shuffleFun();
	$ob1->str_replaceFun();
	$ob1->strposFun();
	$ob1->strstrFun();
	$ob1->ucfirstFun();


?>
</body>
</html>>