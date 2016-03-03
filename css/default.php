<?php
/*********************************************************************
Teacher

Copyright 2013 by the contributors

This file is part of Teacher.

Teacher is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

Teacher is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with Teacher.  If not, see <http://www.gnu.org/licenses/>
*********************************************************************/

require('common.php');

$header_bgcolor = 'rgb(100,100,100)';
$item_menu_top_color_inactive = $user_color; //'rgb(100,100,100)';
$item_menu_top_bgcolor_inactive = 'rgb(255,255,255)';
$item_menu_top_color_active = 'rgb(255,255,255)';
$item_menu_top_bgcolor_active = $user_color; //'rgb(100,100,100)';

$h2_color = 'rgb(0,0,0)';

$footer_bgcolor = 'rgb(100,100,100)';


header("Content-type: text/css; charset: UTF-8");

?>


body {
	width: <?php echo $body_width; ?>px;
	margin: auto;
	padding:0;
	font-family: arial;
	text-align: left;/*justify;*/
}

/*
a {
	color: #00FF00;
	text-decoration: underline;
}*/

p {
	line-height: 1.3;
}

li {
	line-height: 1.3;
}



/****************
 * Header
 ***************/


header {
	background-color: rgb(254,254,254);
	margin: 0;
	padding: 0;
}

	.header_title {
		height: 70px;
		background-color: <?php echo $header_bgcolor; ?>;
		border-bottom-left-radius: 40px;
	}

	.header_left {
		width: 100px;
		display: inline-block;
		margin-left: 20px;
	}

	.header_right {
		width: 890px;
		display: inline-block;
		vertical-align: top;
	}
/*	
		.header_top {
			height: 20px;
			text-align: right;
			padding-right: 10px;
			padding-top: 5px;
			padding-bottom: 0;
			font-size: 0.8em;
			color: rgb(254,254,254);
		}
	
			.header_top a {
				margin: 0;
				margin-left: 30px;
				padding: 2px;
				text-decoration: none;
				color: rgb(254,254,254);
				background-color: rgba(254,254,254,0.5);
				border: 1px solid rgb(254,254,254);
			}
			
			.header_top a:hover {
				text-decoration: underline;
			}
*/
		.header_middle {
			padding-top: 20px;
			padding-left: 10px;
			text-align: left;
			color: rgb(254,254,254);
			font-size: 1.7em;
			font-weight: bold;
		}
		
		.header_high_letters {
			font-size: 1.2em;
			font-style: italic;
			color: rgb(205,230,255);
		}

	.header_menu {
		height: 50px;
		background-color: <?php echo $header_bgcolor; ?>;
	}

		.menu_top {
			display: inline-block;
			width: 800px;
			height: 50px;
			margin-right: -3px;
			padding-top: 20px;
			padding-left: 50px;
			background-color: rgb(254,254,254);
			border-top-right-radius: 35px;
		}

			.items_menu_top {
				position: absolute;
				margin: 0;
				padding: 0;
				font-size: 1.2em;
			}

			.item_menu_top_active,
			.item_menu_top_inactive {
				display: inline-block;
				vertical-align: top;
				width: 145px;
				text-align: center;
				margin-left: 5px;
			}

			.item_menu_top_active a,
			.item_menu_top_inactive a {
				border-radius: 5px;
				padding: 5px;
				text-decoration: none;
			}
			
			.item_menu_top_active span {
				border-radius: 5px;
				padding: 5px;
				color: <?php echo $item_menu_top_color_active; ?>;
				background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
			}
			
			.item_menu_top_inactive span {
				border-radius: 5px;
				padding: 5px;
				color: <?php echo $item_menu_top_color_inactive; ?>;
				background-color: <?php echo $item_menu_top_bgcolor_inactive; ?>;
			}
			
			.item_menu_top_active a {
				color: <?php echo $item_menu_top_color_active; ?>;
				background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
			}

			.item_menu_top_inactive a {
				color: <?php echo $item_menu_top_color_inactive; ?>;
				background-color: <?php echo $item_menu_top_bgcolor_inactive; ?>;
			}
			
			.submenu_top {
				display: none;
				max-width: 140px;
				padding: 0;
				margin: 0;
				margin-top: 7px;
				border: 0;
				font-size: 0.8em;
				list-style-type: none;
			}
			
			.item_menu_top_inactive:hover > a {
				background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
				color:  <?php echo $item_menu_top_color_active; ?>;
			}
			
			.items_menu_top li:hover > .submenu_top {
				display: block;
			}
			
			.submenu_top li {
				padding: 5px;
				border-top: 2px solid <?php echo $item_menu_top_color_active; ?>;
				border-bottom: 2px solid <?php echo $item_menu_top_color_active; ?>;
				border-left: 4px solid <?php echo $item_menu_top_color_active; ?>;
				border-right: 4px solid <?php echo $item_menu_top_color_active; ?>;
				border-radius: 5px;
				background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
			}
			
			.submenu_top a {
				padding: 0;
				color: <?php echo $item_menu_top_color_active; ?>;
				background-color: <?php echo $item_menu_top_bgcolor_active; ?>;
			}


	.menu_decoration {
		display: inline-block;
		vertical-align: top;
		width: 170px;
		height: 50px;
		margin: 0;
		margin-left: -3px;
		padding: 0;
		background-color: rgb(254,254,254);
	}
	
	.header_session {
		width: 170px;
		height: 50px;
		margin: 0;
		padding: 0;
		background-color: <?php echo $header_bgcolor; ?>;
		border-bottom-left-radius: 30px;
		color: rgb(254,254,254);
		font-size: 0.8em;
	}
	
	.header_session_notice {
		margin: 0px;
	}

	
	.header_session_action {
		margin-top: 8px;
	}
		
	.header_session a {
		margin: 0;
		margin-left: 30px;
		padding: 2px;
		text-decoration: none;
		color: rgb(254,254,254);
		background-color: rgba(254,254,254,0.5);
		border: 1px solid rgb(254,254,254);
		font-size: 1.1em;
	}
			
	.header_session a:hover {
		text-decoration: underline;
	}

	h1 {
		text-align: center;
		color: black;
		font-size: 2em;
	}



