<!DOCTYPE html>
<html>

    <head>

        <title>Fishermen's Mission</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700">
        <link rel="stylesheet" href="style.css">

    </head>

    <body>

        <main>

            <p>Send Email</p>

            <form class="contact-form" action="contact-form.php" method="post">
                
                <label for="name">Full Name</label>
                <input type="text" name="name" placeholder="Full Name">

                <label for="mail">Email</label>
                <input type="text" name="mail" placeholder="Enter your email address">

                <label for="subject">Subject</label>
                <input type="text" name="subject" placeholder="Subject">

                <label for="message">Message</label>
                <textarea name="message" placeholder="Message"></textarea>

                <button type="submit" name="submit" id="sendButton">Send Email</button>

            </form>

        </main>

    </body>

</html>