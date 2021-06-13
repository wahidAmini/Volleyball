<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teams</title>
</head>

<body class="container">
    <h1 class="text-center">Liste des Teams</h1>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Delete</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team) : ?>
            <tr>
                <td><?= $team->id ?></td> 
                <td><?= $team->name ?></td>
                <td><a href="/teams/<?= $team->id ?>/delete" class="btn btn-danger">Delete</a> </td>
                <td><a href="/teams/<?= $team->id ?>/edit" class="btn btn-success">Update</a> </td>
            </tr>
            
            <?php endforeach; ?>
        </tbody>
        </table>
            <a href="/teams/create" class="btn btn-primary">Add Team</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>

</html>
