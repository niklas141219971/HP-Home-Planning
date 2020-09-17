<!doctype html>
<html lang="de">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HP - Home Planning</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel ="stylesheet" href="style.css">
</head>

<body>
    <header>
        <nav class="navbar navbar-dark bg-dark navbar-expand-md fixed-top">
            <a class="navbar-brand" href="index.php">
                <img src="logo.png" class="rounded" alt="logo" width ="80">
            </a>
            <div class="navbar-nav">
                <a class="nav-item nav-link active" href="index.php">Home</a>
                <a class="nav-item nav-link" href="#">Placeholder</a>
                <a class="nav-item nav-link" href="signup.php">Sign Up</a>

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Log In
                    </button>
                    
                    <div class="dropdown-menu dropdown-menu-right" data-display="static" aria-labelledby="dropdownMenuButton">
                        <form class="dropdown-item px-4 py-3">
                            <div class="form-group">
                                <label for="usernameDropdown">Username</label>
                                <input type="text" class="form-control" id="inputUsername"  placeholder="username">
                            </div>
                            <div class="form-group">
                                <label for="passwordDropdown">Password</label>
                                <input type="password" class="form-control" id="password"  placeholder="password">
                            </div>
                            
                            <button class="btn btn-primary" type="submit">Login</button>
                        </form>
                    </div>
                </div>

            </div>
        </nav>
    </header>