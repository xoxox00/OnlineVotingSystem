
<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location: ../");
}

$userdata = $_SESSION['userdata'];
$groupsdata = $_SESSION['groupsdata'];
if($userdata['status']==0){
    $status = '<b style="color:red">Not Voted</b>';
}
else{
    $status = '<b style="color:green">Voted</b>';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashBoard</title>
</head>
<body>
    <a href="../">back</a>
    <a href="logout.php">logOut</a>
    <h1>Online Voting System</h1>

    <div class="profile">
       <img src="../uploads/<?php echo $userdata['photo'];?>" alt="" height="200" width="200">
       <p><b>Name</b> : <?php echo $userdata['name'] ;?></p>
       <p><b>Mobile</b> : <?php echo $userdata['mobile'] ;?></p>
       <p><b>Address</b> : <?php echo $userdata['address'] ;?></p>
       <p><b>Status</b> : <?php echo $status ;?></p>

    </div>
    <hr>
    <div class="group">
        <?php 
            if($_SESSION['groupsdata']){
                for($i=0;$i<count($groupsdata);$i++){
                    ?>
                        <div class="container-group">
                        <img src="../uploads/<?php echo $groupsdata[$i]['photo']; ?>" alt="Group Image" height="100" width="100">

                            <p><b>Group Name </b> <?php echo $groupsdata[$i]['name'] ?>:</p>
                            <p><b>Votes </b>: <?php echo $groupsdata[$i]['votes']?></p>
                            <form action="../api/vote.php" method="POST">
                            <input type="hidden" name="gvotes" value="<?php echo $groupsdata[$i]['votes']; ?>">
                            <input type="hidden" name="gid" value="<?php echo $groupsdata[$i]['id']?>">
                                <?php
                                    if($_SESSION['userdata']['status']==0){
                                        ?>
                                        
                                        <button type="submit" id="votebtn" name="votebtn"> vote </button>
                                        <?php
                                    }
                                    else{
                                        ?>
                                        <button disabled> voted </button>
                                        <?php
                                    }
                                ?>
                                
                            </form>
                        </div>
                        <hr>
                    <?php
                }
            }
        
        ?>
    </div>


</body>
</html>