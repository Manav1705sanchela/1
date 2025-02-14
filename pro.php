<style>
   .botn{
    
    padding: 20px;
    border-radius: 20px;
    width: 370px;
    margin: 10px;
    background-color: #01070c;
    text-align: center;
    border-color: green;
    color: white;
    font-size: 30px;
}
.btn:hover{
    color: aqua;
    background-color: white;
}
</style>


<?php

 $cat=$_GET['cat'];

include "header.php";



$conn= mysqli_connect("localhost","root","","task");
 ?>
 <div style="display: flex; flex-wrap: wrap; justify-content: space-evenly; background-color: black; color: white; 
 margin-top: 7px; margin-bottom: 5px;">
 
 
 <?php
 

    $s = mysqli_query($conn,"select * from product where category='$cat'");
	while ($r=mysqli_fetch_array($s))
     {
    ?> 	<div style="margin: 5px; padding: 7px; border: solid 2px white; font-size: 20px" >
   
         <td>
        <img src="<?php echo $r['img']; ?>" width=200px height=150px></td><br>
    	<td>Company :- <?php echo  $r['name']; ?></td><br>
    	<td>Category :- <?php echo $cat=$r['category']; ?></td><br>
    	<td>No :- <?php echo $r['no']; ?></td><br>
    	<td>Discription :- <?php echo $r['discription']; ?></td><br>
     <br> 
     <button  class="botn" name="sub">Buy Now</button>
    
    	 </div></form>
       <?php
    }

?></div>
