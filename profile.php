<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	
	<div class="container-wrap">
		<!-- SIDEBAR -->
		<aside class="sidebar">
			<div class="bg"></div>

			<div class="inner">
				<a href="#" class="close-sidebar hidden-desktop visible-mobile">
					<svg><use xlink:href="#close-sidebar"></use></svg>
				</a>

				<a href="/" class="logo">
					<svg>
					  	<use xlink:href="#logo"></use>
					</svg>
				</a>

				<div class="user d-flex">
					<div class="user-inner d-flex">
						<div class="user-avatar active">
							<img src="img/user-5.png" alt="">
						</div>
						<div>
							<span class="user-name">Ivanov Ivan</span>
							<span class="user-dscr">developer</span>
						</div>						
					</div>					

					<span class="count">130</span>
				</div>

				<div class="menu">
					<button class="btn btn-popup" data-popup="popup-feedback">Send feedback</button>

					<nav>
						<ul>
							<li class="active">
								<a href="news-feed.php" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#cil_newspaper"></use>
										</svg>
									</div>
									<span>News Feed</span>
									<span class="circle">8</span>
								</a>
							</li>
							<li>
								<a href="my-badgest.php" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#cil_badge"></use>
										</svg>
									</div>
									<span>My Badges</span>
								</a>
							</li>
							<li>
								<a href="analytics.php" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#uil_analytics"></use>
										</svg>
									</div>
									<span>Analytics</span>
								</a>
							</li>
							<li>
								<a href="manage-badges.php" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#cil_applications-settings"></use>
										</svg>
									</div>
									<span>Manage Badges</span>
								</a>
							</li>
							<li>
								<a href="account-settings.php" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#ant-design_control-outlined"></use>
										</svg>
									</div>
									<span>Account Settings</span>
								</a>
							</li>
							<li>
								<a href="#" class="d-flex">
									<div class="icon">
										<svg class="svg-icon">
										  	<use xlink:href="#ant-design_logout-outlined"></use>
										</svg>
									</div>
									<span>Logout</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</aside>
		<!-- // SIDEBAR -->
		
		<!-- MAIN -->
		<main class="main">
			<div class="main-head">
				<div class="burger visible-mobile">
					<svg>
					  	<use xlink:href="#burger"></use>
					</svg>
				</div>

				<form action="people-search.php" class="form-search form-style">
					<label class="name">
						<input type="search" name="name" placeholder="search">
					</label>
					<input type="submit" class="hidden">
				</form>	

				<div class="user d-flex">
					<span class="count">232</span>
					<div class="user-avatar">
						<img src="img/user-9.png" alt="">
					</div>
				</div>
			</div>
			
			<div class="content profile d-flex">
				<div class="news box">
					
					<div class="item-box hidden-desktop visible-mobile d-flex box">
						<div class="item-box-inner">
							<div class="user-avatar">
								<img src="img/profil-img-1.png" alt="">
							</div>
							
							<div class="user-box">
								<span class="name">Smirnov Semen</span>
								<span>developer</span>
								<span class="count">50</span>
							</div>
						</div>
						<div class="group-btn">
							<button class="btn">send feedback</button>
							<button class="btn-send">Request feedback</button>
						</div>
					</div>

					<h5 class="line">News</h5>

					<div class="wrap">
						<div class="news-item d-flex">
							<div class="news-image">
								<img src="img/bad-17.png" alt="">
							</div>

							<div class="article">
								<div class="author">
									Send feedback
									<span class="c-blue">Smirnov Semen</span>
								</div>

								<div class="descr">
									The margin of this text field is too small to contain my endless gratitude to this awesome mentor! P.S. This is a reference to Fermat's quote on his last theorem The margin of this text field is too small to contain my!
								</div>

								<div class="data d-flex">
									<span>from <span class="c-blue">Smirnov Semen</span></span>
									<span>08 February 2020</span>
								</div>
							</div>
						</div>

						<div class="news-item d-flex">
							<div class="news-image">
								<img src="img/bad-6.png" alt="">
							</div>

							<div class="article">
								<div class="author">
									Send feedback
									<span class="c-blue">Smirnov Semen</span>
								</div>

								<div class="descr">
									The margin of this text field is too small to contain my endless gratitude to this awesome mentor! P.S. This is a reference to Fermat's quote on his last theorem The margin of this text field is too small to contain my!
								</div>

								<div class="data d-flex">
									<span>from feedback <span class="c-blue">Smirnov Semen</span></span>
									<span>08 February 2020</span>
								</div>
							</div>
						</div>

						<div class="news-item d-flex">
							<div class="news-image">
								<img src="img/bad-10.png" alt="">
							</div>

							<div class="article">
								<div class="author">
									Send feedback
									<span class="c-blue">Smirnov Semen</span>
								</div>

								<div class="descr">
									The margin of this text field is too small to contain my endless gratitude to this awesome mentor! P.S. This is a reference to Fermat's quote on his last theorem The margin of this text field is too small to contain my!
								</div>

								<div class="data d-flex">
									<span>from <span class="c-blue">Smirnov Semen</span></span>
									<span>08 February 2020</span>
								</div>
							</div>
						</div>
					</div>					
				</div>

				<div class="item-box d-flex box">
					<div class="item-box-inner">
						<div class="user-avatar">
							<img src="img/profil-img-1.png" alt="">
						</div>
						
						<div class="user-box">
							<span class="name">Smirnov Semen</span>
							<span>developer</span>
							<span class="count">130</span>
						</div>
					</div>
					<div class="group-btn">
						<button class="btn">send feedback</button>
						<button class="btn-send">Request feedback</button>
					</div>
				</div>
			</div>
		</main>
		<!-- // MAIN -->
	</div>

	<!-- POPUPS -->
	<div class="popup-overlay"></div>

	<!-- POPUP FEEDBACK -->
	<div class="popup-feedback popup">
		<div class="popup-head">
			<h5 class="line">Send FeedBack</h5>
			<span class="ic-close popup-close main-close">
				<svg>
					 <use xlink:href="#close"></use>
				</svg>
			</span>
		</div>			

		<div class="wrap box-gray">
			<div class="badges-item">
				<img src="img/bad-1.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-2.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-3.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-4.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-5.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-6.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-7.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-8.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-9.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-10.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-11.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-12.png" alt="">
			</div>

			<h5 class="line c-blue">Valentine's Day Badges</h5>

			<div class="badges-item">
				<img src="img/bad-13.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-17.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-18.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-14.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-15.png" alt="">
			</div>

			<div class="badges-item">
				<img src="img/bad-16.png" alt="">
			</div>
		</div>

		<div class="popup-footer">
			<div class="group-btn d-flex">
				<button class="btn btn-popup" data-popup="popup-feedback-next">next</button>
				<button class="btn-send main-close">Cancel</button>
			</div>
		</div>	
	</div>

	<!-- POPUP FEEDBACK NEXT -->
	<div class="popup-feedback-next popup">
		<div class="popup-head">
			<h5 class="line">Send FeedBack</h5>
			<a href="#" class="ic-close popup-close main-close">
				<svg>
					 <use xlink:href="#close"></use>
				</svg>
			</a>

			<a href="#" class="popup-back btn-popup d-flex" data-popup="popup-feedback">
				<span class="ic-back">
					<svg>
						<use xlink:href="#back"></use>
					</svg>
				</span>
				<span>Сhoose another badge</span>
			</a>
		</div>			

		<div class="wrap">
			<div class="wrap-item">
				<img src="img/bad-1.png" alt="">
			</div>

			<div class="new-badges d-flex">
				<span>To</span>
				<div class="inputbox d-flex">
					<div class="inputbox-item">Ivanov ivan
						<span class="input-close d-flex">
							<svg>
								<use xlink:href="#input-close"></use>
							</svg>
						</span>
					</div>

					<div class="add-people"> + Add people</div>
				</div>
			</div>

			<form action="#" class="form-style">
				<textarea type="message" name="message" placeholder="Start typing here"></textarea>
			</form>
		</div>

		<div class="popup-footer">
			<div class="group-btn d-flex">
				<button class="btn">Send feedbackxt</button>
				<button class="btn-send main-close">Cancel</button>
			</div>
		</div>	
	</div>
	<!-- // POPUPS -->	
	
	<?php include "sprite.php" ?>

	<script src="js/main.js"></script>
</body>
</html>