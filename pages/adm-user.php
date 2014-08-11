<?php 
    include "setting/conf.php";
    $no = 1;
?>

<h3 class="text-center">Admin </h3>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
	<thead>
		<tr>
			<th>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</th>
			<th>Nama Admin</th>
			<th>Username</th>
			<th>Status</th>
			<th>Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php
            $query = mysql_query("select * from user");
            while ($buff = mysql_fetch_array($query)) {
        ?>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td><?php echo $buff['nama']; ?></td>
			<td><?php echo $buff['username']; ?></td>
			<td><?php echo $buff['status']; ?></td>
			<td>
				<a href="on.php?0x=0x61/0x64/0x6d/0x71/0x6f&id_user=<?php echo $buff['id_user']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="lib/adm-delete.php?id_user=<?php echo $buff['id_user']; ?>" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
			</td>
		<?php
            }
        ?>
		</tr>
	</tbody>
</table>

<a href="on.php?0x=0x61/0x64/0x6d/0x70/0x6f" class="btn btn-primary">
	<i class="entypo-plus"></i>
	Tambah Admin
</a>

<script type="text/javascript">
jQuery(window).load(function()
{
	var $ = jQuery;
	
	$("#table-2").dataTable({
		"sPaginationType": "bootstrap",
		"sDom": "t<'row'<'col-xs-6 col-left'i><'col-xs-6 col-right'p>>",
		"bStateSave": false,
		"iDisplayLength": 8,
		"aoColumns": [
			{ "bSortable": false },
			null,
			null,
			null,
			null
		]
	});
	
	$(".dataTables_wrapper select").select2({
		minimumResultsForSearch: -1
	});
	
	// Highlighted rows
	$("#table-2 tbody input[type=checkbox]").each(function(i, el)
	{
		var $this = $(el),
			$p = $this.closest('tr');
		
		$(el).on('change', function()
		{
			var is_checked = $this.is(':checked');
			
			$p[is_checked ? 'addClass' : 'removeClass']('highlight');
		});
	});
	
	// Replace Checboxes
	$(".pagination a").click(function(ev)
	{
		replaceCheckboxes();
	});
});
	
// Sample Function to add new row
var giCount = 1;

function fnClickAddRow() 
{
	$('#table-2').dataTable().fnAddData(['<div class="checkbox checkbox-replace"><input type="checkbox" /></div>', giCount+".2", giCount+".3", giCount+".4", giCount+".5" ]);
	
	replaceCheckboxes(); // because there is checkbox, replace it
	
	giCount++;
}
</script>
