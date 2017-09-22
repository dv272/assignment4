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
			echo levenshtein("Information System","nformation System");
			echo "<br>";
			echo levenshtein("Information System","nformation System",10,20,30);
			echo '<hr>';
		}
		public function joinFun() {
			echo '<h1>join function</h1>';
			$arr = array('Information','System','My','Major');
			echo join(" ",$arr);
			echo '<hr>';
		}
		public function parse_strFun() {
			echo '<h1>parse_string function</h1>';
			parse_str("name=Dwija&age=24");
			echo $name."<br>";
			echo $age;
			echo '<hr>';
		}
		public function similar_textFun() {
			echo '<h1>similar text function</h1>';
			echo similar_text("Information System","Computer System");
			echo '<hr>';
		}
		public function str_shuffleFun() {
			echo '<h1>string shuffle function</h1>';
			echo str_shuffle("Information System");
			echo '<hr>';
		}
		public function str_replaceFun() {
			echo '<h1>string replace function</h1>';
			echo str_replace("Information","Computer","Information System!");
			echo '<hr>';
		}
		public function strposFun() {
			echo '<h1>String Position function</h1>';
			echo strpos("I love WebSsytem, I love WebSystem,too!","WebSystem");
			echo '<hr>';
		}
		public function strstrFun() {
			echo '<h1>strstr function</h1>';
			echo strstr("Information System","System");
			echo '<hr>';
		}
		public function ucfirstFun() {
			echo '<h1>ucfirst function</h1>';
			echo ucfirst("Information System");
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


		echo '<br><br><br><br><br><br><br><br><br>';

		class ArrayFunction{
			
			public function_construct() {
				echo 'array object is created.'

			}

			public function_destruct() {
				echo 'array object is destroyed.'
			}

			public function array_intersectFun() {
				echo '<h1>Array intersect function</h1>';
				$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
				$a2=array("e"=>"red","f"=>"green","g"=>"blue");

				$result=array_intersect($a1,$a2);
				print_r($result);
				echo'<hr>';

			}

			public function array_mapFun() {
				echo '<h1>Array map function</h1>';
				
			function myfunction($v)
			{
			  return($v*$v);
			}

			$a=array(1,2,3,4,5);
			print_r(array_map("myfunction",$a));
				echo'<hr>';
				
			}

			public function array_sumFun() {
				echo '<h1>Array sum function</h1>';
				$a=array(89,55,75);
				echo array_sum($a);
				echo'<hr>';
				
			}

			public function array_valuesFun() {
				echo '<h1>Array values function</h1>';
				$a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
				print_r(array_values($a));
				echo'<hr>';
				
			}

			public function array_uniqueFun() {
				echo '<h1>Array unique function</h1>';
				$a=array("a"=>"red","b"=>"green","c"=>"red");
				print_r(array_unique($a));
				echo'<hr>';
				
			}

			public function array_asortFun() {
				echo '<h1>Array asort function</h1>';
				$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
				asort($age);
				echo'<hr>';
				
			}

			public function array_listFun() {
				echo '<h1>Array list function</h1>';
				$my_array = array("Dog","Cat","Horse");

				list($a, $b, $c) = $my_array;
				echo "I have several animals, a $a, a $b and a $c.";
				echo'<hr>';
				
			}

			public function array_extractFun() {
				echo '<h1>Array extract function</h1>';
				$a = "Original";
				$my_array = array("a" => "Cat","b" => "Dog", "c" => "Horse");
				extract($my_array);
				echo "\$a = $a; \$b = $b; \$c = $c";
				echo'<hr>';
				
			}

			public function array_nextFun() {
				echo '<h1>Array next function</h1>';
				$people = array("Peter", "Joe", "Glenn", "Cleveland");

				echo current($people) . "<br>";
				echo next($people);
				echo'<hr>';
				
			}

			public function array_rsortFun() {
				echo '<h1>Array rsort function</h1>';
				$cars=array("Volvo","BMW","Toyota");
				rsort($cars);
				echo'<hr>';
				
			}


		}

		$obj2 = new ArrayFunction();
		$obj2->array_intersectFun();
		$obj2->array_mapFun();
		$obj2->array_sumFun();
		$obj2->array_valuesFun();
		$obj2->array_uniqueFun();
		$obj2->array_asortFun();
		$obj2->array_listFun();
		$obj2->array_extractFun();
		$obj2->array_nextFun();
		$obj2->array_rsortFun();



?>
</body>
</html>>