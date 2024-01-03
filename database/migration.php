<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "root";
$database = "cantor";

// Create connection
$conn = new mysql($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    echo "Couldnt connect to database please recheck database connection";
    die("Connection failed: " . $conn->connect_error);
}

// Create Courses table
$sql = "CREATE TABLE IF NOT EXISTS Courses (
    CourseTitle VARCHAR(255),
    CourseType VARCHAR(50) ,
    CourseSummary TEXT ,
    CourseAwardName VARCHAR(50) ,
    UcasCode VARCHAR(10) ,
    UcasPoints DECIMAL(5, 1) ,
    YearOfEntry VARCHAR(10) ,
    ModeOfAttendance VARCHAR(20) ,
    StudyLength VARCHAR(20) ,
    HasFoundationYear BOOLEAN ,
    CourseSubject VARCHAR(50) ,
    NoLongerRecruiting BOOLEAN 
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Courses created successfully\n";
} else {
    echo "Error creating table: " . $conn->error . "\n";
}

// Read data from data.json
$jsonData = file_get_contents('courses-data.json');
$data = json_decode($jsonData, true);

// Insert data into Courses table
foreach ($data as $course) {
    $sql = "INSERT INTO Courses (CourseTitle, CourseType, CourseSummary, CourseAwardName, UcasCode, UcasPoints, YearOfEntry, ModeOfAttendance, StudyLength, HasFoundationYear, CourseSubject, NoLongerRecruiting) 
            VALUES (
                '{$course["CourseTitle"]}', 
                '{$course["CourseType"]}', 
                '{$course["CourseSummary"]}', 
                '{$course["CourseAwardName"]}', 
                '{$course["UcasCode"]}', 
                {$course["UcasPoints"]}, 
                '{$course["YearOfEntry"]}', 
                '{$course["ModeOfAttendance"]}', 
                '{$course["StudyLength"]}', 
                " . ($course["HasFoundationYear"] ? '1' : '0') . ", 
                '{$course["CourseSubject"]}', 
                " . ($course["NoLongerRecruiting"] ? '1' : '0') . "
            )";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Record inserted successfully</p>";
    } else {
        echo "Error inserting record: " . $conn->error . "\n";
    }
}
// Close connection
$conn->close();
echo "<h1>All records inserted successfully</h1>"
?>
