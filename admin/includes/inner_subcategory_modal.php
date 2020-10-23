<!-- Add -->
<div class="modal fade" id="addnew">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Add New Inner Sub Category</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="inner_subcategory_add.php">
                <div class = "form-group">
                  <label for="name" class="col-sm-3 control-label">Inner Sub Category</label>
                  <div class="col-sm-9">
                      <select class="form-control" id="innercategoryid" name="innercategoryid">
                      <option value="" selected>- Select -</option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM inner_category");
                        $stmt->execute();

                        foreach($stmt as $crow){ 
                          echo "
                            <option value='".$crow['id']."'>".$crow['inner_name']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="name" name="name" required>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-primary btn-flat" name="add"><i class="fa fa-save"></i> Save</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Edit -->
<div class="modal fade" id="edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Edit Inner SubCategory</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="inner_subcategory_edit.php">
                <input type="hidden" class="catid" name="id">
                <div class = "form-group">
                  <label for="name" class="col-sm-3 control-label">Inner Category</label>
                  <div class="col-sm-9">
                      <select class="form-control" id="editinnercategoryid" name="editinnercategoryid">
                      <option selected id="catselected"></option>
                      <?php
                        $conn = $pdo->open();

                        $stmt = $conn->prepare("SELECT * FROM inner_category");
                        $stmt->execute();

                        foreach($stmt as $crow){ 
                          echo "
                            <option value='".$crow['id']."'>".$crow['inner_name']."</option>
                          ";
                        }

                        $pdo->close();
                      ?>
                    </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="edit_name" class="col-sm-3 control-label">Name</label>

                    <div class="col-sm-9">
                      <input type="text" class="form-control" id="edit_name" name="name">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-success btn-flat" name="edit"><i class="fa fa-check-square-o"></i> Update</button>
              </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title"><b>Deleting...</b></h4>
            </div>
            <div class="modal-body">
              <form class="form-horizontal" method="POST" action="inner_subcategory_delete.php">
                <input type="hidden" class="catid" name="id">
                <div class="text-center">
                    <p>Delete Inner SubCategory</p>
                    <h2 class="bold catname"></h2>
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> Close</button>
              <button type="submit" class="btn btn-danger btn-flat" name="delete"><i class="fa fa-trash"></i> Delete</button>
              </form>
            </div>
        </div>
    </div>
</div>
