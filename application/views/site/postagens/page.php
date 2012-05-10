
<div id="postagens">

<h2>CRUD Posts</h2>

<p>=============================== Listar ================================</p>

<table cellspacing="0" cellpadding="0">
	 <thead><th>nº</th> <th class="titulo">titulo</th> <th>cadastro</th> <th>ações</th></thead>
	 <tbody>
	 	<?php foreach ($posts as $post): ?>
	 		<tr>
		 		<td><?php echo $post->id; ?></td>
		 		<td class="titulo"><?php echo $post->titulo; ?></td>
		 		<td><?php $data_registro = new DateTime($post->data_registro);
			$data_registro = $data_registro->format('d/m/Y'); 

			echo $data_registro; ?></td>
		 		<td>
		 			<a href="<?php echo URL::site('postagens/novo'); ?>" class="novo" title="novo">novo -</a>
		 			<a href="<?php echo URL::site('postagens/editar/?id=') . $post->id ; ?>" class="editar" title="editar">editar -</a>
		 			<a href="<?php echo URL::site('postagens/deletar/?id=') . $post->id ; ?>" class="deletar" title="deletar">deletar</a>
		 		</td>
		 	</tr>

	 	<?php endforeach ?>
	 </tbody>
</table>


<?php echo $pagination_links; ?>


</div>

