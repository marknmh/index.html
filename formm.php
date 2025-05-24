<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Form</title>
</head>
<body>

<form action="SUBMITt.php" method="POST">
    <div class="header">
        <img src="slsu - logo.png.jpg" alt="SLSU Logo">
        <div class="header-text">
            <h2>Republic of the Philippines</h2>
            <h3>Southern Luzon State University</h3>
            <h3>Request Form for Records</h3>
        </div>
    </div>

    <div class="section-title">Certification</div>
    <div class="checkbox-group">
        <label><input type="checkbox" name="records[]" value="Graduation"> Graduation</label>
        <label><input type="checkbox" name="records[]" value="Enrolment"> Enrolment</label>
        <label><input type="checkbox" name="records[]" value="CAV"> CAV</label>
        <label><input type="checkbox" name="records[]" value="Weighted Ave."> Weighted Ave.</label>
        <label><input type="checkbox" name="records[]" value="CAR"> CAR</label>
        <label><input type="checkbox" name="records[]" value="Units Earned"> Units Earned</label>
        <label><input type="checkbox" name="records[]" value="RLE"> RLE</label>
    </div>

    <div class="section-title">Credentials / Records</div>
    <div class="checkbox-group">
        <label><input type="checkbox" name="records[]" value="TOR"> TOR</label>
        <label><input type="checkbox" name="records[]" value="Diploma"> Diploma</label>
        <label><input type="checkbox" name="records[]" value="FORM-137"> FORM-137</label>
        <label><input type="checkbox" name="records[]" value="Transfer Credentials"> Transfer Credentials</label>
        <label><input type="text" name="other_record" placeholder="Others (specify)"></label>
    </div>

    <div class="section-title">Authentication</div>
    <div class="checkbox-group">
        <label><input type="checkbox" name="records[]" value="Auth TOR"> TOR</label>
        <label><input type="checkbox" name="records[]" value="Auth Diploma"> Diploma</label>
        <label><input type="checkbox" name="records[]" value="Auth Reg. Form"> Reg. Form</label>
    </div>

    <label>Purpose of Request:
        <textarea name="purpose" rows="2"></textarea>
    </label>

    <div class="section-title">Student Information</div>
    <div class="form-row">
        <label>Last Name: <input type="text" name="lastname"></label>
        <label>Given Name: <input type="text" name="firstname"></label>
        <label>Middle Name: <input type="text" name="middlename"></label>
    </div>

    <label>Program/Course: <input type="text" name="program"></label>
    <label>Major: <input type="text" name="major"></label>
    <label>Inclusive Dates of Attendance or Date of Graduation: <input type="text" name="attendance"></label>

    <div class="radio-group">
        <strong>Status:</strong>
        <label><input type="radio" name="status" value="Undergrad"> Undergrad</label>
        <label><input type="radio" name="status" value="Graduate"> Graduate</label>
    </div>

    <label>Contact Number: <input type="text" name="contact"></label>

    <div class="signature-line">
        Signature: <span></span>
    </div>

    <div class="claim-slip">
        <h4>Claim Slip</h4>
        <label>Name of Student: <input type="text" name="fullname"></label>
        <label>Program/Course: <input type="text" name="program_course"></label>
        <div class="form-row">
            <label>Date Filed: <input type="date" name="date_filed"></label>
            <label>ID No. for Undergrad: <input type="text" name="id_no"></label>
        </div>
        <label>Claim Date: <input type="date" name="claim_date"></label>
    </div>

    <br>
    <button type="submit">Submit</button> 
    <button type="button" onclick="window.location.href='tayci.html';">Go Back to TayCI</button>
</form>

</body>
</html>