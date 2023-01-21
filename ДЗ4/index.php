<?php
$name = "Лидия Петровна";
$resume = 'Резюме лучшего работника';
$prof = 'Все профессии важны';
$city = 'Лас-Вегас';
$mail = 'nuzhnidengi@gmail.com';
$phone = '84951234567';
$lang = 'Владею в совершенстве';
$education = 'Институт благородных девиц';
$skills = [
	[
    	'name' => 'Фотошоп',
        'percent' => 30,
    ],
	[
    	'name' => 'Иллюстратор',
        'percent' => 70,
    ],
	[
    	'name' => 'Медиа',
        'percent' => 40,
    ],
];
$experience = 
[
	[
    	'work' => 'Работаю продуктологом',
        'date' => 'Ноябрь 2023 - по настояцее время',
        'discription' => 'Класно, когда колеги говорят - вот тебе делать нечего, а я им отвечаю - воообще-то это моя работа!'
    ],
	[
    	'work' => 'Развозила грузы',
        'date' => 'Сентябрь 2019 - Ноябрь 2023',
        'discription' => 'Создала несколько решений в крупной корпорации и увеличила выручку по продукту на 60% год к году'
    ],
	[
    	'work' => 'Грабила банки',
        'date' => 'Декабрь 1998 - Сентябрь 2019',
        'discription' => 'Было отличное время, когда работа в банках представляла из себя туссовку светского общества'
    ],
];
?>
<!DOCTYPE html>
<html>
<head>
  <title><?=$resume?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    html,
    body,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
      font-family: 'Jost', sans-serif;
    }
  </style>
</head>
<body class="w3-light-grey">
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">
    <!-- The Grid -->
    <div class="w3-row-padding">
      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="https://imgfon.ru/Images/Details_img_880px/Animals/glaza-belyy_fon-kotik-morda-polosatyy.webp"
              style="width:100%" alt="Avatar">
            <div class="w3-display-bottomleft w3-container w3-text-black">
              <h2><?php echo $name; ?></h2>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $prof; ?></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $city; ?></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $mail; ?></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $phone; ?></p>
 
            <hr>
 
            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Навыки</b></p>
            <?php for($i = 0; $i<count($skills); $i++):?>
              <p><b><i><?=$skills[$i]['name']?></i></b></p>
              <div class="w3-light-grey w3-round-xlarge w3-small">
                <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%"><b><i><?=$skills[$i]['percent']; ?>%</i></b></div>
              </div>
            <?php endfor;?>
            <br>
 
            <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i><?=$lang?></b>
            </p>
            <p>Английский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Испанский</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:90%"></div>
            </div>
            <p>Немецкий</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:93%"></div>
            </div>
            <br>
          </div>
        </div>
        <br>
        <!-- End Left Column -->
      </div>
      <!-- Right Column -->
      <div class="w3-twothird">
        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Опыт работы</h2>
              <?php for($i = 0; $i < count($experience); $i++): ?>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><?=$experience[$i]['work']?></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><?=$experience[$i]['date']?></span></h6>
          <p><?=$experience[$i]['discription']?></p>
          <hr>
          
          <?php
          	endfor;
          ?>
          <br>
          </div>
        </div>
 
        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i><?=$education?></h2>
              <img src="https://dzen.ru/media/cloud4y/vasha-baza-dannyh-miauknuta-5f34ed53c6fb0a46e83354e3" style="width:100%" alt="Avatar">
        </div>
        <!-- End Right Column -->
      </div>
      <!-- End Grid -->
    </div>
    <!-- End Page Container -->
  </div>
  <!-- Footer -->
  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <!-- End footer -->
  </footer>
</body>
</html>