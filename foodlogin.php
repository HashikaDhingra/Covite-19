<?php
session_start();
if(isset($_POST['account'])&& $_POST['password'])
{
    $con=mysqli_connect("localhost","root","","covite-19") or die(mysqli_error());
    $account = $_POST['account'];
    $password = $_POST['password'];
    $sql=mysqli_query($con,"SELECT * FROM fregister where account='$account' and password='$password'");
    $row= mysqli_fetch_array($sql);
    if(is_array($row))
    {
        $_SESSION["account"] = $row['account'];
        $_SESSION["password"]=$row['password'];
        
        echo "<H3><CENTER>LOGIN IN SUCCESSFUL</CENTER></H3><hr>";
        echo "<br><br><center><table  style='border: 4px solid #05164c;padding: 30px;background-color:#4444;color:#05164C;font-size:25px;box-shadow: 0 0 25px #abb7db;'><tr><th>Account Name : </th><td>". $row['account'] ."</td></tr>";
        echo "<tr><th>Name : <td>". $row['name'] ."</td></tr>";
        echo "<tr><th>EMail ID : </th><td>". $row['email'] ."</td></tr>";
        echo "<tr><th>Phone Number :</th><td>". $row['phone'] ."</td></tr>"; 
        echo "<tr><th>Address : </th><td>". $row['address'] ."</td></tr>";  
        echo "<tr><th>Time : </th><td>". $row['time'] ."</td></tr>";  
        echo "<tr><th>Extra Information :</th><td>". $row['info'] ."</td></tr></table></center>"; 
        echo "<br><a href='foodupdate.php' target='_blank' style='margin-left:850px;margin-bottom:30px;font-size:20px;'>Click to update Data</a>";  
    
       
    }
    else
    {
        echo "Invalid Email ID/Password";
    }
}
?>
