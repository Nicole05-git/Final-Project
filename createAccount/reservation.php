<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Reservation</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/nouislider/nouislider.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <div class="main">

        <div class="container">
            <div class="signup-content">
                <div class="signup-img">
                    <img src="images/chef-img.jpg" alt="">
                    <!-- <div class="signup-img-content">
                        <h2>Reservation </h2>
                    </div> -->
                </div>
                <div class="signup-form">
                    <form method="POST" class="register-form" id="register-form">
                        <div class="form-row">
                            <div class="form-group">
                                <div class="form-input">
                                    <label for="first_name" class="required">First name</label>
                                    <input type="text" name="first_name" id="first_name" />
                                </div>
                                <div class="form-input">
                                    <label for="last_name" class="required">Last name</label>
                                    <input type="text" name="last_name" id="last_name" />
                                </div>                            
                                <div class="form-input">
                                    <label for="company" class="required">Age</label>
                                    <input type="text" name="age" id="company" />
                                </div>
                                <div class="form-input">
                                    <label for="guests" class="required">Guests</label>
                                    <input type="number" name="uests" id="guests" />
                                </div>
                                <div class="form-input">
                                    <label for="email" class="required">Email</label>
                                    <input type="text" name="email" id="email" />
                                </div>
                                <div class="form-input">
                                    <label for="phone_number" class="required">Phone number</label>
                                    <input type="text" name="phone_number" id="phone_number" />
                                </div>
                                
                            </div>
                            <div class="form-group">
                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="date">Date</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="date" class="required">
                                            <option selected disabled>Pick a date</option>
                                            <option value="14/12/21">14/12/21</option>
                                            <option value="15/12/21">15/12/21</option>
                                            <option value="16/12/21">16/12/21</option>
                                            <option value="17/12/21">17/12/21</option>
                                            <option value="18/12/21">18/12/21</option>
                                            <option value="20/12/21">20/12/21</option>
                                            <option value="21/12/21">21/12/21</option>
                                            <option value="22/12/21">22/12/21</option>    
                                            <option value="23/12/21">23/12/21</option> 
                                            <option value="24/12/21">24/12/21</option>                                  
                                        </select>
                                    </div>
                                </div>
                                <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>
                                        
                                    </div>
                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" value="Male" checked >
                                            <label for="cash" >Male</label>
                                            <span class="check"></span>
                                        </div>
                                        <div class="form-radio-item">
                                            <input type="radio" name="gender" value="Female">
                                            <label for="cheque">Female</label>
                                            <span class="check"></span>
                                        </div>
                                    </div>
                                </div>     

                                <div class="form-select">
                                    <div class="label-flex">
                                        <label for="time">Date</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="date" class="required">
                                            <option selected disabled>Pick a time</option>
                                            <option value="12:00 AM">12:00 AM</option>
                                            <option value="12:30 AM">12:30 AM</option>
                                            <option value="1:00 AM">1:00 AM</option>
                                            <option value="1:30 AM">1:30 AM</option>
                                            <option value="2:00 AM">2:00 AM</option>
                                            <option value="2:30 AM">2:30 AM</option>
                                            <option value="3:00 AM">3:00 AM</option>
                                            <option value="3:30 AM">3:30 AM</option>
                                            <option value="4:00 AM">4:00 AM</option>
                                            <option value="4:30 AM">4:30 AM</option>
                                            <option value="5:00 AM">5:00 AM</option>
                                            <option value="5:30 AM">5:30 AM</option>
                                            <option value="6:00 AM">6:00 AM</option>
                                            <option value="6:30 AM">6:30 AM</option>
                                            <option value="7:00 AM">7:00 AM</option>
                                            <option value="7:30 AM">7:30 AM</option>
                                            <option value="8:00 AM">8:00 AM</option>
                                            <option value="8:30 AM">8:30 AM</option>
                                            <option value="9:00 AM">9:00 AM</option>
                                            <option value="9:30 AM">9:30 AM</option>
                                            <option value="10:00 AM">10:00 AM</option>
                                            <option value="10:30 AM">10:30 AM</option>
                                            <option value="11:00 AM">11:00 AM</option>
                                            <option value="11:30 AM">11:30 AM</option>
                                            <option value="12:00 PM">12:00 PM</option>
                                            <option value="12:30 PM">12:30 PM</option>
                                            <option value="1:00 PM">1:00 PM</option>
                                            <option value="1:30 PM">1:30 PM</option>
                                            <option value="2:00 PM">2:00 PM</option>
                                            <option value="2:30 PM">2:30 PM</option>
                                            <option value="3:00 PM">3:00 PM</option>
                                            <option value="3:30 PM">3:30 PM</option>
                                            <option value="4:00 PM">4:00 PM</option>
                                            <option value="4:30 PM">4:30 PM</option>
                                            <option value="5:00 PM">5:00 PM</option>
                                            <option value="5:30 PM">5:30 PM</option>
                                            <option value="6:00 PM">6:00 PM</option>
                                            <option value="6:30 PM">6:30 PM</option>
                                            <option value="7:00 PM">7:00 PM</option>
                                            <option value="7:30 PM">7:30 PM</option>
                                            <option value="8:00 PM">8:00 PM</option>
                                            <option value="8:30 PM">8:30 PM</option>
                                            <option value="9:00 PM">9:00 PM</option>
                                            <option value="9:30 PM">9:30 PM</option>
                                            <option value="10:00 PM">10:00 PM</option>
                                            <option value="10:30 PM">10:30 PM</option>
                                            <option value="11:00 PM">11:00 PM</option>
                                            <option value="11:30 PM">11:30 PM</option>
                                        </select>
                                    </div>   
                                
                                </div>
                            </div>  
                        </div>                        
                     
                        <div class="form-submit">
                            <input type="submit" value="Submit" class="submit" id="submit" name="submit" />
                            <input type="submit" value="Reset" class="submit" id="reset" name="reset" />
                        </div>

                    </form>
                </div>
            </div>
        </div>

    </div>

    <!-- JS -->
    <script src="js/vendor/bootstrap.min.js"></script>
    <script src="js/vendor/bootstrap/bootstrap-datepicker.min.js"></script>
    <script src="js/vendor/bootstrap-clockpicker.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/nouislider/nouislider.min.js"></script>
    <script src="vendor/wnumb/wNumb.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>

