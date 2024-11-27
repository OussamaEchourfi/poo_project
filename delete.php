<?php
// Include the database connection
include "database.php";

class ProfManager {
    private $connection;

    public function __construct($dbConnection) {
        $this->connection = $dbConnection;
    }

    public function deleteProf($id) {
        $sql = "DELETE FROM `prof` WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        
        if ($stmt) {
            $stmt->bind_param("i", $id); // Bind the ID as an integer
            if ($stmt->execute()) {
                header("Location: admin.php?msg=Data deleted successfully");
            } else {
                echo "Failed: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to prepare statement: " . $this->connection->error;
        }
    }
}

// Usage
if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $profManager = new ProfManager($conn);
    $profManager->deleteProf($id);
} else {
    echo "Invalid request.";
}
?>
