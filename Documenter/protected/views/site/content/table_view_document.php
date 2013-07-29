<table style = "width:100%" class="withborder">
	
	<col width="80px">	<!-- ID -->
	<col width="200px">	<!-- Name -->
	<col width="50px">	<!-- Qty -->
	<col width="150px">	<!-- Location -->
	<col width="100px">	<!-- Status -->
	<col width="100px">	<!-- importance level -->
	<col width="auto">	<!-- Remarks -->
	<col width="100px">	<!-- Action -->

	<thead>
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Qty</th>
			<th>Location</th>
			<th>Status</th>
			<th>Importance</th>
			<th>Remarks</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php // looping here ?>
		<tr>
			<?php
			//echo "<td>$row->id</td>";
			//echo "<td>$row->name</td>";
			//echo "<td>$row->qty</td>";
			//echo "<td>$row->location</td>";
			//echo "<td>$row->status</td>";
			//echo "<td>action here</td>";
			?>
			<td class="tdRight">00001</td>
			<td class="tdLeft">Barang 1</td>
			<td class="tdRight">1</td>
			<td class="tdLeft">Blue Folder</td>
			<td class="tdLeft">copied</td>
			<td class="tdLeft">Important</td>
			<td class="tdLeft">no remarks</td>
			<td class="tdMiddle">edit</td>
		</tr>
		<?php ?>
	</tbody>
</table>