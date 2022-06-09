<?php

include('functions.php');
$pdo = connect_to_db();


$sql = 'SELECT * FROM form_table';

$stmt = $pdo->prepare($sql);



try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
$output = "";
foreach ($result as $record) {
  $output .= "
    <tr>
      <td>{$record["campany"]}</td>
       <td>{$record["kind"]}</td>
       <td>{$record["number"]}</td>
       <td>{$record["person"]}</td>
       <td>{$record["mail"]}</td>
       <td>{$record["phone"]}</td>
       <td>{$record["kown"]}</td>
       <td>{$record["time"]}</td>
       <td>{$record["comment"]}</td>
            <td>
        <a href='todo_edit.php?id={$record["id"]}'>編集</a>
      </td>
      <td>
        <a href='todo_delete.php?id={$record["id"]}'>削除ß</a>
      </td>  
      </tr>
  ";
}

?>

<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>（一覧画面）</title>
</head>

<body>
  <fieldset>
    <legend>（一覧画面）</legend>
    <a href="todo_input.php">入力画面</a>
    <table>
      <thead>
        <tr>
         
          <th>問い合わせ一覧</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        <?= $output ?>
      </tbody>
    </table>
  </fieldset>
</body>

</html>

