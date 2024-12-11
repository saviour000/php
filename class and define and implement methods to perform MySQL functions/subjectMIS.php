<?php

class SubjectMIS {

    private $conn;

    // Connect to the database
    public function connect($host = 'localhost', $username = 'root', $password = '', $dbname = 'MIS') {
        $this->conn = new mysqli($host, $username, $password, $dbname);
        
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        } else {
            echo "Connected successfully to the database.<br>";
        }
    }

    // Disconnect from the database
    public function disconnect() {
        if ($this->conn) {
            $this->conn->close();
            echo "Disconnected from the database.<br>";
        }
    }

    // Insert a new subject into the database
    public function insert($subject_code, $subject_name, $credits) {
        $query = "INSERT INTO subjects (subject_code, subject_name, credits) VALUES ('$subject_code', '$subject_name', '$credits')";
        
        if ($this->conn->query($query) === TRUE) {
            echo "New subject inserted successfully.<br>";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    // Select and fetch all subject details
    public function select() {
        $query = "SELECT * FROM subjects";
        $result = $this->conn->query($query);
        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "Subject Code: " . $row["subject_code"] . " - Name: " . $row["subject_name"] . " - Credits: " . $row["credits"] . "<br>";
            }
        } else {
            echo "No subjects found.<br>";
        }
    }

    // Delete a subject by subject_code
    public function delete($subject_code) {
        $query = "DELETE FROM subjects WHERE subject_code='$subject_code'";
        
        if ($this->conn->query($query) === TRUE) {
            echo "Subject deleted successfully.<br>";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }

    // Update subject details by subject_code
    public function update($subject_code, $new_subject_name, $new_credits) {
        $query = "UPDATE subjects SET subject_name='$new_subject_name', credits='$new_credits' WHERE subject_code='$subject_code'";
        
        if ($this->conn->query($query) === TRUE) {
            echo "Subject updated successfully.<br>";
        } else {
            echo "Error: " . $query . "<br>" . $this->conn->error;
        }
    }
}

?>