/****************
 * Middle of page
 ***************/
 
.middle_page {
	margin: 0px;
	padding: 0px;
	min-height: 500px;
}

	.menu_left {
		display: inline-block;
		margin: 0;
		margin-top: 60px;
		margin-bottom: -20px;
		padding: 0;
		padding-left: 5px;
		padding-right: 5px;
		padding-bottom: 10px;
		min-height: 450px;
		width: <?php echo $menu_left_width; ?>px;
		color: rgb(254,254,254);
		text-align: left;
	}

		.menu_left_logo {
			position: relative;
			top: -37px;
			left: -5px;
		}
			
		.menu_left_user {
			margin: 0;
			margin-top: 20px;
			padding: 3px;
			background-color: rgb(143,71,146);
			border: 3px solid rgb(0,0,0);
			font-size: 1.1em;
			font-weight: bold;
/*
			box-shadow: 2px 2px 5px gray inset;
			-moz-box-shadow:2px 2px 10px gray;
			-webkit-box-shadow:2px 2px 10px gray;
*/
		}
		
		.menu_left_user a {
			color: rgb(254,254,254);
			text-decoration: none;
		}
		
		.menu_left_patient {
			margin: 0;
			margin-top: 20px;
			padding: 3px;
			background-color: rgb(65,144,98);
			border: 3px solid rgb(0,0,0);
			font-size: 1.1em;
			font-weight: bold;
		}
		
		.menu_left_patient a {
			color: rgb(254,254,254);
			text-decoration: none;
		}
		
		.menu_left_subtitle {
			font-style: italic;
			color: rgb(200,200,200);
		}
		
		.menu_left_tip {
			font-size: 0.7em;
		}


