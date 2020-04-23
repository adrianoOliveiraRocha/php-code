<?php

$pagesNumber = \Helper\Pagination::getPagesNumber($categoryId);
$amplitude = \Helper\Pagination::getAmplitude();

?>

<?php if($amplitude < $pagesNumber) { 
  $sides = \Helper\Pagination::calculateSides($page, $pagesNumber);
  $previous = \Helper\Pagination::getPrevious($page);
  $next = \Helper\Pagination::getNext($page, $pagesNumber);
  
  $leftExtrapolated = false;
  if(!empty($sides['left'][0])) {
    $leftExtrapolated = \Helper\Pagination::getLeftExtrapolated($sides['left'][0]);
  }

  $rigthExtrapolated = 
    \Helper\Pagination::rightExtrapolated($pagesNumber, count($sides['right']), $page);
  
?>

<nav aria-label="Page navigation example">
  <ul class="pagination">  

    <!-- previous -->
    <?php if($previous['exists']) { ?>
    <li class="page-item"><a class="page-link" 
      href="index.php?core&page=<?php print($previous['value'] . \Helper\Pagination::categoryExists($categoryId));?>">&laquo;</a></li>
    <?php } ?>
    <!-- /previous -->
    
    <?php if($leftExtrapolated) { ?>
    <li class="page-item"><a class="page-link">
      ...
    </a></li>
    <?php } ?>

    <!-- left side -->
    <?php foreach($sides['left'] as $l) { ?>
    <li class="page-item"><a class="page-link" 
      href="index.php?core&page=<?php print($l . \Helper\Pagination::categoryExists($categoryId));?>">
      <?php echo $l;?>
    </a></li>
    <?php } ?>  
    <!-- /left side -->  

    <!-- current page  -->
    <li class="page-item active"><a class="page-link" href="#">
      <?php echo $page;?>
    </a></li>
    <!-- /current page  -->

    <!-- right side -->
    <?php foreach($sides['right'] as $r) { ?>
    <li class="page-item"><a class="page-link" 
      href="index.php?core&page=<?php print($r . \Helper\Pagination::categoryExists($categoryId));?>">
      <?php echo $r;?>
    </a></li>
    <?php } ?>  
    <!-- /right side -->  

    <?php if($rigthExtrapolated) { ?>
    <li class="page-item"><a class="page-link">
      ...
    </a></li>
    <?php } ?>

    <!-- next -->
    <?php if($next['exists']) { ?>
    <li class="page-item"><a class="page-link" 
      href="index.php?core&page=<?php print($next['value']. \Helper\Pagination::categoryExists($categoryId));?>">&raquo;</a></li> 
    <?php } ?> 
    <!-- /next -->

  </ul>
</nav>

<?php } else { ?> 
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <?php for($i = 1; $i <= $pagesNumber; $i++) { ?>
    <li class="page-item <?php if($i == $page) {echo "active";}?>"><a class="page-link" 
      href="index.php?core&page=<?php print($i . \Helper\Pagination::categoryExists($categoryId));?>">
      <?php echo $i;?>
    </a></li>
    <?php } ?>
  </ul>
</nav>
<?php } ?>