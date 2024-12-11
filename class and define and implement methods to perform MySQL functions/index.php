<?php

// Include the class definition
include('subjectMIS.php');

// Create an instance of the SubjectMIS class
$subjectMIS = new SubjectMIS();

// Connect to the database
$subjectMIS->connect('localhost', 'root', '', 'MIS');

// Insert a new subject
$subjectMIS->insert('CS101', 'Introduction to Programming', 4);

// Display all subjects
$subjectMIS->select();

// Update a subject
$subjectMIS->update('CS101', 'Advanced Programming', 5);

// Delete a subject
$subjectMIS->delete('CS101');

// Display all subjects again after deletion
$subjectMIS->select();

// Disconnect from the database

$subjectMIS->disconnect();

?>