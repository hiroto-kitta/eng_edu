<?php
//データベースの処理
$dsn = 'mysql:host=localhost;dbname=english_test;charset=utf8';
$user = 'English_test';
$pass = 'rootroot';

try{
    $dbh = new PDO($dsn, $user, $pass,[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
    //echo '接続成功';
    //sqlの準備
    $sql = 'SELECT * FROM questins';
    //sqlの実行
    $stmt = $dbh->query($sql);
    //sqlの結果を受け取る
    $result = $stmt->fetchall(PDO::FETCH_ASSOC);
    //var_dump($result);
   // $dbh = null;
}catch(PDOException $e){
    echo '接続失敗'.$e->getMessage();
    exit();
};

//var_dump($dbh)
?>
<?php 
//乱数の発生
$randomQuestionNumber = rand(0,1);

$num = $randomQuestionNumber

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>英語のテスト</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="test.css">
</head>
<header>
    <div class="container">
    <div class="header-logo">
        <img src="logo.png"height="70px">
    </div>
        <div class="header-right">
          <a href="#">テスト問題一覧</a>
          <a href="#">新規登録</a>
          <a href="#" class="login">ログイン</a>
        </div>
      </div>
    </header>