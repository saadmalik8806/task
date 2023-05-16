<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<div id="wrapper">
  <h1>Employee Information Sheet</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
        <th><span>Last Name:</span></th>
        <th><span>Middle Name:</span></th>
        <th><span>First Name:</span></th>
        <th><span>Gender</span></th>
        <th><span>Date of Birth:</span></th>
		<th><span>Marital status:</span></th>
		<th><span>Nationality:</span></th>
		<th><span>Blood Group:</span></th>

	  </tr>
    </thead>
    <tbody>
	<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['p_last_name'];?></td>
				<td><?php echo $fetch_product['p_middle_name'];?></td>
				<td><?php echo $fetch_product['p_first_name'];?></td>
				<td><?php echo $fetch_product['P_Gender'];?></td>
				<td><?php echo $fetch_product['P_D_O_B'];?></td>
				<td><?php echo $fetch_product['P_Marital_status'];?></td>
				<td><?php echo $fetch_product['P_Nationality'];?></td>
				<td><?php echo $fetch_product['P_BG'];?></td>
				
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 

<!---Nominee for Full & final settlement amount & PF-->

<div id="wrapper2">
  <h1>Nominee for Full & final settlement amount & PF</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
	  <th><span>Name:</span></th>
		<th><span>Relationship:</span></th>
		<th><span>Preferred </span></th>
		<th><span>Permanent address:</span></th>
		<th><span>Current address:</span></th>
		<th><span>Mobile number:</span></th>
		<th><span>Other contact number:</span></th>
		<th><span>ID No.:</span></th>
		<th><span>PAN.:</span></th>
		<th><span>Driver’s License No.</span></th>
		<th><span>Email address:</span></th>

	  </tr>
    </thead>
    <tbody>
						<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['N_name'];?></td>
				<td><?php echo $fetch_product['N_Relationship'];?></td>
				<td><?php echo $fetch_product['N_Preferred'];?></td>
				<td><?php echo $fetch_product['N_Permanent_address'];?></td>
				<td><?php echo $fetch_product['N_Current_address'];?></td>
				<td><?php echo $fetch_product['N_Mobile_number'];?></td>
				<td><?php echo $fetch_product['N_other_contact_number'];?></td>
				<td><?php echo $fetch_product['N_ID_No'];?></td>
				<td><?php echo $fetch_product['N_PAN'];?></td>
				<td><?php echo $fetch_product['N_Driver_License_no'];?></td>
				<td><?php echo $fetch_product['N_email'];?></td>
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 

<!--EMERGENCY CONTACT INFORMATION--->


<div id="wrapper3">
  <h1>EMERGENCY CONTACT INFORMATION</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
	  <th><span>Last Name:</span></th>
		<th><span>First Name:</span></th>
		<th><span>Relationship to you:</span></th>
	  <th><span>Address:</span></th>
	  <th><span>Phone number:</span></th>
	  <th><span>Mobile number:</span></th>
	  <th><span>Nominee name :</span></th>
	  <th><span>Last name: </span></th>
	  <th><span>First Name:</span></th>
	

	  </tr>
    </thead>
    <tbody>
						<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['E_Last_Name'];?></td>
				<td><?php echo $fetch_product['E_First_name'];?></td>
				<td><?php echo $fetch_product['E_Relationship_to_you'];?></td>
				<td><?php echo $fetch_product['E_Address'];?></td>
				<td><?php echo $fetch_product['E_Phone'];?></td>
				<td><?php echo $fetch_product['E_mobile_number'];?></td>
				<td><?php echo $fetch_product['E_nominee_name'];?></td>
				<td><?php echo $fetch_product['E_N_last_name'];?></td>
				<td><?php echo $fetch_product['E_N_first_name'];?></td>
			
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 


<!--Secondary education-->
<div id="wrapper4">
  <h1>Secondary education</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
	  <th><span>School Name & location:</span></th>
	  <th><span>Years attended:</span></th>
	  </tr>
    </thead>
    <tbody>
						<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['S_edu_schoolname'];?></td>
				<td><?php echo $fetch_product['S_edu_Years_attended'];?></td>
				
			
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 
<!--Post-secondary education-->
<div id="wrapper4">
  <h1>Post-secondary education</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
	  <th><span>Institution Name & location:</span></th>
	  <th><span>Years attended:</span></th>
	  </tr>
    </thead>
    <tbody>
						<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['P_S_edu_Institution_name'];?></td>
				<td><?php echo $fetch_product['P_S_edu_years_attended'];?></td>
				
			
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 

<!--EMPLOYEE PROFILE-->
<div id="wrapper5">
  <h1>EMPLOYEE PROFILE</h1>
  
  <table id="keywords" cellspacing="0" cellpadding="0">
    <thead>
      <tr>
	  <th><span>id</span></th>
	  <th><span>Name:</span></th>
	  <th><span>Birth date:</span></th>
	  <th><span>Nickname (preferred name)</span></th>
	  <th><span>Family Background:</span></th>
	  <th><span>Personal Interests</span></th>  
	  <th><span>What are your long-term career goals & Personal Goals?</span></th>
	  <th><span>Please write a small brief about yourself (as we might use this to write an introduction to
others)</span></th>
	</tr>
    </thead>
    <tbody>
						<?php
		                  
                          include '../database/dbcon.php';
                         
                          $select_products = mysqli_query($conn, "SELECT * FROM `emp_info_sheet`");
                          
                          if(mysqli_num_rows($select_products) > 0){
                             while($fetch_product = mysqli_fetch_assoc($select_products)){
                                                 ?>
      <tr>
	  <td><?php echo $fetch_product['id'];?></td>
	  			<td><?php echo $fetch_product['EP_name'];?></td>
				<td><?php echo $fetch_product['EP_D_O_B'];?></td>
				<td><?php echo $fetch_product['EP_Nickname'];?></td>
				<td><?php echo $fetch_product['EP_family_background'];?></td>				
				<td><?php echo $fetch_product['PI_1'];?></td>	
				<td><?php echo $fetch_product['PI_2'];?></td>	
				<td><?php echo $fetch_product['PI_3'];?></td>		
      </tr>
	  <?php
         };
      };
      ?> 
    </tbody>
  </table>
 </div> 







 <script>
 $(function(){
  $('#keywords').tablesorter(); 
});
 </script>
</body>
</html>









