<?php

include './db/db.php';
include './component/header/header.php';

?>

<div class="container">
    <div class="row">
        <h4 class="text-center p-4">Display contact details</h4>
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Full Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $sql = "SELECT * FROM contacts";
                    $result = $conn->query($sql);
                    if ($result->num_rows > 0) {
                        $count= 0;
                        // output data of each row
                        while ($row = $result->fetch_assoc()) { $count++;?>
                            <tr>
                            <th scope="row"><?php echo $count ?> </th>
                            <td> <?php echo $row['fname']?> </td>
                            <td> <?php echo $row['email']?> </td>
                            <td> <?php echo $row['message']?> </td>
                            <td> <a class="btn btn-sm btn-danger">Delete</a> </td>
                        </tr>
                      <?php  }

                    }
                    ?>

                </tbody>
            </table>
        </div>

    </div>
</div>

<?php
include './component/footer/footer.php'
?>