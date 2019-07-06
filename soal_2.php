<?php

# Untuk Validasi Email

function valid_email($str) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if(!valid_email("test@example.com")){
	echo "Invalid email address.";
}else{
	echo "Valid email address.";
}

# Untuk Validasi Phone Number

function valid_phone($str) {
	return (!preg_match('/^\(?[0-9]{2}\)?|[0-9]{3}[-. ]? [0-9]{3}[-. ]?[0-9]{4}$/', $str)) ? FALSE : TRUE;
}

if(!valid_phone("(62) 008890")){
	echo "Incorrect Phone Number.";
}else{
	echo "Correct Phone Number.";
}

# Untuk Validasi Username

function valid_usname($username) {
	return (!preg_match('/^[^0-9][a-z\d_]{5,20}$/i', $username));
}

if(!valid_usname("Rahmad123")){
	echo "Correct Username.";
}else{
	echo "Incorrect Username.";
}

# Untuk Validasi Password

function valid_pass($pass) {
	return (!preg_match('/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/', $pass));
}

if(!valid_pass("SuperBag22@")){
	echo "Correct Password.";
}else{
	echo "Incorrect Password.";
}

?>