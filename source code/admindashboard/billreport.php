<?php 
include "../code.php"
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
                   
                   if(isset($_GET['id'])){

                        $courier_id = $_GET['id'];
                        $query = mysqli_query(connection(),"SELECT courier.*, agent.agent_name, branch.branch_name FROM courier JOIN agent ON courier.agent_id = agent.agent_id JOIN branch ON agent.branch_id = branch.branch_id WHERE courier_id='$courier_id'");

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
                                    <th>Courier Type</th>
                                    <td><?php echo $value['courier_type']?></td>
                                </tr>
                              

                                <tr>
                                    <th>Courier Rate</th>
                                    <td><?php echo $value['courier_rate']?></td>
                                </tr>
                                
                                <tr>
                                    <th>Courier Date</th>
                                    <td><?php echo $value['date']?></td>
                                </tr>

                               

                              
                                <?php

                            
                        }
                   }
                    
                    ?>
    </table>

    <h5 style="color:red;text-align:center">THANK YOU TO USE OUR SERVICES</h5>
    <h5 style="color:red;text-align:center">Our Courier Services Make System Fast And Online </h5>
</body>
</html>

<script>
    window.print();
</script>

