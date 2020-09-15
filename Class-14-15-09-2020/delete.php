<?php
include "layout/header.php";
?>
<?php
    // Check existence of id parameter before processing further
    if (isset($_GET["id"]) && !empty(trim($_GET["id"]))) {
        // Get URL parameter
        $id =  trim($_GET["id"]);

        $sql = "DELETE FROM users WHERE id=?";
        if ($stmt = $conn->prepare($sql)) {
            $stmt->bind_param("i", $param_id);
            // Set parameters
            $param_id = $id;

            if ($stmt->execute()) {
            // Records created successfully. Redirect to landing page
            header("Location:index.php?msg=" . urlencode("User info delete successfully"));
            exit();
            }
        } else {
            $error = "Oops! Something went wrong. Please try again later.";
        }
    }

?>
