<?php 
  session_start();
  function loggedIn(){ 
    if(!isset($_SESSION['username'])){ 
      echo "<script>alert('没有登录');location='login.php'</script>";
    }
  }

  loggedIn();
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>网站后台</title>
	<link href="https://cdn.bootcdn.net/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="style.css">
</head>

<style>
	* {
		box-sizing: border-box;
		margin: 0;
		padding: 0;
		font-family: Arial, sans-serif;
	}

	body {
   
background: linear-gradient(to right, #1D1E1F 0%, #424242 100%);
			color: #fff;
	
	}

	header {
		height: 50px;
		background-color: #262626;
		color: forestgreen;
		padding: 10px;
  
		width: 100%;
position:fixed;

	}

	.menu-btn {
		display: none;
		float:right;
  
	}

	h1 {
		font-size: 24px;
		margin: 0;
	}

	.user-info {
		display: flex;
		align-items: center;
		font-size: 18px;
	}

	.user-info i {
		font-size: 24px;
		margin-right: 5px;
	}

	nav {
		position: fixed;

		left: -300px;
		top: 50px;
		background: linear-gradient(to right, #1D1E1F 0%, #424242 100%);
			color: #fff;
  
		padding: 10px;
		width: 200px;
		height: 100vh;
		overflow: hidden;
	}

	nav ul {
		list-style: none;
	}

	nav li {
		margin: 10px 0;
	}

	nav li a {
		display: block;
		padding: 10px;
		color:white;
		text-decoration: none;
		border-radius: 5px;
		transition: background-color 0.3s ease-in-out;
	}

	nav li a:hover {
		background-color: #bfbfbf;
	}

	nav li a.active {
		background-color: #888888;
		color: white;
	}

	main {
		padding: 20px;
  
	}

	main h1 {
		font-size: 24px;
		margin-bottom: 10px;
	}

	main h2 {
		font-size: 20px;
		margin-bottom: 5px;
	}

	main p {
		margin-bottom: 10px;
	}

	@media screen and (max-width: 768px) {
		.menu-btn {
			display: block;
		}

		header h1 {
			display: none;
		}
	}
.lou{
  text-align:center;
  }
.card {
  margin-top:5%;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  background: #222;
background-image: linear-gradient(to bottom, #00573F, #222);
color: #fff;
  
}

.card img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  
}

.card-body {
  padding: 10px 20px;
}

.card-title {
  margin: 10px 0;
}

.card-text {
  line-height: 1.5;
  margin-bottom: 10px;
}



.card1 {
  margin-top:15%;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
  overflow: hidden;
  background: #222;
background-image: linear-gradient(to bottom, #00573F, #222);
color: #fff;
text-align:center;
  
}

.card1 img {
  width: 100%;
  height: 200px;
  object-fit: cover;
  
}

.card1-body {
  padding: 10px 20px;
}

.card1-title {
  margin: 10px 0;
}

.card1-text {
  line-height: 1.5;
  margin-bottom: 10px;
}
  
</style>

<body>
	<header class="header">
		<div class="menu-btn">
			<i class="fas fa-bars"></i>
		</div>
	<div class="lou">
 <h3>attack backend homepage </h3>
 
 </div>
	</header>
	<nav class="navigation-panel">
		<ul>
			<li><a href="#" class="active"><i class="fas fa-tachometer-alt"></i>后台首页</a></li>
			<li><a href="ddos.html"><i class="fas fa-users"></i>ddos攻击</a></li>
			<li><a href="cc"><i class="fas fa-chart-line"></i>cc攻击</a></li>
			<li><a href="vip.html"><i class="fas fa-cog"></i>vip购买</a></li>
		</ul>
	</nav>
	<main>
 
 <div class="card1">
<div class="nb">
<h2>ddos-cc在线攻击平台</h2>

<p>网站介绍:用户可自行进行服务器或者网站压力测试</p>
<p>请勿用作非法用途，违者我们将永久封禁您的IP，一切后果将由您自己承担与本站无关</p>
<p>您的IP地址是：<span id="userIP"></span></p>
</div>
 
 <div class="nmb">
  <img class="logo" src="https://n.sinaimg.cn/sinakd20200409ac/202/w640h362/20200409/4495-iryninw9124229.jpg" />
 </div>
 
 <p class="mtu" id="randomQuote"></p>
 </div>
 </div>

<div class="card">
  <img src="https://s1.ax1x.com/2023/05/27/p9qRgoD.jpg" alt="Card Image">
  <div class="card-body">
    <h3 class="card-title">DDOS Online Attack</h3>
    <p class="card-text">The platform promises to test SYN500G, UDP300G and CC200G. It only takes 10 seconds from the pressure test instruction to the initiation of the torrent. The background automatically optimizes the torrent thread to ensure the stability of each user's torrent. It supports customized packages to attack 1000G torrent at full speed on the whole platform!</p>  
  </div>
  </div>
  
	</main>
	<script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script><script>
		$(function () {
			const $header = $('.header')
			const $menuBtn = $('.menu-btn')
			const $navigationPanel = $('.navigation-panel')
			$(window).scroll(() => {
				$(document).scrollTop() > 1 ? $header.css('position', 'fixed') : $header.css('position', '')
			})
			let flag = 1
			$menuBtn.on('click', () => {
				$navigationPanel.stop().animate({ left: flag ? 0 : -300 }, 'slow')
				flag = !flag
			})
			$navigationPanel.find('a').on('click', function () {
				$(this).addClass('active').parent().siblings().children().removeClass('active')
			})
		})
	</script>
 
 
 <script type="text/javascript">
        // 获取用户IP地址
        fetch('https://api.ipify.org?format=json')
            .then(response => response.json())
            .then(data => {
                // 显示用户IP地址
                document.getElementById('userIP').textContent = data.ip;
            })
            .catch(error => console.error(error));
    </script>
    
   <script>
   const quotes = [
    "尚未成年，但我已经认识到了这个世界的残酷。",
    "成功不是终点，努力才是起点。",
    "不要把你的时间浪费在为别人赚钱上。",
    "世界上最遥远的距离是没有网络。",
    "其实计算机并没有漏洞，漏洞在于人的身上。",
   
   
];

function generateQuote() {
    const randomIndex = Math.floor(Math.random() * quotes.length);
    const quoteElem = document.getElementById("randomQuote");
    quoteElem.innerHTML = quotes[randomIndex];
}

window.onload = function() {
    generateQuote();
};
   </script>
   <audio autoplay="autoplay" loop="loop" preload="auto"
                src="http://m801.music.126.net/20230530002110/2b5d6778fc7e12b412020bcd08a9aa3f/jdymusic/obj/wo3DlMOGwrbDjj7DisKw/15135070722/a41d/312a/4d12/4b4ac2d4567d125f429152e3bae50554.mp3">
    </audio>
</body>

</html>