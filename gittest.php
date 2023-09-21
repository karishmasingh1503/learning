<?php
    //echo 'Starting using git<br/>';
    /***********************Comments************************ */
    //Comment Daalne k baad dekhte hain print hoga ya nahi (This is single line comment)
    #hello there how are you (This is also single line comment)
    /*
        (this is multiline comment)
        Comment
        daalne
        k
        baad
        dekhte
        h
        print
        hoga
        ya
        nahi
    */
    /*************************Echo*************************** */
    //echo " Hello<br/>";
    //echo " Hi<br/>";
     /*******************Line Break************ */
    // Browser - > echo "<br/>";
    //CMD - > echo PHP_EOL;
    /***********************Variables**************** */
    $amount="INR 360.79 ONLY";
    $mobile="+918077597688";
    $full_name="ANKIT SINGH";
    $city="GHAZIABAD";
    $email="developer@w3study.in";

    //Storing Address
    $house_no="EK SAW CHAR";
    $floor="1st Floor";
    $building_name="EN KE BEE Homes";
    $street="Radha Swami Satsang Ashram Road";
    $area="Shahbery";
    $city="Greator Noida";
    $distrcit="Gautam Buddh Nagar";
    $pincode="do zero teen zero zero chhe";
    $state="Uttar Pradesh";
    $country="India";
    $contact_person="MS. Karishma Singh";


    $address_of_user = $contact_person.", "."<br>".$house_no." - ". $floor.", ". $building_name.",<br>".$street.",<br/>".$area." - ".$city.",<br>".$distrcit." - (".$pincode."),<br>".$state." - ".$country;

    //echo $address_of_user;
	foreach($_POST as $key => $val){
		echo $key." = ".$val."<br/>";
	}

?>
<style>
	.input-fields input{
		width:80%;
		align:center;
		padding:10px;
		margin:2px;
	}
	.input-fields select{
		width:80%;
		align:center;
		padding:10px;
		margin:2px;
	}
</style>
<div style="min-width:100%">
	<div style="margin-top:50px;width:25%;display:inline-block;">&nbsp;</div>
	<div style="width:50%;margin-top:50px;display:inline-block;" class="input-fields">
		<h2>Enter You Full Address  </h2>
		<form method="post" action="">
			<h4>First Name<h4>
			<input type="text" name="first_name" id="first_name" placeholder="Enter your first name" minlength="3" maxlength="20" pattern="([A-Za-z])*" value="" required><br/>
			<h4>Middle Name<h4>
			<input type="text" name="middle_name" id="middle_name" placeholder="Enter your middle name" minlength="3" maxlength="20" pattern="([A-Za-z])*" value="" required><br/>
			<h4>Last Name<h4>
			<input type="text" name="last_name" id="last_name" placeholder="Enter your last name" minlength="3" maxlength="20" pattern="([A-Za-z])*" value="" required><br/>
			
			
			<h4>Mobile#<h4>
			<input type="text" name="mobile_no" id="mobile_no" placeholder="8077597688" minlength="10" maxlength="10" pattern="[6-9]([0-9])*" value="" required><br/>
			
			<h4>House#<h4>
			<input type="text" name="house_no" id="house_no" placeholder="Enter Your House Number" minlength="1" maxlength="10" pattern="([A-Za-z0-9-/])*" value="" required><br/>
			
			<h4>Floor<h4>
			<input type="text" name="floor" id="floor" value="" placeholder="Floor on which you stay" minlength="1" maxlength="10" pattern="([A-Za-z0-9-\s])*" required><br/>
			
			<h4>Building Name<h4>
			<input type="text" name="building_name" id="building_name" placeholder="Your Building Name" value="" minlength="3" maxlength="20" pattern="([A-Za-z])*" required><br/>
			
			<h4>Street/Colony/Village<h4>
			<input type="text" name="street" id="street" value="" placeholder="Enter Street/Colony/Village of yours" minlength="3" maxlength="50" pattern="([A-Za-z])*" required><br/>
			
			<h4>Area/Nearby<h4>
			<input type="text" name="area" id="area" value="" placeholder="Enter Area/Nearby Mark" minlength="3" maxlength="50" pattern="([A-Za-z])*" required><br/>
			
			<h4>Country<h4>
			<select name="country" id="country"  required>
				<option value="">Select a country</option>
				<option value="India">India</option>
				<option value="Pakistan">Pakistan</option>
				<option value="China">China</option>
				<option value="United States">United States</option>
			<select><br/>
			
			<h4>State<h4>
			<select name="state" id="state"  required>
				<option value="">Select a State</option>
				<option value="Uttar Pradesh">Uttar Pradesh</option>
				<option value="Haryana">Haryana</option>
				<option value="Punjab">Punjab</option>
				<option value="Madhya Pradesh">Madhya Pradesh</option>
			<select><br/>
			
			<h4>City<h4>
			<select name="city" id="city"  required>
				<option value="">Select a City</option>
				<option value="Ghaziabad">Ghaziabad</option>
				<option value="Noida">Noida</option>
				<option value="G. Noida">G. Noida</option>
				<option value="Gurugram">Gurugram</option>
			<select><br/>
			
			<h4>District<h4>
			<input type="text" name="distrcit" id="distrcit" placeholder="What is your District" minlength="3" maxlength="20" pattern="([A-Za-z-\s])*" value="" required><br/>
			
			<h4>Pincode<h4>
			<input type="number" placeholder="202001" id="pincode" maxlength="6" minlength="6" min="100000" value="" required><br/><br/>
			
			<h4>Gender<h4>
			<input type="radio" style="height:15px;width:15px;" name="gender" id="gender_male" value="Male" checked required>&nbsp;Male&nbsp;&nbsp;
			<input type="radio" style="height:15px;width:15px;" name="gender" id="gender_female" value="Female" required>&nbsp;Female&nbsp;&nbsp;
			<input type="radio" style="height:15px;width:15px;" name="gender" id="gender_other" value="Other" required>&nbsp;Other&nbsp;&nbsp;
			<br/><br/>
			<h4>Skills<h4>
			<input type="checkbox" style="height:15px;width:15px;" name="skills[]" id="skills_1" value="PHP" >&nbsp;PHP&nbsp;&nbsp;
			<input type="checkbox" style="height:15px;width:15px;" name="skills[]" id="skills_2" value="JAVA" >&nbsp;JAVA&nbsp;&nbsp;
			<input type="checkbox" style="height:15px;width:15px;" name="skills[]" id="skills_3" value="HTML" >&nbsp;HTML&nbsp;&nbsp;
			<input type="checkbox" style="height:15px;width:15px;" name="skills[]" id="skills_4" value="PYTHON" >&nbsp;PYTHON&nbsp;&nbsp;
			<br/><br/>
			
			<input type="submit" value="Save Details" name="submit">
		</form>	
	</div>
	<div style="margin-top:50px;width:25%;display:inline-block;">&nbsp;</div>
</div>
