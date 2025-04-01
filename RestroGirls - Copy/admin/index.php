<?php
session_start();
$msg_error = '';
if(isset($_SESSION['msg'])) {
    $msg_error = $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Food Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        :root {
            --primary-color: #B35458;
            --secondary-color: #6a1b1f;
            --accent-color: #26a69a;
            --light-bg: #f9f9f9;
            --text-dark: #333;
            --text-light: #777;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--light-bg);
            color: var(--text-dark);
            height: 100vh;
            display: flex;
            align-items: center;
        }
        
        .login-container {
            max-width: 500px;
            width: 100%;
            margin: 0 auto;
            padding: 2rem;
        }
        
        .login-card {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border: none;
            transition: transform 0.3s ease;
        }
        
        .login-card:hover {
            transform: translateY(-5px);
        }
        
        .card-header {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            padding: 1.5rem;
            text-align: center;
        }
        
        .card-header h4 {
            margin: 0;
            font-weight: 500;
            font-size: 1.8rem;
        }
        
        .card-content {
            padding: 2rem;
            background-color: white;
        }
        
        .input-field label {
            color: var(--text-light);
            font-weight: 400;
        }
        
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: var(--accent-color);
        }
        
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid var(--accent-color);
            box-shadow: none;
        }
        
        .btn-login {
            background-color: var(--primary-color);
            width: 100%;
            padding: 0 2rem;
            border-radius: 6px;
            font-weight: 500;
            letter-spacing: 0.5px;
            text-transform: none;
            height: 48px;
            line-height: 48px;
            margin-top: 1rem;
        }
        
        .btn-login:hover {
            background-color: var(--secondary-color);
        }
        
        .error-msg {
            background-color: #ffebee;
            color: #c62828;
            padding: 0.8rem 1rem;
            border-radius: 6px;
            margin-bottom: 1.5rem;
            font-size: 0.9rem;
            border-left: 4px solid #c62828;
        }
        
        .input-title {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }
        
        .brand-logo {
            position: absolute;
            top: 20px;
            left: 20px;
            font-weight: 600;
            color: var(--primary-color);
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-card">
            <div class="card-header">
                <h4>Admin Portal</h4>
            </div>
            <form class="card-content" action="login-admin.php" method="post">
                <?php if(!empty($msg_error)): ?>
                    <div class="error-msg">
                        <i class="material-icons left">error</i>
                        <?php echo htmlspecialchars($msg_error); ?>
                    </div>
                <?php endif; ?>

                <div class="row">
                    <div class="input-field col s12">
                        <span class="input-title">Email Address</span>
                        <input name="email" id="email" type="email" class="validate" required>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <span class="input-title">Password</span>
                        <input id="password" name="password" type="password" class="validate" required>
                    </div>
                </div>

                <div class="row">
                    <div class="col s12">
                        <button type="submit" class="waves-effect waves-light btn btn-login">
                            <i class="material-icons left">lock_open</i>
                            Sign In
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>