<?php
?>
<!-- ①フォームの説明 -->
<!-- ②$_FILEの確認 -->
<!-- ③バリデーション -->
<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>アップロードフォーム</title>
  </head>
  <style>
    body {
      padding: 30px;
      margin: 0 auto;
      width: 50%;
    }
    textarea {
      width: 98%;
      height: 60px;
    }
    .file-up {
      margin-bottom: 10px;
    }
    .submit {
      text-align: right;
    }
    .btn {
      display: inline-block;
      border-radius: 3px;
      font-size: 18px;
      background: #67c5ff;
      border: 2px solid #67c5ff;
      padding: 5px 10px;
      color: #fff;
      cursor: pointer;
    }
  </style>
  <body>
    <form enctype="multipart/form-data" action="./file_updata.php" method="POST">
      <div class="file-up">
        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <input name="img" type="file" accept="image/*" />
      </div>
      <div>
        <textarea
          name="caption"
          placeholder="キャプション（140文字以下）"
          id="caption"
        ></textarea>
      </div>
      <div class="submit">
        <input type="submit" value="送信" class="btn" />
      </div>

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
                <label><input type="radio" name="kind" value="認可保育園" class="kind" required>認可保育園</label>
                <label><input type="radio" name="kind" value="幼稚園" class="kind" required>幼稚園</label>
                <label><input type="radio" name="kind" value="企業主導型" class="kind" required>企業主導型</label>
                <label><input type="radio" name="kind" value="こども園" class="kind" required>こども園</label>
                 
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
              <th><label for="furigana" name="number" >運営施設数<span class="essential">必須</span></label></th>
              <td>
                <label><input type="radio" name="number" value="1" class="kind" required>1</label>
                <label><input type="radio" name="number" value="2" class="kind" required>2</label>
                <label><input type="radio" name="number" value="3" class="kind" required>3</label>
                <label><input type="radio" name="number" value="それ以上" class="kind" required>それ以上</label>
           
                 
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
                <select name="kown" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">

                  <option name="kown" value="1" placeholder="『ネット検索』して見つけた">『ネット検索』して見つけた</option>
                  <option name="kown" value="2" placeholder="『知り合いの施設』から聞いた">『知り合いの施設』から聞いた</option>
                  <option name="kown" value="3" placeholder="『行政の担当者』から聞いた">『行政の担当者』から聞いた</option>
                  <option name="kown" value="4" placeholder="『新しく入った職員』が前職で使用していた">『新しく入った職員』が前職で使用していた</option>
                  
                  <!-- <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                </select>
              </td>
            </tr>


            <tr class="table-list">
              <th><label for="company-name">導入する場合の時期</label></th>
              <td>
                <select name="time" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">

                  <option name="time" value="1" placeholder="１ヶ月以内に導入したい">１ヶ月以内に導入したい</option>
                  <option name="time" value="2" placeholder="３ヶ月以内に導入したい">３ヶ月以内に導入したい</option>
                  <option name="time" value="3" placeholder="６ヶ月以内に導入したい">６ヶ月以内に導入したい</option>
                  <option name="time" value="4" placeholder="未定">未定</option>
                 
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
    


       <div id="mask" class="hidden"></div>
        <input type="submit" value="資料をダウンロードする" class="submit-button" id="open">

        

        
        <section id="modal" class="hidden">
          <p>ダウンロード完了</p>
          
            <input type="submit" value="閉じる" class="submit-button" id="close">
          

        </section>
        <a href="todo_read.php">一覧画面</a>





    </form>
  </body>
</html>
