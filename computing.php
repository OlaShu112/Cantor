<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css">
    <script src="components/index.js"></script>
    <title>Cantor College</title>

</head>

<body>
    <?php include 'components/header.php'; ?>
    <section id="home" class="hero">
        <div class="container">
            <h2>Explore Our Computing Courses</h2>
        </div>
    </section>
    <main>

        <section id="computing-courses" class="content-section">
            <div class="container">

                <p>Cantor College offers a diverse range of courses catering to applicants with varying backgrounds and
                    educational abilities.</p>
                <p>At the undergraduate level, we provide single BSc Honours Degree courses in:</p>

                <div class="table-container">
                    <table id='courses'>
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Type</th>
                                <th>Summary</th>
                                <th>AwardName</th>
                                <th>Ucas Code</th>
                                <th>Ucas Points</th>
                                <th>Year Of Entry</th>
                                <th>Mode Of Attendance</th>
                                <th>Study Length</th>
                                <th>Has Foundation Year</th>
                                <th>Course Subject</th>
                                <th>No Longer Recruiting</th>
                            </tr>
                        </thead>
                        <?php
                        require 'config.php';
                        $courseSubject = 'Computing';   // This can be changed to the desired course type
                        // Create connection
                        $conn = new mysqli($servername, $username, "", $dbname, 3307);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        // Fetch course information from the database
                        $sql = "SELECT * FROM Courses where CourseSubject='Computing'";

                        $result = $conn->query($sql);

                        $data = [];

                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                $data[] = $row;
                            }
                        }

                        $courses = $data;

                        if (!empty($courses)) {
                            echo "<tbody>";
                            foreach ($courses as $course) {
                                echo "<tr>";
                                echo "<td>" . $course['CourseTitle'] . "</td>";
                                echo "<td>" . $course['CourseType'] . "</td>";
                                echo "<td>" . $course['CourseSummary'] . "</td>";
                                echo "<td>" . $course['CourseAwardName'] . "</td>";
                                echo "<td>" . $course['UcasCode'] . "</td>";
                                echo "<td>" . $course['UcasPoints'] . "</td>";
                                echo "<td>" . $course['YearOfEntry'] . "</td>";
                                echo "<td>" . $course['ModeOfAttendance'] . "</td>";
                                echo "<td>" . $course['StudyLength'] . "</td>";
                                echo "<td>" . $course['HasFoundationYear'] . "</td>";
                                echo "<td>" . $course['CourseSubject'] . "</td>";
                                echo "<td>" . $course['NoLongerRecruiting'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</tbody>";
                        } else {
                            echo "<p>No courses found for the specified type.</p>";
                        }
                        ?>
                    </table>
                </div>
                <br>
                <p>Cantor College is at the heart of a passionate computing community, fostering student societies
                    devoted to games development, digital forensics, and programming.</p>
                <p>Key Features:</p>
                <ul>
                    <li>British Computer Society Accredited Courses</li>
                    <li>Highly Relevant to Modern Industry</li>
                    <li>Designed to Prepare Students for Professional Occupations</li>
                    <li>Opportunities for Further Studies (MSc. or PhD.)</li>
                </ul>
                <p>Join us to embark on a journey of knowledge and innovation in the field of computing!</p>

            </div>
        </section>
    </main>
    <?php include 'components/footer.php'; ?>

</body>

</html>