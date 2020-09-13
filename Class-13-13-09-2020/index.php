<?php 
    include "layout/header.php";
?>
    <div class="container">
    <h3>PHP CRUD</h3>
    <hr>
    <a href="add.php" class="button">Add New</a>
    <br/>
    <?php
    
        if(isset($_GET['msg']))
        {
            echo "<span style='color:green'>". $_GET['msg']."</span>";
        }
    ?>
        <div class="row">
            <div class="column">
                <table>
                    <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                    <?php 
                        $select ="SELECT * FROM users";
                        $result = $conn->query($select);
                        if($result->num_rows>0)
                        {                            
                            while ($row= $result->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobile'];?></td>
                                <td><?php echo $row['address'];?></td>
                                <td>
                                    <a href="edit.php?id=<?php echo $row['id'];?>" class="button">Edit</a>
                                    <a href="" class="button button-outlinen">Delete</a>
                                </td>
                               
                            </tr>
                        <?php 
                                }
                        }
                    ?>

                </table>
            </div>
        </div>
    </div>
    

