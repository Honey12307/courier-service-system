


            <!-- Table Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    
                   
                    
                 
                    <div class="col-12">
                        <div class="bg-light rounded h-100 p-4">
                            <h6 class="mb-4"> Customer Details</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th scope="col">customer_id</th>
                                            <th scope="col">customer_name</th>
                                            <th scope="col">customer_email</th>
                                            <th scope="col">customer_password</th>
                                            <th scope="col">customer_address</th>
                                            <th scope="col">customer_phone_number</th>
                                            <th scope="col">customer_CNIC</th>
                                            <th scope="col">Action</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = selectalldata('customer');
                                        if(mysqli_num_rows($query) > 0){
                                            foreach($query as $value){
                                                ?>
                                             <tr>
                                             
                                             <td><?php echo $value['customer_id']?></td>
                                             <td><?php echo $value['customer_name']?></td>
                                             <td><?php echo $value['customer_email']?></td>
                                             <td><?php echo $value['customer_password']?></td>
                                             <td><?php echo $value['customer_address']?></td>
                                             <td><?php echo $value['customer_phone_number']?></td>
                                             <td><?php echo $value['customer_CNIC']?></td>
                                             <td>
                                             <form action="../code.php" method="post">
                                            <input type="hidden" name="customer_id" value="<?php echo $value['customer_id']?>">
                                            <button type="submit"  class="btn btn-dark" name="delete">Delete</button>
                                            <button type="button" class="btn btn-success"  data-bs-toggle="modal" data-bs-target="#updateModal<?php echo $value['customer_id']?>">Update</button>
                                            </form>
                                             </td>
                                         </tr>
                                         <!--update Modal -->
                                       <div class="modal fade" id="updateModal<?php echo $value['customer_id']?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                       <div class="modal-dialog">
                                       <form action="../code.php" method="post">
                                       
                                       <div class="modal-content">
                                       <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalLabel">Update Customer</h5>
                                       <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                       </div>
                                       <div class="modal-body">
                                       <input type="hidden" name="customer_id" value="<?php echo $value['customer_id']?>">
                                       <input type="text" class="form-control mb-3" name="customer_name" value="<?php echo $value['customer_name']?>" placeholder="customer_name">
                                       <input type="text" class="form-control mb-3" name="customer_email" value="<?php echo $value['customer_email']?>" placeholder="customer_email">
                                       <input type="text" class="form-control mb-3" name="customer_password" value="<?php echo $value['customer_password']?>" placeholder="customer_password">
                                       <input type="int" class="form-control mb-3" name="customer_address" value="<?php echo $value['customer_address']?>" placeholder="customer_address">
                                       <input type="int" class="form-control mb-3" name="customer_phone_number" value="<?php echo $value['customer_phone_number']?>" placeholder="customer_phone_number">
                                       <input type="text" class="form-control mb-3" name="customer_CNIC" value="<?php echo $value['customer_CNIC']?>" placeholder="customer_CNIC">
        
        
                                       </div>
                                       <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                       <button type="submit" name="updatecustomer" class="btn btn-primary">Save changes</button>
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
                </div>
            </div>
            <!-- Table End -->


          