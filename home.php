<?php

session_start();

if (!$_SESSION['auth']) {
    header("location: login_form.php");
}

?>

<?php include 'header.php' ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10 mt-5">
            <div class="card">
                <div class="card-header">
                   Home Page
                </div>
                <div class="card-body">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, dignissimos quae repellat accusantium, officiis dolorem iste vel aliquid amet necessitatibus accusamus quibusdam impedit mollitia ullam, quas aperiam numquam. Voluptate, tenetur?</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php' ?>