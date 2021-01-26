<?php
	$res= fetchContacts($userId);
?>
<p class="text-center" id="deleteRes"></p>
<table class="table table-condensed table-responsive">
	<thead>	
		<tr>
			<th>Name</th>
			<th>Mobile</th>
			<th>Email</th>
			<th>Permanent Address</th>
			<th>Temporary Address</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach ($res as $row){
				if(isset($row['id'])){
					echo '<tr id="'.($row['id']).'">
							<td>'.$row['name'].'</td>
							<td>'.$row['mobile'].'</td>
							<td>'.$row['email'].'</td>
							<td style="word-wrap:break-word;">'.$row['permanant_address'].'</td>
							<td>'.$row['temporary_address'].'</td>
							<td><button class="btn btn-danger" id="'.$row['id'].'" onclick="removeContact(this)">Remove</button></td>
						  </tr>';
				}					  
			}
		?>
	</tbody>
</table>
<script>
//delete a person
function removeContact(event){
	var id = event.id;					
	if(confirm("Are sure to delete this person?")){
			$.ajax({
				url: '../../Controller/delete/delete.php',
				type: 'POST',
				data: 'id='+id,
				async: false,
				success: function (data){
					var objID = '#' + id;
					$('#deleteRes').html(data);
					$(objID).hide(500);
					setTimeout(function(){ $('#deleteRes').text(''); }, 2000);
				},
			});		
		}
	
	return false;
};
</script>