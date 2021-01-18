<?php

if(isset($_POST['submit']))
{
     
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$housename=$_POST['housename'];
$locality=$_POST['locality'];
$district=$_POST['district'];
$pincode=$_POST['pincode'];
$branch=$_POST['branch'];
$year=$_POST['year'];
$registrationno=$_POST['registrationno'];
$pickuppoint=$_POST['pickuppoint'];
$droppoint=$_POST['droppoint'];
$busroute=$_POST['busroute'];
$phoneno=$_POST['phoneno'];
$fees=$_POST['fees'];


$con=new mysqli("localhost","root","mysql","studentweb");
/*if($con)
{
    echo "Connected Successfully";
}
else
{
    echo "Failed";
}*/


if(!empty($firstname) || !empty($lastname) || !empty($housename) || !empty($locality) || !empty($district) || !empty($pincode) || !empty($branch) || !empty($year) || !empty($registrationno) || !empty($pickuppoint) || !empty($droppoint) || !empty($busroute) || !empty($phoneno) || !empty($fees))
{
     $sql="insert into registration(First Name , Last Name , House Name , Locality , District , Pincode , Year , Branch , Registration No , Pickup point,Drop point,Phone no,Fees,Bus Route) values('$firstname','$lastname','$housename','$locality','$district','$pincode','$year','$branch','$registrationno','$pickuppoint','$droppoint','$phoneno','$fees')";
     if($con->query($sql)==TRUE)
    {
       echo "Your account has been created";

    } 
    else
    {
       echo " ".$con->error;
    }

}
else
{
    echo "Please enter all the required fields";
}


}




?>
