# Contect_form_php
# PHP Contact Form
This project implements a PHP-based contact form that sends messages to a designated email address using the PHPMailer library. The form collects user details such as name, email, and message, then securely sends them via SMTP.

# Features
Secure Email Sending: Utilizes PHPMailer with SMTP authentication for reliable email delivery.
Input Validation: User input is sanitized to prevent XSS attacks.
Easy Configuration: Adjustable settings for SMTP server, email credentials, and recipient address.
Customizable: Modify email content and structure to fit your needs.
Requirements
## PHP 7.4+
Composer (for managing PHPMailer dependencies)
Web Server (e.g., Apache, Nginx)
## SMTP Email Account (e.g., Gmail)
## Installation
## Clone the Repository:

bash
Copy code
## git clone https://github.com/Nayan-kr-Bera/Contect_form_php.git
## cd Contect_form_php
## Install Dependencies:
## Use Composer to install PHPMailer:

bash
## Copy code
## composer require phpmailer/phpmailer
Configure SMTP Settings:
Edit the contect.php file and update the following:

## php
## Copy code
$mail->Username = 'Your@gmail.com'; // Your email address
$mail->Password = 'Your app password'; // Your email app password
$mail->setFrom('your_email@gmail.com', 'site name'); // Sender email and name
$mail->addAddress('your@gmail.com', 'reciver name); // Recipient email address
## Deploy the Contact Form:
Place the contect.php and related files on your web server. Ensure your server supports PHP and has the required libraries installed.

## Usage
Open the contact form on your website.
Fill in your name, email, and message.
Submit the form to send an email.
If successful, you'll see a confirmation message.
Troubleshooting
SMTP Errors:

Ensure your SMTP credentials are correct.
If using Gmail, enable "Less Secure App Access" or create an App Password.
PHPMailer Errors:

Verify that the PHPMailer library is installed correctly.
Check if the SMTP server is reachable from your host.
Invalid Request Message:

## Ensure the form is submitting data via the POST method.
## plaintext
Copy code
├── contect.php            # Main PHP script for handling the form
├── PHPMailer/             # PHPMailer library folder
├── composer.json          # Composer configuration file
└── README.md              # Project documentation
 ## License
## This project is licensed under the MIT License. Feel free to use and modify it for your own projects.

## Credits
## PHPMailer: For email sending capabilities.
## Nayan-kr-Bera: For providing the context for this project.
## This README includes all essential details for understanding, setting up, and using your project.
