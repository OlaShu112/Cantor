<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css/table.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css">
    <script src="components/index.js"></script>
    <title>Cantor College - Contact a Department</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="hero">
        <div class="container">
        <h2>Contact a Department</h2>
                <p>Our telephone lines are open from Monday to Thursday 8.30am to 5.00pm and Friday 8.30am to 4.30pm.</p>
            </div>
        </section>
            <div class="container">
                      <!-- Curriculum Departments -->
                <h3>Curriculum Departments</h3>
                <div class="">
                <table id="courses">
                    <tr>
                        <th scope="col">Department Name</th>
                        <th scope="col">Telephone number</th>
                    </tr>
                    <!-- Add departments and their telephone numbers -->
                    <tr>
                        <td>14-16 Direct Entry Reception</td>
                        <td>01226 216 731</td>
                    </tr>
                    <tr>
                        <td>14-16 provision Attendance Line</td>
                        <td>01226 216 712</td>
                    </tr>
                    <!-- More departments can be added as needed -->
                </table>
            </div>
                <!-- Apprenticeships -->
                <h3>Apprenticeships</h3>
                <p>For general enquiries: 01226 216 123</p>
                <p>Construction and Engineering Apprentices: 0779512XXXX</p>
                <!-- More apprenticeship contacts can be added as needed -->
                <!-- Curriculum Departments (continued) as needed-->
                <!-- More departments can be added as needed -->
                <!-- Support Departments -->
                <h3>Support Departments</h3>
                <table  id="courses">
                    <tr>
                        <th>Student Services & IT Department</th>
                        <th>Telephone number</th>
                        <th>Email address</th>
                    </tr>
                    <!-- More support departments and their contact information can be added-->
                    <tr>
                        <td>Additional Learning Support (ALS)</td>
                        <td>01226 216 769</td>
                        <td><a class="email-link" href="mailto:als@cantorcollege.ac.uk">als@cantorcollege.ac.uk</a></td>
                    </tr>
                    <tr>
                        <td>IT Helpdesk</td>
                        <td>01226 216 012</td>
                        <td><a class="email-link" href="mailto:ithelpdesk@cantorcollege.ac.uk">ithelpdesk@cantorcollege.ac.uk</a></td>
                    </tr>
                    <tr>
                        <td>Student Services Reception</td>
                        <td>01226 216 227</td>
                        <td><a class="email-link" href="mailto:studentservices@cantorcollege.ac.uk">studentservices@cantorcollege.ac.uk</a></td>
                    </tr>
                    <tr>
                        <td>Admissions</td>
                        <td>01226 216 106</td>
                        <td><a class="email-link" href="mailto:info@cantorcollege.ac.uk">admissions@cantorcollege.ac.uk</a></td>
                    </tr>
                    <tr>
                        <td>Engineering Department</td>
                        <td>01234 567 890</td>
                        <td><a class="email-link" href="mailto:info@cantorcollege.ac.uk">engdept@cantorcollege.ac.uk</a></td>
                    </tr>
                    <tr>
                        <td>Computer Science Department</td>
                        <td>01234 567 890</td>
                        <td><a class="email-link" href="mailto:info@cantorcollege.ac.uk">info@cantorcollege.ac.uk</a></td>
                    </tr>
                </table>

                <p>When contacting a department, please have the following information ready:</p>
                
                Student’s full name and date of birth<br>
                Course you are enquiring about
                
                <p>If you are emailing us but would like a telephone response, please remember to give us a contact number.</p>
            </div>

    <?php include 'components/footer.php'; ?>

</body>

</html>