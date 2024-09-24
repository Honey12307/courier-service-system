<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">

                </div>
                <div class="card-body">
                    <table class="table">
                    <th>Sender_name</th>
                    <th>receiver_name</th>
                    <th>tracking_no</th>
                    <th>Action</th>
                    <?php
                    $query = selectalldata('courier');
                    if(mysqli_num_rows($query) > 0){
                        foreach($query as $value){
                            ?>
                            <tr>
                                <td><?php echo $value['sender_name']?></td>
                                <td><?php echo $value['receiver_name']?></td>
                                <td><?php echo $value['tracking_no']?></td>
                                <td>
                                    <a class="btn btn-primary" href="print.php?id=<?php echo $value['courier_id']?>">Print Report</a>
                                </td>
                            </tr>
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
