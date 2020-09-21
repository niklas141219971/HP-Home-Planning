<?php
    require_once('header.php');
?>

<main role="main" class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-4">

            </div>
            <div class="col">
                <div class="signup-container">
                    <h1>Sign Up Form</h1>

                    <form action ="signup.create.php">
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" class="form-control" id="inputUsername"  placeholder="Enter username">
                        </div>
                        <div class="form-group">
                            <label for="email">E-Mail</label>
                            <input type="text" class="form-control" id="inputemail"  placeholder="Enter an e-mail">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password"  placeholder="Enter a password">
                        </div>
                        <div class="form-group">
                            <label for="passwordRepeat">Repeat Password</label>
                            <input type="password" class="form-control" id="passwordRepeat"  placeholder="Enter a password">
                        </div>
                       <button class="btn btn-primary" type="submit">Sign Up</button>
                    </form>
                </div>
            </div>
            <div class="col-4">
                
            </div>
        </div>
    </div>
</main>


<?php
    require_once('footer.php');
?>