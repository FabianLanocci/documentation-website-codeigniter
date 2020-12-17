<?php echo form_open('documento/add',array("class"=>"form-horizontal")); ?>

	<div class="form-group">
		<label for="titulo" class="col-md-4 control-label"><span class="text-danger">*</span>Titulo</label>
		<div class="col-md-8">
			<input type="text" name="titulo" value="<?php echo $this->input->post('titulo'); ?>" class="form-control" id="titulo" />
			<span class="text-danger"><?php echo form_error('titulo');?></span>
		</div>
	</div>
	<div class="form-group">
		<label for="orden" class="col-md-4 control-label">Orden</label>
		<div class="col-md-8">
			<input type="text" name="orden" value="<?php echo $this->input->post('orden'); ?>" class="form-control" id="orden" />
		</div>
	</div>
	
	<div class="form-group">
		<div class="col-sm-offset-4 col-sm-8">
			<button type="submit" class="btn btn-success">Save</button>
        </div>
	</div>

<?php echo form_close(); ?>