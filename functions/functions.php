<?php 
include 'connection.php';


function create($name,$price,$date){ // add a data inside the database
    $conn = connect_database(); // -> convert function connect_databse() to a variable
    $sql = "INSERT INTO items(item_name,item_price,item_date_delivered)VALUES('$name','$price','$date')"; // a string (a sql string)
    $result = $conn->query($sql); //!!important, why? because this is the responsible of executing/making work/run variable $sql.

    if($result == TRUE){
        echo "item added successfully"; // display message if working properly
    }else{
        die('ERROR: '.$conn->error); // display eerror if query/ sql dont work
    }



}

function read(){ // retrieve or get a data from the databse
    $conn = connect_database();
    $sql = "SELECT * FROM items";
    $result = $conn->query($sql);

    // return $result->fetch_assoc();

    if($result->num_rows>0){ // this line means: "is the table data more than 0?" / "if there is atleast 1 data"
        $container = array(); // holder of the data from the table
        while($rows = $result->fetch_assoc()){
            $container[] = $rows;
        }
        return $container;
    }else{
        return FALSE;
    }

}

function update($id,$name,$price,$date){ // update/edit a data that is inside the database
    $conn = connect_database();
    $sql  = "UPDATE items SET item_name = '$name', item_price = '$price', item_date_delivered = '$date' WHERE item_id = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('location:dashboard.php');
    }else{
        return FALSE;
    }

}

function delete($id){ // delete a data in the database
    $conn = connect_database();
    $sql = "DELETE FROM items WHERE item_id = '$id'";
    $result = $conn->query($sql);

    if($result == TRUE){
        header('location: dashboard.php');

    }else{
        return FALSE;
    }

}
// users table
// steps: 
// 1. create functions
// 2. create UI
// 3. give names to elements {input type}
// 4. if isset()
// 5. collect/create variables
// 6. dont forget include
// 7. use the function you created
function create_user($fname,$age,$loc,$uname,$pword,$email){
   $conn = connect_database();
   $sql = "INSERT INTO users(fullname,age,location,username,password,email)VALUES('$fname','$age','$loc','$uname','$pword','$email')";
   
   $result = $conn->query($sql);

    // validation, if its working or not working
   if($result == TRUE){
    // meaning if result is working

    echo "added user successfully";
   }else{
    // if not working;

    echo "not working";
   }
   


}
function display_users(){

}
function update_user(){

}
function delete_user(){

}




?>