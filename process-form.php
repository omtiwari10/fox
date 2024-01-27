<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $course = $_POST["course"];
    $photo = $_FILES["photo"]["name"]; // You might want to handle file uploads appropriately
    $firstName = $_POST["firstName"];
    $middleName = $_POST["middleName"];
    $lastName = $_POST["lastName"];
    $dob = $_POST["dob"];
    $age = $_POST["age"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $email = $_POST["email"];
    $otp = $_POST["otp"];
    $bloodGroup = $_POST["bloodGroup"];
    $maritalStatus = $_POST["maritalStatus"];
    $nationality = $_POST["nationality"];
    $aadharCard = $_POST["aadharCard"];
    $panCard = $_POST["panCard"];
    $motherTongue = $_POST["motherTongue"];
    $placeOfBirth = $_POST["placeOfBirth"];
    $physicalFitness = $_POST["physicalFitness"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $expenses = $_POST["expenses"];
    $hearingAbout = $_POST["hearingAbout"];
    $referenceName = $_POST["referenceName"];
    $designation = $_POST["designation"];
    $companyName = $_POST["companyName"];
    $onlinePayment = $_POST["onlinePayment"];
    $amount = $_POST["amount"];

    // Construct the email message
    $subject = "New Application Form Submission";
    $message = "Course: $course\n";
    $message .= "Photo: $photo\n";
    $message .= "Name: $firstName $middleName $lastName\n";
    $message .= "Date of Birth: $dob\n";
    $message .= "Age: $age\n";
    $message .= "Mobile: $mobile\n";
    $message .= "Gender: $gender\n";
    $message .= "Email: $email\n";
    $message .= "OTP: $otp\n";
    $message .= "Blood Group: $bloodGroup\n";
    $message .= "Marital Status: $maritalStatus\n";
    $message .= "nationality:$nationality\n";
    $message .= "aadharCard:$aadharCard\n";
    $message .= "panCard:$panCard\n";
    $message .= "motherTongue:$motherTongue\n";
    $message .= "placeOfBirth:$placeOfBirth\n";
    $message .= "physicalFitness:$physicalFitness\n";
    $message .= "height:$height\n";
    $message .= "weight:$weight\n";
    $message .= "expenses:$expenses\n";
    $message .= "hearingAbout:$hearingAbout\n";
    $message .= "referenceName:$referenceName\n";
    $message .= "designation:$designation\n";
    $message .= "companyName:$companyName\n";
    $message .= "onlinePayment:$onlinePayment\n";
    $message .= "amount:$amount\n";



    // Add more fields as needed...

    // Set the recipient email address
    $to = "contact@digynavalmaritime.com"; // Replace with the actual email address

    // Set additional headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    // Send the email
    $mailResult = mail($to, $subject, $message, $headers);

    // Check if the email was sent successfully
    if ($mailResult) {
        echo "Thank you! Your form has been submitted successfully.";
    } else {
        echo "Error: Unable to send the form. Please try again later.";
    }
} else {
    // If someone tries to access this script directly without submitting the form, redirect them to the form page.
    header("Location: index.html");
    exit();
}
