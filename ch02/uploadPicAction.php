<?php
$img = $_FILES['img'];
if (empty($img) || $img['error'] !== 0) {
	die("请选择要上传的图片");
}

//获取文件后缀名
$ext = strrchr($img['name'], '.');
//生成新的文件名
$newName = md5(microtime() . '_' . rand(1000, 9999)) . $ext;
// var_dump($newName);exit;
//移动文件到指定路径
$path = 'upload/picture/' . $newName;
$res = move_uploaded_file($img['tmp_name'], $path);

if (!$res) {
	echo "<script>alert('上传失败');location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
} else {
	echo "<script>alert('上传成功');location.href='" . $_SERVER['HTTP_REFERER'] . "';</script>";
}