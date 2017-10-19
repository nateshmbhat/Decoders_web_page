<?php 

// ALL DETAILS of FORM ARE FETCHED INTO THESE VARIABLES.

	$mem1_email = $_POST['mem1_email'] ; 
	$mem1_USN = $_POST['mem1_USN']; 
	$mem1_contact = $_POST['mem1_contact'] ; 
	$mem1_name = $_POST['mem1_name'] ;

	$mem2_email = $_POST['mem2_email'] ; 
	$mem2_USN = $_POST['mem2_USN']; 
	$mem2_contact = $_POST['mem2_contact'] ; 
	$mem2_name = $_POST['mem2_name'] ;

//-->>



	//EMAIL VALIDATION

	if (!filter_var($mem1_email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Invalid Email address for Member 1</p>" ; 
    exit(0); 
}	
		if (!filter_var($mem2_email, FILTER_VALIDATE_EMAIL)) {
    echo "<p>Invalid Email address for Member 2</p>" ; 
    exit(1) ; 
}

	//-->>


 ?>
