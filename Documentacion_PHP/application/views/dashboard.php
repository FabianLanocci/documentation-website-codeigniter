<!--div class="row">
<div class="col-3" id="lateral">
<ul class="list-group">
<?php foreach($documentos as $d){ ?>
	<li class="list-group-item"><a href="<?php echo site_url("documento/ver/".$d['documento_id']); ?>"><?php echo $d['titulo']; ?></a></li>
	<?php } ?>
</ul>
</div>

<div class="col-9" id="contenido">
<div class="card">
  <div class="card-body">
  Bienvenida!
  </div>
</div>


</div>
</div>