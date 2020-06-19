<?php

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