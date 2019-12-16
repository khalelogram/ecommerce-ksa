<?php 

include('inc/header.php'); 
include 'db.php';
include ('inc/functions.php');

$tshirt = "SELECT * FROM `products` WHERE `prod_cat` = 'tshirt'";
$result2 = mysqli_query($dbconnection, $tshirt);
$valid = false;
$msg = "";

if(isset($_POST['submit'])){
  $msg = createProduct();
  if(strlen($msg) > 0){
    $valid = true;
  }else{
    $valid = false;
}
if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $rec = mysqli_query($db, "SELECT * FROM products WHERE prod_id=$id");
    $record = mysqli_fetch_array($rec);
    $id = $record['prod_id'];
  }
}
?>

<div class="container-fluid p-0">
<!-- Bootstrap row -->
<div class="row" id="body-row">
   
<?php include('inc/sidebar.php'); ?>
    <!-- MAIN -->
    <div class="col">
        
        <h1>
            Welcome to ADMIN Dashboard
            <small class="text-muted">Version 2.1</small>
        </h1>
        
        
        <div class="card">
            <h4 class="card-header">Category T-Shirts</h4>
            <div class="card-body">
            <div class="jumbotron"> 
                    <div class="row d-flex justify-content-around">
                      <?php while ($row = mysqli_fetch_array($result2)): ?>
                      <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="<?php echo $row['prod_img'];?>" alt="Card image cap">
                        <div class="card-body">
                                <p class="card-title">
                                <?php echo "<h5>".$row['prod_name']."</h5>";?></p>
                                <p class="card-text">Product Code: <?php echo $row['prod_id'];?></p>
                                <p class="card-text"><?php echo $row['prod_desc'];?></p>
                                <p class="card-text">PHP <?php echo $row['prod_price'];?></p>
                                <p class="card-text">Quantity:<?php echo $row['prod_quantity'];?></p>
                                <div class="row d-flex justify-content-between"><a class="btn btn-primary" href="#collapseTwo?edit=<?php echo $row['prod_id'];?>">Edit Product</a>
                                <a class="btn btn-primary" href="delete.php?del=<?php echo $row['prod_id'];?>">Remove Product</a></div>

                        </div>
                      </div>
                      <?php endwhile; ?>
                  <div class = "card">
              </div>
            </div>  
        </div>
      </div>
    </div>
  <div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingTwo">
    <h4><a class="collapsed btn btn-primary"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Add Product</h4></a>
        <?php 
        $typeOfError = "success";
         if($msg == "Failed to Add Product") {
         $typeOfError = "danger";
        }

    if($valid) echo "<div class='alert alert-$typeOfError'>$msg</div>";
    ?>
        <i class="now-ui-icons arrows-1_minimal-down"></i>
    </div>
<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-body">
        <div class="container ">  
          <div class="col-sm-10 col-lg-4 mr-auto border p-4">
              <form method="post" enctype="multipart/form-data">
                <div>
                  <label><strong>Upload Files</strong></label>
                  <div class="custom-file">
                    <input type="file" name="image" multiple class="custom-file-input" id="customFile" value="">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
              
        </div>
          <div>
            <div>
            <h4><label for="exampleFormControlInput1">Product Code</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" hidden ="hidden" placeholder="Enter Product Code" name="prodid">
          </div>

            <h4><label for="exampleFormControlInput1">Product Name</label></h4>
            <input type="text" class="form-control" name= "prodname" id="exampleFormControlInput1" placeholder="Product Name">
          </div>
          
          <div>
            <h4><label for="exampleFormControlTextarea1">Description</label></h4>
            <textarea class="form-control" name= "proddesc" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Item Description"></textarea>
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Category</label></h4>
            <select name="prodcat">
              <option value="tshirt">T-shirt</option>
              <option value="pants">Pants</option>
              <option value="hats">Hats</option>
              <option value="shoes">Shoes</option>
              </select>
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Price</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="prodprice">
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Quantity</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Quantity" name="prodquant"><br>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Add Product</button>
      </form>
      </div>
    </div>
</div>
       


    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
  
  
</div><!-- container -->

<?php include ('inc/footer.php'); ?>
