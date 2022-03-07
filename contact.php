<?php

include'./db/db.php';
include './db_contacts/db_contacts.php';
include './component/header/header.php';

?>

<div class="container">
  <div class="row">
    <h4 class="text-center p-4">contact us</h4>
    <div class="col-lg-6">
      <p style="text-align: justify;"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Soluta rerum temporibus asperiores officia impedit quasi facere odio voluptate ipsa ipsam totam
        repudiandae esse, ex eum quis nostrum porro? Possimus ea temporibus tenetur quibusdam eum quod dolor esse alias quidem saepe illum, animi cupiditate sed
        facere debitis in nobis. Praesentium totam amet maxime qui quod laborum omnis iste eum accusantium sed ducimus id dicta pariatur reiciendis perspiciatis culpa
        tempore cupiditate, delectus voluptatem ex. Nisi perspiciatis quae qui fugit. Ducimus, explicabo nemo, sed in repellat voluptates, iure id illum laboriosam impedit
        aliquid alias! Distinctio, unde sequi. Itaque aliquid quos omnis similique odio! </p>
    </div>

    <div class="col-lg-6">
      <h3>welcome <?php  ?></h3>

      <?php if (isset($_POST['submit'])){
        echo '<h4 style=color:green;>' .$msg_success. '</h4>';
      }
      ?>

      <ul>
        <?php
        if (isset($_POST['submit'])) {
          foreach ($error_arr as $err) {
            echo '<li>' . $err . '</li>';
          }
        }
        ?>
      </ul>

      <form method="POST" action="#">
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" name="fname" class="form-control">
        </div>
        <div class="form-floating mb-3">
          <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
          <label for="floatingInput">Email address</label>
        </div>
        <div class="mb-3">
          <div class="form-floating">
            <textarea class="form-control" name="message" placeholder="Leave a message here" id="floatingTextarea2" style="height: 100px"></textarea>
            <label for="floatingTextarea2">Message</label>
          </div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

<?php
include './component/footer/footer.php'
?>