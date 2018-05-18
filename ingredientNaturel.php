<?php
include_once('include/beginning.php');
$origin = isset($_GET['o']) ? $_GET['o'] : "all";
//huile vegetal
$amadeDouce = "<p>L’<strong>huile d’amande douce</strong> est largement utilisée pour son action apaisante et adoucissante sur les peaux délicates et sèches. Elle s'utilise pour préparer des soins nourrissants pour tous types de peaux, en particulier les peaux tiraillées et inconfortables.</p>";
$avocat = "<p>L’<strong>huile d’avocat</strong> est obtenue à partir de la pulpe d'avocat mélangée à de l’eau tiède malaxée puis centrifugée. Cette huile, pleine de vitamines est un excellent actif anti-âge, nourrissant, protecteur et restructurant.</p>";
$sonBle = "<p>L’<strong>huile de son de blé</strong> est source d'antioxydants puissants. Cette huile est un ingrédient redoutable pour lutter contre les signes du vieillissement de la peau. Elle est précieuse pour composer des soins pour les peaux sèches, desquamées ou tiraillées.</p>";
$beurreCacao = "<p>Le <strong>beurre de cacao</strong> est très apprécié en saponification à froid pour son effet durcissant. Les fruits sont lavés et leur enveloppe est retirée. Ils sont ensuite fermentés (les graines fermentées sont les fèves de cacao) puis ils sont ensuite rôtis, refroidis et pressés pour donner la masse de cacao. Le beurre de cacao est séparé de cette masse puis désodorisé à la vapeur sous vide. Il apporte protection et douceur aux peaux sèches et rêches.</p>";
$coco = "<p>L’<strong>huile de coco</strong> est très appréciée pour ses propriétés protectrices, adoucissantes et émollientes sur la peau. Exotique et à l'odeur paradisiaque, elle s'emploie aussi dans les soins capillaires pour donner brillance et vigueur aux cheveux. En saponification à froid, elle apporte un excellent pouvoir moussant.</p>";
$coprah = "<p>L’<strong>huile de coprah</strong> est issue de la pulpe de noix de Coco BIO séchée, raffinée et désodorisée. Elle est particulièrement intéressante dans les formules de savons en saponification à froid de par sa richesse en acide laurique qui lui permet d'apporter un excellent pouvoir moussant.</p>";
$jojoba = "<p>L’<strong>huile de jojoba</strong> est équilibrante et assouplissante. Cette huile protège la peau de la déshydratation et des signes de l'âge.</p>";
$karite = "<p>L’<strong>beurre de karité</strong> est un allié précieux des peaux malmenées. Doux, protecteur et apaisant, adoucit et restructure les peaux abîmées et redonne brillance et beauté aux cheveux. Très riche en actifs (alcools terpéniques, phytostérols, latex, vitamines A et E…) qui lui confèrent des activités anti-oxydantes, anti-inflammatoires et protectrices contre les UV, le beurre de karité apporte au savon dureté et douceur. </p>";
$murumur = "<p>Le <strong>beurre de murumuru</strong> est riche en acide lauurique et est très apprécié pour la préparation de soins cosmétiques. En saponification à froid, il apporte un pouvoir lavant et moussant.</p>";
$olive = "<p>L’<strong>huile d’olive</strong> est naturellement riche en vitamine E et en polyphénols qui aident à lutter contre les signes du vieillissement cutané. Cette huile protège et assouplit la peau, et procure force et brillance aux cheveux.</p>";
$palme = "<p>L’<strong>huile de palme</strong> est très utilisée en saponification à froid car elle donne des savons à la fois très doux et d’une bonne dureté. L’huile de palme utilisée dans les produits <strong id='bettersoap'>better soap</strong> est issue de l’agriculture biologique et durable. Elle provient de plantations anciennes n’impliquant pas de déforestation et est produite par une société de commerce équitable qui valorise la qualité, l’éthique et l’environnement. </p>";
$ricin = "<p>L’<strong>huile de ricin</strong> est parfaite pour réparer et nourrir les cheveux secs, dévitalisés, fourchus, cassants ou crépus, elle est réputée pour en favoriser la pousse. En saponification à froid, elle apporte un excellent pouvoir moussant et revitalisant. </p>";
$tournesol = "<p>L’<strong>huile de tournesol</strong> apporte aux savons un excellent pouvoir revitalisant. Riche en oméga et en vitamine E, elle est idéale dans le traitement des peaux sèches et irritées. </p>";
//huiles essentielle
$bayStThomas = "<p>L’<strong>huile essentielle de Bay de Saint Thomas</strong> est connue pour favoriser la pousse des cheveux.</p>";
$camomilleRomaine = "<p>L’<strong>huile essentielle de camomille romaine ou camomille noble</strong> est reconnue pour ses vertus apaisantes et anti inflammatoires.</p>";
$cannelleCeylan = "<p>L’<strong>huile essentielle de cannelle de Ceylan (écorce)</strong> est tonique et stimulante.</p>";
$cedreAtlas = "<p>L’<strong>huile essentielle de cèdre de l’Atlas</strong> est idéale pour freiner la chute des cheveux. </p>";
$epiceaCommun = "<p>L’<strong>huile essentielle d’épicéa commun</strong> est antiseptique et tonifiante. Idéale en cas de refroidissement. </p>";
$geraniumRosat = "<p>L’<strong>huile essentielle de géranium rosat</strong> est anti inflammatoire et antiseptique, ce qui en fait un actif de choix pour le soin des peaux acnéiques.</p>";
$lavandeVraie = "<p>L’<strong>huile essentielle de lavande vraie</strong> est l’huile de la détente et du lâcher-prise. Elle est également apaisant pour les peaux irritées ou abîmées. </p>";
$mandarineRouge = "<p>L’<strong>huile essentielle de mandarine rouge</strong> est calmante et relaxante. Idéale pour combattre le stress et la nervosité.</p>";
$menthePoivree = "<p>L’<strong>huile essentielle de menthe poivrée</strong> est antalgique et rafraîchissante. </p>";
$orangeDouce  = "<p>Les <strong>huiles essentielles d’orange douce et d’orange sanguine</strong> sont positivantes et équilibrantes.</p>";
$pamplemousse  = "<p>L’<strong>huile essentielle de pamplemousse</strong> s’utilise pour assainir les peaux grasses. Son parfum vivifiant apporte optimisme et bonne humeur. </p>";
$patchouli  = "<p>L’<strong>huile essentielle de patchouli</strong> a des vertus relaxantes et favorise la rêverie.</p>";
$grainBigarade  = "<p>L’<strong>huile essentielle de petit grain bigarade</strong> est relaxante et équilibrante. </p>";
$pinSylvestre  = "<p>L’<strong>huile essentielle de pin sylvestre</strong> revigore le corps et stimule l’esprit.</p>";
$romarinCineole  = "<p>L’<strong>huile essentielle de romarin à cinéole</strong> est tonique et stimulante.</p>";
$teaTree  = "<p>L’<strong>huile essentielle de tea tree</strong> est un anti-infectieux à large spectre. Elle est un allié précieux des peaux à imperfections.</p>";

