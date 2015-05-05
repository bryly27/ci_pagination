		<div class='row'>
			<ul class='pagination'>

<?php  
				for($i=1;$i<=ceil(count($all)/10);$i++)
				{ ?>
					<li><a class='page_search' href='' alt='<?= $i ?>'><?= $i ?></a></li>
<?php		} ?>
			</ul>
		</div>
		<div class='row'>
			<table class='table table-striped'>
				<thead>
					<tr>
						<th>Id</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Joined Date</th>
					</tr>
				</thead>
				<tbody>
<?php  
				foreach($users as $user)
				{ ?>
					<tr>
						<td><?= $user['id'] ?></td>
						<td><?= $user['first_name'] ?></td>
						<td><?= $user['last_name'] ?></td>
						<td><?= $user['email'] ?></td>
						<td><?= $user['joined_datetime'] ?></td>
					</tr>
<?php	} ?>
				</tbody>
			</table>
		</div>