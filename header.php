<header style=" width:96%; padding: 2%; background-color:white; display:flex; 
    justify-content: space-evenly;">
   
   
      <?php 
     
$conn= mysqli_connect("localhost","root","","task");
   $s=mysqli_query($conn,"select * from categories");
   while ($r=mysqli_fetch_array($s))
     {
    ?> 	
    <div style="width: 96%; padding: 2%; background-color: aqua; display:flex; justify-content: space-evenly;">
    <a href="pro.php?cat=<?php echo $r['name']; ?>" style="text-decoration: none; background-color:black; font-size: 20px;">  
    <div>
      <img src="<?php echo "admin/image/".$r['image']; ?>" width=200px height=150px><br>
   	 <?php echo $r['name']; ?>
       </div>
       </a>
       </div>
       <?php
    }

?>

</div>
</header>