//ajouts
$argile =  "<p>Les <strong>argiles</strong> sont des roches sédimentaires qui se forment au cours des millénaires par la dégradation et l’érosion de minéraux. L’argile <strong>verte</strong> est conseillée aux peaux normales et aux peaux grasses. Elle est très efficace pour absorber et régulariser les excès de sébum. L'argile <strong>blanche</strong> est conseillée aux peaux sèches et fragiles. Elle est aussi utilisée en masque capillaire pour revitaliser les cheveux secs et dévitalisés. L'argile <strong>rose</strong> est conseillée aux peaux délicates, sblancheensibles et réactives ayant tendance aux rougeurs. L’argile <strong>violette</strong> adouvertecit et purifie la peau.</p>";
$avoine  = "<p>L'<strong>avoine</strong> est est une alliée précieuse pour les peaux sensibles, irritées, atopiques et pour le soin des bébés. Riches en actifs apaisants, elle s’utilise pour adoucir les inconforts et les rougeurs de la peau. </p>";
$charbon  = "<p>Le <strong>charbon végétal activé</strong> est connu depuis l'Antiquité pour son extraordinaire capacité d'adsorption, qui lui vaut notamment des propriétés purifiantes et détoxifiantes très intéressantes. En cosmétique, il s'utilise comme actif dans les masques, savons, produits lavants ou exfoliants pour éliminer les impuretés et polluants. </p>";
$cire  = "<p>La <strong>cire d’abeille</strong> possède diverses propriétés qui la rendent utile dans la prise en charge des problèmes de peau et de soins en général. Elle apporte hydratation et protecLe charbon végétal activétion au tissu cutané (notamment en raison de sa richesse en vitamine A).</p>";
$naticide  = "<p>Le <strong>conservateur naticide</strong> est un conservateur 100% d’origine naturelle qui permet de préserver les préparations à base d’eau et d’hydrolat de la prolifération bactérienne et fongique. </p>";
$aromatiquesNaturels  = "<p>Les <strong>extraits aromatiques naturels</strong> sont obtenus à partir de denrées alimentaires par des procédés physiques, enzymatiques ou microbiologique. Ces extraits aromatiques ne contiennent pas de molécules aromatisantes d’origine synthétique.</p>";
$fragrances  = "<p>Les <strong>fragrances</strong> sont des mélanges de substances aromatiques naturelles développés par de véritables “nez” français, à Grasse. Les substances aromatiques peuvent être des huiles essentielles, des fractions d’huiles essentielles ou des substances obtenues à partir de matières premières végétales par des procédés tels que la fermentation ou l’hydrolyse. </p>";
$miel = "<p>Le <strong>miel</strong> est utilisé en cosmétique pour ses vertus hydratantes et antiseptiques. Il est aussi nourrissant, cicatrisant et apaisant. </p>";
$ocres = "<p>Les <strong>ocres</strong> (jaune et rouge) sont des colorants naturels produits à base de roches brutes broyées et n’ont subi aucun traitement chimique. </p>";
$poudreRose  = "<p>La <strong>poudre de rose de damas</strong> est obtenue en broyant les pétales de rose séchées. Elle est connue en Ayurveda pour harmoniser les 3 doshas. La Rose, équilibrante, aide à détendre le corps et l'esprit. En cosmétique, ses vertus revitalisantes et tonifiantes cutanées sont très appréciées dans les soins des peaux sensibles et inconfortables. </p>";
$poudreOrange  = "<p>La <strong>poudre d’orange</strong> est utilisée en Ayurvéda pour ses propriétés stimulantes. Egalement réputée pour ses propriétés cosmétiques astringentes et tonifiantes, cette poudre d'orange est intéressante dans les soins nettoyants, notamment pour les peaux grasses et à tendance acnéique. Elle apporte un teint lumineux et frais à votre visage. Idéale dans les produits capillaires, elle apportera brillance, douceur et souplesse aux cheveux tout en les parfumant agréablement.</p>";
$rhassoul  = "<p>Le <strong>rhassoul</strong> est une argile volcanique récoltée dans la région du Moyen Atlas au Maroc. Il s'utilise pour préparer des shampooings doux et purifiants grâce à son aptitude exceptionnelle à absorber les impuretés sans irriter la peau.</p>";
$sci  = "<p>Le <strong>SCI</strong> (Sodium cocoyl isethionate) est dérivé estérifié des acides gras de l'huile de coco. Il s’agit d’un tensioactif anionique très bien toléré par la peau utilisé pour adoucir les formules de shampooings solides tout en apportant une mousse riche et crémeuse. </p>";
$matcha  = "<p>Le <strong>thé matcha</strong> est riche en catéchines, des anti-oxydants qui freinent la dégradation du collagène ce qui en fait un excellent agent anti-âge, qui lutte contre le vieillissement de la peau. Anti-inflammatoire, il apaise les peaux sensibles, et les peaux à problèmes. De par sa richesse en tannins, il aide à réguler les peaux grasses, et est également astringent. Il resserre les pores de la peau.</p>";
$cidre  = "<p>Le <strong>vinaigre de cidre</strong> est naturellement riche en nutriments, vitamines A et B, minéraux (calcium, magnésium, fer, sodium, zinc etc) et enzymes. Il adoucit la peau tiraillée par le calcaire et la pollution. </p>";
$vitamineE  = "<p>La <strong>Vitamine E</strong> est un antioxydant naturel extrait de l’huile de tournesol. Elle permet de préserver les huiles et beurres végétaux du rancissement et prolonge la durée de conservation des produits contenants des huiles sensibles. La vitamine E est aussi un excellent actif anti-âge, recommandé pour les peaux sèches et matures.</p>";
$lait = "<p>Le <strong>lait de vache</strong> est utilisé pour sa douceur";
$boutonRose = "<p>Les <strong>boutons de rose</strong> sont décoratifs et aussi améliorent les problèmes circulatoires";
$romarinPoudre = "<p>La <strong>poudre de romarin</strong> permet de donner une texture efficace pour le peeling";

