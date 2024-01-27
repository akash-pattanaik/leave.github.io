<?php
if(isset($_POST["submit"])){
$_name = $_POST["_name"];
$fAtte = $_POST["fAtte"];
$SName = $_POST["SName"];
$fdate = $_POST["fdate"];
$tdate = $_POST["tdate"];
$nod = $_POST["nod"];
$phone = $_POST["phone"];
$ppn = $_POST["ppn"];
$_address = $_POST["_address"];
$sem = $_POST["sem"];
$Reason = $_POST["Reason"];
$gnp = $_POST["gnp"];
$par = $_POST["par"];
$pn = $_POST["pn"];
$pname = $_POST["pname"];

$conn = new mysqli('localhost 3306', 'root', '', 'leave_form');

if($conn->connect_error){

die('Connection Failed : $conn->connect_error');

}
else{
    $stmt =  $conn->prepare("INSERT INTO leave_form (_name , fAtte , SName , fdate , tdate , nod , phone , ppn , _address , sem , Reason , gnp , par , pn , pname)
    values (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("siscciiisisssis",$name , $fAtte , $SName , $fdate , $tdate , $nod , $phone , $ppn , $address , $sem , $Reason , $gnp , $par , $pn , $pname);
    $stmt->execute();
    echo"registation sucssesfully...";
    $stmt->close();
    $conn->close();
}
}
?>


