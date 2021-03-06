<!-- Description -->
<div class="modal fade" id="description">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
                <p id="desc"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Product</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_add.php" enctype="multipart/form-data">
                <div class="form-group">
                  <label for="name" class="col-sm-1 control-label">Name</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="name" name="name" required>
                  </div>

                  <label for="category" class="col-sm-1 control-label">Category</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="category" name="category" required>
                      <option value="" selected>- Select -</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Sub A</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="subcategorya" name="subcategorya">
                      <option value="" selected>- Select -</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM sub_category");
                        $stmt->execute();

                        foreach($stmt as $crow){ 
                          echo "
                            <option value='".$crow['id']."'>".$crow['sub_categoryname']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                  </div>

                  <label for="photo" class="col-sm-1 control-label">Sub B</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="subcategoryb" name="subcategoryb">
                      <option value="" selected>- Select -</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM sub_category");
                        $stmt->execute();

                        foreach($stmt as $crow){ 
                          echo "
                            <option value='".$crow['id']."'>".$crow['sub_categoryname']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                  </div>
                </div>
                  <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Sub C</label>

                  <div class="col-sm-5">
                    <select class="form-control" id="subcategoryc" name="subcategoryc">
                      <option value="" selected>- Select -</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM sub_category");
                        $stmt->execute();

                        foreach($stmt as $crow){ 
                          echo "
                            <option value='".$crow['id']."'>".$crow['sub_categoryname']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                  </div>

                  <label for="photo" class="col-sm-1 control-label">Photo</label>

                  <div class="col-sm-5">
                     <input type="file" id="photo" name="photo">
                  </div>
                </div>
                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Price</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="price" name="price" required>
                  </div>

                  <label for="price" class="col-sm-1 control-label">Compare</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="compareprice" name="compareprice" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Shipping</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="shipping" name="shipping" required>
                  </div>

                  <label for="price" class="col-sm-1 control-label">Seller</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="seller" name="seller" required>
                  </div>
                </div>

                <div class="form-group">
                  <label for="price" class="col-sm-1 control-label">Minimum Order</label>

                  <div class="col-sm-5">
                    <input type="text" class="form-control" id="minimumorder" name="minimumorder" required>
                  </div>
                </div>

                <p><b>Description</b></p>
                <div class="form-group">
                  <div class="col-sm-12">
                    <textarea id="editor1" name="description" rows="10" cols="80" required></textarea>
                  </div>
                  
                </div>
            </div>
            <!-- <input type="hidden" name="subcategoryaid" value="">
            <input type="hidden" name="subcategorybid" value=""> -->
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Update Photo -->
<div class="modal fade" id="edit_photo">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b><span class="name"></span></b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="products_photo.php" enctype="multipart/form-data">
                <input type="hidden" class="prodid" name="id">
                <div class="form-group">
                    <label for="photo" class="col-sm-3 control-label">Photo</label>

                    <div class="col-sm-9">
                      <input type="file" id="photo" name="photo" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="upload"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>