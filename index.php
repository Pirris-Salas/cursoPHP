<?php 

$var1 = 1;
$apellido = 'Salgado';
$nombre = "Luis Salas $apellido";
$limitMonths = 2000;

//$jobs = [
  //'title' => 'PHP Developer', 
 // 1 => 'Python Dev',
  //2 => 'Devops'  
 // ];
// ARRAY REGULAR

$jobs = [
[
  'title' => 'PHP Developer', 
  'description' => 'This is an interesting career, and with many growing oportunities.',
  'visible' => 'true',
  'months' => 7
],
[
  'title' => 'Python Dev',
  'description' => 'A programming language I learned by accident, but it became an excellent tool for new challenges.',
  'visible' => 'true',
  'months' => 23
],
[
  'title' => 'Devops',  
  'description' => 'Considered as a career achieve and not a job. This is something I still learning using my self-taught skills.',
  'visible' => 'true',
  'months' => 12
],
[
  'title' => 'Travel Agent',  
  'description' => 'Nice experience, here is where I improved my english language skills',
  'visible' => 'true',
  'months' => 66
],
[
  'title' => 'Linux Servers',  
  'description' => 'I love Linux, but it hates me.',
  'visible' => 'true',
  'months' => 2
]
];

//if($var1 > 2){
//echo 'es mayor que 2';
//}else {
//echo 'No es mayor que 2';
//}


//$jobs[0]['title'];

//var_dump($jobs); -- Con var_dumps podemos visualizar los valores en el navegador, en este caso  un vector y sus respectivas posiciones



// FUNCIONES // 

function printJob ($job){

  if($job['visible'] == 'false'){
            
    return;
     }

  echo '<li class="work-position">';
  echo '<h5>' . $job['title'] . '</h5>';
  echo '<p>' . $job['description'] . '</p>';
  echo '<p>' . jobDuration($job['months']) . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';

}

function jobDuration($months){


  $years = floor ($months / 12);
  $residuoYears = $months % 12; // Residuo de la división de meses / 12

if($months <= 11){

  return "Duration: $months month(s)";

}elseif ($residuoYears == 0) {

  return "Duration: $years year(s).";

}else{

  return "Duration: $years year(s) and $residuoYears month(s)";
}


}

?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B"
    crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">

  <title>Resume</title>
</head>

<body>
  <div class="container">
    <div id="resume-header" class="row">
      <div class="col-3">
        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
      </div>
      <div class="col">
        <h1><?php echo $nombre; ?></h1>
        <h2>PHP Developer</h2>
        <ul>
          <li>Mail: luissalas_10@outlook.com</li>
          <li>Phone: 1234567890</li>
          <li>LinkedIn: https://linkedin.com</li>
          <li>Twitter: @hectorbenitez</li>
        </ul>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <h2 class="border-bottom-gray" >Carrer Summary</h2>
        <p>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
        </p>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div>
          <h3 class="border-bottom-gray" >Work Experience</h3>
          <ul>
            <?php  

            $totalMonths = 0;
          for ($idx = 0; $idx < count($jobs); $idx ++){ //La funcion count sirve para contar la cantidad de indices existentes en el vector job
            
            // $totalMonths = $totalMonths + $jobs[$idx]['months']; El =+ resume el código, tal cual el ejemplo de abajo.
            $totalMonths += $jobs[$idx]['months'];

            if($totalMonths > $limitMonths){
            break;
            };

            printJob($jobs[$idx]);
          }
            ?>
          </ul>
        </div>
        <div>
            <h3 class="border-bottom-gray">Projects</h3>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
            <div class="project">
                <h5>Project X</h5>
                <div class="row">
                    <div class="col-3">
                        <img id="profile-picture" src="https://ui-avatars.com/api/?name=John+Doe&size=255" alt="">
                      </div>
                      <div class="col">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius earum corporis at accusamus quisquam hic quos vel? Tenetur, ullam veniam consequatur esse quod cum, quam cupiditate assumenda natus maiores aperiam.</p>
                        <strong>Technologies used:</strong>
                        <span class="badge badge-secondary">PHP</span>
                        <span class="badge badge-secondary">HTML</span>
                        <span class="badge badge-secondary">CSS</span>
                      </div>
                </div>
            </div>
          </div>
      </div>
      <div class="col-3">
        <h3 class="border-bottom-gray" >Skills & Tools</h3>
        <h4>Backend</h4>
        <ul>
          <li>PHP</li>
        </ul>
        <h4>Frontend</h4>
        <ul>
            <li>HTML</li>
            <li>CSS</li>
        </ul>
        <h4>Frameworks</h4>
        <ul>
          <li>Laravel</li>
          <li>Bootstrap</li>
        </ul>
        <h3 class="border-bottom-gray" >Languages</h3>
        <ul>
          <li>Spanish</li>
          <li>English</li>
        </ul>
      </div>
    </div>
    <div id="resume-footer" class="row">
      <div class="col">
          Designed by @hectorbenitez
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em"
    crossorigin="anonymous"></script>
</body>

</html>