</body>
</html>



<!-- Inserting Data Into The Database -->
<?php
    require('C:\xampp\htdocs\php_files\Amaki\Database_Connection.php');
    session_start();

    // insert user details in signin table
    $fname= null;
    $lname= null;
    $email= null;
    $tell= null;
    $gender= null;
    $guests= null;
    $age= null;
    $time= null;
    $fdate= null;
    if(isset($_POST['signin'])){
        if(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirmpassword'])){
            // name
            $_SESSION['first_name']= $_POST['first_name'];
            $fname = $_SESSION['first_name'];
    
            // email
            $_SESSION['last_name']= $_POST['last_name'];
            $lemail = $_SESSION['last_name'];
    
            //email
            $_SESSION['email']= $_POST['email'];
            $email = $_SESSION['email'];
    
            //tellphone_number
            $_SESSION['phone_number']= $_POST['phone_number'];
            $tell = $_SESSION['phone_number'];

            //gender
            $_SESSION['gender']= $_POST['gender'];
            $gender = $_SESSION['gender'];
    
            //guests
            $_SESSION['guests']= $_POST['guests'];
            $guestsSION['guests'];

             //age
             $_SESSION['age']= $_POST['age'];
             $age = $_SESSION['age'];

             //time
            $_SESSION['time']= $_POST['time'];
            $time= $_SESSION['datee'];

             //date
             $_SESSION['date']= $_POST['date'];
             $date = $_SESSION['date'];
               
             
             //insert into user credentials to database 
            $iQuery="INSERT INTO `reserv`(`fname`, `lname`,`resv_date`, `resv_time`, `email`, `guests`, `age`, `gender`, `contact`) VALUES ('$fname','$lname', '$date', '$time', '$email', '$guests', '$age','$gender', '$tell',)";
    
            //execute query statement
            $results = mysqli_query($conn, $iQuery);
    
            //check sql results
            if($results==TRUE){
                echo "sign in successful";
            }else{
                echo " sign in was not successful";
            }
        }
    }

    // if(isset($_POST['submit'])){
    //     $fname = $_POST['first_name'];
    //     $lname = $_POST['last_name'];
    //     $email = $_POST['email'];
    //     $tell = $_POST['phone_number'];
    //     $gender = $_POST['gender'];
    //     $guests = $_POST['guests'];
    //     $age = $_POST['age'];
    //     $time= $_Post['time'];
    //     $date= $_Post['date'];
       


    //     // Insert into postential user table
    //     $sql_user_data = "INSERT INTO `reserv`(`fname`, `lname`,`resv_date`, `resv_time`, `email`, `guests`, `age`, `gender`, `contact`) VALUES ('$fname','$lname', '$date', '$time', '$email', '$guests', '$age','$gender', '$tell',)";

    //      $result = mysqli_query($connection, $iQuery);           

    // }


?>




                                

                                <!-- <div class="form-radio">
                                    <div class="label-flex">
                                        <label for="payment">Gender</label>                                        
                                    </div>

                                    <div class="form-radio-group">            
                                        <div class="form-radio-item">
                                            <label for="payment">Gender: </label>                            
                                        </div>
                                        <div class="form-radio-group">            
                                            <div class="form-radio-item">
                                                <input type="radio" name="gender" value="Male"  >
                                                <label for="cash" >Male</label>
                                                <span class="check"></span>
                                            </div>
                                            <div class="form-radio-item">
                                                <input type="radio" name="gender" value="Female">
                                                <label for="cheque">Female</label>
                                                <span class="check"></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 -->
                                    
                                <!-- </div> -->
                                <!-- <div class="form-input">
                                    <label for="chequeno">NationalID</label>
                                    <input type="text" name="nationalID" id="chequeno" />
                                </div> -->
                                <!-- <div class="form-input">
                                    <label for="blank_name">Region</label>
                                    <input type="text" name="region" id="blank_name" placeholder="Region" />
                                </div> -->
                                <!-- <div class="form-input">
                                    <label for="blank_name">City</label>
                                    <input type="text" name="city" placeholder="City" />
                                </div> -->
                                <!-- <div class="form-input">
                                    <label for="blank_name">Streetname</label>
                                    <input type="text" name="streetname" placeholder="Streetname" />
                                </div> -->
                                <!-- <div class="form-input">
                                    <label for="blank_name">House Number</label>
                                    <input type="text" name="house_number" placeholder="House number" />
                                </div> -->


                                <!--     <div class="form-input">
                                    <label for="payable">Password</label>
                                    <input type="password" name="password" id="payable" placeholder="Password to help you login to your data" />
                                </div> -->

                                
                                <!-- <div class="form-select">
                                    <div class="label-flex">
                                        <label for="meal_preference">Nationality</label>
                                    </div>
                                    <div class="select-list">
                                        <select name="nationality" id="meal_preference">
                                            <option value="Ghanaian">Ghanaian</option>
                                            <option value="Nigerian">Nigerian</option>
                                            <option value="South Africa">South African</option>
                                        </select>
                                    </div>
                                </div> -->