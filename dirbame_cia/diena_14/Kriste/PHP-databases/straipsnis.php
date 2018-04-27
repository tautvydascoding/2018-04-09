<!-- jeigu faile mes kodiname tik php, nereikia deti uzdarymo -->
<!--
// UZDUOTIS
// 1. suskurti faila:  index.php
// 1.1 index.php faile sukurti 2 kintamuosius $vardas, $pavarde
// 1.2 index.php faile sukurti masyva: 'straipnis' = ['antraste', 'aprasymas', 'data'];
//
// pvz:   'BMW vel preleke saligatviu',   'Lorem lorem....', '2010-12-01'

// 2. index.php faile  ideti:
// include( 'straipsnis.php');

// 2.1 straipsnis.php failesukurti <div> ir jo viduje isvesti su echo $vardas, $pavarde
// 2.2 straipsnis.php faile sukurti   'container' 'main' 'article'
// 2.3 'article' videje sukurti:
// 2.3.1    sukurti 'h2' ir jo viduje isvesti antrastę (is masyvo)
// 2.3.2    sukurti 'paragrafa' ir jo viduje isvesti aprasymą  (is masyvo)
// 2.3.3    sukurti '<div>' ir jo viduje isvesti datą  (is masyvo)  -->

<article class="">

  <h2> <?php echo $straipsnis["antraste"] ?> </h2>

  <p> <?php echo $straipsnis["aprasymas"] ?> </p>

  <div class="text-talic">
    <?php echo $straipsnis["data"] ?>
  </div>

  <div class="">
    <?php echo "$vardas $pavarde" ?>
  </div>

</article>
