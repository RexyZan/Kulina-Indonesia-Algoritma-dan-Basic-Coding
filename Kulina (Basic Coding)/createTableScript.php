<?php
	include "koneksion.php";
	$query = "CREATE TABLE `kulina`.`user_review` ( `id` INT(10) AUTO_INCREMENT , `order_id` INT(10) NOT NULL , `product_id` INT(10) NOT NULL , `user_id` INT(10) NOT NULL , `rating` FLOAT(10) NOT NULL , `review` VARCHAR(1000) NOT NULL , `created_at` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP , `updated_at` DATETIME on update CURRENT_TIMESTAMP NOT NULL, PRIMARY KEY (id) ) ENGINE = InnoDB;";
	$res = mysqli_query($con,$query);
	$queryInsert = "";
	$resInsert = mysqli_query($con, $queryInsert);
	/*$query1 = "DROP TABLE user_review";
	$res = mysqli_query($con, $query1);*/
 ?>