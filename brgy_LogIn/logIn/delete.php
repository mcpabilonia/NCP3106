<?php
session_start();
// Process delete operation after confirmation
if (isset($_SESSION["id"]) && !empty($_SESSION["id"])) {
    // Include config file
    require_once "configone.php";

    // Prepare a delete statement
    $sql = "DELETE FROM admin_brgy WHERE id = '$rollno'";

    if ($stmt = $mysqli->prepare($sql)) {
        // Bind variables to the prepared statement as parameters
        $stmt->bind_param("i", $_SESSION["id"]);

        // Attempt to execute the prepared statement
        if ($stmt->execute()) {
            session_destroy();
            // Records deleted successfully. Redirect to landing page
            header("location:log.php");
            exit();
        } else {
            echo "Oops! Something went wrong. Please try again later.";
        }
    }

    // Close statement
    $stmt->close();

    // Close connection
    $mysqli->close();
}