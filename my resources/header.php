<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tính diện tích hinh chữ nhật</title>
	<link rel="stylesheet" href="">
	<style>
	*{
		font-family: Roboto, Helvetica, Arial, sans-serif;
		color: white;
		padding: 0;
		margin: 0;
	}
		table{
			border-radius: 5px;
			border-spacing: 0px;
			border: none;
			margin: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background: linear-gradient(65deg, #00F9D2 -25%, #00A2B8 100%);
			box-shadow: 0 8px 24px rgba(32,43,54,0.12);
		}
		input{
			color: black;
			padding: 5px;
			border: none;
			width: 90%; margin: 5px;
		}
		input[type="submit"]{
			color: #fff;
			padding: 10px 5px;
			border: none;
			width: 100%; 
			margin: 0px;
			text-align: center;
			background: none;
			font-size: 15px;
			font-weight: bold;
			transition-duration: 0.25s;
    		transition-property: box-shadow, transform, background-position;
    		
			border-radius: 0 0 5px 5px;
			background: linear-gradient(65deg, #00F9D2 -25%, #00A2B8 100%);
		}
		input[type="submit"]:hover{
			box-shadow: 0 10px 10px -10px rgba(0, 0, 0, 0.5);	
			background-size: 200% auto;
			transform:  translateY(5px) scale(1.02);
			background-position: center right;
		}
		td{
			padding: 0 5px;
			margin: 5px;
		}
		tr{
			border: none;
		}
		tbody{
			border: none;
			border-spacing: 0px;
		}
		#myBtn:hover{
			background-position: right center;
		}
		.button {

		  position: fixed;
		  bottom: 20px;
		  right: 30px;
		  z-index: 99;
		  flex: 1 1 auto;
		  margin: 10px;
		  padding: 20px;
		  text-align: center;
		  text-transform: uppercase;
		  background: #00F9D2;
		  padding: 1em 2em;
		  border: none;
		  color: white;
		  font-size: 1.2em;
		  cursor: pointer;
		  outline: none;
		  overflow: hidden;
		  border-radius: 100px;
		}
		.button span {
		  position: relative;
		  pointer-events: none;
		}
		.button::before {
		  --size: 0;
		  content: '';
		  position: absolute;
		  left: var(--x);
		  top: var(--y);
		  width: var(--size);
		  height: var(--size);
		  background: radial-gradient(circle closest-side, #00A2B8, transparent);
		  -webkit-transform: translate(-50%, -50%);
		          transform: translate(-50%, -50%);
		  transition: width .2s ease, height .2s ease;
		}
		.button:hover::before {
		  --size: 400px;
		}
	</style>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
	<script>
		function topFunction() {
			$('body,html').animate({
				scrollTop: 0
			}, 800);
			return false;
        }
	</script>
</head>
<body style="background: linear-gradient(57deg, #00C6A7 0%, #1E4D92 100%) ;background-repeat:no-repeat;height: auto !important;
    min-height: 100vh; ">

<button class="button" onclick="topFunction()"><span>Lên nè mày</span></button>
<script>
		document.querySelector('.button').onmousemove = (e) => {

			const x = e.pageX - e.target.offsetLeft
			const y = e.pageY - e.target.offsetTop

			e.target.style.setProperty('--x', `${ x }px`)
			e.target.style.setProperty('--y', `${ y }px`)
			
		}
</script>