<?php
include "layout/header.php";
?>
<div class="container">
    <h3>PHP CRUD</h3>
    <hr>
    <a href="add.php" class="button">Add New</a>
    <br />
    <?php

    if (isset($_GET['msg'])) {
        echo "<span style='color:green'>" . $_GET['msg'] . "</span>";
    }
    ?>
    <div class="row">
        <div class="column">
            <table>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
                <?php
                if (isset($_GET['page'])) {
                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }

                $per_page = 2;
                $start_from = ($page - 1) * $per_page;

                $select = "SELECT * FROM users LIMIT $start_from, $per_page";
                $result = $conn->query($select);
             
                if ($result->num_rows > 0) {
                    // while ($row = $result->fetch_assoc()) {
                        foreach ($result as $row) {  ?>
                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['address']; ?></td>
                            <td>
                                <a href="edit.php?id=<?php echo $row['id']; ?>" class="button">Edit</a>
                                <a href="delete.php?id=<?php echo $row['id']; ?>" class="button button-outlinen">Delete</a>
                            </td>

                        </tr>
                <?php
                    }
                }
                ?>

            </table>
            <?php
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);
                $totalRecord= mysqli_num_rows($result);
                $totalPage = ceil($totalRecord/$per_page);
                echo ' <div class="pagination">
                <ul>';
                for ($i=1; $i <$totalPage ; $i++) { 
                  echo "<li><a class='page-link' href='index.php?page=".$i."'>" . $i . "</a></li>";
                }
                echo '  </ul>
            </div>';
            ?>
           
                   
                   
              
        </div>
    </div>
</div>