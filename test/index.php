<?php
$localhost = "";
$conn = mysqli_connect("localhost", "root", "", "test")
if ($conn) {
  echo('connection!')
}
// echo(phpinfo());
include "header.php";
include "footer.php";
?>

<?php
echo('
<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="POST" action="action.php" style="width: 300px" class="mx-auto">
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
              </div>
              <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>
')
?>