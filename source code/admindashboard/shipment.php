

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="header_inputs">


                <div class="card-title col-6">
                <a type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addshipmentModal">Add Shipment</a>
                </div>

                

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
                    
                    <th>shipment_id</th>
                    <th>courier_id</th>
                    <th>status</th>
                    <th>Action</th>
                    

                    <?php
                    $query = mysqli_query(connection(), "SELECT `courier`.*, `shipment`.* FROM `courier` INNER JOIN `shipment` ON `shipment`.`courier_id` = `courier`.`courier_id`");
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
                                
                                <td><?php echo $value['shipment_id']?></td>
                                <td><?php echo $value['courier_id']?></td>
                                <td><?php echo $value['status']?></td>
                                <td>
                                    <form action="../code.php" method="post">
                                        <input type="hidden" name="shipment_id" value="<?php echo $value['shipment_id']?>">
                                        <button type="submit" name="deleteshipment" class="btn btn-dark">Delete</button>
                                        <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $value['shipment_id']?>">Update</button>
                                    </form>
                                </td>
                            </tr>
                            <!-- update Modal -->
                             <div class="modal fade" id="updateModal<?php echo $value['shipment_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                             <div class="modal-dialog">
                                <form action="../code.php" method="post">
                             <div class="modal-content">
                             <div class="modal-header">
                             <h5 class="modal-title" id="exampleModalLabel">Update Modal</h5>
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                             </div>
                             <div class="modal-body">
                                   <input type="hidden" name="shipment_id" value="<?php echo $value['shipment_id']?>">
                                   <input type="text" class="form-control" name="status" value="<?php echo $value['status']?>">
                             </div>
                             <div class="modal-footer">
                             <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                             <button type="submit" name="updateshipment" class="btn btn-primary">Save changes</button>
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
<div class="modal fade" id="addshipmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="../code.php" method="post">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Shipment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <select class="form-control" name="courier_id" id="">
            <option value="">Select Courier</option>
            <?php
            $query = selectalldata('courier');
            foreach($query as $value){
                ?>
                <option value="<?php echo $value['courier_id']?>"><?php echo $value['sender_name']?></option>
                <?php
            }
            ?>
        </select>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="addshipment" class="btn btn-primary">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>