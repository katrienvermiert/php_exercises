<?php
//exercise 1
$land = array ('Belgium', 'France', 'Germany', 'The Netherlands', 'Spain');
echo $land[2];

//exercise 2
$family = array ('mother', 'father', 'brother', 'sister-in-law', 'nephew');
echo '<pre>';
print_r($family);
echo '</pre>';

$favdish = array ('burger', 'pasta', 'pizza', 'mince-leak-mash-casserole');
echo '<pre>';
print_r($favdish);
echo '</pre>';

$favmovser = array ('the x-files', '12 angry men', 'doctor who', 'the silence of the lambs');
echo $favmovser [0]. '<br>'; 
echo $favmovser [1];

//exercise 3
$me = array (
    'name' => 'Katrien',
    'age' => 35,
    'female' => true,
    'hobbies' => array ('reading', 'TV-film', 'snowboarding', 'running'),
    );

$dad = array (
    'name' => 'Jo',
    'age' => 66,
    'female' => false,
    'hobbies' => array ('fitness', 'walking', 'riding bike')
);

$soulmate = array (
    'name' => 'MJ',
    'age' => 34,
    'female' => true,
    'hobbies' => array ('climbing', 'walking', 'reading')
);

$me ['papa'] = $dad;
$me ['hobbies'][] = 'taxidermy';

echo '<pre>';
print_r ($me);
echo "</pre>";

echo count($dad['hobbies']).'<br>';
echo count($me['hobbies']).'<br>';
echo count($dad['hobbies']) + count($me['hobbies']).'<br>';

$resultI = array_intersect($me['hobbies'],$soulmate['hobbies']);
echo '<pre>';
print_r ($resultI);
echo "</pre>";

$resultM = array_merge($me['hobbies'],$soulmate['hobbies']);
echo '<pre>';
print_r ($resultM);
echo "</pre>";

//exercise 4
$web_development = array(
    'frontend' => array(
    ),
    'backend' => array(
    ),
);

$web_development ['frontend'][] = 'xhtml';
$web_development ['frontend'][] = 'css';
$web_development ['frontend'][] = 'javascript';
$web_development ['backend'][] = 'flash';
$web_development ['backend'][] = 'ruby on rails';

$web_development ['frontend'][0] = 'html';
unset($web_development ['backend'] [0]);

echo '<pre>';
print_r ($web_development);
echo "</pre>";
?>