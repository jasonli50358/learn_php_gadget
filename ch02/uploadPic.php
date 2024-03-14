<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>上传照片</title>
	<link rel="stylesheet" href="">
</head>
<style type="text/css">
	html{height: 100%}
	body{color: #333;height:100%;margin: 0;font-family: Tahoma,simsun;font-size:15px;}
	form{margin: 0;padding: 0;}
	.top{position: fixed;background: #369;width: 100%;}
	.top-title{color: #fff;font-family: 'Microsoft YaHei';font-size:16px;font-weight:bold;text-align: center;line-height: 35px;}
	.main{min-height: 100%;background: #fff;width:100%;margin0 auto;}
	.main-wrap{padding:52px 10px 150px 10px;}
	.footer{position:fixed;width:100%;background:#e6e5e5;bottom:0;box-shadow:1px -1px 9px #c2c2c2;font-size:12px;line-height:22px;text-align:center;color:#666;font-family:'Microsoft YaHei';}
	.footer ul{list-style:none;}
	.footer li{list-style:none;}
	.text15 {font-size: 14px;color: #000000;line-height:120%;}
	a.y:link {  font-size: 14px; font-family:宋体, 新宋体, Arial; color: #000000; text-decoration: none}
	a.y:visited {  font-size: 14px; font-family:宋体, 新宋体, Arial; color: #000000; text-decoration: none}
	a.y:hover {  font-size: 14px; font-family:宋体, 新宋体, Arial; color: #FF0000; text-decoration: none}
	a.y:active {  font-size: 14px; font-family:宋体, 新宋体, Arial; color: #000000; text-decoration: none}
	a.y span{/*color: #000000;*/font-weight:bolder;}
	.anchor{position:relative;top:-58px;}
	.center{text-align:center;}
	.name{margin-top:15px;line-height:25px;}
	label{margin-left:10px;padding:5px 0;display:block;cursor:pointer;}
	label:hover{background-color:#e5f2ff;}
	.result{color:#f00; margin-left:5px;display: inline-block;}
	.btn{
	    -moz-border-bottom-colors: none;
	    -moz-border-left-colors: none;
	    -moz-border-right-colors: none;
	    -moz-border-top-colors: none;
	    background-color: #F5F5F5;
	    background-image: linear-gradient(to bottom, #FFFFFF, #E6E6E6);
	    background-repeat: repeat-x;
	    border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) #B3B3B3;
	    border-image: none;
	    border-radius: 4px;
	    border-style: solid;
	    border-width: 1px;
	    box-shadow: 0 1px 0 rgba(255, 255, 255, 0.2) inset, 0 1px 2px rgba(0, 0, 0, 0.05);
	    color: #333333;
	    cursor: pointer;
	    display: inline-block;
	    font-size: 14px;
	    line-height: 20px;
	    margin-bottom: 0;
	    padding: 4px 5px;
	    text-align: center;
	    text-shadow: 0 1px 1px rgba(255, 255, 255, 0.75);
	    vertical-align: middle;
	}
</style>
<body>
	<div class="top"><div class="top-title">Jasonli的测试页面</div></div>
	<div class="mian">
		<div class="main-wrap">
			<form action="uploadPicAction.php" method="post" enctype="multipart/form-data">
				<label>上传图片：<input type="file" name="img" id="imgFile" onchange=""></label>
				<input type="submit" value="上传" class="btn"/>
			</form>
		</div>
	</div>
	<!-- <div class="main">
		<img id="preview" />
		<p id="showimg"></p>
	</div> -->
</body>
<script type="text/javascript">
	// function imgPreview(fileDom){}
</script>
</html>