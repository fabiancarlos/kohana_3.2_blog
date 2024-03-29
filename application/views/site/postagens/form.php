
<div id="postagens">

<?php $action = ($action == 'novo') ? 'novo post' : 'editar post'; ?>

<p class="cabecalho"><?php echo $action; ?></p>

<?php foreach ($post as $post): ?>
	<?php $post = $post; ?>
<?php endforeach ?>

<?php echo Form::open(); ?>

<div class="block">
	<?php $titulo = isset($post->titulo) ? $post->titulo : '';  ?>
	<?php echo Form::label('titulo', 'Titulo', array('title' => 'Titulo')); ?>:<br />
	<?php echo Form::input('titulo',  $titulo, array('id' => 'titulo', 'size' => '60')); ?>
</div>

<div class="block">
	<?php $chamada = isset($post->chamada) ? $post->chamada : '';  ?>
	<?php echo Form::label('chamada', 'Chamada', array('title' => 'Chamada')); ?>:<br />
	<?php echo Form::textarea('chamada', $chamada, array('id' => 'chamada' , 'rows' => 5, 'cols' => '60' )); ?>
</div>

<div class="block">
	<?php $texto = isset($post->texto) ? $post->texto : '';  ?>
	<?php echo Form::label('texto', 'Texto', array('title' => 'Texto')); ?>:<br />
	<?php echo Form::textarea('texto', $texto, array('id' => 'texto' , 'rows' => 12, 'cols' => '60' )); ?>
</div>

<br class="clear" />

<?php echo Form::submit('salvar', 'Salvar', array('id' => 'salvar')); ?>
<?php echo Form::submit('cancelar', 'Cancelar', array('id' => 'cancelar')); ?>

<?php echo Form::close(); ?>
</div>

