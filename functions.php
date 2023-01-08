<?php 
function formatInput($input) {
	echo "<pre>";
		var_dump($input);
	echo "</pre>";
}

function getQueryString() {
	// $string = $_GET['page'] ?? null;
	$string = $_GET['page'] ?? null;

	if (!isset($string)) {

		$string = "home";
		// echo $string;
		return $string;
	}
	else {
		// echo $string;
		return $string;
	}
}

function getPath() {
	return "./templates/pages/" . getQueryString() . ".php";
}

function setPath() {
	switch (getQueryString()) {
		case 'home':
			break;
		
		case 'contact':
			include (getPath());
			break;

		case 'projects':
			include (getPath());
			break;	

		case 'about':
			include (getPath());
			break;	

		case 'photo-gallery':
			include (getPath());
			break;			

		default:
			include "./templates/pages/404.php";
			break;
	}
}

function photoStyle() {
	$style = $_GET["photo-style"] ?? null;

	switch ($style) {
		case "grayscale":
			return "grayscale";
			break;
		
		case "blur":
			return "blur";
			break;

		case "grayscale-and-blur":
			return "grayscale-and-blur";
			break;		

		default:
			return "base-photo-style";
			break;
	}
}

function templatePhoto($path, $alt) {
	return <<<HEREDOC
		 <ul class="photo-list">
			<li>
				<picture class="photo-gallery-image <?=photoStyle()?>">
					<img src="<?=$path?>" alt="<?=$alt?>">
				</picture>
			</li>
		</ul>
	HEREDOC;
}
