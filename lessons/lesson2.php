<?php
include '../theme/top.php';
echo '
  <div class="titlename">Intro to Sentences</div>
  <p> </p>

  <div class="row">
    <div class="col s12">

    </div>
  </div>
  <div class="row">
    <div class="col s12">
      <ul id="dropdown1" class="dropdown-content">
        <li><a href="' . $root . 'lessons/lesson1.php">Sounds</a></li>
        <li><a href="' . $root . 'lessons/lesson2.php">Intro to Sentences</a></li>
      </ul>
    </div>
  </div>
  <div class="row">
    <div class="col s4">
      <a class="btn deep-purple">Prev</a>
    </div>
    <div class="col s4">
      <a class="dropdown-trigger btn deep-purple" href="' . $root . 'lessons/index.php" data-target="dropdown1" hover="true">Lessons</a>
    </div>
    <div class="col s4">
      <a class="btn deep-purple">Next</a>
    </div>
  </div>';
include '../theme/bottom.php';
echo '<script>
$(".dropdown-trigger").dropdown();
</script>';
?>
