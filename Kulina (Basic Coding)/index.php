<?php 
	include "koneksion.php";
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<p>Insert Data</p>
 	<table>
 		<form action="index.php" method="POST">
                <tr>
                    <td>
                        <div class="div-label">
                            <label for="input_almt">Order Id</label><br>
                            <label for="input_kota">Product Id</label><br>
                            <label for="input_kpos">User Id</label><br>
                            <label for="input_no">Rating</label><br>
                            <label for="input_prov">Review</label><br>
                        </div>
                    </td>
                    <td>
                        <div class="div-input" id="div-2">
                        <div class="input-an">:<input class="input" name="Order" type="text" ></div>
                        <div class="input-an">:<input class="input" name="Product" type="text"></div>
                        <div class="input-an">:<input class="input" name="User" type="text"></div>
                        <div class="input-an">:<input class="input" name="Rating" type="text"></div>
                        <div class="input-an">:<input class="input" name="Review" type="text"></div>
                        <button type="submit" id="insert" name="insert">Insert Data</button>
                        </div>
                    </td>
		</form>
 	</table>
 	<br>
 	<p>Read Data</p>
 	<table border="1">
 		<?php
                $query="SELECT * FROM user_review";
                $hasil=mysqli_query($con,$query);
                echo "<tr class='judul'>
                			<td>Id</td>
                            <td>Order_Id</td>
                            <td>Product_Id</td>
                            <td>User_Id</td>
                            <td>Rating</td>
                            <td>Review</td>
                            <td>created_at</td>
                            <td>updated_at</td>
                        </tr>";
                while($data=mysqli_fetch_assoc($hasil)){
                	echo"<tr>";
                	echo "<td>".$data['id']."</td>";
                	echo "<td>".$data['order_id']."</td>";
                	echo "<td>".$data['product_id']."</td>";
                	echo "<td>".$data['user_id']."</td>";
                	echo "<td>".$data['rating']."</td>";
                	echo "<td>".$data['review']."</td>";
                	echo "<td>".$data['created_at']."</td>";
                	echo "<td>".$data['updated_at']."</td>";
                	echo "</tr>";
                }
                
	        ?>
 	</table>
 	<br>
 	<p>Update Data</p>
 	<table>
 		<form action="index.php" method="POST">
                <tr>
                    <td>
                        <div>
                        	<label for="input_almt">Id</label><br>
                            <label for="input_almt">Order Id</label><br>
                            <label for="input_kota">Product Id</label><br>
                            <label for="input_kpos">User Id</label><br>
                            <label for="input_no">Rating</label><br>
                            <label for="input_prov">Review</label><br>
                        </div>
                    </td>
                    <td>
                        <div>
                        	<div class="input-an">:<input class="input" name="Id" type="text" ></div>
                        <div class="input-an">:<input class="input" name="Order" type="text" ></div>
                        <div class="input-an">:<input class="input" name="Product" type="text"></div>
                        <div class="input-an">:<input class="input" name="User" type="text"></div>
                        <div class="input-an">:<input class="input" name="Rating" type="text"></div>
                        <div class="input-an">:<input class="input" name="Review" type="text"></div>
                        <button type="submit" id="update" name="update">Update Data</button>
                        </div>
                    </td>
		</form>
 	</table>
 	<br>
 	<p>Delete Data</p>
 	<table>
 		<form action="index.php" method="POST">
                <tr>
                    <td>
                        <div>
                        	<label for="input_almt">Id</label><br>
                        </div>
                    </td>
                    <td>
                        <div>
                        	<div class="input-an">:<input class="input" name="Id" type="text" ></div>
                        <button type="submit" id="delete" name="delete">Delete Data</button>
                        </div>
                    </td>
		</form>
 	</table>
 </body>
 </html>
 <?php
	if(isset($_POST['insert'])){
                $Order        = $_POST['Order'];
                $Product          = $_POST['Product'];
                $User      = $_POST['User'];
                $Rating  = $_POST['Rating'];
                if($Rating > 5){
                	$Rating = 5;
                }
                else if($Rating < 1){
                	$Rating = 1;
                }
                $Review      = $_POST['Review'];
		$query = "INSERT INTO user_review (id,order_id, product_id, user_id, rating, review, created_at, updated_at) VALUES (NULL, '$Order', '$Product', '$User', '$Rating', '$Review', CURRENT_TIMESTAMP, '0000-00-00 00:00:00.000000')";                
		$res = mysqli_query($con,$query);

	}
?>
 <?php
	if(isset($_POST['update'])){
				$Id = $_POST['Id'];
                $Order        = $_POST['Order'];
                $Product          = $_POST['Product'];
                $User      = $_POST['User'];
                $Rating  = $_POST['Rating'];
                if($Rating > 5){
                	$Rating = 5;
                }
                else if($Rating < 1){
                	$Rating = 1;
                }
                $Review      = $_POST['Review'];
		$query3  = "Update user_review set order_id ='$Order', product_id = '$Product' ,user_id ='$User', rating='$Rating',review ='$Review' where id ='$Id'";    
		$res3 = mysqli_query($con,$query3);

	}
?>
<?php
	if(isset($_POST['delete'])){
				$Id = $_POST['Id'];
		$query4  = "DELETE FROM user_review WHERE id = '$Id'";    
		$res4 = mysqli_query($con,$query4);

	}
?>