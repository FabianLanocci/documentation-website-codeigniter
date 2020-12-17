<div class="pull-right">
	<a href="<?php echo site_url('documento/add'); ?>" class="btn btn-success">Add</a> 
</div>

<table class="table table-striped table-bordered">
    <tr>
		<th>Documento Id</th>
		<th>Titulo</th>
		<th>Orden</th>
		<th>Actions</th>
    </tr>
	<?php foreach($documentos as $d){ ?>
    <tr>
		<td><?php echo $d['documento_id']; ?></td>
		<td><?php echo $d['titulo']; ?></td>
		<td><?php echo $d['orden']; ?></td>
		<td>
            <a href="<?php echo site_url('documento/edit/'.$d['documento_id']); ?>" class="btn btn-info btn-xs">Edit</a> 
            <a href="<?php echo site_url('documento/remove/'.$d['documento_id']); ?>" class="btn btn-danger btn-xs">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
