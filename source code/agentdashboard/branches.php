<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-title">

                </div>
                <div class="card-body">
                    <table class="table">
                    <th>Branch_name</th>
                    <th>Branch_status</th>
                    <?php
                    $query = selectalldata('branch');
                    if(mysqli_num_rows($query) > 0){
                        foreach($query as $value){
                            ?>
                            <tr>
                                <td><?php echo $value['branch_name']?></td>
                                <td><?php echo $value['status']?></td>
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