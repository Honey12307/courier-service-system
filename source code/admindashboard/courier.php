


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">New Courier </h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">sender_name</th>
                                            <th scope="col">receiver_name</th>
                                            <th scope="col">parcel_weight</th>
                                            <th scope="col">courier_type</th>
                                            <th scope="col">courier_rate</th>
                                            <th scope="col">branch_id</th>
                                            <th scope="col">agent_id</th>
                                            <th scope="col">tracking_no</th>
                                            <th>status</th>
                                            <th scope="col">date</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       <?php
                                       $query = selectalldata('courier');
                                       if(mysqli_num_rows($query)){
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
                                                    <button type="submit" class="btn btn-dark" name="deletecourier">Delete</button>
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
                                       <button type="submit" name="update_courier" class="btn btn-primary">Save changes</button>
                                       </div>
                                       </div>
                                       </form>
                                       </div>
                                       </div>
                                        <?php
                                        }
                                       }
                                       ?>

                                            
                                       
                                       
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                 
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4">All Courier Details</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            
                                            <th scope="col">sender_name</th>
                                            <th scope="col">receiver_name</th>
                                            <th scope="col">parcel_weight</th>
                                            <th scope="col">courier_type</th>
                                            <th scope="col">courier_rate</th>
                                            <th scope="col">branch_id</th>
                                            <th scope="col">agent_id</th>
                                            <th scope="col">tracking_no</th>
                                            <th scope="col">date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                       

                                             <tr>
                                            <th scope="row"></th>
                                            
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                       
                                       
                                        
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Table End -->


           