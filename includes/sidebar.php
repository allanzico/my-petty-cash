<?php
require 'connection.php';
$id = $_SESSION['userID'];
$sql = "SELECT * FROM users WHERE userId =$id;";
$result = mysqli_query($conn,$sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck>0) {
while ($row = mysqli_fetch_assoc($result)) {
$firstName = $row['firstName'];
$lastName = $row['lastName'];
$email = $row['email'];
$admin = $row ['admin'];
$profileImage = $row['profileImage'];

}} ?>

<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <a href="updateImage.php" class="profile-image">
                  <img class="img-xs rounded-circle" src="uploads/<?php echo $profileImage;?>" alt="profile image">
                </a>
                <div class="text-wrapper">
                  <p class="profile-name"><?php echo $firstName." ".$lastName ?></p>
                  <div>
                    <small class="designation text-muted">
                    <?php if ($admin == "Y") {
                      echo "Administrator";
                    } else {
                      echo "User";
                    }
                    ?>
                    </small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <?php if($admin == 'Y') { ?>
              </button>
            </div>
          </li>
 
        <li class="nav-item">
        <a class="nav-link" href="pettyCash.php">
        <i class="menu-icon mdi mdi-cash-multiple"></i>
        <span class="menu-title">Petty cash</span>
        </a>
        </li>
          <li class="nav-item">
        <a class="nav-link" href="profile.php">
        <i class="menu-icon mdi mdi-account-circle"></i>
        <span class="menu-title">My profile</span>
        </a>
        </li>
          <?php } else { ?>
        <li class="nav-item">
        <a class="nav-link" href="user.php">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="profile.php">
        <i class="menu-icon mdi mdi-account-circle"></i>
        <span class="menu-title">My profile</span>
        </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="report.php">
        <i class="menu-icon mdi mdi-finance"></i>
        <span class="menu-title">Financial report</span>
        </a>
        </li>
    <?php  } ?>
        </ul>

      </nav>