<!DOCTYPE HTML>
<html debug="true" >
<head>
	<title>後端</title>
	<meta charset="utf-8" />
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- main forms css -->
    <link rel="stylesheet" href="forms.css" />
	<style>


		body{
			background: url('images/bg.jpg') no-repeat center center fixed; 
			-webkit-background-size: cover;
			-moz-background-size: cover;
			-ms-background-size: cover;
			-o-background-size: cover;
			background-size: cover;
			margin: 0;
			padding: 0;
			
		}
			
		.login,.register {
			/* Structure */
			width: 300px;
			padding: 15px;
			margin: 20px auto;

			/* Text 
			font-family: "HelveticaNeue-Light", "Helvetica Neue Light", "Helvetica Neue", Helvetica, Arial, "Lucida Grande", sans-serif; 
			font-weight: 300;*/

			/* Style */
			background: rgba(251,251,251,0.5);
			
			box-orient: vertical;
			-webkit-box-orient: vertical;
			-ms-box-orient: vertical;
			-o-box-orient: vertical;
			-moz-box-orient: vertical;
			-webkit-box-shadow:0 0 6px #bbb;
			-ms-box-shadow:0 0 6px #bbb;
			-o-box-shadow:0 0 6px #bbb;
			-moz-box-shadow:0 0 5px #bbb;
			box-shadow:0 0 5px #bbb;
			border-radius: 5px;
			border: 1px solid #ccc;
					

					
		}


		

	</style>

	<script src="../lib/JQuery/jquery-1.10.2.min.js"></script>
	<script src="../src/js/aj-address.js"></script>
	<script> 
        $(function () {
            $('.address-zone').ajaddress();
        });
    </script>
		
</head>

<body>
	<a href="" >註冊</a>
	<a href="" >登入</a>

	<!--
	<form class="login" >
		<fieldset>
		<legend>帳號</legend>
		<label>帳號 </label><input type="text" name="account" /></br >
		<label>密碼 </label><input type="text" name="passwd" /></br >
		<label>重新確認密碼 </label><input type="text" name="passwd" /></br >
		</fieldset>
		
		<fieldset>
		<legend>個人資料</legend>
		<label>姓名 </label><input type="text" name="passwd" /></br >
		<label>性別 </label><input type="radio" name="passwd" value="男" /><label>男 </label>
		<input type="radio" name="passwd" value="女" /><label>女 </label></br >
		<label>生日 </label><input type="text" name="passwd" /></br >
		<label>手機號碼 </label><input type="text" name="passwd" /></br >

		<div class="address-zone">
			<label>地址 </label>
	        <select class="city" >
	            <option value="">請選擇</option>
	        </select>
	        <select class="county">
	            <option value="">請選擇</option>
	        </select>
	        <input type="text" class="zipcode"/>
    	</div>
		
		<label>電子郵件 </label><input type="text" name="passwd" /></br >
		</fieldset>
		<input type="image" value="送出" />
		<input type="image" value="重新填寫" />
		<input type="image" value="返回" />
	</form>
	-->
	
	<form class="login">
		    <h1>請登入<img src="images/lock_fill.svg" class="secure" /></h1>
		    <label for="email">Email</label>
		    <input type="email" alt="email" id="email" placeholder="email" required="">
		    
		    <label for="password">Password</label>
		    <input type="password" alt="password" id="password" placeholder="Password" required="">
		    			
		    <button type="submit" alt="Log In" id="button">Login</button>	
	</form><!-- .login -->
	

	

</body>
</html>