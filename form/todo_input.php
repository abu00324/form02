<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
  <title>contact</title>
</head>
<body>
   



  
  <h1>KOnet　資料ダウンロード </h1>
  <div class="contact-bg">
        <div class="contact-area inner">
            <p class="contact-message">サービス導入のご検討に役立つ資料を
まとめてダウンロードいただけます。
【お電話でのお問い合わせはこちら】
 000-000-0000
(平日9:00〜18:00)<br>
                <span class="message-notice"><span class="essential">必須</span>は必須項目です。</span></p>
            

            <div class="contact-inner">
                <form action="todo_create.php" method="POST">
                    <table class="contact-table">



                        <tr class="table-list">
                            <th>
                                <label for="name">施設/法人名<span class="essential">必須</span></label>
                            </th>
                            <td>
                                <input type="text" name="yourname" id="name" placeholder="施設名/法人名をご入力ください" class="input-area" autocomplete="name">
                            </td>
                        </tr>



                        <tr class="table-list">
                            <th><label for="furigana">施設種別<span class="essential">必須</span></label></th>
                            <td>
                              <select name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">
                                
                              <option value="" placeholder="ふりがなをご入力ください">ドロップダウンから選択してください</option>
                              <option value="">認可保育園</option>
                              <option value="">認定こども園</option>
                              <option value="">企業指導型</option>
                              <option value="">認可外保育園</option>
                                <!-- <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                                </select>
                            </td>
                        </tr>


                        <tr class="table-list">
                            <th><label for="company-name">運営施設数</label></th>
                            <td>
                                <select name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">
                                
                              <option value="" placeholder="ふりがなをご入力ください">施設数を選択してください</option>
                              <option value="">１</option>
                              <option value="">２</option>
                              <option value="">３</option>
                              <option value="">４</option>
                                <!-- <input type="text" name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area"> -->
                                </select>
                            </td>
                        </tr>

                          <tr class="table-list">
                            <th>
                                <label for="name">ご担当者名<span class="essential">必須</span></label>
                            </th>
                            <td>
                                <input type="text" name="yourname" id="name" placeholder="ご担当者名をご入力ください" class="input-area" autocomplete="name">
                            </td>
                        </tr>


                        <tr class="table-list">
                            <th><label for="mail">メールアドレス<span class="essential">必須</span></label></th>
                            <td>
                                <input id="mail" type="email" name="mail" placeholder="例:abc@hoiku.com" class="input-area" autocomplete="email">
                            </td>
                        </tr>

                         <tr class="table-list">
                            <th>
                                <label for="name">電話番号<span class="essential">必須</span></label>
                            </th>
                            <td>
                                <input type="text" name="yourname" id="name" placeholder="例:03-1234-5678" class="input-area" autocomplete="name">
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
                                <select name="yourname" id="furigana" placeholder="ふりがなをご入力ください" class="input-area">
                                
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
                </form>



                <input type="submit" value="資料をダウンロードする" class="submit-button">
                <a href="todo_read.php">一覧画面</a>




            </div>
        </div>
    </div>
</body>
</html>

