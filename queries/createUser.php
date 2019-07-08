<?php
include '../header.php';
?>

<body>

    <?php
    include '../navbar.php';
    ?>

    <div class="position-relative overflow-hidden text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 font-weight-normal">Create user</h1>
        </div>
    </div>

    <div class="container">
        <form action="newUser.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="inputName">Name</label>
                    <input name="usr_name" type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputFirstName">First name</label>
                    <input name="usr_firstname" type="text" class="form-control" id="inputFirstNAme" placeholder="FirstName">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputEmail4">Email</label>
                    <input name="usr_email" type="email" class="form-control" id="inputEmail4" placeholder="Email">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-4">
                    <label for="inputDep">City</label>
                    <input name="usr_dep" type="text" class="form-control" id="inputDep" placeholder="Department">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputCity">City</label>
                    <input name="usr_city" type="text" class="form-control" id="inputCity" placeholder="City">
                </div>
                <div class="form-group col-md-4">
                    <label for="inputPhone">Phone number</label>
                    <input name="usr_phone" type="tel" class="form-control" id="inputPhone" pattern="[0-9]{10}">
                </div>
            </div>
            <div class="form-row">

                <div class="form-group col-md-3">
                    <label for="inputLogin">Login</label>
                    <input name="usr_login" type="text" class="form-control" id="inputDep" placeholder="Login">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputPwd">Password</label>
                    <input name="usr_pwd" type="password" class="form-control" id="inputPwd" placeholder="Password">
                </div>
            </div>
            <div class="row">
                <div class="alert alert-danger" col-md-6 role="alert">
                    Take care, the login and password cannot be changed after creation !
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>



    <?php
    include '../footer.php';
    ?>