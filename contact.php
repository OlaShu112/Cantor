<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" media="screen and (max-width: 600px)" href="css/mobile.css">
    <script src="components/index.js"></script>
    <title>Cantor College - Contact Us</title>
</head>

<body>
    <?php include 'components/header.php'; ?>

    <section class="hero">
        <div class="container">
            <h2>Contact Us</h2>
        </div>
    </section>
    <main>
        <section id="contact-general" class="content-section">
            <div class="container">
                <h2>Contact Us</h2>

                <p>Let us get you to the right place. Canton College is one of the UK’s biggest educational institutions
                    spread over several campuses. You can use the button below to view the contact details of College
                    departments.</p>
                   
                <!-- College Departments Links -->
                <ul>
                    <a href="contactdepartment.php" class="button" style="background-color: #3498db;">Contact a Department</a></li>
                </ul>
                <ul>
                    <p>Please use the form below to send us a message. Alternatively, you can email us directly at <a
                        class="email-link" href="mailto:info@cantorcollege.ac.uk">info@cantorcollege.ac.uk</a></p>
                </ul>
            </div>
        </section>
        <section id="contact-form" class="content-section">
            <div class="container">
                <h2>Contact Us Form</h2>
                <form id="contactForm">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required autocomplete="name">

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required autocomplete="email">

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Submit</button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'components/footer.php'; ?>

    <div id="successModal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <p>Form submitted successfully!</p>
        </div>
</body>

</html>