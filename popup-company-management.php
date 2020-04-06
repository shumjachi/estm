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
			<a href="/" class="logo">
				<svg>
				  	<use xlink:href="#logo"></use>
				</svg>
			</a>

			<div class="user d-flex">
				<div class="user-inner d-flex">
					<div class="user-avatar">
						<img src="img/user-ivan.png" alt="">
					</div>
					<div>
						<span class="user-name">Ivanov Ivan</span>
						<span class="user-dscr">developer</span>
					</div>						
				</div>					

				<span class="count">232</span>
			</div>

			<div class="menu">

				<button class="btn">Send feedback</button>

				<nav>
					<ul>
						<li class="active">
							<a href="#" class="d-flex">
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
							<a href="#" class="d-flex">
								<div class="icon">
									<svg class="svg-icon">
									  	<use xlink:href="#cil_badge"></use>
									</svg>
								</div>
								<span>My Badges</span>
							</a>
						</li>
						<li>
							<a href="#" class="d-flex">
								<div class="icon">
									<svg class="svg-icon">
									  	<use xlink:href="#uil_analytics"></use>
									</svg>
								</div>
								<span>Analytics</span>
							</a>
						</li>
						<li>
							<a href="#" class="d-flex">
								<div class="icon">
									<svg class="svg-icon">
									  	<use xlink:href="#cil_applications-settings"></use>
									</svg>
								</div>
								<span>Manage Badges</span>
							</a>
						</li>
						<li>
							<a href="#" class="d-flex">
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
			<div class="burger">
				<svg>
				  	<use xlink:href="#burger"></use>
				</svg>
			</div>

			<form action="#" class="form-search form-style">
				<label class="name">
					<input type="search" name="name" placeholder="search">
				</label>
			</form>	

			<div class="user d-flex">
				<span class="count">232</span>
				<div class="user-avatar">
					<img src="img/user-ivan.png" alt="">
				</div>
			</div>
		</div>

		<div class="company company-management box">
			<h5 class="line">Company management</h5>

			<button class="btn">Add company</button>

			<div class="wrap">
				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-1.png" alt="">
						</div>
						<span class="user-name">Company 1</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-2.png" alt="">
						</div>
						<span class="user-name">Company 2</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic, New Year</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-3.png" alt="">
						</div>
						<span class="user-name">Company 3</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic, New Year</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-4.png" alt="">
						</div>
						<span class="user-name">Company 4</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic, Spring</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-5.png" alt="">
						</div>
						<span class="user-name">Company 5</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic, Spring</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-6.png" alt="">
						</div>
						<span class="user-name">Company 6</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic</span>
					<span class="user-dscr c-blue">Send Invite</span>

					<div class="group-btn d-flex">
						<button class="btn">edit</button>
						<button class="btn-send">remove</button>
					</div>					
				</div>

				<div class="user">
					<div class="user-inner">
						<div class="user-avatar">
							<img src="img/compani-img-7.png" alt="">
						</div>
						<span class="user-name">Company 7</span>
					</div>

					<span class="user-dscr">Active</span>
					<span class="user-dscr">Basic</span>
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
				<a href="/">2</a>
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
	<div class="popup-company company-management active popup">
		<div class="popup-head">
			<h5 class="line">Company management</h5>
			<span class="ic-close popup-close">
				<svg>
					 <use xlink:href="#close"></use>
				</svg>
			</span>
		</div>			
 
		<div class="wrap">
			<form action="#" class="fomr-popup form-style">
				<label class="name" >
					<span>Name company</span>
					<input class="ic" type="text" name="name" placeholder="Name">
				</label>

				<h6><span>Admin Settings</span></h6>

				<div class="column">
					<div class="left">
						<label class="name">
							<span>Name</span>
							<input type="text" name="name" placeholder="Name">
						</label>
					</div>

					<div class="right">
						<label class="name">
							<span>Last Name</span>
							<input type="text" name="name" placeholder="Last Name">
						</label>
					</div>
				</div>
				
				<label class="name">
					<span>E-mail</span>
					<input type="email" name="name" placeholder="">
				</label>

				<div class="column">
					<div class="left">
						<label class="name">
							<span>Phone</span>
							<input type="text" name="name" placeholder="Name">
						</label>
					</div>

					<div class="right">
						<label class="name">
							<span>Web</span>
							<input type="text" name="name" placeholder="Last Name">
						</label>
					</div>
				</div>	

				<label class="name">
					<span>Address</span>
					<input class="ic-arrow" type="text" name="name" placeholder="|">
				</label>

				<label class="name">
					<span>Financial Address</span>
					<input class="ic-arrow" type="text" name="name" placeholder="|">
				</label>

				<div class="column">
					<div class="left">
						<label class="sel">
							<span>Clients Segment</span>
							
		                    <select name="name">
		                        <option value="select-1">select-1</option>
		                        <option value="select-2" selected>Select segment</option>
		                        <option value="select-3">select-2</option>
		                        <option value="select-4">select-3</option>
		                        <option value="select-5">select-4</option>
		                        <option value="select-6">select-5</option>
		                        <option value="select-7">select-6</option>
		                    </select>
		                </label>
					</div>

					<div class="right">
						<label class="name">
							<span>Registration date</span>
							<input class="ic-calendar" type="text" name="name" placeholder="01/01/2020">
						</label>
					</div>
				</div>

				<label class="sel">
					<span>Company Status</span>
					
                    <select class="ic-down" name="name">
                        <option value="select-2" selected>Active</option>
                        <option value="select-2">Not Valid</option>
                    </select>
                </label>		
			</form>
		</div>

		

		<div class="popup-footer">
			<div class="group-btn d-flex">
				<button class="btn">next</button>
				<button class="btn-send">Cancel</button>
			</div>
		</div>	
	</div>
	<!-- // POPUPS -->



	




	

	<?php include "sprite.php" ?>
</body>
</html>