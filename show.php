<?php
  include 'config.php';

  $sql = "SELECT * FROM todolist";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
?>

<li>
  <p> <?= $row['text']; ?> </p>

  <div>
    <button id="delete" data-id="<?= $row['id']; ?>">
      <i class="fa fa-trash"></i>
    </button>

    <button id="update" data-id="<?= $row['id']; ?>">
      <i class="fa fa-pencil"></i>
    </button>
  </div>
</li>


<?php } }else { echo "<div style='text-align:center;'>no task remaining </div>"; } ?>
