<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Untitled Document</title>
    <link rel="stylesheet" href="css/form.css" type="text/css" />
</head>

<body>
<?php
include 'database/dbcon.php';

if (isset($_POST['submit'])) {

    $p_last_name = $_POST['p_last_name'];
    $p_middle_name = $_POST['p_middle_name'];
    $p_first_name = $_POST['p_first_name'];
    $P_Gender = $_POST['P_Gender'];
    $P_D_O_B = $_POST['P_D_O_B'];
    $P_Marital_status = $_POST['P_Marital_status'];
    $P_Nationality = $_POST['P_Nationality'];
    $P_BG = $_POST['P_BG'];
    $N_name = $_POST['N_name'];
    $N_Relationship = $_POST['N_Relationship'];
    $N_Preferred = $_POST['N_Preferred'];
    $N_Permanent_address = $_POST['N_Permanent_address'];
    $N_Current_address = $_POST['N_Current_address'];
    $N_Mobile_number = $_POST['N_Mobile_number'];
    $N_other_contact_number = $_POST['N_other_contact_number'];
    $N_ID_No = $_POST['N_ID_No'];
    $N_PAN = $_POST['N_PAN'];
    $N_Driver_License_no = $_POST['N_Driver_License_no'];
    $N_email = $_POST['N_email'];
    $E_Last_Name = $_POST['E_Last_Name'];
    $E_First_name = $_POST['E_First_name'];
    $E_Relationship_to_you = $_POST['E_Relationship_to_you'];
    $E_Address = $_POST['E_Address'];
    $E_Phone = $_POST['E_Phone'];
    $E_mobile_number = $_POST['E_mobile_number'];
    $E_nominee_name = $_POST['E_nominee_name'];
    $E_N_last_name = $_POST['E_N_last_name'];
    $E_N_first_name = $_POST['E_N_first_name'];
    $S_edu_schoolname = $_POST['S_edu_schoolname'];
    $S_edu_Years_attended = $_POST['S_edu_Years_attended'];
    $P_S_edu_Institution_name = $_POST['P_S_edu_Institution_name'];
    $P_S_edu_years_attended = $_POST['P_S_edu_years_attended'];
    $EP_name = $_POST['EP_name'];   
    $EP_D_O_B = $_POST['EP_D_O_B'];
    $EP_Nickname = $_POST['EP_Nickname'];
    $EP_family_background = $_POST['EP_family_background'];
    $PI_1 = $_POST['PI_1'];
    $PI_2 = $_POST['PI_2'];
    $PI_3 = $_POST['PI_3'];
    
    $insert_query = mysqli_query($conn, "INSERT INTO `emp_info_sheet`(`p_last_name`, `p_middle_name`, `p_first_name`, `P_Gender`, `P_D_O_B`, `P_Marital_status`, `P_Nationality`, `P_BG`, `N_name`, `N_Relationship`, `N_Preferred`, `N_Permanent_address`, `N_Current_address`, `N_Mobile_number`, `N_other_contact_number`, `N_ID_No`, `N_PAN`, `N_Driver_License_no`, `N_email`, `E_Last_Name`, `E_First_name`, `E_Relationship_to_you`, `E_Address`, `E_Phone`, `E_mobile_number`, `E_nominee_name`, `E_N_last_name`, `E_N_first_name`, `S_edu_schoolname`, `S_edu_Years_attended`, `P_S_edu_Institution_name`, `P_S_edu_years_attended`, `EP_name`, `EP_D_O_B`, `EP_Nickname`, `EP_family_background`, `PI_1`, `PI_2`, `PI_3`)  VALUES ('$p_last_name','$p_middle_name','$p_first_name','$P_Gender','$P_D_O_B','$P_Marital_status','$P_Nationality','$P_BG','$N_name','$N_Relationship','$N_Preferred','$N_Permanent_address','$N_Current_address','$N_Mobile_number','$N_other_contact_number','$N_ID_No','$N_PAN','$N_Driver_License_no','$N_email','$E_Last_Name','$E_First_name','$E_Relationship_to_you','$E_Address','$E_Phone','$E_mobile_number','$E_nominee_name','$E_N_last_name','$E_N_first_name','$S_edu_schoolname','$S_edu_Years_attended','$P_S_edu_Institution_name','$P_S_edu_years_attended','$EP_name','$EP_D_O_B','$EP_Nickname','$EP_family_background','$PI_1','$PI_2','$PI_3')");
    
    
    if ($insert_query) {
        ?>
     <script>
      alert ("Data Insert");
     </script>
     <?php
} else {
        ?>
     <script>
      alert ("Error Found")
     </script>
     <?php
}
}
?>
<form action="" method="POST">

