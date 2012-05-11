
<div id="listar_posts">

<!-- Condição para saber se tem postagens cadastradas -->
<?php if (!empty($posts)): ?>

	<?php foreach ($posts as $post): ?>
		
			<dl class="post">
				<dt><?php echo $post->titulo; ?></dt>
				<dd class="data"><?php $data_registro = new DateTime($post->data_registro);
			$data_registro = $data_registro->format('d/m/Y'); 

			echo $data_registro . ' por Zé - 6 comentários' ;  ?></dd>
				<dd class="texto"><?php echo $post->chamada ?></dd>
				<dd class="mais"><a href="" title="Continuar lendo...">➔</a></dd>
			</dl>

	<?php endforeach ?>

	<?php echo $pagination_links; ?>

<?php else: ?>
	<!-- EXEMPLO -->
	<dl class="post">
		<dt>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dt>
		<dd class="data">22 de julho, por Zé - 12 comentários</dd>
		<dd class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo, nulla varius imperdiet molestie, ligula dui lobortis lacus, ut elementum purus libero non odio. Suspendisse luctus libero sit amet sem dignissim vel mattis tellus bibendum. Pellentesque malesuada lacus sed neque rhoncus...</dd>
		<dd class="mais"><a href="" title="Continuar lendo...">➔</a></dd>
	</dl>

	<dl class="post">
		<dt>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</dt>
		<dd class="data">22 de julho, por Zé - 12 comentários</dd>
		<dd class="texto">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec commodo, nulla varius imperdiet molestie, ligula dui lobortis lacus, ut elementum purus libero non odio. Suspendisse luctus libero sit amet sem dignissim vel mattis tellus bibendum. Pellentesque malesuada lacus sed neque rhoncus...</dd>
		<dd class="mais"><a href="" title="Continuar lendo...">➔</a></dd>
	</dl>
	
<?php endif ?>

</div>
