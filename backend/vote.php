<?php
session_start();
include("connect.php");

// Fetch and sanitize POST data
$votes = (int)$_POST['gvotes'];
$gid = (int)$_POST['gid'];
$uid = (int)$_SESSION['userdata']['id'];

// Calculate total votes
$total_votes = $votes + 1;

// Update votes for the group
$update_votes = mysqli_query($connect, "UPDATE users SET votes='$total_votes' WHERE id='$gid'");

// Update user's voting status
$update_user_vote = mysqli_query($connect, "UPDATE users SET status=1 WHERE id='$uid'");

if ($update_votes && $update_user_vote) {
    // Fetch updated group data
    $groups = mysqli_query($connect, "SELECT * FROM users");
    $groupsdata = mysqli_fetch_all($groups, MYSQLI_ASSOC);

    // Update session data
    $_SESSION['userdata']['status'] = 1;
    $_SESSION['groupsdata'] = $groupsdata;

    // Success message
    echo '
    <script>
        alert("Voting Successful");
        window.location="../routes/dashboard.php";
    </script>
    ';
} else {
    // Error handling
    $error_message = mysqli_error($connect);
    echo '
    <script>
        alert("An error occurred: ' . addslashes($error_message) . '");
        window.location="../routes/dashboard.php";
    </script>
    ';
}
?>
