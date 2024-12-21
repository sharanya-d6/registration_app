<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $dob = htmlspecialchars($_POST['dob']);
    $gender = htmlspecialchars($_POST['gender']);
    
    echo "
        <div style='font-family: Arial, sans-serif; max-width: 600px; margin: 50px auto; padding: 20px; background: #f9f9f9; border-radius: 5px;'>
            <h1>Registration Successful</h1>
            <p><strong>Name:</strong> $name</p>
            <p><strong>Email:</strong> $email</p>
            <p><strong>Phone:</strong> $phone</p>
            <p><strong>Date of Birth:</strong> $dob</p>
            <p><strong>Gender:</strong> $gender</p>
        </div>
    ";
}
?>
