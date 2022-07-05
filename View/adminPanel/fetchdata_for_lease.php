<?php
include("../../Helper/connect.php");

if (isset($_POST['request_selected_data_from_lease'])) {
    $request = $_POST['request_selected_data_from_lease'];
    $query = "SELECT * FROM leasing_master WHERE Location = '$request'";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
}

if (isset($_POST['request_all_data_from_lease'])) {
    $request = $_POST['request_all_data_from_lease'];
    $query = "SELECT * FROM leasing_master";
    $result = mysqli_query($con, $query);
    $count = mysqli_num_rows($result);
}


?>


<table class="table mb-0">
    <?php
    if ($count) {


    ?>
        <thead>
            <tr>
                <th>#</th>
                <th>Lease Name</th>

                <th>Short Description</th>
                <th>Long Description</th>
                <th>Location</th>
                <th>Price</th>
                <th>Images</th>
                <th>Status</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        <?php
    } else {
        echo "sorry....... no data found";
    }
        ?>
        </thead>
        <tbody>
            <?php

            $count = 1;
            // if (mysqli_num_rows($exce) > 0) {
            while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <th scope="row"><?php echo $count++; ?></th>
                    <td><?php echo $row['Lease_Name'] ?></td>
                    <td><?php echo $row['ShortDescription'] ?></td>
                    <td><?php echo $row['LongDescription'] ?></td>
                    <td><?php echo $row['Location'] ?></td>
                    <td><?php echo $row['Price'] ?></td>
                    <td><img src="<?php echo $row['Images'] ?>" width="70px" height="70px" /></td>
                    <td>
                        <div class="form-check form-switch form-switch-lg mb-3" dir="ltr">
                            <input type="checkbox" class="form-check-input" id="customSwitchsizelg" onclick="toggleStatus(<?php echo $row['PK_lease']; ?>)" <?php if ($row['FK_Status'] === '9')  echo "checked"; ?>>


                        </div>
                    </td>




                    <td>
                        <a href="edit_lease.php?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Edit"><i class="fas fa-pen"></i></a>
                    </td>
                    <td>
                        <a onClick='javascript:confirmationDelete($(this));return false;' href="deletelease.php/?pid=<?php echo $row['PK_lease']; ?>" class="btn btn-outline-secondary" title="Delete"><i class="fas fa-trash"></i></a>
                    </td>
                </tr>
            <?php

            }
            // }
            ?>
        </tbody>
</table>