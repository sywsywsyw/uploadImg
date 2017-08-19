$src = $_FILES['file']['tmp_name'];
$dist = APP . '/static/imgs/' . $_FILES['file']['name'];
move_uploaded_file($src, $dist);

$tempFile = $_FILES['Filedata']['tmp_name'];//获取FILES的缓存文件
$targetPath = "/site/";//要保存到的新目录
$targetFile = "1.jpg";//要生成的文件名
move_uploaded_file($tempFile,$targetPath.$targetFile);//PHP自带函数