/*		.menu_left_title {
			padding: 3px;
			margin-bottom: 10px;
			border-right: 2px solid rgb(254,254,254);
			border-bottom: 2px solid rgb(254,254,254);
			border-left: 2px solid;
			border-top: 2px solid #49BFDD;
			border-radius: 10px 0px 10px 0px;
			font-size: 1.1em;
			font-weight: bold;
			text-decoration: none;
		}
		
		.menu_left_title:hover {
			border: 2px solid rgb(254,254,254);
			border-radius: 10px 0px 10px 0px;
		}
		
		.menu_left_title a {
			color: rgb(254,254,254);
			text-decoration: none;
		}
		
		.menu_left_title a:hover {
			text-decoration: none;
		}		

		.menu_left_subtitle {
			font-size: 0.7em;
		}
		
		.menu_left_close {
			text-align: center;
			font-size: 0.7em;
		}

		.menu_left ul li {
			color: rgb(254,254,254);
		}

		.menu_left_list {
			margin: 0;
			list-style-type :none;
			list-style-position: outside;
			
		}
		
		.menu_left_list li {
			margin: 0;
			line-height: 1.15;
		}

		.menu_left_part {
			margin-top: 5px;
			padding: 3px;
			background-color: rgba(254,254,254,0.3);
		}
		

		
		.menu_left_inactive {
			margin: 0;
			padding: 3px;
			color: rgb(150,150,150);
		}

		.menu_left_inactive a {
			color: rgb(120,120,120);
			text-decoration: none;
		}
*/	
	section {
		display: inline-block;
		vertical-align: top;
		word-wrap: break-word;
		margin: 0px;
		width: <?php echo $content_width; ?>px;
		padding-left: 19px;
		padding-top : 0px;
		padding-right: 0px;
	}

		.content_top {
			margin-top: 30px;
			margin-bottom: 10px;
		}
			
			.message_error_title {
				padding: 5px;
				background-color: <?php echo $message_bg_color; ?>;
				font-size: 1.2em;
				font-weight: bold;
				color: <?php echo $message_error_color; ?>;
				list-style-type: disc;
				list-style-position: inside;
			}
			
				.message_error em {
					font-style: italic;
				}
				
				.message_error {
					font-size: 0.8em;
					font-weight: none;
				}

			.message_info_title {
				padding: 5px;
				background-color: <?php echo $message_bg_color; ?>;
				color: <?php echo $message_info_color; ?>;
				list-style-type: disc;
				list-style-position: inside;
			}

				.message_info {
					font-size: 0.8em;
					font-weight: none;
				}
			
			.message_warning_title {
				padding: 5px;
				background-color: <?php echo $message_bg_color; ?>;
				font-size: 1.2em;
				font-weight: bold;
				color: <?php echo $message_warning_color; ?>;
				list-style-type: disc;
				list-style-position: inside;
			}
			
				.message_warning {
					font-size: 0.8em;
					font-weight: none;
				}
				
			.message_advice_title {
				padding: 5px;
				background-color: <?php echo $message_bg_color; ?>;
				font-size: 1.2em;
				font-weight: bold;
				color: <?php echo $message_advice_color; ?>;
				list-style-type: disc;
				list-style-position: inside;
			}
			
				.message_advice {
					font-size: 0.9em;
					font-weight: none;
				}
		
		.content {
			margin-top: 30px;
			margin-bottom: 10px;
/*			height: 700px;
			overflow: auto;*/
		}

/*			section  h1 {
				margin-top: 20px;
				margin-bottom: 40px;
				text-align: center;
				color: #FFFFFF;
				background-color: #49BFDD;
			}
*/
			section h2 {
				color: <?php echo $h2_color; ?>;
				font-size: 1.4em;
			}

			section h2 a {
				color: <?php echo $h2_color; ?>;
				text-decoration: underline;
			}

		.content_bottom {
			margin-top: 10px;
			margin-bottom: 10px;
		}




/****************
 * Footer
 ***************/

footer {
	background-color: <?php echo $footer_bgcolor; ?>;
	color: rgb(255,255,255);
	margin: 0;
	margin-top: 20px;
	padding-top:20px;
	font-size: 0.8em;
	text-align: center;
}

	.links_footer {
		display: inline-block;
		vertical-align: top;
		width: 350px;
		padding-right: 100px;
		text-align: justify;
	}
	
	.links_footer a {
		color: rgb(255,255,255);
	}
	
	.logo_footer {
		display: inline-block;
		vertical-align: top;
		width: 100px;
		padding: 0;
	}




/*****************************************************
 * generic styles                                    *
 *****************************************************/

/* list */

.list_no_point {
	list-style-image:none;
	list-style-type:none;
}

ul.list_choice li {
	height: 2em;
	list-style-type: square;
	font-weight: bold;
	color: rgb(64,191,221);	
}

ul.list_choice li a {
	color: rgb(64,191,221);	
}

ul.list_choice li a:hover {
	color: rgb(64,191,221);
	background-color: rgba(64,191,221,0.2); /*rouge : rgba(192,0,0, 0.3)*/
	border: 1px solid rgb(64,191,221);
	border-radius: 5px;
	padding: 5px;
}



