<!DOCTYPE html>
<html>
<head>
	<title>rezy1337.</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Сайт долбоёба, web dev."> <!-- change it plzz -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css"/>
	<link rel="stylesheet" href="css/style.css"/>
    <link rel="stylesheet" href="icon-fonts/font-awesome-4.5.0/css/font-awesome.min.css"/>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-alpha1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/typed.js/1.1.1/typed.min.js'></script>
    <script src="./rezy.js"></script>
    <link rel="icon" type="image/png" href="/favicon.png">

</head>
<body>

    <header>
    	<div class="logo pull-left">
			<a href="https://rezy.pw"><img src="img/1.png" height="50px" width="50px"></a>
		</div>

	</header>
	<section class="hero col-md-12">
	<!-- bypass by rezy1337 | vk.com/ripsitee1337 -->
<?php
  $bg = array('<video class="video" loop autoplay><source type="video/mp4" src="1.mp4"></video><audio src="1.mp3" autoplay loop></audio>', '<video class="video" loop autoplay><source type="video/mp4" src="2.mp4"></video><audio src="2.mp3" autoplay loop></audio>', '<video class="video" loop autoplay><source type="video/mp4" src="3.mp4"></video><audio src="3.mp3" autoplay loop></audio>' ); // видосы

  $i = rand(0, count($bg)-1); // генерим
  $selectedBg = "$bg[$i]"; // выводим
?>
	<?php echo $selectedBg; ?>"> <!-- тут кароче ничего не трогай -->
	<!-- bypass by rezy1337 | vk.com/ripsitee1337 -->
		<div class="hero-inner">
			<h1> rezy1337. </h1>
			<span class="typed"></span>
			<br>
			<br>
			<br> <!-- мне просто лень прописывать padding -->
			<br>
		  <a href="https://vk.com/rezyy"><i style="color:white; text-shadow: 0 0 6px #000;" class="fa fa-vk fa-lg fa-spin"></i>  </a>
        </div>
	</section>
</body>

</html>