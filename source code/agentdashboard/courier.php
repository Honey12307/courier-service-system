<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addcourierModal">Add Courier</a>
                
                </div>
                <div class="card-body">
                    <table class="table">
                    
                    <th>sender_name</th>
                    <th>receiver_name</th>
                    <th>parcel_weight</th>
                    <th>courier_type</th>
                    <th>courier_rate</th>
                    <th>branch_id</th>
                    <th>agent_id</th>
                    <th>tracking_no</th>
                    <th>status</th>
                    <th>date</th>
                    <th>Action</th>
                    <?php
                    $query = selectalldata('courier');
                    if(mysqli_num_rows($query) > 0){
                      foreach($query as $value){
                        ?>
                        <tr>
                          <td><?php echo $value['sender_name']?></td>
                          <td><?php echo $value['receiver_name']?></td>
                          <td><?php echo $value['parcel_weight']?></td>
                          <td><?php echo $value['courier_type']?></td>
                          <td><?php echo $value['courier_rate']?></td>
                          <td><?php echo $value['branch_id']?></td>
                          <td><?php echo $value['agent_id']?></td>
                          <td><?php echo $value['tracking_no']?></td>
                          <td><?php echo $value['status']?></td>
                          <td><?php echo $value['date']?></td>
                          <td>
                            <form action="../code.php" method="post">
                              <input type="hidden" name="courier_id" value="<?php echo $value['courier_id']?>">
                              <button type="submit" class="btn btn-dark" name="delete_courier">Delete</button>
                              <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $value['courier_id']?>">Update</button>
                            </form>
                          </td>
                        </tr>
                          <!--update Modal -->
                          <div class="modal fade" id="updateModal<?php echo $value['courier_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                       <form action="../code.php" method="post">
                                       
                                       <div class="modal-content">
                                       <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Update Courier</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                       <input type="hidden" name="courier_id" value="<?php echo $value['courier_id']?>">
                                       <input type="text" class="form-control mb-3" name="sender_name" value="<?php echo $value['sender_name']?>" placeholder="sender_name">
                                       <input type="text" class="form-control mb-3" name="receiver_name" value="<?php echo $value['receiver_name']?>" placeholder="receiver_name">
                                       <input type="text" class="form-control mb-3" name="parcel_weight" value="<?php echo $value['parcel_weight']?>" placeholder="parcel_weight">
                                       <input type="int" class="form-control mb-3" name="courier_type" value="<?php echo $value['courier_type']?>" placeholder="courier_type">
                                       <input type="int" class="form-control mb-3" name="courier_rate" value="<?php echo $value['courier_rate']?>" placeholder="courier_rate">
                                       <input type="text" class="form-control mb-3" name="branch_id" value="<?php echo $value['branch_id']?>" placeholder="branch_id">
                                       <input type="text" class="form-control mb-3" name="agent_id" value="<?php echo $value['agent_id']?>" placeholder="agent_id">
                                       <input type="text" class="form-control mb-3" name="status" value="<?php echo $value['status']?>" placeholder="status">
                                       
                                        </div>
                                       <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" name="updatecourier" class="btn btn-primary">Save changes</button>
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
<div class="modal fade" id="addcourierModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="../code.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
        <input type="text" class="form-control mb-3" name="sender_name" placeholder="sender_name">
        <input type="text" class="form-control mb-3" name="receiver_name" placeholder="receiver_name">
        <input type="int" class="form-control mb-3" name="parcel_weight" placeholder="parcel_weight">
        <input type="int" class="form-control mb-3" name="courier_type" placeholder="courier_type">
        <input type="text" class="form-control mb-3" name="courier_rate" placeholder="courier_rate">
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
        <select class="form-control mb-3" name="agent_id" id="">
          <option value="">Select Agent</option>
          <?php
          $query = selectalldata('agent');
          foreach($query as $value){
            ?>
            <option value="<?php echo $value['agent_id']?>"><?php echo $value['agent_name']?></option>
            <?php
          }
          
          ?>
        </select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addcourier" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>