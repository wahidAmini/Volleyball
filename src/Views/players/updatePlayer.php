<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>players</title>
</head>

<body class="container">
    <h1 class="text-center">Updating a player</h1>
    <a href="/players" class="btn btn-secondary">Back</a>
    <form action="/players/<?= $player->id ?>/update" method="post">
      <div class="mb-3">
        <label for="inputName" class="form-label"> Name </label>
        <input type="text" class="form-control" name="name">
      </div>
      <div class="mb-3">
        <label for="inputName" class="form-label">Age </label>
        <input type="number" class="form-control" name="age">
      </div>
      <div class="mb-3">
        <label for="inputName" class="form-label">Team Name </label>
        <input type="text" class="form-control" name="name">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
