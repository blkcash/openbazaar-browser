<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

	<title>OpenBazaar Browser</title>

	<link rel="stylesheet" href="./dist/styles/site.min.css">

	<!--[if lt IE 9]>
		<script src="./dist/scripts/ie-only.js"></script>
	<![endif]-->

</head>

<body>
	<div class="Page">
		<?php include 'inc--page-header.php';?>
		<main class="Store">
			<?php include 'inc--store-nav.php';?>
			<div class="Store__header">
				<h1>Home</h1>
			</div>
			<div class="Column--left">
				<div class="StoreCard">
					<!-- Store's header img -->
					<img class="StoreCard__header" src="./dist/images/example--cat01.jpg">
					<!-- Store Avatar -->
					<img class="Avatar" src="./dist/images/example--cat-avatar.jpg">
					<span class="StoreCard__name">Ski Shop</span>
					<span class="StoreCard__handle">@skiShop</span>
					<p>
						We sell rare and high quality art sourced from big cities around the world. Follow us.
					</p>
					<div class="StoreCard__bottom">
						<div class="StoreCard__bottom__location">
							<img src="./dist/images/icon--pin.png">
							Seattle, WA
						</div>
						<div class="StoreCard__bottom__ratings">
							<img src="./dist/images/icon--star.png">
							4.2
							<!-- link to store's ratings and reviews -->
							(<a href="">192</a>)
						</div>
					</div>
				</div>
				<section class="Section--store-information">
					<h3>Information</h3>
					<ul>
						<li>
							<h4>OpenBazaar ID</h4>
							<p>Qmai9U7856XKgDSvMFExPbQufcsc4ksG779VyG4Md5dn4J</p>
						</li>
						<li>
							<h4>Website</h4>
							<p><a href="http://urbanart.com">http://urbanart.com</a><img src=""></p>
						</li>
						<li>
							<h4>Email</h4>
							<p><a href="mailto:contact@urbanart,com">contact@urbanart.com</a><img src=""></p>
						</li>
						<li>
							<h4>Twitter</h4>
							<p><a href="https://twitter.com/@urbanart">@urbanart</a><img src=""></p>
						</li>
						<li>
							<h4>Facebook</h4>
							<p><a href="https://www.facebook.com/">/urbanart</a><img src=""></p>
						</li>
						<li>
							<h4>Instagram</h4>
							<p><a href="https://www.instagram.com/">/urbanart</a><img src=""></p>
						</li>
						<li>
							<h4>SnapChat</h4>
							<p>urbanart</p>
						</li>
					</ul>
				</section> 
			</div>
			<div class="Column--right">
				<section class="Section">
					<h3>About</h3>
					<p>
						At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.
					</p>
					<p>
						Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
					</p>
				</section>
			</div>
		</main>
	</div>

	<script src="./dist/scripts/site.min.js"></script>

</body>

</html>