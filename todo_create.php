<?php


include('functions.php');

if (
  !isset($_POST['company']) || $_POST['company']=='' ||
  !isset($_POST['person']) || $_POST['person']=='' ||
  !isset($_POST['mail']) || $_POST['mail']=='' ||
  !isset($_POST['phone']) || $_POST['phone']==''
) {
  exit('データがありません');
}

$company = $_POST['company'];
$kind = $_POST['kind'];
$number = $_POST['number'];
$person = $_POST['person'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$kown = $_POST['kown'];
$time = $_POST['time'];
$comment = $_POST['comment'];

// DB接続
$pdo = connect_to_db();

$sql = 'INSERT INTO form_table (id, company, kind, number, person, mail, phone, kown, time, comment, created_at, updated_at) VALUES (NULL, :company, kind, number, :person, :mail, :phone, kown, time, :comment, now(), now())';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':company', $company, PDO::PARAM_STR);
$stmt->bindValue(':person', $person, PDO::PARAM_STR);
$stmt->bindValue(':mail', $mail, PDO::PARAM_STR);
$stmt->bindValue(':phone', $phone, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);

try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

header("Location:todo_input.php");
exit();



