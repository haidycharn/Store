<style>
/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button:not(.close) {
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

</style>


<button class="btn btn-primary" data-toggle="modal" data-target="#signUpModal">Sign Up</button>
<button class="btn btn-success" data-toggle="modal" data-target="#loginModal">Login</button>
<p style="color:red"><?php echo $message;?>

<div id="signUpModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Sign Up</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="container">
                        <label for="user"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <label for="psw-repeat"><b>Repeat Password</b></label>
                        <input type="password" placeholder="Repeat Password" name="passrepeat" required>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary" name="submitBtn" value="signup">Sign Up</button>
                            <button type="button" class="btn btn-secondary cancelbtn"  data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="loginModal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="container">
                        <label for="user"><b>Username</b></label>
                        <input type="text" placeholder="Enter Username" name="username" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password" required>

                        <div class="clearfix">
                            <button type="submit" class="btn btn-primary" name="submitBtn" value="login">Login</button>
                            <button type="button" class="btn btn-secondary cancelbtn"  data-dismiss="modal">Cancel</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
