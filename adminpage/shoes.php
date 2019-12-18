<?php 
include 'db.php';
include 'server-shoes.php';
include('inc/header.php'); 
include ('inc/functions.php');


$shoes = "SELECT * FROM `products` WHERE `prod_cat` = 'shoes'";
$result2 = mysqli_query($dbconnection, $shoes);
$valid = false;
$msg = "";

  if(isset($_GET['edit'])){
    $id = $_GET['edit'];
    $edit_state = true;
    $rec = mysqli_query($db, "SELECT * FROM products WHERE prod_id=$id");
    $record = mysqli_fetch_array($rec);
    $prodid = $record['prod_id'];
    $prodname = $record['prod_name'];
    $proddesc = $record['prod_desc'];
    $prodcat = $record['prod_cat'];
    $prodprice = $record['prod_price'];
    $prodquant = $record['prod_quantity'];
    $image = $record['prod_img'];
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
            <h4 class="card-header">Category Shoes</h4>
            <div class="card-body">
            <div class="jumbotron"> 
                    <div class="row d-flex justify-content-around">
                      <?php while ($row = mysqli_fetch_array($result2)): ?>
                      <div class="card" style="width: 18rem;">
                        <?php echo '<img src="shoes-web/'.$row['prod_img'].'"width="285" height="200" />'; ?>
                        <div class="card-body">
                                <p class="card-title">
                                <?php echo "<h5>".$row['prod_name']."</h5>";?></p>
                                <p class="card-text">Product Code: <?php echo $row['prod_id'];?></p>
                                <p class="card-text"><?php echo $row['prod_desc'];?></p>
                                <p class="card-text">PHP <?php echo $row['prod_price'];?></p>
                                <p class="card-text">Quantity:<?php echo $row['prod_quantity'];?></p>
                                <table>
                                <td><a class="btn btn-success" href="shoes.php?edit=<?php echo $row['prod_id'];?>">Edit</a></td>
                                <td><a class="btn btn-danger" href="server-shoes.php?del=<?php echo $row['prod_id'];?>">Remove</a></td>
                                </tr>
                                </table>
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
    <h4>Add/Update Product</h4></a>
        <i class="now-ui-icons arrows-1_minimal-down"></i>
    </div>
<div role="tabpanel" aria-labelledby="headingTwo">
      <div class="card-body">
        <div class="container ">  
          <div class="col-sm-10 col-lg-4 mr-auto border p-4">
                <form method="POST" action="server-shoes.php" enctype="multipart/form-data">
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
            <input type="number" class="form-control" id="exampleFormControlInput1" hidden ="hidden" placeholder="Enter Product Code" name="prodid" value="<?php echo $prodid; ?>">
          </div>

            <h4><label for="exampleFormControlInput1">Product Name</label></h4>
            <input type="text" class="form-control" name="prodname" placeholder="Enter Product Name" autocomplete="off" value="<?php echo $prodname; ?>">
          </div>
          
          <div>
            <h4><label for="exampleFormControlTextarea1">Description</label></h4>
            <textarea class="form-control" name= "proddesc" id="exampleFormControlTextarea1" rows="3" placeholder="<?php echo $proddesc; ?>"></textarea>
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Category</label></h4>
            <select name="prodcat" value="<?php echo $prodcat; ?>">
              <option value="tshirt">T-shirt</option>
              <option value="pants">Pants</option>
              <option value="hats">Hats</option>
              <option value="shoes">Shoes</option>
            </select>
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Price</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price" name="prodprice" value="<?php echo $prodprice; ?>">
          </div>

          <div>
            <h4><label for="exampleFormControlInput1">Quantity</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Quantity" name="prodquant" value="<?php echo $prodquant;?>"><br>
          </div>
          <?php if($edit_state == false): ?>
        <button type="submit" name="save" class="btn btn-primary"> Add Product </button>
        <?php else: ?>
        <button type="submit" name="update" class="btn btn-primary"> Edit Product </button>
        <button type="cancel" name="cancel" class="btn btn-primary"> Cancel </button>
        <?php endif ?>
      </form>
      </div>
    </div>
</div>
       


    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
  
  
</div><!-- container -->

<?php include ('inc/footer.php'); ?>
