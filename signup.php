<html lang="en">
<head>
  <link rel="stylesheet" href="signup.css">
  <title>REGISTER </title>
</head>
<body>
	<?php
	$f1=$_POST
	?>
    <section>
        <div class="form-box">
            <div class="form-value">
                    <h2>REGISTER ACCOUNT</h2>
                    <div class="inputbox">
                        <ion-icon name="person-outline"></ion-icon>
                        <input type="username" required>
                        <label for="">User</label>
                    </div>
					<div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" required>
                        <label for="">Email</label>
                    </div>
					<div class="inputbox">
                        <ion-icon name="call-outline"></ion-icon>
                        <input type="cpnumber" required>
                        <label for="">Cellphone Number</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline"></ion-icon>
                        <input type="password" required>
                        <label for="">Password</label>
                    </div>
                    <button>Create Account</button>
                 	
        </div>
    </section>
	 <div id="watermark">Made by: KiryaN31
					</div>
	 </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	
 
</body>
</html>