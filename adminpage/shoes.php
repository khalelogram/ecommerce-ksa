<?php include('inc/header.php'); ?>


<div class="container-fluid p-0">
<!-- Bootstrap row -->
<div class="row" id="body-row">
   
<?php include('inc/sidebar.php'); ?>
    <!-- MAIN -->
    <div class="col">
        
        <h1>
            COMPANY NAME
            <small class="text-muted">Version 2.1</small>
        </h1>
        
        
        <div class="card">
            <h4 class="card-header">SHOES</h4>
            <div class="card-body">
                  <div class="jumbotron">
                    <div class="row d-flex justify-content-around">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">SHOES 1</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-info btn-sm">Edit Product</a>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                        </div>
                      </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">SHOES 2</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-info btn-sm">Edit Product</a>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                        </div>
                      </div>
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="..." alt="Card image cap">
                        <div class="card-body">
                          <h5 class="card-title">SHOES 3</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-outline-info btn-sm">Edit Product</a>
                          <button type="button" class="btn btn-sm btn-outline-danger">Delete</button>
                        </div>
                      </div>
              </div>
            </div>  
        </div>
      </div>
     <h1></h1>


<div id="accordion" role="tablist" aria-multiselectable="true" class="card-collapse">
  <div class="card card-plain">
    <div class="card-header" role="tab" id="headingTwo">
    <a class="collapsed btn btn-primary"  data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Add Item Shoes<i class="now-ui-icons arrows-1_minimal-down"></i></a>

        
    </div>
      <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo">
        <div class="card-body">
          <div class="container ">  
            
          <div class="col-sm-10 col-lg-4 mr-auto border p-4">
                <form method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label><strong>Upload Files</strong></label>
                    <div class="custom-file">
                      <input type="file" name="files[]" multiple class="custom-file-input" id="customFile">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                  </div>
                  <div class="form-group">
                    <button type="button" name="upload" value="upload" id="upload" class="btn btn-block btn-dark"><i class="fa fa-fw fa-upload"></i> Upload</button>
                  </div>
                </form>
          </div>

        <form>
          <div class="form-group">
            <h4><label for="exampleFormControlInput1">Title</label></h4>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Title of Product">
          </div>
          
          <div class="form-group">
            <h4><label for="exampleFormControlTextarea1">Description of Product</label></h4>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Item Description"></textarea>
          </div>

          <div class="form-group">
            <h4><label for="exampleFormControlInput1">Price</label></h4>
            <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Enter Price">
          </div>

        <div class="form-check">
        <label class="form-check-label">
            <input class="form-check-input" type="checkbox">
            <span class="form-check-sign"></span>
              Confirm Add Item
        </label>
        </div>

          <button type="submit" class="btn btn-primary">Add Product</button>
        </form>

     </div>
    </div>
</div>
       


    </div><!-- Main Col END -->
    
</div><!-- body-row END -->
  
  
</div><!-- container -->

<?php include ('inc/footer.php'); ?>
