

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="shortcut icon" href="img/logo.png">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.css" rel="stylesheet" />
    
    <link rel="stylesheet" href="css/style.css">
    
        <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    
    <link rel="stylesheet" href="css/style.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap" rel="stylesheet">
    
    
    
    
    
</head>

<body>
    <div class="container">
        <form action="index_db.php" method="post" style="width: 30%; margin: 0 auto;" class="text-center mt-5">
        <h2 class="ff-thai">ล็อคอิน</h2><br>
            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" name="email" id="form1Example1" class="form-control" required placeholder="" oninvalid="this.setCustomValidity('โปรดกรอกอีเมล')" oninput="this.setCustomValidity('')"/>
                <label class="form-label ff-thai" for="form1Example1">อีเมล</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="form1Example2" class="form-control" required oninvalid="this.setCustomValidity('โปรดกรอกรหัสผ่าน')" oninput="this.setCustomValidity('')"/>
                <label class="form-label ff-thai" for="form1Example2">รหัสผ่าน</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-warning btn-block ff-thai">ยืนยัน</button>
        
            <a class="btn btn-warning btn-block ff-thai" href="register.php" role="button ">สมัครสมาชิก</a>
            
        </form>
        
    </div>
            
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.0.0/mdb.min.js"></script>
</body>

</html>