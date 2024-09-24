<?php
session_start();
// connection function 
function connection(){
    $conn = mysqli_connect('localhost','root','','project');
    return $conn;
}
 // select all data function 
function selectalldata($table){
    $query = mysqli_query(connection(), "SELECT * FROM $table");
    return $query;
}

// login customer

if(isset($_POST['login'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $queryAgent = mysqli_query(connection(), "SELECT * FROM agent WHERE agent_name = '$name' AND agent_password = '$password'");
    $queryAdmin = mysqli_query(connection(), "SELECT * FROM admin WHERE name = '$name'  AND password = '$password'");
    $queryCustomer = mysqli_query(connection(), "SELECT * FROM customer WHERE customer_name = '$name'  AND customer_password = '$password'");
    
    if(mysqli_num_rows($queryAgent)> 0){
        $dataAgent = mysqli_fetch_assoc($queryAgent);
        $_SESSION['userdata'] = $dataAgent['agent_name'];
        header("location:agentdashboard/public.php?index");

    }else if(mysqli_num_rows($queryAdmin)> 0){
        $dataAdmin = mysqli_fetch_assoc($queryAdmin);
        $_SESSION['userdata'] = $dataAdmin['name'];
        header("location:admindashboard/public.php?index");
    }else if(mysqli_num_rows($queryCustomer)> 0){
        session_start();
        $dataCustomer = mysqli_fetch_assoc($queryCustomer);
        $_SESSION['customerdata'] = $dataCustomer['customer_name'];
        header("location:index.php");
    }else{
        ?>
        <script>
            alert("Email Or Password Not Correct")
            location.assign('login.php')
        </script>
        <?php 
    }

}

// add agent
if(isset($_POST['addagent'])){
    $agent_name = $_POST['agent_name'];
    $agent_email = $_POST['agent_email'];
    $agent_password = $_POST['agent_password'];
    $agent_phone_number = $_POST['agent_phone_number'];
    $agent_CNIC = $_POST['agent_CNIC'];
    $agent_address = $_POST['agent_address'];
    $branch_id = $_POST['branch_id'];
    
    
    $query = mysqli_query(connection(), "INSERT INTO agent(agent_name,agent_email,agent_password,agent_phone_number,agent_CNIC,agent_address,branch_id)VALUES('$agent_name','$agent_email','$agent_password','$agent_phone_number','$agent_CNIC','$agent_address','$branch_id')");

    if($query){
        echo "<script>
        alert('Agent Add Successfully');
        location.assign('admindashboard/public.php?agent');
        </script>";
    }
    else{
        echo "Error";
    }
}
    //  delete agent
if(isset($_POST['delete_id'])){
    $agent_id = $_POST['agent_id'];

    $query = mysqli_query(connection(), "DELETE FROM agent WHERE agent_id = '$agent_id'");

    if($query){
        echo "<script>
        alert('Delete Agent Successfully');
        location.assign('admindashboard/public.php?agent');
        </script>";
    }
    else{
        echo "Error";
    }
}
// update agent
if(isset($_POST['updateagent'])){
    $agent_id = $_POST['agent_id'];
    $agent_name = $_POST['agent_name'];
    $agent_email = $_POST['agent_email'];
    $agent_password = $_POST['agent_password'];
    $agent_phone_number = $_POST['agent_phone_number'];
    $agent_CNIC = $_POST['agent_CNIC'];
    $agent_address = $_POST['agent_address'];

    $query = mysqli_query(connection(), "UPDATE  agent SET agent_name='$agent_name',agent_email='$agent_email',agent_password='$agent_password',agent_phone_number='$agent_phone_number',agent_CNIC='$agent_CNIC',agent_address='$agent_address' WHERE agent_id='$agent_id'");

    if($query){
        echo "<script>
        alert('Update Agent Successfully');
        location.assign('admindashboard/public.php?agent');
        </script>";
    }
    else{
        echo "Error";
    }
}
// add customer
if(isset($_POST['addcustomer'])){
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
    $customer_address = $_POST['customer_address'];
    $customer_phone_number = $_POST['customer_phone_number'];
    $customer_CNIC = $_POST['customer_CNIC'];

    $query = mysqli_query(connection(), "INSERT INTO customer(customer_name,customer_email,customer_password,customer_address,customer_phone_number,customer_CNIC)VALUES('$customer_name','$customer_email','$customer_password','$customer_address','$customer_phone_number','$customer_CNIC')");

    if($query){
        echo "<script>
        alert('Add Customer Successfully');
        location.assign('index.php');
        </script>";
    }
    else{
        echo "error";
    }
}
// delete customer
if(isset($_POST['delete'])){
    $id = $_POST['customer_id'];

    $query = mysqli_query(connection(), "DELETE FROM customer WHERE customer_id = '$id'");

    if($query){
        echo "<script>
        alert('Delete Customer Successfully');
        location.assign('admindashboard/public.php?customer');
        </script>";
    }
    else{
        echo "Error";
    }
}
// update customer
if(isset($_POST['updatecustomer'])){
    $customer_id = $_POST['customer_id'];
    $customer_name = $_POST['customer_name'];
    $customer_email = $_POST['customer_email'];
    $customer_password = $_POST['customer_password'];
    $customer_address = $_POST['customer_address'];
    $customer_phone_number = $_POST['customer_phone_number'];
    $customer_CNIC = $_POST['customer_CNIC'];
    

    $query = mysqli_query(connection(), "UPDATE customer SET customer_name='$customer_name',customer_email='$customer_email',customer_password='$customer_password',customer_address='$customer_address',customer_phone_number='$customer_phone_number',customer_CNIC='$customer_CNIC' WHERE customer_id='$customer_id'");
    
    if($query){
        echo "<script>
        alert('Update Customer Successfully');
        location.assign('admindashboard/public.php?customer');
        </script>";
    }
    else{
        echo "Error";
    }
}
// add courier
if(isset($_POST['addcourier'])){
    $sender_name = $_POST['sender_name'];
    $receiver_name = $_POST['receiver_name'];
    $parcel_weight = $_POST['parcel_weight'];
    $courier_type = $_POST['courier_type'];
    $courier_rate = $_POST['courier_rate'];
    $branch_id = $_POST['branch_id'];
    $agent_id = $_POST['agent_id'];
    $tracking_no = rand(100,999999999);
    
   

    $query = mysqli_query(connection(), "INSERT INTO courier(sender_name,receiver_name,parcel_weight,courier_type,courier_rate,branch_id,agent_id,tracking_no)VALUES('$sender_name','$receiver_name','$parcel_weight','$courier_type','$courier_rate','$branch_id','$agent_id','$tracking_no')");

    if($query){
        echo "<script>
        alert('Courier Add Successfully');
        location.assign('agentdashboard/public.php?courier');
        </script>";
    }
    else{
        echo "Error";
    }
    }

   // delete courier 
if(isset($_POST['delete_courier'])){
    $courier_id = $_POST['courier_id'];

    $query = mysqli_query(connection(), "DELETE FROM courier WHERE courier_id = '$courier_id'");

    if($query){
        echo "<script>
        alert('Delete Courier Successfully');
        location.assign('agentdashboard/public.php?courier');
        </script>";
    }
    else{
        echo "Error";
    }
}
 // update courier
if(isset($_POST['updatecourier'])){
    $courier_id = $_POST['courier_id'];
    $sender_name = $_POST['sender_name'];
    $receiver_name = $_POST['receiver_name'];
    $parcel_weight = $_POST['parcel_weight'];
    $courier_type = $_POST['courier_type'];
    $courier_rate = $_POST['courier_rate'];
    $branch_id = $_POST['branch_id'];
    $agent_id = $_POST['agent_id'];
    $status = $_POST['status'];
    

    $query = mysqli_query(connection(), "UPDATE courier SET sender_name='$sender_name',receiver_name='$receiver_name',parcel_weight='$parcel_weight',courier_type='$courier_type',courier_rate='$courier_rate',branch_id='$branch_id',agent_id='$agent_id',status='$status' WHERE courier_id='$courier_id'");
    
    if($query){
        echo "<script>
        alert('Update Courier Successfully');
        location.assign('agentdashboard/public.php?courier');
        </script>";
    }
    else{
        echo "Error";
    }
}

// delete courier     
if(isset($_POST['deletecourier'])){
    $courier_id = $_POST['courier_id'];

    $query = mysqli_query(connection(), "DELETE FROM courier WHERE courier_id = '$courier_id'");

    if($query){
        echo "<script>
        alert('Delete Courier Successfully');
        location.assign('admindashboard/public.php?courier');
        </script>";
    }
    else{
        echo "Error";
    }
}

// update courier
if(isset($_POST['update_courier'])){
    $courier_id = $_POST['courier_id'];
    $sender_name = $_POST['sender_name'];
    $receiver_name = $_POST['receiver_name'];
    $parcel_weight = $_POST['parcel_weight'];
    $courier_type = $_POST['courier_type'];
    $courier_rate = $_POST['courier_rate'];
    $branch_id = $_POST['branch_id'];
    $agent_id = $_POST['agent_id'];
    $status = $_POST['status'];
    

    $query = mysqli_query(connection(), "UPDATE courier SET sender_name='$sender_name',receiver_name='$receiver_name',parcel_weight='$parcel_weight',courier_type='$courier_type',courier_rate='$courier_rate',branch_id='$branch_id',agent_id='$agent_id',status='$status' WHERE courier_id='$courier_id'");
    
    if($query){
        echo "<script>
        alert('Update Courier Successfully');
        location.assign('admindashboard/public.php?courier');
        </script>";
    }
    else{
        echo "Error";
    }
}
// add branch
if(isset($_POST['add_branch'])){
    $branch_name = $_POST['branch_name'];
    

    $query = mysqli_query(connection(), "INSERT INTO branch(branch_name)VALUES('$branch_name')");

    if($query){
        echo "<script>
        alert('Add Branch Successfully');
        location.assign('admindashboard/public.php?branch');
        </script>";
    }
}
// delete branch
    
if(isset($_POST['deletebranch'])){
    $branch_id = $_POST['branch_id'];

    $query = mysqli_query(connection(), "DELETE FROM branch WHERE branch_id = '$branch_id'");
    
    
    if($query){
        echo "<script>
        alert('Delete Branch Successfully');
        location.assign('admindashboard/public.php?branch');
        </script>";
    }
    else{
        echo "Error";
    }
}
// update branch

if(isset($_POST['update_branch'])){
    $branch_id = $_POST['branch_id'];
    $branch_name = $_POST['branch_name'];
    $status = $_POST['status'];

    $query = mysqli_query(connection(), "UPDATE branch SET branch_name='$branch_name', status='$status' WHERE branch_id='$branch_id'");

    if($query){
        echo "<script>
        alert('Update Branch Successfully');
        location.assign('admindashboard/public.php?branch');
        </script>";
    }
    else{
        echo "Error";
    }
}
// add shipment
if(isset($_POST['addshipment'])){
    $courier_id = $_POST['courier_id'];

    $query = mysqli_query(connection(), "INSERT INTO shipment(courier_id)VALUES('$courier_id')");

    if($query){
        echo "<script>
        alert('Add Shipment  Successfully');
        location.assign('admindashboard/public.php?shipment');
        </script>";
    }
    else{
        echo "error";
    }
}
// delete shipment
if(isset($_POST['deleteshipment'])){
    $shipment_id = $_POST['shipment_id'];

    $query = mysqli_query(connection(), "DELETE FROM shipment WHERE shipment_id = '$shipment_id'");

    if($query){
        echo "<script>
        alert('Delete Shipment Successfully');
        location.assign('admindashboard/public.php?shipment');
        </script>";
    }
    else{
        echo "Error";
    }
}
// update shipment
if(isset($_POST['updateshipment'])){
    $shipment_id = $_POST['shipment_id'];
    $status = $_POST['status'];
   
    $query = mysqli_query(connection(), "UPDATE shipment SET status = '$status' Where  shipment_id = '$shipment_id'");

    if($query){
        echo "<script>
        alert('Update Shipment Successfully');
        location.assign('admindashboard/public.php?shipment');
        </script>";
    }
    else{
        echo "Error";
    }
}


?>