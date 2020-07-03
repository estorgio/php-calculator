<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Calculator</title>
  <link rel="stylesheet" href="/vendor/bootstrap-4.5.0-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="/assets/css/styles.css">
</head>
<body>

  <div class="container">
    <div class="col-sm">

      <div class="calc-body">
        <?php if ($error) { ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= $error ?>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        <?php } ?>

        <div class="d-flex flex-column border rounded p-3">

          <div class="d-flex justify-content-center">
            <div class="d-flex flex-column border rounded p-3 justify-content-center text-center">
              <span>Answer</span>
              <span class="h2"><?= $answer ?></span>
            </div>
          </div>

          <form action="/" method="POST">

            <div class="d-flex p-3 justify-content-center">
              <div class="d-flex flex-column mx-3">
                <span>Number 1</span>
                <input type="number" name="number1" class="form-control" value="<?= $number1 ?>">
              </div>

              <div class="d-flex flex-column mx-3">
                <span>Operation</span>
                <select name="operation" class="form-control">
                  <option value="add" <?= $operation === 'add' ? 'selected' : '' ?>>+</option>
                  <option value="subtract" <?= $operation === 'subtract' ? 'selected' : '' ?>>-</option>
                  <option value="divide" <?= $operation === 'divide' ? 'selected' : '' ?>>/</option>
                  <option value="multiply" <?= $operation === 'multiply' ? 'selected' : '' ?>>*</option>
                </select>
              </div>

              <div class="d-flex flex-column mx-3">
                <span>Number 2</span>
                <input type="number" name="number2" class="form-control" value="<?= $number2 ?>">
              </div>

            </div>

            <div class="d-flex p-3 justify-content-center">
              <input type="submit" class="btn btn-primary">
            </div>

          </form>

        </div>
      </div>
    </div>
  </div>
  
  <script src="/vendor/jquery/jquery-3.5.1.slim.min.js"></script>
  <script src="/vendor/popper-1.16.0/popper.min.js"></script>
  <script src="/vendor/bootstrap-4.5.0-dist/js/bootstrap.min.js"></script>
</body>
</html>