<div class="form-body">
        <div class="title">
            <h3 style="display: flex; justify-content: center;">Employee Information Sheet</h3>
        </div>
        <p>
        Please complete the following information below and return as soon as possible to HR along with:
        </p>
       <ul>
        <li>
        Personal photo attached above(three copies)
        </li>
        <li>
        Photocopy of identification proof.( driver license/ passport )
        </li>
        <li>
        Photocopy of address proof.( driver license/ passport /Voter ID card /Adhaar card )
        </li>
        <li>
        Details of Pan card – Photo copy and Scanned copy via email
        </li>
        <li>
        Photocopy of educational qualification certificate
        </li>
        <li>
        Photocopy of experience of certificate of last organizations
        </li>
       </ul>
        <div class="form-list">
            <h3 style="display: flex; justify-content: center;">PERSONAL INFORMATION</h3>
            <ul>
                <li>
                    <label>Last Name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_last_name" placeholder="Enter Last name"/>
                    </div>
                </li>
                <li>
                    <label>Middle name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_middle_name" placeholder="Enter Middle name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="p_first_name" placeholder="Enter first name"/>
                    </div>
                </li>
                <li>
                    <label>Gender(M/F)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Gender" placeholder="Gender"/>
                    </div>
                </li>
                <li>
                    <label>Date of Birth: (dd/mo/yr)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_D_O_B" placeholder="Enter Correct B-O-B"/>
                    </div>
                </li>
                <li>
                    <label>Marital status:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Marital_status" placeholder="Marital status"/>
                    </div>
                </li>
                <li>
                    <label>Nationality:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_Nationality" placeholder="Nationality"/>
                    </div>
                </li>
                <li>
                    <label>Blood Group:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_BG" placeholder="Enter Blood Group"/>
                    </div>
                </li>
                <p style="display: flex; justify-content: center;">Nominee for Full & final settlement amount & PF</p>
                <li>
                    <label>Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_name" placeholder="Enter name"/>
                    </div>
                </li>
                <li>
                    <label>Relationship:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Relationship" placeholder="Relationship"/>
                    </div>
                </li>
                <li>
                    <label>Preferred – (Parent / Spouse)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Preferred" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Permanent address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Permanent_address" placeholder="enter address"/>
                    </div>
                </li>
                <li>
                    <label>Current address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Current_address" placeholder="enter current address"/>
                    </div>
                </li>
                <li>
                    <label>Mobile number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Mobile_number" placeholder="enter mobile number"/>
                    </div>
                </li>
                <li>
                    <label>Other contact number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_other_contact_number" placeholder="Enter optional number"/>
                    </div>
                </li>
                <li>
                    <label>ID No.:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_ID_No" placeholder="Enter id"/>
                    </div>
                </li>
                <li>
                    <label>PAN.:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_PAN" placeholder="Enter pan"/>
                    </div>
                </li>
                <li>
                    <label>Driver’s License No. (if any):</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_Driver_License_no" placeholder="Enter license"/>
                    </div>
                </li>
                <li>
                    <label>Email address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="N_email" placeholder="enter email id"/>
                    </div>
                </li>
                <p style="display: flex; justify-content: center;">EMERGENCY CONTACT INFORMATION</p>
                <p>
                Please provide information on whom to contact in the case of an emergenc
        </p>
        <li>
                    <label>Last Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Last_Name" placeholder="enter last name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_First_name" placeholder="enter first name"/>
                    </div>
                </li>
                <li>
                    <label>Relationship to you:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Relationship_to_you" placeholder="enter relationship"/>
                    </div>
                </li>
                <li>
                    <label>Address:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Address" placeholder="enter address"/>
                    </div>
                </li>
                <li>
                    <label>Phone number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_Phone" placeholder="enter phone number"/>
                    </div>
                </li>
                <li>
                    <label>Mobile number:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_mobile_number" placeholder="enter mobile number"/>
                    </div>
                </li>
                <li>
                    <label>Nominee name :<br>(For PF)</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_nominee_name" placeholder="enter nominee name"/>
                    </div>
                </li>
                <li>
                    <label>Last Name:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_N_last_name" placeholder="enter last name"/>
                    </div>
                </li>
                <li>
                    <label>First name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="E_N_first_name" placeholder="enter first name"/>
                    </div>
                </li>
                <h4 style="display: flex; justify-content: center;">
                Secondary education
        </h4>
        <li>
                    <label>School Name & location: </label>
                    <div class="form-field">
                        <input type="text" class="text" name="S_edu_schoolname" placeholder="enter School name and location"/>
                    </div>
                </li>
                <li>
                    <label>Years attended:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="S_edu_Years_attended" placeholder="enter Years attended"/>
                    </div>
                </li>
                <h4 style="display: flex; justify-content: center;">
                Post-secondary education
        </h4>
        <li>
                    <label>Institution Name & location:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_S_edu_Institution_name" placeholder="enter institution name and location"/>
                    </div>
                </li>
                <li>
                    <label>Years attended:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="P_S_edu_years_attended" placeholder=""/>
                    </div>
                </li>
                <h3 style="display: flex; justify-content: center;">
                EMPLOYEE PROFILE
                </h3>
                <p>
                As a league of vehement & enterprising wizards, Medicaljagat takes pride in our
                incredible network of talented staff who live and work together & remain strongly united
                through a common mission and passion for education. We would really appreciate it if
                you could help us increase connections between our teams, by taking the time to share
                with us some information about your family background and personal interests. Thank
                you!
        </p>
        <li>
                    <label>Name</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_name" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Birth date:</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_D_O_B" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Nickname (preferred name):</label>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_Nickname" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Family Background</label>
                    <p>
                    Please tell us about your family background. Where were you born? Do you have
siblings or any children of your own? What was your childhood environment like?
                    </p>
                    <div class="form-field">
                        <input type="text" class="text" name="EP_family_background" placeholder=""/>
                    </div>
                </li>
                <li>
                    <label>Personal Interests</label>
                    <p>
                    What do you enjoy doing in your free time? What skills or talents are you most proud of?
                    </p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_1" placeholder=""/>
                    </div>
                </li>
                <li>
                    <p>What are your long-term career goals & Personal Goals?</p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_2" placeholder=""/>
                    </div>
                </li>
                <li>
                    <p>Please write a small brief about yourself (as we might use this to write an introduction to
others)</p>
                    <div class="form-field">
                        <input type="text" class="text" name="PI_3" placeholder=""/>
                    </div>
                </li>
                <li class="last">
                    <label>&nbsp;</label>
                    <div class="form-field">
                        <input type="submit" class="button" value="Submit" name="submit" />
                    </div>
                </li>
            </ul>
        </div>
    </div>

</form>
</body>

</html>