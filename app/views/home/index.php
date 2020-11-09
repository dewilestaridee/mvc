<div class="container">
	<div class="jumbotron mt-4">
	<h1 class="display-4">Detail Artikel Antara News</h1>	
	</div>
	
	<div class = "container mt-5">
		<div class ="row">
			<div class = "col-6">
				<ul class="list-group">
					<?php foreach ($data ['artikel'] as $artikel) : ?>			
					<li class="list-group-item">Judul : <?= $artikel['title']; ?></li>
					<li class="list-group-item"> URL : <?= $artikel['url']; ?></li>
					<li class="list-group-item">Konten : <?= $artikel['content']; ?></li>
					<?php endforeach;?>
				</ul>
			</div>
		</div>
	</div>
</div>