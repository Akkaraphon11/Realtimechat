<?php
session_start();
if(isset($_SESSION['unique_id'])){ // if user is logged in
    header("location: users.php");
    }
?>
<?php include_once "header.php"; ?>
<body>
    <div class="wrapper" >
        <section class="from sigup">
            <header>Realtion Chat App</header>
            <form action="#" enctype="multipart/form-data" autocomplete="off">
                <div class="error-txt"></div>
                <div class="name-details">
                    <div class="field input">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="First Name" required>
                    </div>
                    <div class="field input">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Email Name" required>
                    </div>
                </div>
                <div class="field input">
                    <label>Email address</label>
                    <input type="text" name="email" placeholder="Email your email" required>
                </div>
                <div class="field input">
                    <label>password</label>
                    <input type="password" name="password" placeholder="Enter new password" required>
                    <i class="fas fa-eye"></i>
                </div>
                <div class="field image">
                    <label>Select Image></label>
                    <input type="file image" name="image" required>
                </div>
                <div class="field button">
                    <input type="submit" value="Contion to Chat">
                </div>
            </form>
            <div class="link">Already signed up? <a href="#">Login now</a></div>
        </section>
    </div>

    <script class="javascript/pass-show-hide.js"></script>
    <script class="javascript/signup.js"></script>
    
</body>
</html>