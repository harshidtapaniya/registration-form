<?php require_once "./conn.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>table</title>
</head>
</body>
<div class="table-responsive">

    <h3 class="bg-primary p-4 text-center" style="border-radius: 1000px;">
        Registration Data

        <a type="button" href="regestration1.php" class="btn btn-primary"  style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .90rem; background-color:black;left:380px;position:relative;">
          ADD DATA
        </a>
    </h3>
    <div class="container bg-dark">
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Email</th>
                    <th scope="col">City</th>
                    <th scope="col">Gender</th>
                    <th scope="col">DOB</th>
                    <th scope="col">Age</th>
                    <th scope="col">Mobile Number</th>
                    <th scope="col" colspan="2">Operational</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">

                <?php
                $query = "SELECT * FROM `stool`";
                $result = mysqli_query($conn, $query);
                $i = 1;
                while ($data = mysqli_fetch_assoc($result)) {
                ?>
                    <tr>
                        <th scope="row"><?php echo $i; ?></th>
                        <td><?php echo $data['firstname'] . " " . $data['lastname']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        <td><?php echo $data['city']; ?></td>
                        <td><?php echo $data['gender']; ?></td>
                        <td><?php echo $data['birthdate']; ?></td>
                        <td><?php echo $data['age']; ?></td>
                        <td><?php echo $data['mobilenumber']; ?></td>
                        <td><a href="updateform.php?id=<?php echo $data['id'];?> " class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                        <td><a href="javascript:void(0);" onclick="deletedata(<?php echo $data['id'];?>)" class="btn btn-danger"><i class="bi bi-trash3-fill" ></i></a></td>
                    </tr>
                <?php
                    $i++;
                } ?>
            </tbody>
        </table>
    </div>

</div>
<script>
   
    function deletedata(id) {
        if( confirm('are you sure to delete this data?')){

            window.location.href='delete.php?id='+id;
        }
    }
</script>
</body>
</html>