

<script type="text/javascript">
function ConfirmDelete()
{
  var x = confirm("Are you sure you want to delete?");
  if (x)
    window.location.href = this.getAttribute('href');
  else
    return false;
}

/*$(document).ready(function() {
    $('#example').dataTable();
} );*/

</script>
<h3>Users</h3>
<div class="mbm pull-right">
	<a href="/admin/users/add" class="btn btn-primary">Create New User</a>
</div>
<br>
<table id="example" class="table table-bordered table-striped">
	<thead>
		<tr>
		
			<th>Name</th>
			<th>Email</th>
			<!--th>User Type</th-->
			<th># of Logins</th>
			<th>User Code</th>
			<th>Last Login</th>
			<th>Date Created</th>
			<th>Login as User</th>
			<th>Actions</th>
		</tr>
	</thead>

	<tbody>
		<?php if (count($results) > 0): ?>
			
			<?php foreach ($results as $a): ?>
				<tr>
					
					<td><?php echo $a->first_name." ".$a->last_name; ?></td>
					<td><?php echo  $a->email ?></td>
					<!--td><?php echo ($a->user_type==1)?"Admin":(($a->user_type==2)?"Agent":(($a->user_type==3)?"Registered user":"Unregistered user")); ?></td-->
					<td><?php echo $a->no_login;?></td>
					<td><?php echo $a->user_code;?></td>
					<td><?php echo date('d-M-Y H:i:s', strtotime($a->last_login));?></td>
					<td><?php echo date('d-M-Y', strtotime($a->created_at)); ?></td>
					<td><a href='/admin/users/login_user/<?php echo $a->id ?>'>Login in as User</a></td>
					<td>
						<div class="hidden-phone visible-desktop btn-group">
							<a class="btn btn-mini btn-info" href="/admin/users/edit/<?php echo $a->id ?>">
								<i class="icon-edit bigger-120"></i>
							</a>
		
							<a class="btn btn-mini btn-danger" href="/admin/users/delete/<?php echo $a->id ?>" onclick="return ConfirmDelete();">
								<i class="icon-trash bigger-120"></i>
							</a>
						</div>
					</td>
				</tr>
			<?php endforeach; ?>
		<?php else: ?>
			<tr>
				<td colspan="8" style="text-align: center; font-weight: bold;">No Users ! <a href="/admin/agencies/add">Create New User</a></td>
			</tr>
		<?php endif; ?>
	</tbody>
</table>

<div style="text-align:center"><?php echo $links; ?></div>