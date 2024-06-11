<section id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Register</h2>
            <p>Create a new account.</p>
        </header>
        <form method="post" action="index.php?page=register">
            <div  class="form-group">
                <label for="username" >Username</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>
    </div>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'register') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    
    $conn = new mysqli("localhost", "root", "", "your_database");

  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $stmt = $conn->prepare("INSERT INTO users (username, email, password) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $username, $email, $password);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you, $username. Your registration has been received.');</script>";
    } else {
        echo "<script>alert('Registration failed. Please try again.');</script>";
    }

    $stmt->close();
    $conn->close();
}
?>