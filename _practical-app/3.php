<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

if(1 > 2) {
    echo "PHPs";
} else if(1 < 2) {
    echo "I love PHP <br>";
}

for($i = 1; $i <= 10; $i++) {
    echo $i . "<br>";
}

$word = "lol";

switch($word) {
    case word:
    echo "Ayy";
    break;
    case word1:
    echo "Ayy";
    break;
    case word2:
    echo "Ayy";
    break;
    case word3:
    echo "Ayy";
    break;
    case word4:
    echo "Ayy";
    break;
    default:
    echo "Ayy lmao";
    break;
}
	
?>





</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php"; ?>