/* links */

.link, .link_last a, .link_next a {
	color: rgb(0,0,0);
	padding: 3px;
	border-radius: 5px;
	border: 2px solid <?php echo $link_bgcolor; ?>;
	background-color: rgba(<?php echo extractRGBValues($link_bgcolor); ?>,0.1);
	text-decoration: none;
}

.link_container {
	margin-top: 10px;
	margin-bottom: 20px;
	text-align: center;
}

.link:hover {
	background-color: rgb(255,255,255);
}

.link_last {
	display: inline-block;
	width: 400px;
	margin-top: 20px;
	margin-bottom:20px;
	text-align: left;
}

.link_next {
	display: inline-block;
	width: 400px;
	margin-top: 20px;
	margin-bottom:20px;
	text-align: right;
}


.link_last a:hover, .link_next a:hover {
	text-decoration: underline;
}

.link_action {
	margin: 10px;
	padding: 5px;
	font-weight: bold;
	border: solid 3px rgb(50,205,50);
	border-radius: 10px;
	background-color: rgb(50,205,50);/*rgba(42,149,42,0.7);*/
	text-decoration: none;
	color: rgb(0,0,0);	
}

.link_action:hover {
	border: ridge 3px rgb(50,205,50);
	background-color: rgb(0,255,0);/*rgb(42,149,42);*/
}

.link_action_critical {
	margin: 10px;
	padding: 5px;
	font-weight: bold;
	border: solid 3px rgb(250,128,114);
	border-radius: 10px;
	background-color: rgb(250,128,114);
	text-decoration: none;
	color: rgb(0,0,0);
}

.link_action_critical:hover {
	border: ridge 3px rgb(250,128,114);
	background-color: rgb(220,20,60);
}

.button_validation {
	display: inline-block;
	vertical-align: top;
	height: 30px;
	margin: 10px;
	padding: 5px;
	font-weight: bold;
	border: solid 3px rgb(50,205,50);
	border-radius: 10px;
	background-color: rgb(50,205,50);/*rgba(42,149,42,0.7);*/
	text-decoration: none;
	color: rgb(0,0,0);
}

.button_validation:hover {
	border: ridge 3px rgb(50,205,50);
	background-color: rgb(0,255,0);/*rgb(42,149,42);*/
}

.button_validation_inactive {
	display: inline-block;
	vertical-align: top;
	height: 30px;
	margin: 10px;
	padding: 5px;
	font-size: 1em;
	font-weight: normal;
	border: ridge 3px rgba(150,150,150,0);
	border-radius: 10px;
	background-color: rgba(0,0,0,0.3);
	text-decoration: none;
	color: rgba(0,0,0,0.5);
}

.button_validation_critical {
	margin: 10px;
	padding: 5px;
	font-size: 1em;
	font-weight: bold;
	border: solid 3px rgba(150,150,150,0);
	border-radius: 10px;
	background-color: rgba(255,0,0,0.7);
	text-decoration: none;
	color: rgb(0,0,0);
}

.button_validation_critical:hover {
	border: ridge 3px rgb(150,150,150);
	background-color: rgb(255,0,0);
}

.button_cancel {
	display: inline-block;
	vertical-align: top;
	height: 30px;
	margin: 10px;
	padding: 5px;
	border: none;
	border-radius: 10px;
	background-color: rgb(255,215,0);
	font-weight: bold;
	text-decoration: none;
	color: rgb(0,0,0);
}

.button_cancel:hover {
	font-weight: bold;
	background-color: rgb(255,265,0);
}

.progress_bar {
	margin-bottom: 30px;	
}

.progress_bar div {
	display: inline-block;
	vertical-align: top;
	height: 20px;
	margin: 0;
	margin-left: -1px;
	margin-right: -1px;
	padding: 0;
}

.return img {
	vertical-align: middle;
	height: 20px;
}

.print {
	text-align: right;
}

.print a {
	color: rgb(0,0,0);
	text-decoration: none;
}

.print a:hover {
	text-decoration: underline;
}

.print img {
	vertical-align: middle;
	height: 25px;
}

.info_date {
	text-align: right;
	font-style: italic;
}


.end_teacher {
	text-align: center;
	margin: 60px;
}
