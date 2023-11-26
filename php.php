<?php
// User profile data
$userProfile = array(
    'name' => 'VISHAL KUMAR',
    'age' => 20,
    'area' => 'BIHAR',
    'coures' => 'Web Developer'
);
?>

<!DOCTYPE html>
<html>

<head>
    <title>User Profile</title>
</head>

<body>
    <h1>User Profile</h1>
    <p><strong>Name:</strong> <?php echo $userProfile['name']; ?></p>
    <p><strong>Age:</strong> <?php echo $userProfile['age']; ?></p>
    <p><strong>area:</strong> <?php echo $userProfile['area']; ?></p>
    <p><strong>coures:</strong> <?php echo $userProfile['coures']; ?></p>
</body>

</html>