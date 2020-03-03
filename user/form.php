<?php
ob_start();
include ('db.php');
 ?>
 <!DOCTYPE html>
<html lang="en">

<head>
	<title>EMS Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>


	<div class="container-contact100">
		<div class="wrap-contact100">
			<form class="contact100-form " autocomplete="off" method="post" action="form.php">
				<span class="contact100-form-title">
					Shadule 2
				</span>
				<span>search :  <input id="phone" type="text" name="search" placeholder="Enter Object Code"></span>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1001</span></td>
					
					<td><span class="label-input100">Salaries & Wages:</span></td></tr></table>
					<input class="input100" type="text" name="20111001" placeholder="Enter Amount"data-type="currency"  >
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1002</span></td>
					
					<td><span class="label-input100">Overtime & Holiday Payment:</span></td></tr></table>
					<input class="input100" type="text" name="20111002" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1003-1</span>
		
					<td/><td><span class="label-input100">Other Allowance:</span></td></tr></table>
					<input class="input100" type="text" name="201110031" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1003-2</span>
		
					<td/><td><span class="label-input100">Extract Allowance:</span></td></tr></table>
					<input class="input100" type="text" name="201110032" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1101</span>
		
					<td/><td><span class="label-input100">Travelling - Domestic:</span></td></tr></table>
					<input class="input100" type="text" name="20111101" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1201</span>
		
					<td/><td><span class="label-input100">Stationery & Office Requisites:</span></td></tr></table>
					<input class="input100" type="text" name="20111201" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1202</span>
		
					<td/><td><span class="label-input100">Fuel and Lubricant Oil:</span></td></tr></table>
					<input class="input100" type="text" name="20111202" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1203</span>
		
					<td/><td><span class="label-input100">Diets and Uniforms:</span></td></tr></table>
					<input class="input100" type="text" name="20111203" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1301</span>
		
					<td/><td><span class="label-input100">Vehicle Repairs:</span></td></tr></table>
					<input class="input100" type="text" name="20111301" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1302</span>
		
					<td/><td><span class="label-input100">Plant Machinery & Equipment Repairs :</span></td></tr></table>
					<input class="input100" type="text" name="20111302" placeholder="Enter Amount"data-type="currency">
				</div><div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1303</span>
		
					<td/><td><span class="label-input100">Building and Structure Repairs (Small Scale Repairs only):</span></td></tr></table>
					<input class="input100" type="text" name="20111303" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1401</span>
		
					<td/><td><span class="label-input100">Transport Costs:</span></td></tr></table>
					<input class="input100" type="text" name="20111401" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1402-1	</span>
		
					<td/><td><span class="label-input100">Communication charges:</span></td></tr></table>
					<input class="input100" type="text" name="201114021" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1402-2</span>
		
					<td/><td><span class="label-input100">Postal charges:</span></td></tr></table>
					<input class="input100" type="text" name="201114022" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1403</span>
		
					<td/><td><span class="label-input100">Electricity & Water:</span></td></tr></table>
					<input class="input100" type="text" name="20111403" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1404</span>
		
					<td/><td><span class="label-input100">Rents & Local Taxes:</span></td></tr></table>
					<input class="input100" type="text" name="20111404" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-1</span>
		
					<td/><td><span class="label-input100">Enumeration (Previous Year):</span></td></tr></table>
					<input class="input100" type="text" name="2011140911" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-2</span>
		
					<td/><td><span class="label-input100">Enumeration (Current Year):</span></td></tr></table>
					<input class="input100" type="text" name="2011140912" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-1-3</span>
		
					<td/><td><span class="label-input100">Voter Awareness Programmes:</span></td></tr></table>
					<input class="input100" type="text" name="2011140913" placeholder="Enter Amount"data-type="currency">
				</div>
				
			
				<div class="wrap-input100 input100-select bg1">
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-2</span></td>
		
					<td><span class="label-input100">Conducting Elections:</span></tr></table>
					<div>
						<select class="js-select2" name="201114092">
							<option>Select Election Type</option>
							<option>Presidential Elections</option>
							<option>Parliamentary  Elections</option>
							<option>Provincial Council Elections</option>
							<option>Local Authorities Elections</option>
							<option>Referendum</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

				<div class="w-full dis-none js-show-service">
					<span class="label-input1001">[A] Salary</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i	Casual Labour :</span>
					<input class="input100" type="text" name="201114092A1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Pentioners (Contract Basis):</span>
					<input class="input100" type="text" name="201114092A2" placeholder="Enter Amount"data-type="currency">
				</div>
						
					</div>
				<span class="label-input1001"> [B] Overtime & Holiday Payment</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Holiday Payment (Executive):</span>
					<input class="input100" type="text" name="201114092B1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Holiday Payment (Non Executive):</span>
					<input class="input100" type="text" name="201114092B2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Overtime:</span>
					<input class="input100" type="text" name="201114092B3" placeholder="Enter Amount"data-type="currency">
				</div>
						
					</div>
				<span class="label-input1001">[C] Allowances</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Ballot Preparation and issuing:</span>
					<input class="input100" type="text" name="201114092C1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii Conducting Election Classes:</span>
					<input class="input100" type="text" name="201114092C2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Ballot Checking:</span>
					<input class="input100" type="text" name="201114092C3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv	Issuing Postal Votes:</span>
					<input class="input100" type="text" name="201114092C4" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">v Certifying Postal Votes:</span>
					<input class="input100" type="text" name="201114092C5" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vi	Election Claims (Counting/ Day duty):</span>
					<input class="input100" type="text" name="201114092C6" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vii Other:</span>
					<input class="input100" type="text" name="201114092C7" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
				<span class="label-input1001">[D] Travelling Claim ( Pre Election)</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Executives:</span>
					<input class="input100" type="text" name="201114092D1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Grama Niladhari:</span>
					<input class="input100" type="text" name="201114092D2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Drivers and Assistants:</span>
					<input class="input100" type="text" name="201114092D3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv	Other:</span>
					<input class="input100" type="text" name="201114092D4" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[E] Travellings ( During the Election)</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Election Staff:</span>
					<input class="input100" type="text" name="201114092E1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Grama Niladhari:</span>
					<input class="input100" type="text" name="201114092E2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Drivers & Others (helper / cleaner):</span>
					<input class="input100" type="text" name="201114092E3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv	Other:</span>
					<input class="input100" type="text" name="201114092E4" placeholder="Enter Amount" data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[F] Transport</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Goods Transport:</span>
					<input class="input100" type="text" name="201114092F1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Officers transport (C.T.B):</span>
					<input class="input100" type="text" name="201114092F2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Officers transport ( Private Vehicle):</span>
					<input class="input100" type="text" name="201114092F3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv Voters transport:</span>
					<input class="input100" type="text" name="201114092F4" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[G] Supplies</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Stationary:</span>
					<input class="input100" type="text" name="201114092G1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Office requisities Goods:</span>
					<input class="input100" type="text" name="201114092G2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Fuel and Oil:</span>
					<input class="input100" type="text" name="201114092G3" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[H] Construction and Repairs</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Temporary Shed for polling booth:</span>
					<input class="input100" type="text" name="201114092H1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii	Temporary shed for counting:</span>
					<input class="input100" type="text" name="201114092H2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Building repair:</span>
					<input class="input100" type="text" name="201114092H3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv Vehicle repair:</span>
					<input class="input100" type="text" name="201114092H4" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">v Office Equipments repairs:</span>
					<input class="input100" type="text" name="201114092H5" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vi Machinary repairs:</span>
					<input class="input100" type="text" name="201114092H6" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vii Ballot Box repairs:</span>
					<input class="input100" type="text" name="201114092H7" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">viii Other repairs:</span>
					<input class="input100" type="text" name="201114092H8" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[I] Welfare</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Ballot Checking:</span>
					<input class="input100" type="text" name="201114092I1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii Issuing Postal Votes:</span>
					<input class="input100" type="text" name="201114092I2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Issuing Ballots and Ballots Boxes:</span>
					<input class="input100" type="text" name="201114092I3" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv Election and Counting:</span>
					<input class="input100" type="text" name="201114092I4" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">v Other:</span>
					<input class="input100" type="text" name="201114092I5" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
			<span class="label-input1001">[J] Service and Other</span>
					<div class="wrap-contact100-form-radio">
						
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">i Postal Fees:</span>
					<input class="input100" type="text" name="201114092J1" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ii Temporary Connection of telephone:</span>
					<input class="input100" type="text" name="201114092J2" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iii Temporary Connection of Electricity:</span>
					<input class="input100" type="text" name="201114092J3" placeholder="Enter Amount"data-type="currency"> 
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">iv Temporary Connection of Water:</span>
					<input class="input100" type="text" name="201114092J4" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">v Accomandation vi Observation of Election (Domestic):</span>
					<input class="input100" type="text" name="201114092J5" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vi Observation of Election (Domestic):</span>
					<input class="input100" type="text" name="201114092J6" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">vii Observation of Election (foreign):</span>
					<input class="input100" type="text" name="201114092J7" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">viii Grama Niladari Payment:</span>
					<input class="input100" type="text" name="201114092J8" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">ix Building Rent:</span>
					<input class="input100" type="text" name="201114092J9" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">x Printing:</span>
					<input class="input100" type="text" name="201114092J10" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<span class="label-input100">xi Other:</span>
					<input class="input100" type="text" name="201114092J11" placeholder="Enter Amount"data-type="currency">
				</div>
			</div>
		</div>
		<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-1</span>
		
					<td/><td><span class="label-input100">Cleaning Service:</span></td></tr></table>
					<input class="input100" type="text" name="2011140931" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-2</span>
		
					<td/><td><span class="label-input100">Security Service:</span></td></tr></table>
					<input class="input100" type="text" name="2011140932" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1409-3-3</span>
		
					<td/><td><span class="label-input100">Extra:</span></td></tr></table>
					<input class="input100" type="text" name="2011140933" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-1506</span>
		
					<td/><td><span class="label-input100">Property Loan Interest:</span></td></tr></table>
					<input class="input100" type="text" name="20111506" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-2001</span>
		
					<td/><td><span class="label-input100">Rehabilitation & Improvement of Building:</span></td></tr></table>
					<input class="input100" type="text" name="20112001" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-2102</span>
		
					<td/><td><span class="label-input100">Acquisition of Furniture & Office Equipment:</span></td></tr></table>
					<input class="input100" type="text" name="20112102" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-2103</span>
		
					<td/><td><span class="label-input100">Acquisition of Plants & Machinery:</span></td></tr></table>
					<input class="input100" type="text" name="20112103" placeholder="Enter Amount"data-type="currency">
				</div>
				<div class="wrap-input100 validate-input bg1" >
					<table><tr><td width="170px"><span class="label-input100">20-1-1-2401</span>
		
					<td/><td><span class="label-input100">Training & Capacity  Building:</span></td></tr></table>
					<input class="input100" type="text" name="20112401" placeholder="Enter Amount"data-type="currency">
				</div>

				

				<div class="container-contact100-form-btn">
				 <button name="submit" type="submit" id="register" class="button register"/>Register </button>
				</div>
			</form>
			 

  <?php 

