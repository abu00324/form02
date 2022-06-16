<?php

include('functions.php');
$pdo = connect_to_db();


$sql = 'SELECT * FROM info_table';

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

<div style="width: 500px;">
<canvas id="my_chart">
 Canvas not supported...
</canvas>
</div>
<div style="width: 500px; height: 500px;">
<canvas id="my_chart1" style="width: 500px; height: 500px;">
 Canvas not supported...
</canvas>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.8.0/chart.min.js"></script>
<script>

const datafile = <?=json_encode($result)?>;
// console.log(datafile)
// console.log(datafile[5]['kind']);




const count = {
            ninka: 0,
            youtien: 0,
            kigyou: 0,
            kodomo: 0,
            };
          
for (let i = 0; i < datafile.length; i++){
          if(datafile[i]['kind']=="認可保育園"){
            count["ninka"]++;
          } else if(datafile[i]['kind']=="幼稚園"){
            count["youtien"]++;
          } else if(datafile[i]['kind']=="企業主導型"){
            count["kigyou"]++;
          } else if(datafile[i]['kind']=="こども園"){
            count["kodomo"]++;
          }
        }

         
          


          var ctx = document.getElementById('my_chart').getContext('2d');
          var myPieChart = new Chart(ctx, {
          type: 'pie',
          data: {
          labels: ['認可保育園', '幼稚園', '企業主導型', 'こども園'],
          datasets: [{
          backgroundColor: ['tomato','skyblue', 'gray', 'yellow'],
              
          data: [count["ninka"],count["youtien"],count["kigyou"],count["kodomo"]]
 }]
    },
    options: {
      title: {
        display: true,
        text: '割合'
      },
      plugins: {
        labels: {
          render: 'percentage',
          fontColor: 'white',
          fontSize: 20
        }
      }
    }
  });

   


  //園別
  
  const count1 = {
            ninka: 0,
            youtien: 0,
            kigyou: 0,
            kodomo: 0,
            };
          
for (let i = 0; i < datafile.length; i++){
          if(datafile[i]['kown']=="1"){
            count1["ninka"]++;
          } else if(datafile[i]['kown']=="2"){
            count1["youtien"]++;
          } else if(datafile[i]['kown']=="3"){
            count1["kigyou"]++;
          } else if(datafile[i]['kown']=="4"){
            count1["kodomo"]++;
          }
        }

         
          


          var ctx = document.getElementById('my_chart1').getContext('2d');
          var myPieChart = new Chart(ctx, {
          type: 'radar',
          data: {
          labels: ['ネット検索', '知り合いの施設', '行政の担当者', '新しく入った職員'],
          datasets: [{
          backgroundColor: ['tomato','skyblue', 'gray', 'yellow'],
              
          data: [count1["ninka"],count1["youtien"],count1["kigyou"],count1["kodomo"]]
          }]
    },
    options: {
      title: {
        display: true,
        text: ''
      }
    }
  });    



  

</script>

<a href="search.php">検索</a>

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

