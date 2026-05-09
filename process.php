<?php
class FormValidator {
    public function validate($name, $email, $message) {
        $errors = [];
        if (empty($name)) $errors[] = "Name is required.";
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Invalid email format.";
        if (empty($message)) $errors[] = "Message cannot be empty.";
        return $errors;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $validator = new FormValidator();
    $errors = $validator->validate($_POST['name'], $_POST['email'], $_POST['message']);

    if (empty($errors)) {
        // In real life, send email here.
        header("Location: thank-you.html");
        exit();
    } else {
        foreach ($errors as $error) {
            echo "<p style='color:red;'>$error</p>";
        }
        echo "<a href='index.php'>Go Back</a>";
    }
}