/*
 * 
 *  
 * 
 (huile vegetale)
  $amadeDouce = "<p>L’<strong>huile d’amande douce</strong> est largement utilisée pour son action apaisante et adoucissante sur les peaux délicates et sèches. Elle s'utilise pour préparer des soins nourrissants pour tous types de peaux, en particulier les peaux tiraillées et inconfortables.</p>";
$avocat = "<p>L’<strong>huile d’avocat</strong> est obtenue à partir de la pulpe d'avocat mélangée à de l’eau tiède malaxée puis centrifugée. Cette huile, pleine de vitamines est un excellent actif anti-âge, nourrissant, protecteur et restructurant.</p>";
$sonBle = "<p>L’<strong>huile de son de blé</strong> est source d'antioxydants puissants. Cette huile est un ingrédient redoutable pour lutter contre les signes du vieillissement de la peau. Elle est précieuse pour composer des soins pour les peaux sèches, desquamées ou tiraillées.</p>";
$beurreCacao = "<p>Le <strong>beurre de cacao</strong> est très apprécié en saponification à froid pour son effet durcissant. Les fruits sont lavés et leur enveloppe est retirée. Ils sont ensuite fermentés (les graines fermentées sont les fèves de cacao) puis ils sont ensuite rôtis, refroidis et pressés pour donner la masse de cacao. Le beurre de cacao est séparé de cette masse puis désodorisé à la vapeur sous vide. Il apporte protection et douceur aux peaux sèches et rêches.</p>";
$coco = "<p>L’<strong>huile de coco</strong> est très appréciée pour ses propriétés protectrices, adoucissantes et émollientes sur la peau. Exotique et à l'odeur paradisiaque, elle s'emploie aussi dans les soins capillaires pour donner brillance et vigueur aux cheveux. En saponification à froid, elle apporte un excellent pouvoir moussant.</p>";
$coprah = "<p>L’<strong>huile de coprah</strong> est issue de la pulpe de noix de Coco BIO séchée, raffinée et désodorisée. Elle est particulièrement intéressante dans les formules de savons en saponification à froid de par sa richesse en acide laurique qui lui permet d'apporter un excellent pouvoir moussant.</p>";
$jojoba = "<p>L’<strong>huile de jojoba</strong> est équilibrante et assouplissante. Cette huile protège la peau de la déshydratation et des signes de l'âge.</p>";
$karite = "<p>L’<strong>beurre de karité</strong> est un allié précieux des peaux malmenées. Doux, protecteur et apaisant, adoucit et restructure les peaux abîmées et redonne brillance et beauté aux cheveux. Très riche en actifs (alcools terpéniques, phytostérols, latex, vitamines A et E…) qui lui confèrent des activités anti-oxydantes, anti-inflammatoires et protectrices contre les UV, le beurre de karité apporte au savon dureté et douceur. </p>";
$murumur = "<p>Le <strong>beurre de murumuru</strong> est riche en acide lauurique et est très apprécié pour la préparation de soins cosmétiques. En saponification à froid, il apporte un pouvoir lavant et moussant.</p>";
$olive = "<p>L’<strong>huile d’olive</strong> est naturellement riche en vitamine E et en polyphénols qui aident à lutter contre les signes du vieillissement cutané. Cette huile protège et assouplit la peau, et procure force et brillance aux cheveux.</p>";
$palme = "<p>L’<strong>huile de palme</strong> est très utilisée en saponification à froid car elle donne des savons à la fois très doux et d’une bonne dureté. L’huile de palme utilisée dans les produits <strong id='bettersoap'>better soap</strong> est issue de l’agriculture biologique et durable. Elle provient de plantations anciennes n’impliquant pas de déforestation et est produite par une société de commerce équitable qui valorise la qualité, l’éthique et l’environnement. </p>";
$ricin = "<p>L’<strong>huile de ricin</strong> est parfaite pour réparer et nourrir les cheveux secs, dévitalisés, fourchus, cassants ou crépus, elle est réputée pour en favoriser la pousse. En saponification à froid, elle apporte un excellent pouvoir moussant et revitalisant. </p>";
$tournesol = "<p>L’<strong>huile de tournesol</strong> apporte aux savons un excellent pouvoir revitalisant. Riche en oméga et en vitamine E, elle est idéale dans le traitement des peaux sèches et irritées. </p>";
/
 (huiles essentielles)
  <p>L’<strong>huile essentielle de Bay de Saint Thomas</strong> est connue pour favoriser la pousse des cheveux.</p>
  <p>L’<strong>huile essentielle de camomille romaine ou camomille noble</strong> est reconnue pour ses vertus apaisantes et anti inflammatoires.</p>
  <p>L’<strong>huile essentielle de cannelle de Ceylan (écorce)</strong> est tonique et stimulante.</p>
  <p>L’<strong>huile essentielle de cèdre de l’Atlas</strong> est idéale pour freiner la chute des cheveux. </p>
  <p>L’<strong>huile essentielle d’épicéa commun</strong> est antiseptique et tonifiante. Idéale en cas de refroidissement. </p>
  <p>L’<strong>huile essentielle de géranium rosat</strong> est anti inflammatoire et antiseptique, ce qui en fait un actif de choix pour le soin des peaux acnéiques.</p>
  <p>L’<strong>huile essentielle de lavande vraie</strong> est l’huile de la détente et du lâcher-prise. Elle est également apaisant pour les peaux irritées ou abîmées. </p>
  <p>L’<strong>huile essentielle de mandarine rouge</strong> est calmante et relaxante. Idéale pour combattre le stress et la nervosité.</p>
  <p>L’<strong>huile essentielle de menthe poivrée</strong> est antalgique et rafraîchissante. </p>
  <p>Les <strong>huiles essentielles d’orange douce et d’orange sanguine</strong> sont positivantes et équilibrantes. </p>
  <p>L’<strong>huile essentielle de pamplemousse</strong> s’utilise pour assainir les peaux grasses. Son parfum vivifiant apporte optimisme et bonne humeur. </p>
  <p>L’<strong>huile essentielle de patchouli</strong> a des vertus relaxantes et favorise la rêverie.</p>
  <p>L’<strong>huile essentielle de petit grain bigarade</strong> est relaxante et équilibrante. </p>
  <p>L’<strong>huile essentielle de pin sylvestre</strong> revigore le corps et stimule l’esprit.</p>
  <p>L’<strong>huile essentielle de romarin à cinéole</strong> est tonique et stimulante.</p>
  <p>L’<strong>huile essentielle de tea tree</strong> est un anti-infectieux à large spectre. Elle est un allié précieux des peaux à imperfections.</p>
(ajouts)
  <p>Les <strong>argiles</strong> sont des roches sédimentaires qui se forment au cours des millénaires par la dégradation et l’érosion de minéraux. L’argile <strong>verte</strong> est conseillée aux peaux normales et aux peaux grasses. Elle est très efficace pour absorber et régulariser les excès de sébum. L'argile <strong>blanche</strong> est conseillée aux peaux sèches et fragiles. Elle est aussi utilisée en masque capillaire pour revitaliser les cheveux secs et dévitalisés. L'argile <strong>rose</strong> est conseillée aux peaux délicates, sblancheensibles et réactives ayant tendance aux rougeurs. L’argile <strong>violette</strong> adouvertecit et purifie la peau.</p>
  <p>L'<strong>avoine</strong> est est une alliée précieuse pour les peaux sensibles, irritées, atopiques et pour le soin des bébés. Riches en actifs apaisants, elle s’utilise pour adoucir les inconforts et les rougeurs de la peau. </p>
  <p>Le <strong>charbon végétal activé</strong> est connu depuis l'Antiquité pour son extraordinaire capacité d'adsorption, qui lui vaut notamment des propriétés purifiantes et détoxifiantes très intéressantes. En cosmétique, il s'utilise comme actif dans les masques, savons, produits lavants ou exfoliants pour éliminer les impuretés et polluants. </p>
  <p>La <strong>cire d’abeille</strong> possède diverses propriétés qui la rendent utile dans la prise en charge des problèmes de peau et de soins en général. Elle apporte hydratation et protecLe charbon végétal activétion au tissu cutané (notamment en raison de sa richesse en vitamine A).</p>
  <p>Le <strong>conservateur naticide</strong> est un conservateur 100% d’origine naturelle qui permet de préserver les préparations à base d’eau et d’hydrolat de la prolifération bactérienne et fongique. </p>
  <p>Les <strong>extraits aromatiques naturels</strong> sont obtenus à partir de denrées alimentaires par des procédés physiques, enzymatiques ou microbiologique. Ces extraits aromatiques ne contiennent pas de molécules aromatisantes d’origine synthétique.</p>
  <p>Les <strong>fragrances</strong> sont des mélanges de substances aromatiques naturelles développés par de véritables “nez” français, à Grasse. Les substances aromatiques peuvent être des huiles essentielles, des fractions d’huiles essentielles ou des substances obtenues à partir de matières premières végétales par des procédés tels que la fermentation ou l’hydrolyse. </p>
  <p>Le <strong>miel</strong> est utilisé en cosmétique pour ses vertus hydratantes et antiseptiques. Il est aussi nourrissant, cicatrisant et apaisant. </p>
  <p>Les <strong>ocres</strong> (jaune et rouge) sont des colorants naturels produits à base de roches brutes broyées et n’ont subi aucun traitement chimique. </p>
  <p>La <strong>poudre de rose de damas</strong> est obtenue en broyant les pétales de rose séchées. Elle est connue en Ayurveda pour harmoniser les 3 doshas. La Rose, équilibrante, aide à détendre le corps et l'esprit. En cosmétique, ses vertus revitalisantes et tonifiantes cutanées sont très appréciées dans les soins des peaux sensibles et inconfortables. </p>
  <p>La <strong>poudre d’orange</strong> est utilisée en Ayurvéda pour ses propriétés stimulantes. Egalement réputée pour ses propriétés cosmétiques astringentes et tonifiantes, cette poudre d'orange est intéressante dans les soins nettoyants, notamment pour les peaux grasses et à tendance acnéique. Elle apporte un teint lumineux et frais à votre visage. Idéale dans les produits capillaires, elle apportera brillance, douceur et souplesse aux cheveux tout en les parfumant agréablement.</p>
  <p>Le <strong>rhassoul</strong> est une argile volcanique récoltée dans la région du Moyen Atlas au Maroc. Il s'utilise pour préparer des shampooings doux et purifiants grâce à son aptitude exceptionnelle à absorber les impuretés sans irriter la peau.</p>
  <p>Le <strong>SCI</strong> (Sodium cocoyl isethionate) est dérivé estérifié des acides gras de l'huile de coco. Il s’agit d’un tensioactif anionique très bien toléré par la peau utilisé pour adoucir les formules de shampooings solides tout en apportant une mousse riche et crémeuse. </p>
  <p>Le <strong>thé matcha</strong> est riche en catéchines, des anti-oxydants qui freinent la dégradation du collagène ce qui en fait un excellent agent anti-âge, qui lutte contre le vieillissement de la peau. Anti-inflammatoire, il apaise les peaux sensibles, et les peaux à problèmes. De par sa richesse en tannins, il aide à réguler les peaux grasses, et est également astringent. Il resserre les pores de la peau.</p>
  <p>Le <strong>vinaigre de cidre</strong> est naturellement riche en nutriments, vitamines A et B, minéraux (calcium, magnésium, fer, sodium, zinc etc) et enzymes. Il adoucit la peau tiraillée par le calcaire et la pollution. </p>
  <p>La <strong>Vitamine E</strong> est un antioxydant naturel extrait de l’huile de tournesol. Elle permet de préserver les huiles et beurres végétaux du rancissement et prolonge la durée de conservation des produits contenants des huiles sensibles. La vitamine E est aussi un excellent actif anti-âge, recommandé pour les peaux sèches et matures.</p>

 * 
 * 
 * 
 * 
 */



