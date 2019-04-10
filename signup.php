<?php  include "includes/header.php"; ?>

<!-- Navigation -->
<?php  include "includes/navigation.php"; ?>

<?php
if(isset($_POST['submit'])){
$username = $_POST['username'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$password = $_POST['password'];

    if(!empty($username) && !empty($email) && !empty($password)){
        $username = mysqli_real_escape_string($connection,$username);
        $mobile = mysqli_real_escape_string($connection,$mobile);
        $email = mysqli_real_escape_string($connection,$email);
        $password = mysqli_real_escape_string($connection,$password);

        $password = password_hash($password, PASSWORD_BCRYPT, array('cost' => 12));

        $query = "SELECT user_email FROM users WHERE user_email = '{$email}' ";
        $user_exist_query = mysqli_query($connection,$query);
        $count_user_exist = mysqli_num_rows($user_exist_query);

        if($count_user_exist==0){
            $query= "insert into users (user_role,username,mobile,user_email,user_password) values ('customer','$username','$mobile','$email','$password')";
            $register_user_query = mysqli_query($connection,$query);
            // $query = "INSERT INTO users(user_role,username,mobile,user_email,user_password) ";
            // $query .= "VALUES( 'customer',?,?,?,?,?)";
            // $stmt = mysqli_prepare($connection,$query);
            // mysqli_stmt_bind_param($stmt,"sssss",$username,$mobile,$email,$password);
            // mysqli_stmt_execute($stmt);
            // mysqli_stmt_close($stmt);
            // confirm_query($stmt);

            $add_user_message = "Your Registration has been submitted";
        }else{
            $user_exist_message = 'You are Already exist!!!';
        }

    }else{
        $message = "fields cannot be empty";
    }

}else{
    $message = "";
}


?>
   
 
<!-- Page Content -->
<section id="login">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-sm-5 col-sm-offset-5 boxview p-3 mt-4" style="width:360px">
                <div class="form-wrap">
                    <p class="lead" style="font-size:30px">Create Account</p>
                        <form role="form" action="signup.php" method="post" id="login-form" autocomplete="off">
                            <h6><?php if(isset($add_user_message)){echo $add_user_message;} ?></h6>
                            <h6><?php if(isset($message)){echo $message;} ?></h6>
                            <div class="form-group">
                                Your name
                                <input type="text" name="username" id="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                Mobile Number
                                <input type="text" name="mobile" id="mobile" class="form-control" pattern="[1-9]{1}[0-9]{9}" title="Invalid Mobile No.">
                            </div>
                            <div class="form-group">
                                Email ID
                                <input type="email" name="email" id="email" class="form-control" required>
                                <h6 class="text-danger ml-3"><?php if(isset($user_exist_message)){echo $user_exist_message;} ?></h6>
                            </div>
                            <div class="form-group">
                                Password
                                <input type="password" name="password" id="key" class="form-control" placeholder="At least 8 characters" required>
                            </div>
                            <input type="submit" name="submit" id="btn-login" class="btn btn-secondary btn-lg btn-block" value="Sign Up">
                        </form>
                </div>
            </div> <!-- /.col-sm-5 -->
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section>

<?php include "includes/footer.php";?>