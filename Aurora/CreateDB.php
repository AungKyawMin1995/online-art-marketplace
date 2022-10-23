<?php

    #Create Database
	
	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	
   
	$con = mysqli_connect($db_host, $db_user, $db_pass);

	if (!$con) {
		die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "CREATE DATABASE akm";
	
	if (mysqli_query($con, $sql)) {
		echo "Database created successfully";
	}
	
	else{
		echo "Error creating database: " . mysqli_error($con);
	}
	
	$db_name = "akm";
	$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
	
 # ===============================================================================
 
	$sql = "CREATE TABLE customer(
				CustID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				CustName VARCHAR(30) NOT NULL UNIQUE,
				CustEmail VARCHAR(30) NOT NULL UNIQUE,
				CustPhno VARCHAR(30),
				CustAddress VARCHAR(100),
				CustPassword VARCHAR(30) NOT NULL
			);";
	
	$result = mysqli_query($conn,$sql);
	
	
	$sql = "CREATE TABLE drawing(
				DrawingID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				DrawingPicture VARCHAR(50),
				DrawingType VARCHAR(50),
				Price VARCHAR(50)
			)";
	
	$result = mysqli_query($conn,$sql);
	
	
	$sql = "CREATE TABLE staff(
				StaffID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				StaffName VARCHAR(30) NOT NULL UNIQUE,
				StaffEmail VARCHAR(30) NOT NULL UNIQUE,
				StaffDepartment VARCHAR(30),
				StaffPassword VARCHAR(30) NOT NULL
			)";
			
	$result = mysqli_query($conn,$sql);
 
	
	$sql = "CREATE TABLE orders(
				OrderID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				OrderDate VARCHAR(30) NOT NULL,
				Month VARCHAR(15) NOT NULL,
				CustName VARCHAR(30),
				TPrice VARCHAR(50),
				Status VARCHAR(20),
				FOREIGN KEY(CustName) REFERENCES customer(CustName)	
			)";
	$result = mysqli_query($conn,$sql);
	
	
	$sql = "CREATE TABLE order_drawing(
				DetailID INT(4) NOT NULL AUTO_INCREMENT PRIMARY KEY,
				OrderID INT(4),
				DrawingID INT(4),
				Qty INT(11) NOT NULL,
				FOREIGN KEY(OrderID) REFERENCES orders(OrderID),
				FOREIGN KEY(DrawingID) REFERENCES drawing(DrawingID)
				
			)";
	$result = mysqli_query($conn,$sql);
 
 
 
 
 
 
 
 
 
 
 
 
 
	
	
	
