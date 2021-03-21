<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> Text Designer - Decorator</h1>
<form>
	<form action='<?php echo $_SERVER ['PHP_SELF'] ?>'>

	Enter You <b>SYMBOLS</b> Here <input type="text" name="text" value='<?php echo @$_GET["text"];?>'/> <br/><br/>

	Enter Text HERE <input type='number' name='limit' value='<?php echo @$_GET["limit"];?>' /> <br/><br/>
    
	<input type='submit' name="text_designer" value='Text Designer' /> 
    <!-- <input type='submit' name="lower_case" value='lower case' /><br/><br/> -->
    <!-- <input type='submit' name="uc_words"   value='uppercase words' /> -->
    <!-- <input type='submit' name="uc_first" value='uc firsst' /><br/> -->

	</form>
<hr >

<?php 

        $initialValue = isset($_GET['text']) ? $_GET['text'] : 0;
        $finalValue = isset($_GET['limit']) ? $_GET['limit'] : 0;

        echo "<h4> Your Text = $initialValue </h1>"; 
        // echo "<h4>Converted Value $finalValue</h1>";

        // averagefinder($initialValue, $finalValue);

            // upperCase($initialValue);
            if(isset($_GET['text_designer'])){
                // increaseFunc();
                // increaseFunc();
                // increaseFunc();
                textDesigner($initialValue,$finalValue);
            }
        
        // echo $marks==0 ? "Fill Form First" : round(averagefinder($marks, $obtainedMarks),2); 
        // averagefinder($initialValue, $finalValue);

        function textDesigner($x,$y){
            // $result = strtoupper($x);
            $result = str_repeat($x, $y);
            echo "<h1>";
            //echo "AVERAGE : "; 
            echo "$result";
            echo " ";
            echo "</h1>";
        }

//==============================================
        // if(isset($_GET['lower_case'])){
        //     // increaseFunc();
        //     // increaseFunc();
        //     // increaseFunc();
        //     lowerCase($initialValue);
        // }
        // function lowerCase($x){
        //     $result = strtolower($x);
        //     echo "<h1>";
        //     //echo "AVERAGE : "; 
        //     echo "$result";
        //     echo "</h1>";
        // }
		
//=======================================
// if(isset($_GET['uc_words'])){
//     uc_words($initialValue);
// }
// function uc_words($x){
//     $result = ucwords($x);
//     echo "<h1>$result</h1>";
// }

//=====================================
// if(isset($_GET['uc_first'])){
//     uc_first($initialValue);
// }
// function uc_first($x){
//     $result = ucfirst($x);
//     echo "<h1>$result</h1>";
// }

        // echo ucwords($text);
        // echo ucfirst($text);


	 	?>
</body>
</html>