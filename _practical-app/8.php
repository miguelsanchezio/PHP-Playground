<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


		
	<article class="main-content col-xs-8">
	
	
	<?php  

	/*  Step 1 -Make a variable with some text as value

		Step 2 - Use crypt() function to encrypt it

		Step 3 - Assign the crypt result to a variable

		Step 4 - echo the variable

    */
    
    $value = "some text";

    $hashFormat = "$2y$10$";
    $salt = "83cd913dc13cb319d1b391nd191398db193";
    $hash_and_salt = $hashFormat . $salt;
    $encrypted_val = crypt($password, $hash_and_salt);

    echo $encrypted_val;
    
	
	?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>