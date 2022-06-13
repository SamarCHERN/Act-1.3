<?php
$articles = array();
$content = file_get_contents('articles.json');
$articles = json_decode($content, true);
//$articles[] = array();
  $articles[] =array('id'=>"1",'Titre' => "Java", 'Date' => "6 December 2021", 'Texte' => "Le Java est un langage de programmation open source, indépendant de toute plateforme. Sa polyvalence en fait une option pour presque tous les types de projets. Comme la plupart des langages de programmation Web les plus courants, il est en paradigme orienté objet, ce qui signifie qu’il se détermine en fonction de son champ d’application concret. Un très grand nombre de bibliothèques et de frameworks Web généralement bien fournis et détaillés sont disponibles pour faciliter la réalisation de projets très complexes. En outre, les programmes écrits en Java sont extensibles, évolutifs et faciles à entretenir, sous réserve que le programmeur connaisse son métier.",'Auteur'=>"Wikepidia");
  $articles[] =array('id' => uniqid(),'Titre' => 'Php', 'Date' => "14 November 2016", 'Texte' =>"Hypertext Preprocessor, mieux connu sous son acronyme PHP, est un langage de script dérivé des langages C et Perl. Il est utilisé principalement pour programmer des pages Webetdes applications Internet dynamiques." ,'Auteur'=>"Wikepidia");
  $articles[] =array('id' => uniqid(),'Titre' => 'Python', 'Date' => "14 November 2010",'Texte' => 'Python est un langage de programmation dit « évolué » qui se fonde sur un code à la fois compact et compréhensible. Python est également facile à exploiter ; par exemple, son indentation permet de délimiter les blocs de code par des espaces plutôt que par des symboles. C’est pour cela que ce langage est considéré comme agréable à apprendre et à utiliser.','Auteur'=>"Wikepidia");
  $articles[] =array('id' => uniqid(),'Titre' => "Ruby", 'Date' => "14 November 2020", 'Texte' =>'Un autre langage de programmation évolué du nom de Ruby a été créé au milieu des années 1990 par Yukihiro Matsumoto. Développé dès son origine comme un langage de programmation orienté objet, il présente également un typage dynamique et un nettoyage de mémoire automatique.' ,'Auteur'=>"Wikepidia");
  $articles[] =array('id' => uniqid(),'Titre' => 'C++', 'Date' => "14 November 2015", 'Texte' =>'Le C++ est dérivé du C, l’un des plus anciens langages de programmation. Envisagés au départ comme un approfondissement du C, les travaux sur le C++ ont débuté dès 1979, mais ce n’est qu’en 1985 qu’il a été mis à disposition du grand public. ' ,'Auteur'=>"Wikepidia");


usort($articles, function($x, $y) {
    return strtotime($x['Date']) <=> strtotime($y['Date']);
});
$articles=array_reverse($articles);
// $a=count($articles);
//$n=count($articles);
function getArticles($n=null){
  global $articles;
  if($n==null or $n>count($articles)){$n=count($articles);}
  $t=array();
  for ($x = 0; $x <$n; $x++) {
    $t[]=$articles[$x];
  }
  return($t);
} 

?>
