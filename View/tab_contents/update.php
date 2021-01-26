<div class="container">
	<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-6">
			<form class="form-vertical" role="form" id="updatePersonForm" method='POST' action = "../../Controller/update/updateContact.php">
				<p class="text-center" id="updateRes"></p>
				<?php
					$res= fetchContacts($userId);
					if(empty($res)){
						echo '<h3 class="text-center font">No Records Found.</h3>';
					}
					else{
				?>
				<input type="text" class="form-control" name="userId" id="userId" value="<?php echo $_SESSION['UID']?>" style="display:none" autocomplete="off" />
				<div class="row">
					<div class="col-sm-4">
						<label>Select Person</label>
					</div>
					<div class="form-group col-sm-6">							        		
						<select class="form-control" id="id" name="id" onchange="changeContact()">
							<option value='!!!'>Choose...</option>
				    		<?php
				    			foreach ($res as $row){
				    				echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
								}
				    		?>
			    		</select>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>First Name</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updatefn" id="updatefn" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Last Name</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updateln" id="updateln" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<label>Mobile</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="text" class="form-control" name="updatemobile" id="updatemobile" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<label>Email</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<input type="email" class="form-control" name="email" id="email" autocomplete="off" />
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<label>Permanant Address</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<textarea maxlength="250" class="form-control" name="updatepermanant" id="updatepermanant" autocomplete="off"></textarea>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>	
				<div class="row">
					<div class="col-sm-4">
						<label>Temporary Address</label>
					</div>
					<div class="form-group col-sm-6">							        		
			    		<textarea maxlength="250" class="form-control" name="updatetemporary" id="updatetemporary" autocomplete="off"></textarea>
			    	</div>
			    	<div class="col-sm-3"></div>
				</div>
				<div class="row">
					<div class="col-sm-4">
					</div>
					<div class="col-sm-3">
						<input type="submit" class="btn btn-success" value="Update" id="updateBtn" />						        			
					</div>
					<div class="col-sm-3">
						<input type="reset" class="btn btn-danger" value="Reset" id="resetBtn" />
					</div>						        		
				</div>
				<?php } ?>
			</form>	 
		</div>
		<div class="col-sm-2"></div>
	</div>
</div>
<script>
	 	
		//update
		//get previous data
		function  changeContact(){
			var pemail = $('#pemail').val();
			
			var dataString = {name:pemail,userId:<?php echo $userId?>};
			$.ajax({
				url: '../../Controller/fetch/fetchContact.php',
				type: 'POST',
				dataType: 'json',
				data: dataString,
				async: false,
				success: function (data){
					alert(data);
					var obj = jQuery.parseJSON( data );
					var name = obj.name.split(' ');
					var mobile = obj.mobile;
					var permanant = obj.permanant_address;
					var temporary = obj.temporary_address;
					$('#updatefn').val(name[0]);
					$('#updateln').val(name[1]);
					$('#updatemobile').val(mobile);
					$('#updatepermanant').val(permanant);
					$('#updatetemporary').val(temporary);
				},
			});					    
		
			return false;
		};
		//update the data
		$('#updatePersonForm').submit(function(){
			var formData = new FormData($(this)[0]);
			$.ajax({
				url: '../../Controller/update/updateContact.php',
				type: 'POST',
				data: formData,
				async: true,
				success: function (data){
					$('#updateRes').html(data);				            
				},
				cache: false,
				contentType: false,
				processData: false
			});
			$(this)[0].reset();
			return false;
		});  	
		
	
</script>