<?php include("variables.php"); ?>
<!doctype html>
<!-- Make sure xampp is running! -->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My PHP Learning</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body>
    <?php include("navbar.php"); ?>
    <br>
    <h1 style="text-align: center">
        <?php
          echo date('l') . "<br />";
          echo $name . " is at the " . $company . "<br />";
        ?>
    </h1><button type="button" class="btn btn-primary" id="liveToastBtn">Show live toast</button>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
  <div id="liveToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
    <?php include("footer.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
  </body>
</html>

<!--
  // $fav_pizza = array(
  //   "John" => "pepperoni",
  //   "Robert" => "bacon",
  //   "Steve" => "cheese",
  //   "Mary" => "mushroom"
  // );

  // $names = array('John', "Steve", "Robert");
  // foreach ($names as $value) {
  //   echo "$value<br />";
  // }
  // echo rand(0,1); // inclusive
  // mt_rand is better

  // $comment = "Jenny dates smart brainy men.";
  // $comment = str_replace('d', 'h', $comment);
  // // $comment = str_replace('i', 'w', $comment);
  // // $comment = str_replace("smart", "dumb", $comment);
  // // echo strtoupper($comment);
  // echo str_shuffle($comment);
  // ucwords capitalizes
  // -->