if (isset($_POST['submit']))
  {

  	date_default_timezone_set("Asia/Colombo");

                  $time=date("h:i:a");
                  $date=date("Y/F/d");


  $d = 2;
  $search = ($_POST['search']);
  $search = str_replace(['+', '-'], '', filter_var($search, FILTER_SANITIZE_NUMBER_INT));


 
  $A20111001 = (filter_var(($_POST['20111001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  
 
  $A20111002 = (filter_var(($_POST['20111002']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  
  $A201110031 = (filter_var(($_POST['201110031']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201110032 = (filter_var(($_POST['201110032']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111101 = (filter_var(($_POST['20111101']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d); 
  $A20111201 = (filter_var(($_POST['20111201']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111202 = (filter_var(($_POST['20111202']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111203 = (filter_var(($_POST['20111203']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111301 = (filter_var(($_POST['20111301']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111302 = (filter_var(($_POST['20111302']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111303 = (filter_var(($_POST['20111303']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111401 = (filter_var(($_POST['20111401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114021 = (filter_var(($_POST['201114021']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114022 = (filter_var(($_POST['201114022']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111403 = (filter_var(($_POST['20111403']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111404 = (filter_var(($_POST['20111404']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140911 = (filter_var(($_POST['2011140911']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140912 = (filter_var(($_POST['2011140912']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140913 = (filter_var(($_POST['2011140913']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092 = ($_POST['201114092']);

  $A201114092A1 = (filter_var(($_POST['201114092A1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092A2 = (filter_var(($_POST['201114092A2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B1 = (filter_var(($_POST['201114092B1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B2 = (filter_var(($_POST['201114092B2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092B3 = (filter_var(($_POST['201114092B3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C1 = (filter_var(($_POST['201114092C1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C2 = (filter_var(($_POST['201114092C2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C3 = (filter_var(($_POST['201114092C3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C4 = (filter_var(($_POST['201114092C4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C5 = (filter_var(($_POST['201114092C5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C6 = (filter_var(($_POST['201114092C6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092C7 = (filter_var(($_POST['201114092C7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D1 = (filter_var(($_POST['201114092D1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D2 = (filter_var(($_POST['201114092D2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D3 = (filter_var(($_POST['201114092D3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092D4 = (filter_var(($_POST['201114092D4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E1 = (filter_var(($_POST['201114092E1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E2 = (filter_var(($_POST['201114092E2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E3 = (filter_var(($_POST['201114092E3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092E4 = (filter_var(($_POST['201114092E4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F1 = (filter_var(($_POST['201114092F1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F2 = (filter_var(($_POST['201114092F2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F3 = (filter_var(($_POST['201114092F3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092F4 = (filter_var(($_POST['201114092F4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G1 = (filter_var(($_POST['201114092G1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G2 = (filter_var(($_POST['201114092G2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092G3 = (filter_var(($_POST['201114092G3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H1 = (filter_var(($_POST['201114092H1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H2 = (filter_var(($_POST['201114092H2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H3 = (filter_var(($_POST['201114092H3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H4 = (filter_var(($_POST['201114092H4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H5 = (filter_var(($_POST['201114092H5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H6 = (filter_var(($_POST['201114092H6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H7 = (filter_var(($_POST['201114092H7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092H8 = (filter_var(($_POST['201114092H8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I1 = (filter_var(($_POST['201114092I1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I2 = (filter_var(($_POST['201114092I2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I3 = (filter_var(($_POST['201114092I3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I4 = (filter_var(($_POST['201114092I4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092I5 = (filter_var(($_POST['201114092I5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J1 = (filter_var(($_POST['201114092J1']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J2 = (filter_var(($_POST['201114092J2']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J3 = (filter_var(($_POST['201114092J3']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J4 = (filter_var(($_POST['201114092J4']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J5 = (filter_var(($_POST['201114092J5']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J6 = (filter_var(($_POST['201114092J6']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J7 = (filter_var(($_POST['201114092J7']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J8 = (filter_var(($_POST['201114092J8']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J9 = (filter_var(($_POST['201114092J9']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J10 = (filter_var(($_POST['201114092J10']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A201114092J11 = (filter_var(($_POST['201114092J11']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  



  $A2011140931 = (filter_var(($_POST['2011140931']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140932 = (filter_var(($_POST['2011140932']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A2011140933 = (filter_var(($_POST['2011140933']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20111506 = (filter_var(($_POST['20111506']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112001 = (filter_var(($_POST['20112001']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112102 = (filter_var(($_POST['20112102']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112103 = (filter_var(($_POST['20112103']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);
  $A20112401 = (filter_var(($_POST['20112401']), FILTER_SANITIZE_NUMBER_INT))/pow(10,$d);

  
   $sql="INSERT INTO schedule02_temp (USER_NAME, DISTRICT, U_DATE, U_TIME, OC_20_1_1_1001, OC_20_1_1_1002, OC_20_1_1_1003_1, OC_20_1_1_1003_2, OC_20_1_1_1101, OC_20_1_1_1201, OC_20_1_1_1202, OC_20_1_1_1203, OC_20_1_1_1301, OC_20_1_1_1302, OC_20_1_1_1303, OC_20_1_1_1401, OC_20_1_1_1402_1, OC_20_1_1_1402_2, OC_20_1_1_1403, OC_20_1_1_1404, OC_20_1_1_1409_1_1, OC_20_1_1_1409_1_2, OC_20_1_1_1409_1_3, OC_20_1_1_1409_2, OC_20_1_1_1409_2_A1, OC_20_1_1_1409_2_A2, OC_20_1_1_1409_2_B1, OC_20_1_1_1409_2_B2, OC_20_1_1_1409_2_B3, OC_20_1_1_1409_2_C1, OC_20_1_1_1409_2_C2, OC_20_1_1_1409_2_C3, OC_20_1_1_1409_2_C4, OC_20_1_1_1409_2_C5, OC_20_1_1_1409_2_C6, OC_20_1_1_1409_2_C7, OC_20_1_1_1409_2_D1, OC_20_1_1_1409_2_D2, OC_20_1_1_1409_2_D3, OC_20_1_1_1409_2_D4, OC_20_1_1_1409_2_E1,  OC_20_1_1_1409_2_E2, OC_20_1_1_1409_2_E3, OC_20_1_1_1409_2_E4, OC_20_1_1_1409_2_F1, OC_20_1_1_1409_2_F2, OC_20_1_1_1409_2_F3, OC_20_1_1_1409_2_F4, OC_20_1_1_1409_2_G1, OC_20_1_1_1409_2_G2, OC_20_1_1_1409_2_G3, OC_20_1_1_1409_2_H1, OC_20_1_1_1409_2_H2, OC_20_1_1_1409_2_H3, OC_20_1_1_1409_2_H4, OC_20_1_1_1409_2_H5, OC_20_1_1_1409_2_H6, OC_20_1_1_1409_2_H7, OC_20_1_1_1409_2_H8, OC_20_1_1_1409_2_I1, OC_20_1_1_1409_2_I2, OC_20_1_1_1409_2_I3, OC_20_1_1_1409_2_I4, OC_20_1_1_1409_2_I5, OC_20_1_1_1409_2_J1, OC_20_1_1_1409_2_J2, OC_20_1_1_1409_2_J3, OC_20_1_1_1409_2_J4, OC_20_1_1_1409_2_J5, OC_20_1_1_1409_2_J6, OC_20_1_1_1409_2_J7, OC_20_1_1_1409_2_J8, OC_20_1_1_1409_2_J9, OC_20_1_1_1409_2_J10, OC_20_1_1_1409_2_J11, OC_20_1_1_1409_3_1, OC_20_1_1_1409_3_2, OC_20_1_1_1409_3_3, OC_20_1_1_1506, OC_20_1_1_2001, OC_20_1_1_2102, OC_20_1_1_2103, OC_20_1_1_2401) VALUES ('USERAMP', 'AMPARA', '$date', '$time', '$A20111001', '$A20111002', '$A201110031', '$A201110032', '$A20111101', '$A20111201', '$A20111202', '$A20111203', '$A20111301', '$A20111302', '$A20111303', '$A20111401', '$A201114021', '$A201114022', '$A20111403', '$A20111404', '$A2011140911', '$A2011140912', '$A2011140913', '$A201114092', '$A201114092A1', '$A201114092A2', '$A201114092B1', '$A201114092B2', '$A201114092B3', '$A201114092C1', '$A201114092C2', '$A201114092C3', '$A201114092C4', '$A201114092C5', '$A201114092C6', '$A201114092C7', '$A201114092D1', '$A201114092D2', '$A201114092D3', '$A201114092D4', '$A201114092E1', '$A201114092E2', '$A201114092E3', '$A201114092E4', '$A201114092F1', '$A201114092F2', '$A201114092F3', '$A201114092F4', '$A201114092G1', '$A201114092G2', '$A201114092G3', '$A201114092H1', '$A201114092H2', '$A201114092H3', '$A201114092H4', '$A201114092H5', '$A201114092H6', '$A201114092H7', '$A201114092H8', '$A201114092I1', '$A201114092I2', '$A201114092I3', '$A201114092I4', '$A201114092I5', '$A201114092J1', '$A201114092J2', '$A201114092J3', '$A201114092J4', '$A201114092J5', '$A201114092J6', '$A201114092J7', '$A201114092J8', '$A201114092J9', '$A201114092J10', '$A201114092J11', '$A2011140931', '$A2011140932', '$A2011140933', '$A20111506', '$A20112001', '$A20112102', '$A20112103', '$A20112401')";
  

  if ($db->query($sql))
  {
    
    header("location:java.php");
  }
  else
  {
    
  }

}
ob_end_flush();
 ?>
  

  
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
	<script type="text/javascript">
	$(":input").inputmask();

$("#phone").inputmask({"mask": "99-9-9-9999-9-9"});
</script>
	<script>

	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script src="js/jquery.min.js"></script>
<script>
	$("input[data-type='currency']").on({
  keyup: function() {
    formatCurrency($(this));
  },
  blur: function() {
    formatCurrency($(this), "blur");
  }
});

function formatNumber(n) {
  // format number 1000000 to 1,234,567
  return n.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}

function formatCurrency(input, blur) {
  // appends $ to value, validates decimal side
  // and puts cursor back in right position.

  // get input value
  var input_val = input.val();

  // don't validate empty input
  if (input_val === "") {
    return;
  }

  // original length
  var original_len = input_val.length;

  // initial caret position
  var caret_pos = input.prop("selectionStart");

  // check for decimal
  if (input_val.indexOf(".") >= 0) {
    // get position of first decimal
    // this prevents multiple decimals from
    // being entered
    var decimal_pos = input_val.indexOf(".");

    // split number by decimal point
    var left_side = input_val.substring(0, decimal_pos);
    var right_side = input_val.substring(decimal_pos);

    // add commas to left side of number
    left_side = formatNumber(left_side);

    // validate right side
    right_side = formatNumber(right_side);

    // On blur make sure 2 numbers after decimal
    if (blur === "blur") {
      right_side += "00";
    }

    // Limit decimal to only 2 digits
    right_side = right_side.substring(0, 2);

    // join number by .
    input_val = "Rs " + left_side + "." + right_side;
  } else {
    // no decimal entered
    // add commas to number
    // remove all non-digits
    input_val = formatNumber(input_val);
    input_val = "Rs " + input_val;

    // final formatting
    if (blur === "blur") {
      input_val += ".00";
    }
  }

  // send updated string to input
  input.val(input_val);

  // put caret back in the right position
  var updated_len = input_val.length;
  caret_pos = updated_len - original_len + caret_pos;
  input[0].setSelectionRange(caret_pos, caret_pos);
}

</script>


</body>
</html>
