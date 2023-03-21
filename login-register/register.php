<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
</head>

<body>

    <div class="container">
        <form action="register_db.php" method="post" style="width: 30%; margin: 0 auto;" class="text-center mt-5">
        <h2>สมัครสมาชิก</h2><br>
        <?php if (isset($_SESSION['err_password'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['err_password']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_query'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['err_query']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['exist_email'])) : ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $_SESSION['exist_email']; ?>
            </div>
        <?php endif; ?>
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="firstname" id="form3Example1" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกชื่อ')" oninput="this.setCustomValidity('')"/>
                        <label class="form-label" for="form3Example1">ชื่อ</label>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <input type="text" name="lastname" id="form3Example2" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกนามสกุล')" oninput="this.setCustomValidity('')"/>
                        <label class="form-label" for="form3Example2">นามสกุล</label>
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form3Example3" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกอีเมล')" oninput="this.setCustomValidity('')"/>
                <label class="form-label" for="form3Example3">อีเมล</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form3Example4" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกรหัสผ่าน')" oninput="this.setCustomValidity('')"/>
                <label class="form-label" for="form3Example4">รหัสผ่าน</label>
            </div>
            <!-- Confirm password input -->
            <div class="form-outline mb-4">
                <input type="password" name="confirm_password" id="form3Example5" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกรหัสผ่าน')" oninput="this.setCustomValidity('')"/>
                <label class="form-label" for="form3Example5">ยืนยัน รหัสผ่าน</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-warning btn-block ">ยืนยัน</button>

            <a class="btn btn-warning btn-block" href="index.php" role="button">ยกเลิก</a>    
        </form>
    </div>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
</body>

</html>

<?php
    if (isset($_SESSION['err_password']) || isset($_SESSION['err_query']) || isset($_SESSION['exist_email'])) {
        unset($_SESSION['err_password']);
        unset($_SESSION['err_query']);
        unset($_SESSION['exist_email']);
    }
?>