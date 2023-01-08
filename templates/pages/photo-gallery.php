<?php 
$jsonImages = file_get_contents("./photos.json");
$images = json_decode($jsonImages, true);
// formatInput($images);


?>
<?php foreach($images as $image): ?>
	
	 <ul class="photo-list">
			<li>
				<picture class="photo-gallery-image <?=photoStyle()?>">
					<img src="<?=$image['imagePath']?>" alt="<?=$image['imageAlt']?>">
				</picture>
			</li>
		</ul> 
<?php endforeach; ?>
<!-- <ul class="photo-list">
	<li>
		<picture class="photo-gallery-image <?=photoStyle()?>">
			<img src="./images/flower.jpg" alt="a daisy">
		</picture>
	</li>
</ul> -->