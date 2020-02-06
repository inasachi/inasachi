<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
$file = $_FILES['picture'];
?>
ファイル名(name):<?php echo $file['name']; ?><br>
ファイルタイプ(type)<?php echo $file['type']; ?><br>
アップロードされたファイル(tep_name)<?php echo $file['tmp_name']; ?><br>
エラー内容(error)<?php echo $file['error']; ?><br>
サイズ(size)<?php echo $file['size']; ?><br>

<?php
$ext = substr($file['name'], -4);
if($ext == '.jpg'||$ext == '.png'||$ext == '.gif') { 
    $filepath = "user_image/{$file['name']}";
    $success = move_uploaded_file($file['tmp_name'], $filepath);
    if($success) { ?>
      <img src="<?php echo $filepath ?>">
      <?php } else { ?>
      ファイルアップロードに失敗しました
  <?php } ?>
<?php } else { ?>
拡張子がjpg、gif、pngのいずれかのファイルをアップロードしてください。
<?php }  ?>


  
</body>
</html>
