<?php
// var_dump($_GET);
// exit();

// id受け取り
include('functions.php');

$id = $_GET['id'];

$pdo = connect_to_db();

$sql = 'SELECT * FROM form_table WHERE id =:id';

$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_STR);


try {
  $status = $stmt->execute();
} catch (PDOException $e) {
  echo json_encode(["sql error" => "{$e->getMessage()}"]);
  exit();
}

$record = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($record);
// exit();

// DB接続


// SQL実行


?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css2/main.css">
  <title>編集</title>
</head>

<body>
  <form action="todo_update.php" method="POST">
   
 <div class="contact-inner">
        
          <table class="contact-table">



            <tr class="table-list">
              <th>
                <label for="name">施設/法人名<span class="essential">必須</span></label>
              </th>
              <td>
                <input type="text" name="company" id="name" placeholder="施設名/法人名をご入力ください" class="input-area"
                  autocomplete="name">
              </td>
            </tr>

            <tr class="table-list">
              <th><label for="furigana">施設種別<span class="essential">必須</span></label></th>
              <td>
                <label><input type="radio" name="kind" value="居酒屋" class="kind" required>認可保育園</label>
                <label><input type="radio" name="kind" value="居酒屋" class="kind" required>幼稚園</label>
                <label><input type="radio" name="kind" value="居酒屋" class="kind" required>企業主導型</label>
                <label><input type="radio" name="kind" value="居酒屋" class="kind" required>こども園</label>
                 
                </div>
              </td>
            </tr>

            <!-- <tr class="table-list">
              <th><label for="furigana">施設種別<span class="essential">必須</span></label></th>
              <td>
                <select name="kind" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">

                  <option value="" placeholder="ふりがなをご入力ください">ドロップダウンから選択してください</option>
                  <option value="">認可保育園</option>
                  <option value="">認定こども園</option>
                  <option value="">企業指導型</option>
                  <option value="">認可外保育園</option>
                   <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                <!-- </select>
              </td>
            </tr> -->
      
            <tr class="table-list">
              <th><label for="furigana" name="number"　>運営施設数<span class="essential">必須</span></label></th>
              <td>
                 <label name="kind" ><input type="radio" name="number">1</label>
                 <label name="kind" ><input type="radio" name="number" value="0">2</label>
                 <label name="kind" ><input type="radio" name="number" value="1" checked>3</label>
                 <label name="kind" ><input type="radio" name="number" value="1" checked>それ以上</label>
                </div>
              </td>
            </tr>


 

            <tr class="table-list">
              <th>
                <label for="name">ご担当者名<span class="essential">必須</span></label>
              </th>
              <td>
                <input type="text" name="person" id="name" placeholder="ご担当者名をご入力ください" class="input-area"
                  autocomplete="name">
              </td>
            </tr>


            <tr class="table-list">
              <th><label for="mail">メールアドレス<span class="essential">必須</span></label></th>
              <td>
                <input id="mail" type="email" name="mail" placeholder="例:abc@hoiku.com" class="input-area"
                  autocomplete="email">
              </td>
            </tr>

            <tr class="table-list">
              <th>
                <label for="name">電話番号<span class="essential">必須</span></label>
              </th>
              <td>
                <input type="text" name="phone" id="name" placeholder="例:03-1234-5678" class="input-area"
                  autocomplete="name">
              </td>
            </tr>

            <tr class="table-list">
              <th><label for="company-name">知ったきっかけ</label></th>
              <td>
                <select name="know" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">

                  <option value="" placeholder="ふりがなをご入力ください">ドロップダウンから選択してください</option>
                  <option value="">ネット検索で知った</option>
                  <option value="">知り合いの施設から知った</option>
                  <option value="">行政の担当から聞いた</option>
                  <option value="">職員が知っていた</option>
                  <!-- <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                </select>
              </td>
            </tr>


            <tr class="table-list">
              <th><label for="company-name">導入する場合の時期</label></th>
              <td>
                <select name="time" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">

                  <option value="" placeholder="ふりがなをご入力ください">ドロップダウンから選択してください</option>
                  <option value="">１ヶ月以内に導入したい</option>
                  <option value="">３ヶ月以内に導入したい</option>
                  <option value="">６ヶ月以内に導入したい</option>
                  <option value="">未定</option>
                  <!-- <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                </select>
              </td>
            </tr>

            <tr class="table-list">
              <th><label for="comment">その他、ご質問、ご要望について<span class=""></span></label></th>
              <td>
                <textarea id="comment" name="comment" placeholder="ご自由にご記入ください"></textarea>
              </td>
            </tr>

          </table>
    



        <a href="todo_read.php">一覧画面</a>




      </div>
    </div>
  </div>

  </form>

</body>

</html>