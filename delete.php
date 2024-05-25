<?php require_once "conn.php";
if(isset($_GET['id'])){
    $id=$_GET['id'];
    $query= "delete from `stool` where id='$id'";
    $result = mysqli_query($conn, $query) or die("Query Failed..");

if ($result) {

?>
<script>
   alert("Data Deleted Successfully..");
   window.location.href="index.php";
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