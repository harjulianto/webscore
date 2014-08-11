<?php 
include "setting/conf.php"; 
$kategori = $_GET['kategori'];
?>

<h3 class="text-center">Peserta</h3>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
	<thead>
		<tr>
			<th>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</th>
			<th>Nama Tim</th>
			<th>Instansi</th>
			<th>Nama Ketua</th>
			<th>Aksi</th>
		</tr>
	</thead>
	
	<tbody>
		<?php

            $query = mysql_query("select * from teams where kategori='$kategori'");
            while ($buff = mysql_fetch_array($query)) {
        ?>
		<tr>
			<td>
				<div class="checkbox checkbox-replace">
					<input type="checkbox" id="chk-1">
				</div>
			</td>
			<td><?php echo $buff['nama_team']; ?></td>
			<td><?php echo $buff['instansi']; ?></td>
			<td><?php echo $buff['nama_ketua']; ?></td>
			<td>
				<a href="on.php?0x=0x61/0x64/0x6d/0x73/0x6h&id_team=<?php echo $buff['id_team']; ?>" class="btn btn-default btn-sm btn-icon icon-left">
					<i class="entypo-pencil"></i>
					Edit
				</a>
				
				<a href="#" class="btn btn-danger btn-sm btn-icon icon-left">
					<i class="entypo-cancel"></i>
					Delete
				</a>
				
				<a href="on.php?0x=0x61/0x64/0x6d/0x72/0x6h&id_team=<?php echo $buff['id_team']; ?>" class="btn btn-info btn-sm btn-icon icon-left">
					<i class="entypo-info"></i>
					View
				</a>
			</td>
			<?php
            }
        	?>	
		</tr>
		
		
	</tbody>
</table>


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
