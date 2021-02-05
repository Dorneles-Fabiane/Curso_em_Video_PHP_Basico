<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $texto = "Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.
        Gumbo beet greens corn soko endive gumbo gourd. 
        Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. 
        Dandelion cucumber earthnut pea peanut soko zucchini.
        Turnip greens yarrow ricebean rutabaga endive cauliflower sea lettuce kohlrabi amaranth water spinach 
        avocado daikon napa cabbage asparagus winter purslane kale. 
        Celery potato scallion desert raisin horseradish spinach carrot soko.";

        $res = wordwrap($texto, 20, "<br/>\n", true);
        echo "$res";
    ?>
</div>
</body>
</html>
 