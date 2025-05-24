<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "request_form";

// Connect to database
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("❌ Database connection failed: " . $conn->connect_error);
}



// Capture form data
$lastname = $_POST['lastname'] ?? "";
$firstname = $_POST['firstname'] ?? "";
$middlename = $_POST['middlename'] ?? "";
$program = $_POST['program'] ?? "";
$major = $_POST['major'] ?? "";
$attendance = $_POST['attendance'] ?? "";
$status = $_POST['status'] ?? "";
$contact = $_POST['contact'] ?? "";
$purpose = $_POST['purpose'] ?? "";
$claim_name = $_POST['claim_name'] ?? "";
$claim_program = $_POST['claim_program'] ?? "";
$date_filed = $_POST['date_filed'] ?? "";
$id_no = $_POST['id_no'] ?? null;
$claim_date = $_POST['claim_date'] ?? "";

// ✅ Process checkboxes (Convert array to comma-separated string)
$records = isset($_POST['records']) ? implode(", ", $_POST['records']) : ""; 

// Prepare SQL statement (Removed `id` since it's AUTO_INCREMENT)
$stmt = $conn->prepare("INSERT INTO request (lastname, firstname, middlename, program, major, attendance, status, contact, purpose, claim_name, claim_program, date_filed, id_no, claim_date, records) 
VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if ($stmt === false) {
    die("❌ Error preparing statement: " . $conn->error);
}

// ✅ Bind parameters (Fixed mismatch issue)
if (!$stmt->bind_param("sssssssisssisis", $lastname, $firstname, $middlename, $program, $major, $attendance, $status, $contact, $purpose, $claim_name, $claim_program, $date_filed, $id_no, $claim_date, $records)) {
    die("❌ Error binding parameters: " . $stmt->error);
}

// ✅ Execute SQL statement
if (!$stmt->execute()) {
    die("❌ Error inserting record: " . $stmt->error);
} else {
    echo "<div style='width: 100%; max-width: 600px; margin: auto; padding: 20px; text-align: center; background-color: #dff0d8; border: 1px solid #3c763d; color: #3c763d; font-size: 18px; border-radius: 5px;'>
            ✅ Your request has been successfully submitted! <br>
            📅 Date Filed: <strong>$date_filed</strong> <br>
            🎓 Program: <strong>$program - $major</strong> <br>
            📞 Contact: <strong>$contact</strong> <br>
            🆔 ID No: <strong>$id_no</strong> <br>
            📋 Selected Records: <strong>$records
            </strong><br>
            !Afer submitting the form - click the button 'go back to form' below and print the form for claim slip.  'Control + P' To print. <br> Wait for a text or call from the admin about your request Thank you!. 

            <br> <button onclick=\"window.location.href='TayCi.php';\" style='background-color: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px;'>Go back to Home</button>
        <button onclick=\"window.location.href='formm.php';\" style='background-color: #3498db; color: white; padding: 10px 20px; border: none; cursor: pointer; border-radius: 5px;'>Go back to form</button> </br>
          </div>";
}

$stmt->close();
$conn->close();
?>