$huileVeg = array("miel-avoine" => array($olive, $coco, $palme, $karite, $ricin),
    "charbon-actif" => array($coprah, $tournesol, $avocat, $olive, $palme, $karite, $ricin, $jojoba),
    "sapin" => array($palme, $coco, $olive, $ricin),
    "coco" => array($tournesol, $coco, $beurreCacao),
    "orange-savon" => array($olive, $coco,$karite, $beurreCacao, $ricin, $murumur),
    "rose" => array($karite, $coprah, $olive, $palme, $beurreCacao),
    "orange-shamp" => array($ricin),
    "lavande" => array($olive),
    "herbe" => array($olive),
    "baume" => array($murumur, $karite),
    "automne" => array($coco, $olive, $karite, $ricin, $sonBle));


$huileEss = array("miel-avoine" => array(),
    "charbon-actif" => array($romarinCineole, $teaTree),
    "sapin" => array($cedreAtlas,$epiceaCommun,$pinSylvestre, $menthePoivree),
    "coco" => array(),
    "orange-savon" => array($orangeDouce, $pamplemousse,$grainBigarade),
    "rose" => array($patchouli, $geraniumRosat, $cedreAtlas),
    "orange-shamp" => array($orangeDouce, $mandarineRouge),
    "lavande" => array($lavandeVraie, $patchouli),
    "herbe" => array($teaTree, $romarinCineole, $cedreAtlas),
    "baume" => array(),
    "automne" => array($cannelleCeylan, $orangeDouce, $patchouli, $bayStThomas));

