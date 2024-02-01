<?php
$signe = array(
  'Bélier'=>'vous devez faire les effort les plus serieux pour acquérir un bon niveau.',
  'Taureau'=>'une de vos plus grande qualités est la capacité de saisir les théories.',
  'Gémeaux'=>"de temps à autres, admettez que vous n'êtes pas le seul à raisonner avec logique.",
  'Cancer'=>'la rapidité de votre intelligence risque de vous entrainer à négliger certains détail.',
  'Lion'=>'un effort vers la patience et la persevérance sera pour vous grandement payant.',
  'Vierge'=>"faites l'effort de vous concentrer.",
  'Balance'=>"vous avez une forte tendance à choisir les solutions astucieuses.",
  'Scorpion'=>"rennoncez à imposer vos propres données et appliquez les méthodes apprises.",
  'Sagittaire'=>"Pardonnez avec aisance et sans ambiguïté, mais n'acceptez aucun extremes",
  'Capricorne'=>"une certaine facilité ne doit pas vous détourner de l'objectif.",
  'Verseau'=>"ce travail vous demandera beaucoup d'ingéniosité.",
  'Poissons'=>"Votre esprit vif et limpide facilite la résolution des problèmes.",

);
$nbChamps = count($signe);
echo "Le tableau signe contient $nbChamps champs";
print_r($signe);
?>

<!--<ul>
  <li><?php echo $signe["Bélier"];?></li>
  <li><?php echo $signe["Taureau"];?></li>
  <li><?php echo $signe["Gémeaux"];?></li>
  <li><?php echo $signe["Cancer"];?></li>
  <li><?php echo $signe["Lion"];?></li>
  <li><?php echo $signe["Vierge"];?></li>
  <li><?php echo $signe["Balance"];?></li>
  <li><?php echo $signe["Scorpion"];?></li>
  <li><?php echo $signe["Sagittaire"];?></li>
  <li><?php echo $signe["Capricorne"];?></li>
  <li><?php echo $signe["Verseau"];?></li>
  <li><?php echo $signe["Poissons"];?></li>
  </ul>!>