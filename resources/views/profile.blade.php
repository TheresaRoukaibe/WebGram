<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>User Profile</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" href="css/profile.css">
	</head>
	<body>
		<div class="wrapper">
            <form action="POST" id="wizard">
        		<!-- SECTION 1 -->
                <h4></h4>
                <section>
                    <h3>User profile</h3>
                	<div class="form-row">
                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phone_number" id="phone_number" />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="text">Email</label>
                                <input type="text" class="form-input" name="email" id="email"/>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password"/>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Edit"/>
                        </div>
                
                </section>
                
				
                
            </form>
		</div>

		<script src="js/jquery-3.3.1.min.js"></script>
		
		<!-- JQUERY STEP -->
		<script src="js/jquery.steps.js"></script>

		<!-- DATE-PICKER -->
		<script src="vendor/date-picker/js/datepicker.js"></script>
		<script src="vendor/date-picker/js/datepicker.en.js"></script>

		<script src="js/main.js"></script>

<!-- Template created and distributed by Colorlib -->
</body>
</html>