$ajout = array("miel-avoine" => array($lait, $avoine, $miel),
    "charbon-actif" => array($matcha, $charbon),
    "sapin" => array($matcha),
    "coco" => array($aromatiquesNaturels),
    "orange-savon" => array($poudreOrange, $ocres),
    "rose" => array($ocres, $boutonRose),
    "orange-shamp" => array($sci, $ocres, $naticide),
    "lavande" => array($sci, $argile),
    "herbe" => array($csi, $romarinPoudre, $rhassoul),
    "baume" => array($cire, $miel, $vitamineE, $poudreRose),
    "automne" => array($cidre, $ocres));
?>

<!-- content 
        ================================================== -->
<div id="content">
    <div class="inner-content">
        <div class="single-project">
            <div class="single-box">
                <div class="single-box-content">
                    <div class="project-post-content">

                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <img src="upload/ingredientNaturel (4).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (5).JPG" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (3).jpg" alt="ingredientNaturel"/>
                                </li> 
                                <li>
                                    <img src="upload/ingredientNaturel (6).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (1).jpg" alt="ingredientNaturel"/>
                                </li>
                                <li>
                                    <img src="upload/ingredientNaturel (2).jpg" alt="ingredientNaturel"/>
                                </li>
                            </ul>
                        </div>

                        <div class="project-text">
                            <h1>Ingrédients Naturels</h1>
                            <p>Les cosmétiques industriels nous imposent des substances inadaptées qui sont agressives pour la peau et polluent les eaux.</p>
                            <p>Les <strong>huiles végétales vierges</strong> et les <strong>huiles essentiels</strong> des savons <strong id="bettersoap">better soap</strong> sont naturels et le plus souvent <strong>bio</strong>. Les ingrédients sont choisis pour leurs <strong>bienfaits</strong>. La <strong>qualité</strong> et la <strong>traçabilité</strong> des ingrédients guident leur sélection. Ils sont une source de <strong>bien-être</strong> lors de chaque douche.</p>
                            <p>Ci-dessous, la liste des ingrédients utilisés.</p>
                            <h2>Les huiles végétales</h2>
                            <p>origine = <?php
                            var_dump($origin);?></p>
                            <p>$huileVeg = <?php var_dump($huileVeg["charbon-actif"]);
                            /*foreach ($huileVeg($origin) as $value) {
                                echo $value;
                            };*/
                            ?></p>




                            <h2>Les huiles essentielles</h2>




                            <h2>Les ajouts</h2>

                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- End content -->

</div>
<!-- End Container -->

<div class="preloader">
    <img alt="" src="images/preloader.gif">
</div>

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.migrate.js"></script>
<script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
<script type="text/javascript" src="js/jquery.nicescroll.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>

<?php
include_once('include/ending.php');
?>