<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $errors = array();

    $applicant_id  = trim($_POST['applicant_id']);
    $fullname      = trim($_POST['fullname']);
    $email         = trim($_POST['email']);
    $phone         = trim($_POST['phone']);
    $password      = $_POST['password'];
    $gender        = isset($_POST['gender']) ? $_POST['gender'] : '';
    $job_position  = $_POST['job_position'];
    $qualification = trim($_POST['qualification']);
    $address       = trim($_POST['address']);

    if (empty($applicant_id)) {
        $errors[] = "Applicant ID is required.";
    }

    if (empty($fullname)) {
        $errors[] = "Name is required.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Invalid email format.";
    }

    if (empty($phone)) {
        $errors[] = "Phone number is required.";
    } elseif (!preg_match('/^[0-9]{11}$/', $phone)) {
        $errors[] = "Phone number must contain exactly 11 digits.";
    }

    if (empty($password)) {
        $errors[] = "Password is required.";
    } elseif (strlen($password) < 6) {
        $errors[] = "Password must be at least 6 characters.";
    }

    if (empty($gender)) {
        $errors[] = "Please select your gender.";
    }

    if (empty($job_position)) {
        $errors[] = "Please select a job position.";
    }

    if (empty($qualification)) {
        $errors[] = "Qualification is required.";
    }

    if (empty($address)) {
        $errors[] = "Address is required.";
    }

    if (!isset($_FILES['cv']) || $_FILES['cv']['error'] == UPLOAD_ERR_NO_FILE) {
        $errors[] = "Please upload your CV.";
    } else {
        $file_name = $_FILES['cv']['name'];
        $file_size = $_FILES['cv']['size'];
        $file_tmp  = $_FILES['cv']['tmp_name'];

        $file_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        $allowed_extensions = array("pdf", "doc", "docx");

        if (!in_array($file_ext, $allowed_extensions)) {
            $errors[] = "CV must be in PDF, DOC, or DOCX format.";
        }

        if ($file_size > 2 * 1024 * 1024) {
            $errors[] = "CV size must not exceed 2 MB.";
        }
    }

    if (!empty($errors)) {
        echo "<h2>Application Failed!</h2>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
        echo "<br><a href='index.php'>Go Back</a>";
    } else {
        $target_path = "uploads/" . basename($file_name);
        move_uploaded_file($file_tmp, $target_path);

        $redirect_url = "result.php?" . http_build_query(array(
            'applicant_id' => $applicant_id,
            'fullname'     => $fullname,
            'email'        => $email,
            'phone'        => $phone,
            'gender'       => $gender,
            'job_position' => $job_position,
            'qualification'=> $qualification,
            'address'      => $address,
            'cv_filename'  => $file_name
        ));

        header("Location: " . $redirect_url);
        exit();
    }
} else {
    echo "Invalid Request!";
}
?>