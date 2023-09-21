    //Storing Address
    $house_no="57";
    $floor="1st Floor";
    $building_name="ankit ka ghar";
    $street="kailora";
    $area="hathras junction";
    $city="hathras";
    $distrcit="hathras city";
    $pincode="204102";
    $state="Uttar Pradesh";
    $country="India";
    $contact_person="MS. ankit Singh";


    $address_of_user = $contact_person.", "."<br>".$house_no." - ". $floor.", ". $building_name.",<br>".$street.",<br/>".$area." - ".$city.",<br>".$distrcit." - (".$pincode."),<br>".$state." - ".$country;

    echo $address_of_user;


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
		<h2>Enter You Full address </h2>
		<form method="post" action="">
			<h4>Contact Person<h4>
			<input type="test" name="contact_person" id="contact_person" placeholder="Enter your first name" value="" required><br/>
			<h4>Contact Person<h4>
			<input type="text" name="contact_person" id="contact_person" placeholder="Enter your last name" value="" required><br/>
			<h4>Contact Person<h4>
			<input type="text" name="contact_person" id="contact_person" placeholder="Enter your full name" value="" required><br/>
			<h4>House#<h4>
			<input type="text" name="house_no" id="house_no" placeholder="Enter Your House Number" value="" required><br/>
			
			<h4>Floor<h4>
			<input type="text" name="floor" id="floor" value="" placeholder="Floor on which you stay" required><br/>
			
			<h4>Building Name<h4>
			<input type="text" name="building_name" id="building_name" placeholder="Your Building Name" value="" required><br/>
			
			<h4>Street/Colony/Village<h4>
			<input type="text" name="street" id="street" value="" placeholder="Enter Street/Colony/Village of yours" required><br/>
			
			<h4>Area/Nearby<h4>
			<input type="text" name="area" id="area" value="" placeholder="Enter Area/Nearby Mark" required><br/>
			
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
			<input type="text" name="distrcit" id="distrcit" placeholder="What is your District" value="" required><br/>
			
			<h4>Pincode<h4>
			<input type="number" min="100000" max="999999" name="pincode" id="pincode" placeholder="Enter your 6 digit pin code" value="" required><br/><br/>
			
			<input type="submit" value="Save Details" name="submit">
		</form>	
	</div>
	<div style="margin-top:50px;width:25%;display:inline-block;">&nbsp;</div>
</div>
<!--pingmehereitsankit mujhey code mil gaya hai-->