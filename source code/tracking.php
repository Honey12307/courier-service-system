<?php 
include "code.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center;color: red;">COURIER REPORT</h1>
    <table border="1px" width="100%">
        

        <?php
                   
                   if(isset($_POST['track_data'])){

                        $tracking_id = $_POST['tracking_id'];
                        $query = mysqli_query(connection(),"SELECT courier.*, agent.agent_name, branch.branch_name FROM courier JOIN agent ON courier.agent_id = agent.agent_id JOIN branch ON agent.branch_id = branch.branch_id WHERE tracking_no='$tracking_id'");

                        if(mysqli_num_rows($query) > 0){
                                $value = mysqli_fetch_assoc($query)
                                ?>
                                <tr>
                                    <th>Sender Name</th>
                                    <td><?php echo $value['sender_name']?></td>
                                </tr>

                                <tr>
                                    <th>Receiver Name</th>
                                    <td><?php echo $value['receiver_name']?></td>
                                </tr>
                                <tr>
                                    <th>tracking_no</th>
                                    <td><?php echo $value['tracking_no']?></td>
                                </tr>

                                <tr>
                                    <th>Agent Name</th>
                                    <td><?php echo $value['agent_name']?></td>
                                </tr>

                                <tr>
                                    <th>Branch Name</th>
                                    <td><?php echo $value['branch_name']?></td>
                                </tr>

                                <tr>
                                    <th>Courier Rate</th>
                                    <td><?php echo $value['courier_rate']?></td>
                                </tr>
                                
                                <tr>
                                    <th>Courier Date</th>
                                    <td><?php echo $value['date']?></td>
                                </tr>

                                <tr>
                                    <th>Courier Status</th>
                                    <td><?php echo $value['status']?></td>
                                </tr>

                              
                                <?php

                            
                        }
                   }
                    
                    ?>
    </table>

    <h5 style="color:red;text-align:center">THANK YOU TO USE OUR SERVICES</h5>
    <h5 style="color:red;text-align:center">Our Courier Services Make System Fast And Online </h5>
    <a href="index.php" style="color:red;background-color:green;padding:5px;text-decoration:none;color:white">GO Back</a>
</body>
</html>

<script>
    window.print();
</script>


