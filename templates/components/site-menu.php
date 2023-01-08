<nav>
	<ul class="link-list">
		<li>
			<a href="?">home</a>
		</li>
		<li>
			<a href="?page=contact">contact</a>
		</li>
		<li>
			<a href="?page=projects">projects</a>
		</li>
		<li>
			<a href="?page=about">about</a>
		</li>
		<li>
			<a href="?page=photo-gallery">photo-gallery</a>

			<ul class="photo-style-list">
				<?php if( ($_GET["page"] ?? null) === "photo-gallery"):?>
					<?php include "photo-menu.php"; ?>
				<?php endif; ?>
			</ul>
		</li>
	</ul>
</nav>