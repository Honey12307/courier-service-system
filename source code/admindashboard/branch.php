<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addbranchModal">Add Branch</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <th>branch_name</th>
                        <th>status</th>
                        <th>Action</th>
                        <?php
                        $query = selectalldata('branch');
                        if(mysqli_num_rows($query) > 0){
                            foreach($query as $value){
                                ?>
                                <tr>
                                <td><?php echo $value['branch_name']?></td>
                                <td><?php echo $value['status']?></td>
                                <td>
                                  <form action="../code.php" method="post">
                                    <input type="hidden" name="branch_id" value="<?php echo $value['branch_id']?>">
                                    <button type="submit" class="btn btn-dark" name="deletebranch">Delete</button>
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $value['branch_id']?>">Update</button>
                                  </form>
                                </td>
                                </tr>
                                
                                <!-- Modal -->
                               <div class="modal fade" id="updateModal<?php echo $value['branch_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog">
                                <form action="../code.php" method="post">
                               <div class="modal-content">
                               <div class="modal-header">
                               <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                               <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                               </div>
                                <div class="modal-body">
                                <input type="hidden" name="branch_id" value="<?php echo $value['branch_id']?>">
                                  <input type="text" class="form-control mb-3" name="branch_name" value="<?php echo $value['branch_name']?>">
                                  <input type="text" class="form-control mb-3" name="status" value="<?php echo $value['status']?>">
                                 </div>
                                 <div class="modal-footer">
                                 <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                 <button type="submit" class="btn btn-primary" name="update_branch">Save changes</button>
                                 </div>
                                  </div>
                                  </form>
                                  </div>
                                  </div>
                                <?php
                            }
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addbranchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="../code.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Branch</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text"  class="form-control mb-3" name="branch_name" placeholder="Enter Branch_name">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="add_branch" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>