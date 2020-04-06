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
							<li>
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
							<li class="active">
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

			<div class="company company-member box">
				<h5 class="line">Account Settings</h5>

				<div class="head-settings">
					<form action="#">
						<div class="file-download">
							<input type="file" id="file" accept="img/*">
							<label class="upload-img" for="file">
								<svg>
									<use xlink:href="#ic-upload"></use>
								</svg>
								<span>Upload logo</span>
							</label>
						</div>
					</form>

					<div class="theme box">
						<h5 class="line">Theme color</h5>

						<div class="theme-inner">
							<div class="circle-item active bg-blue"></div>
							<div class="circle-item bg-yellow"></div>
							<div class="circle-item bg-red"></div>
							<div class="circle-item bg-grin"></div>
							<div class="circle-item bg-cyan"></div>
							<div class="circle-item bg-azure"></div>
							<div class="circle-item bg-black"></div>
							<div class="circle-item bg-purple"></div>

							<div class="group-btn d-flex">
								<button class="btn">Save</button>
								<button class="btn-send">Cancel</button>
							</div>
						</div>
					</div>
				</div>

				<button class="btn btn-popup" data-popup="add-company">Add company member</button>

				<div class="wrap user-list">
					<div class="user">
						<div class="user-inner">
							<span class="user-dscr">Name</span>
						</div>

						<span class="user-dscr">Position</span>
						<span class="user-dscr">Department</span>
						<span class="user-dscr">Action</span>
					</div>

					<div class="user active">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-15.png" alt="">
							</div>
							<span class="user-name">Smirnov Semen</span>
						</div>

						<span class="user-dscr">Developer</span>
						<span class="user-dscr">First line support</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>

					<div class="user">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-14.png" alt="">
							</div>
							<span class="user-name">Petrushka Petr</span>
						</div>

						<span class="user-dscr">Account Manager</span>
						<span class="user-dscr">Clients Department</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>

					<div class="user">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-4.png" alt="">
							</div>
							<span class="user-name">Ivanov Ivan</span>
						</div>

						<span class="user-dscr">Account Manager</span>
						<span class="user-dscr">Clients Department</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>

					<div class="user">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-11.png" alt="">
							</div>
							<span class="user-name">Smirnov Semen</span>
						</div>

						<span class="user-dscr">Account Manager</span>
						<span class="user-dscr">Clients Department</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>

					<div class="user">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-8.png" alt="">
							</div>
							<span class="user-name">Petrushka Petr</span>
						</div>

						<span class="user-dscr">Account Manager</span>
						<span class="user-dscr">Clients Department</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>

					<div class="user">
						<div class="user-inner">
							<div class="user-avatar">
								<img src="img/user-12.png" alt="">
							</div>
							<span class="user-name">Smirnov Semen</span>
						</div>

						<span class="user-dscr">Developer</span>
						<span class="user-dscr">First line support</span>
						<span class="user-dscr c-blue">Send Invite</span>

						<div class="group-btn d-flex">
							<button class="btn">edit</button>
							<button class="btn-send">remove</button>
						</div>					
					</div>
				</div>

				<div class="pagination">
					<span class="ic-back">
						<svg>
							<use xlink:href="#back"></use>
						</svg>
					</span>
					<a href="/">1</a>
					<a href="/" class="active">2</a>
					<a href="/">3</a>
					<span class="ic-back">
						<svg>
							<use xlink:href="#back"></use>
						</svg>
					</span>
				</div>
			</div>	
		</main>
		<!-- // MAIN -->
	</div>

	<!-- POPUPS -->
	<div class="popup-overlay"></div>
	
	<!-- ADD COMPANY -->
	<div class="add-company popup">
		<div class="popup-head">
			<h5 class="line">Add Company Member</h5>
			<span class="ic-close popup-close main-close">
				<svg>
					 <use xlink:href="#close"></use>
				</svg>
			</span>
		</div>			

		<div class="wrap">
			<form action="#" class="fomr-popup form-style">
				<div class="column">
					<div class="left">
						<label class="label">
							<span>Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
						
						<label class="label">
							<span>Date of Birth</span>
							<input class="ic-calendar" type="text" name="name" placeholder="01/01/1990">
						</label>

						<label class="label not-mb">
							<span>E-mail</span>
							<input type="email" name="name" placeholder="Name of badges">
						</label>
					</div>

					<div class="right">
						<label class="label">
							<span>Last Name</span>
							<input type="text" name="name" placeholder="Last Name">
						</label>

						<div class="label">
							<span>sex</span>

							<div class="select ic-down">
								<span class="view">sex</span>
								<ul>
									<li>item 1</li>
									<li>item 2</li>
									<li>item 3</li>
								</ul>
								<input type="hidden">
							</div>
	                	</div>

						<label class="label not-mb">
							<span>User photo</span>
							<input class="ic-upload" type="text" name="name" placeholder="simple.png">
						</label>
					</div>
				</div>

				<span class="separetor"></span>
				
				<div class="column">
					<div class="label width-center">
						<span>Position</span>
						
						<div class="d-flex">
		                    <div class="select ic-down">
								<span class="view">Select position</span>
								<ul>
									<li>item 1</li>
									<li>item 2</li>
									<li>item 3</li>
								</ul>
								<input type="hidden">
							</div>

		                    <div class="add-people"> + position</div>
		                </div>
	                </div>		                

					<label class="label width-center">
						<span>Name New Position</span>
						<input type="text" name="name">
					</label>

					
					<div class="label width-center">
						<span>Department</span>
						
						<div class="d-flex">
		                    <div class="select ic-down">
								<span class="view">Select department</span>
								<ul>
									<li>item 1</li>
									<li>item 2</li>
									<li>item 3</li>
								</ul>
								<input type="hidden">
							</div>

		                    <div class="add-people"> + department</div>
		                </div>
	                </div>
					
					<label class="label width-center">
						<span>Manager</span>
						<input class="ic-man" type="text" name="name">
					</label>

					<label class="label width-center">
						<span>Location</span>
						<input class="ic-arrow" type="text" name="name">
					</label>
				</div>
			</form>
		</div>

		<div class="popup-footer">
			<div class="group-btn d-flex">
				<button class="btn">next</button>
				<button class="btn-send main-close">Cancel</button>
			</div>
		</div>
	</div>

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
				<textarea name="message" placeholder="Start typing here"></textarea>
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

	<script src="js/main.js"></script>

	<?php include "sprite.php" ?>
</body>
</html>