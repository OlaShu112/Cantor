<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css">
    <script src="components/index.js"></script>
    <title>Design Courses at Canton College</title>
</head>

<body>
    <?php include 'components/header.php'; ?>
    <section id="home" class="hero">
        <div class="container">
        <h2>Design Courses at Canton College</h2>
        </div>
    </section>
    <main>
        <section id="design-courses" class="content-section">
            <div class="container">
              
                <p>Cantor College is an internationally connected creative community of diverse disciplines housed under
                    one roof. We shape our students' futures, preparing them to shape the world through applied
                    knowledge and creativity.</p>
                <p>Our art and design courses go beyond traditional training. They promote alternative ways of thinking,
                    making, and communicating. We provide you with the space, tools, and inspiration to develop your
                    creative practice and a clear career path.</p>
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

                        $conn = new mysqli($servername, $username, "", $dbname,3307);

                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        }
                        $sql = "SELECT * FROM Courses where CourseSubject='Art and design'";

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
                <p>Key Highlights:</p>
                <ul>
                    <li>Expert teaching from active practitioners and researchers</li>
                    <li>Encouragement to adopt innovative and resourceful approaches</li>
                    <li>Development of creative practice in well-equipped studios</li>
                    <li>Interaction with peers in making and digital workshops</li>
                    <li>Learning professional skills through applied briefs with commercial clients, cultural
                        institutions, businesses, and organizations</li>
                </ul>
                <p>Join us to explore the boundless possibilities of design and unleash your creativity!</p>
            </div>
        </section>
    </main>
    <?php include 'components/footer.php'; ?>
    
</body>

</html>