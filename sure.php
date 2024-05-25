<?php require_once "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "delete from `stool` where id='$id'";
    $result = mysqli_query($conn, $query) or die("Query Failed..");

if ($result) {

?>
<script>
   alert("are your sure delete data");
   window.location.href="delete.php";
</script>
<?php

} else {
?>
<script>
alert("Data Not Deleted ..");

</script>


<?php

}
    
}

?>

