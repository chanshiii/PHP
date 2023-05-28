<!-- 登録処理 -->
<?php

// dbに接続
include('./dbConfig.php'); 

// 画像の保存先を指定
$targetDirectory = 'images'; //保存先フォルダの指定
$fileName = basename($_FILES["file"]["name"]); //画像名を取りに行く処理
$targetFilePath = $targetDirectory . $fileName ;
$filetype = pathinfo($targetFilePath, PATHINFO_EXTENSION); //拡張子の取得

if($_SERVER['REQUEST_METHDO'] == 'POST' && !empty($fileName)){
    $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if(in_array($fileType, $arrImageTypes)) {
        $postImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

        if($postImageForServer) {
            $insert = $db->query("INSERT INTO images (file_name) VALUES('" .$fileName . "')");  
        }
    }
}

header('location: '.' ./html/index.php', true, 303);
exit();


?>