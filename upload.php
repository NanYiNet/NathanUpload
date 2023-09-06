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
require 'NathanUpload.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $uploadPath = 'File/storage/uploads/'; // 设置上传路径
    if (!is_dir($uploadPath)) {
        mkdir($uploadPath, 0777, true);
    }
    // 自定义上传路径和允许的文件类型
    $allowedFileTypes = ['zip', 'php', 'jpg']; // 添加允许的文件扩展名
    $maxFileSizeKB = 10240; // 10 MB 文件大小限制，以 KB 为单位
    $useRandomFileName = false; // 是否启用随机文件名
    $useFilePrefix = true; // 是否启用文件名前缀
    $filePrefix = 'Nathan_'; // 设置文件名前缀
    $NathanUpload = new NathanUpload($uploadPath, $allowedFileTypes, $maxFileSizeKB, $useRandomFileName, $useFilePrefix, $filePrefix);
    $result = $NathanUpload->uploadFile();
    // 将 JSON 响应返回给客户端
    header('Content-Type: application/json');
    exit(json_encode($result));
}
?>
