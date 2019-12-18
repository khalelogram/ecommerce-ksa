<?php  
$output = '';  
$video_id = '';  
sleep(1);  
$connect = mysqli_connect("localhost", "root", "", "ecommerce_db");  
$sql = "SELECT * FROM `products` WHERE `prod_cat` = 'tshirt' LIMIT 4";  
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0)  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $video_id = $row["prod_id"];  
          $output .= '
               <div class="card">
                              <div class="card" style="width: 18rem; ">
                               <?php echo '<img src="adminpage/shirts-web/'.$row['prod_img'].'"width="290" height="200" />'; ?>
                               <div class="card-body">
                                 <p class="card-title"><?php echo "<h5>".$row['prod_name']."</h5>";?></p>
                                 <p class="card-text"><?php echo $row['prod_desc'];?></p>
                                 <p class="card-text">PHP <?php echo $row['prod_price'];?></p>
                                 <p class="card-text">Quantity:<?php echo $row['prod_quantity'];?></p>
                                 <a href="#" class="btn btn-primary">View Item</a>
                               </div>
                              </div>
                
               ';  
     }  
     $output .= '  
               <div><div id="remove_row">  
                    <button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-success form-control">Load More</button> 
               </div> 
               </div>
     ';  
     echo $output;  
}  
?>