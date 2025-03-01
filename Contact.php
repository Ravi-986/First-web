<?php
 include ('header.php'); 
 include ('nav.php'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link href="style/style.css" rel="stylesheet">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.contact-container {
    max-width: 500px;
    margin: 50px auto;
    padding: 20px;
    background: white;
    border-radius: 10px;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h2 {
    text-align: center;
    color: #333;
}

label {
    font-weight: bold;
    display: block;
    margin-top: 10px;
}

input, textarea {
    width: 100%;
    padding: 10px;
    margin-top: 5px;
    border: 1px solid #ddd;
    border-radius: 5px;
}

button {
    width: 100%;
    padding: 10px;
    background: #007bff;
    color: white;
    border: none;
    margin-top: 15px;
    cursor: pointer;
    border-radius: 5px;
}

button:hover {
    background: #0056b3;
}

footer {
    background-color: #343a40;
    color: white;
    padding: 50px 0;
}

footer a {
    color: white;
    text-decoration: none;
    transition: color 0.3s ease-in-out;
}

footer a:hover {
    color: #f8f9fa;
    text-decoration: underline;
}

footer .container {
    max-width: 1100px;
    margin: 0 auto;
}

footer .row {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
}

footer .col-md-4 {
    flex: 1;
    min-width: 250px;
    margin-bottom: 20px;
}

@media (max-width: 768px) {
    footer .row {
        flex-direction: column;
        text-align: center;
    }
}
        </style>

  
</head>
<body>

    <div class="contact-container">
        <h2>Contact Us</h2>
        <form action="#" method="POST">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone No</label>
            <input type="phone" id="phone" name="phone" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit">Send Message</button>
        </form>
    </div>

    <footer class="bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h5>Contact Us</h5>
                <p>123 Main St, Anytown, USA 12345</p>
                <p>phone: 555-555-5555</p>
                <p>email: <a href="mailto:info@example.com">info@example.com</a></p>
            </div>
            <div class="col-md-4">
                <h5>Social Media</h5>
                <p><a href="#" class="text-white">Facebook</a></p>
                <p><a href="#" class="text-white">Twitter</a></p>
                <p><a href="#" class="text-white">Instagram</a></p>
            </div>
            <div class="col-md-4">
                <h5>Copyright</h5>
                <p>&copy; 2024 Company Name. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<script src=""></script>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14771.300269053898!2d68.96939359999999!3d22.2467151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39569c266399e37b%3A0xb5866e461a106e0a!2sDwarka%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1739112560414!5m2!1sen!2sin" width="1400" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    

</body>
</html>


