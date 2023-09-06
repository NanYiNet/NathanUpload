<?php
// +--------------------------------------------+
// | Name: NathanUpload文件上传示例
// +--------------------------------------------+
// | User: Administrator
// +--------------------------------------------+
// | Author: Nathan <www.nanyinet.com>
// +--------------------------------------------+
// | Date: 2023-09-07 0:10
// +--------------------------------------------+
// | Created: PHPStorm
// +--------------------------------------------+
?>
<!DOCTYPE html>
<html>
<head>
    <title>文件上传</title>
</head>
<body>
<h2>上传文件</h2>
<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="上传文件">
</form>
</body>
</html>
