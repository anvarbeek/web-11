<?php
include 'header.php';
include 'config.php';
?>

<h1>Foydalanuvchilar Ro'yhati</h1>

<?php
if (isset($_GET['success']) && $_GET['success'] == 'good') {
    echo '<div class="alert alert-success">User qoshildi</div>';
}

$sql = "SELECT * FROM sign_up";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table class='table table-bordered mt-5'>";
    echo "<tr>";
    echo "<td>ID</td>";
    echo "<td>Full Name</td>";
    echo "<td>Phone</td>";
    echo "<td>Email</td>";
    echo "<td>Password</td>";
    echo "<td>Radio</td>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
        echo "<td>" . $row['FullName'] . "</td>";
        echo "<td>" . $row['Phone'] . "</td>";
        echo "<td>" . $row['Email'] . "</td>";
        echo "<td>" . $row['Password'] . "</td>";
        echo "<td>" . $row['Radio'] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo '<div class="alert alert-danger">No users found</div>';
}

mysqli_close($con);
?>
