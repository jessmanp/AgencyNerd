		<div class="container">
		<h2><img src="<?php echo URL; ?>public/img/policy_<?php echo $cat; ?>_header.png" class="policy-entry-icon" alt="" />Enter New <?php echo $cat; ?> Policy</h2>
		<br />
		<form name="policy-entry-form" action="" method="post">

			<div class="policy-entry-field">
				Team Member<br />
				<select class="policy-entry-select" id="policy_team_member" name="policy_team_member">
<?php foreach ($agency_employees as $employee) { ?>
                		<option value="<?php echo $employee->user_id; ?>"><?php echo $employee->user_first_name.' '.$employee->user_last_name; ?></option>
<?php } ?>
				</select>
			</div>
			<div class="policy-entry-field">
				Category<br />
				<select class="policy-entry-select" id="policy_sub_category" name="policy_sub_category">
<?php foreach ($policy_categories as $category) { ?>
                		<option value="<?php echo $category->id; ?>"><?php echo $category->name; ?></option>
<?php } ?>
				</select>
			</div>
			<div class="policy-entry-field">
				Customer Name<br />
				<input type="text" id="policy_customer_name" name="policy_customer_name" placeholder="Customer Name" value="" />
			</div>
			<div class="policy-entry-field">
				Business Type<br />
				<select class="policy-entry-select" id="policy_business_type" name="policy_business_type">
<?php foreach ($policy_business_types as $business_types) { ?>
                		<option value="<?php echo $business_types->id; ?>"><?php echo $business_types->name; ?></option>
<?php } ?>
				</select>
			</div>
			<div class="policy-entry-field">
				Premium<br />
				<span style="font-size:20px;">$</span><input type="text" id="policy_premium" name="policy_premium" placeholder="0.00" value="" />
			</div>
			<div class="policy-entry-field">
				Lead Source<br />
				<select class="policy-entry-select" id="policy_source_type" name="policy_source_type">
<?php foreach ($policy_source_types as $source_types) { ?>
                		<option value="<?php echo $source_types->id; ?>"><?php echo $source_types->name; ?></option>
<?php } ?>
				</select>
			</div>
			<div class="policy-entry-field">
				Policy Length<br />
				<select class="policy-entry-select" id="policy_length_type" name="policy_length_type">
<?php foreach ($policy_length_types as $length_types) { ?>
                		<option value="<?php echo $length_types->id; ?>"><?php echo $length_types->name; ?></option>
<?php } ?>
				</select>
			</div>
			<div id="policy-entry-field">
				<div class="policy-left">Date Written</div>
				<div class="policy-right"><input id="policy_date_written" name="policy_date_written" class="policy-date" placeholder="" readonly /></div>
			</div>
			<div id="policy-entry-field">
				<div class="policy-left">Date Issued</div>
				<div class="policy-right"><input id="policy_date_issued" name="policy_date_issued" class="policy-date" placeholder="" readonly /></div>
			</div>
			<div id="policy-entry-field">
				<div class="policy-left">Date Effective</div>
				<div class="policy-right"><input id="policy_date_effective" name="policy_date_effective" class="policy-date" placeholder="" readonly /></div>
			</div>
			<div style="clear:both;"><br /><br /></div>
		</form>
		</div>
		<br /><br />

<script>
// LOAD PAGE
$(document).ready(function() {

	function loadDatePickers(){
		new datepickr("policy_date_written", {
			"dateFormat": "m/d/Y"
		});
		new datepickr("policy_date_issued", {
			"dateFormat": "m/d/Y"
		});
		new datepickr("policy_date_effective", {
			"dateFormat": "m/d/Y"
		});
	}

	//bind orientation change to date picker event
	$(window).bind("orientationchange", loadDatePickers);
	$(window).resize(function() {
		loadDatePickers();
	});

	// SET DATE PICKERS
	$("#policy_date_written").attr("placeholder", currentdate());
	$("#policy_date_issued").attr("placeholder", currentdate());
	$("#policy_date_effective").attr("placeholder", currentdate());
	loadDatePickers();


});
</script>