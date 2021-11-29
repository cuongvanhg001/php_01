<?php
	$name = $_POST['name'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$birthday = $_POST['birthday'];
	$address = $_POST['address'];
	$hobby = $_POST['hobby'];

	echo "Bạn tên là: $name <br>";
	echo "Giới tính của bạn là: $gender <br>";
	echo "Email của bạn là: $email <br>";
	echo "Mật khẩu của bạn là: $password <br>";
	echo "Địa chỉ của bạn là: $address <br>";
	echo "Sở thích của bạn là: $hobby <br>";