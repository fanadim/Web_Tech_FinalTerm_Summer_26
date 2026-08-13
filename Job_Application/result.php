<!DOCTYPE html>
<html>
<head>
    <title>Application Status</title>
</head>
<body>
    <h2>APPLICATION SUCCESSFUL</h2>

    <?php
    $applicant_id = isset($_REQUEST['applicant_id']) ? $_REQUEST['applicant_id'] : '';
    $fullname     = isset($_REQUEST['fullname']) ? $_REQUEST['fullname'] : '';

    $email        = isset($_GET['email']) ? $_GET['email'] : '';
    $phone        = isset($_GET['phone']) ? $_GET['phone'] : '';
    $gender       = isset($_GET['gender']) ? $_GET['gender'] : '';
    $job_position = isset($_GET['job_position']) ? $_GET['job_position'] : '';
    $qualification= isset($_GET['qualification']) ? $_GET['qualification'] : '';
    $address      = isset($_GET['address']) ? $_GET['address'] : '';
    $cv_filename  = isset($_GET['cv_filename']) ? $_GET['cv_filename'] : '';
    ?>

    <p><strong>Applicant ID:</strong> <?php echo htmlspecialchars($applicant_id); ?></p>
    <p><strong>Name:</strong> <?php echo htmlspecialchars($fullname); ?></p>
    <p><strong>Email:</strong> <?php echo htmlspecialchars($email); ?></p>
    <p><strong>Phone:</strong> <?php echo htmlspecialchars($phone); ?></p>
    <p><strong>Gender:</strong> <?php echo htmlspecialchars($gender); ?></p>
    <p><strong>Job Position:</strong> <?php echo htmlspecialchars($job_position); ?></p>
    <p><strong>Qualification:</strong> <?php echo htmlspecialchars($qualification); ?></p>
    <p><strong>Address:</strong> <?php echo htmlspecialchars($address); ?></p>
    <p><strong>Uploaded CV:</strong> <?php echo htmlspecialchars($cv_filename); ?></p>

    <p><em>Application submitted successfully.</em></p>
</body>
</html>