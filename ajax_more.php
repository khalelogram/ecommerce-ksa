<?php  

$output = '';  
$video_id = '';  
include 'adminpage/inc/db.php'
sleep(1);  
$connect = mysqli_connect("localhost", "root", "", "ecommerce_db");  

$sql = $dbconnection->query("SELECT COUNT(*) as num_rows FROM products WHERE `prod_cat` = 'tshirt' LIMIT 4");
$result = mysqli_query($connect, $sql);  
if(mysqli_num_rows($result) > 0)
include 'adminpage/inc/db.php'  
{  
     while($row = mysqli_fetch_array($result))  
     {  
          $video_id = $row[`prod_cat` === 'tshirt'];  
          $output .= '
                         <div class="col-12 container d-flex flex-wrap justify-content-around">
                              <div class="card" style="width: 18rem; ">
                               <img src="adminpage/shirts-web/'.$row['prod_img'].'"width="290" height="200" />
                               <div class="card-body">
                                 <h5 class="card-title">'.$row['prod_name'].'</h5>
                                 <p class="card-text">'.$row['prod_desc'].'</p>
                                 <p class="card-text">PHP'.$row['prod_price'].'</p>
                                 <p class="card-text">Quantity:'.$row['prod_quantity'].'</p>
                                 <a href="#" class="btn btn-primary">View Item</a>
                               </div>
                              </div>
                         </div>
               ';  
     }  
     $output .= '  
               <div><div id="remove_row">  
                    <button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-primary btn-lg form-control">Load More</button> 
               </div> 
               </div>
     ';  
     echo $output;  
}  
?>