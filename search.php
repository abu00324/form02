<?php


try{
    //DBに接続
   $dbn ='mysql:dbname=gsacf_d11_info;charset=utf8mb4;port=3306;host=localhost';
   $user = 'root';
   $pwd = '';
    $pdo = new PDO($dbn, $user, $pwd);

    //SQL文を実行して、結果を$stmtに代入する。
    $stmt = $pdo->prepare(" SELECT * FROM form_table WHERE  company LIKE '%" . $_POST["search_name"] . "%' "); 

    //実行する
    $stmt->execute();
    echo "OK";
    echo "<br>";
} catch(PDOException $e){
    echo "失敗:" . $e->getMessage() . "\n";
    exit();
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

  <h2>検索</h2>

    <!-- 任意の<input>要素＝入力欄などを用意する -->
    <input type="text" name="search_name">
    <!-- 送信ボタンを用意する -->
    <input type="submit" name="submit" value="名前を検索する">
</form>
    <body>
        <table>
            <tr><th>ID</th><th>Name</th><th>remark</th></tr>
            <!-- ここでPHPのforeachを使って結果をループさせる -->
            <?php foreach ($stmt as $row): ?>
            <tr>
                <td><?php echo $row[0]?></td>
                <td><?php echo $row[1]?></td>
                <td><?php echo $row[2]?></td>
            </tr>

                <?php endforeach; ?>
        </table>
    </body>
</html>
