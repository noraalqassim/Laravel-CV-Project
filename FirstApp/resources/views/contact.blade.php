<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'> 
    <link rel="stylesheet" href="contact.css"  >
    <title>Contact Me</title>
</head>
<body>
<header>
        @extends('layouts.nav')
    </header>
<br>
<br>
    <div class="container">
        <form onsubmit="sendEmail(); reset(); return false;" >
            <h2>Contact Me</h2>
            <input type="text" id="Name" placeholder="Name" required>
            <input type="email" id="Email" placeholder="Email" required>
            <input type="text" id="subject" placeholder="subject" required>
            <h5>Message:</h5>
            <textarea id="body" required></textarea>
            <button type="submit" id="button" value="Send">submit</button>
        </form>

    </div>

    <script src=" https://smtpjs.com/v3/smtp.js"></script>
    <script>
        function sendEmail(){
            Email.send({
                 Host : "smtp.elasticemail.com",
                 Username : "non585@outlook.sa",
                 Password : "97B32792B8D6DACFE10DC64449441613A42B", 
                 To : 'noraalqassim12@gmail.com',
                 From : document.getElementById('Email').value,
                 Subject : document.getElementById('subject').value,
                 Body : document.getElementById('body').value
            }).then(
                message => alert(message)
                  );
                  return true;
        }
    </script>

<footer>
    @extends('layouts.footer')

    @section("Thx")
     Thank You For Contact Me
     <i class="fa fa-heart" aria-hidden="true"></i>.
    @endsection
   </footer>
</body>
</html>