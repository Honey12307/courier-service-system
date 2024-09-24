<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">
                <a type="button" class="btn btn-primary " data-bs-toggle="modal" data-bs-target="#addagentModal">Add Agent</a>
                </div>
                <div class="card-body">
                    <table class="table">
                     <th>agent_name	</th>
                     <th>agent_email	</th>
                     <th>agent_password	</th>
                     <th>agent_phone_number	</th>
                     <th>agent_CNIC	</th>
                     <th>agent_address	</th>
                     <th>branch_id</th>
                     <th>agent_joining_date</th>
                     <th>Action</th>
                     
                     <?php
                     $query = selectalldata('agent');

                     if(mysqli_num_rows($query) > 0){
                      foreach($query as $value){
                        ?>
                        <tr>
                          <td><?php echo $value['agent_name']?></td>
                          <td><?php echo $value['agent_email']?></td>
                          <td><?php echo $value['agent_password']?></td>
                          <td><?php echo $value['agent_phone_number']?></td>
                          <td><?php echo $value['agent_CNIC']?></td>
                          <td><?php echo $value['agent_address']?></td>
                          <td><?php echo $value['branch_id']?></td>
                          <td><?php echo $value['agent_joining_date']?></td>
                         <td>
                          <form action="../code.php" method="post">
                            <input type="hidden" name="agent_id" value="<?php echo $value['agent_id']?>">
                            <button type="submit"  class="btn btn-dark" name="delete_id">Delete</button>
                            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $value['agent_id']?>">Update</button>
                          </form>
                         </td>
                        </tr>
                        
<!--update Modal -->
<div class="modal fade" id="updateModal<?php echo $value['agent_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="../code.php" method="post">
      <input type="hidden" name="agent_id" value="<?php echo $value['agent_id']?>">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Agent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <input type="text" class="form-control mb-3" name="agent_name" value="<?php echo $value['agent_name']?>" placeholder="agent_name">
        <input type="text" class="form-control mb-3" name="agent_email" value="<?php echo $value['agent_email']?>" placeholder="agent_email">
        <input type="text" class="form-control mb-3" name="agent_password" value="<?php echo $value['agent_password']?>" placeholder="agent_password">
        <input type="int" class="form-control mb-3" name="agent_phone_number" value="<?php echo $value['agent_phone_number']?>" placeholder="agent_phone number">
        <input type="int" class="form-control mb-3" name="agent_CNIC" value="<?php echo $value['agent_CNIC']?>" placeholder="agent_CNIC">
        <input type="text" class="form-control mb-3" name="agent_address" value="<?php echo $value['agent_address']?>" placeholder="agent_address">
        
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="updateagent" class="btn btn-primary">Save changes</button>
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
<div class="modal fade" id="addagentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="../code.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Agent</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="text" class="form-control mb-3" name="agent_name" placeholder="agent_name">
        <input type="text" class="form-control mb-3" name="agent_email" placeholder="agent_email">
        <input type="text" class="form-control mb-3" name="agent_password" placeholder="agent_password">
        <input type="int" class="form-control mb-3" name="agent_phone_number" placeholder="agent_phone number">
        <input type="int" class="form-control mb-3" name="agent_CNIC" placeholder="agent_CNIC">
        <input type="text" class="form-control mb-3" name="agent_address" placeholder="agent_address">
        <select class="form-control mb-3" name="branch_id" id="">
          <option value="">Select Branch</option>
          <?php
          $query = selectalldata('branch');
          foreach($query as $value){
            ?>
            <option value="<?php echo $value['branch_id']?>"><?php echo $value['branch_name']?></option>
            <?php
          }
          ?>
        </select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addagent" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>

