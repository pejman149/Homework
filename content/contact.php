<section id="main" class="wrapper style1">
    <div class="container">
        <header class="major">
            <h2>Contact Us</h2>
            <p>be in contact</p>
        </header>
        <form method="post" action="index.php?page=contact">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea class="form-control" name="message" id="message" placeholder="Enter your message" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</section>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['page']) && $_GET['page'] == 'contact') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    echo "<script>alert('Thank you, $name. Your message has been received.');</script>";
}
?>