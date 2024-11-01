<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>CLIENTE</title>
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">CABALLERO GUZTIAK</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead class="text-center">
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>FUERZA</th>
                    <th>NIVEL</th>
                    <th>ID ARMA</th>
                    <th>ID ESCUDO</th>
                    <th>AKZIOAK</th>
                </tr>
            </thead>
            <tbody>
                <?php if(!empty($ac)): ?>
                    <?php foreach($ac as $a): ?>
                        <tr>
                            <td><?php echo $a['id']; ?></td>
                            <td><?php echo $a['nombre']; ?></td>
                            <td><?php echo $a['fuerza']; ?></td>
                            <td><?php echo $a['nivel']; ?></td>
                            <td><?php echo $a['id_arma']; ?></td>
                            <td><?php echo $a['id_escudo']; ?></td>
                            <td>
                                <a href="index.php?action=select&id=<?php echo $a['id']; ?>" class="btn btn-info btn-sm me-2">Ikusi</a>
                                <a href="index.php?action=update&id=<?php echo $a['id']; ?>" class="btn btn-warning btn-sm me-2">Aldatu</a>
                                <a href="index.php?action=delete&id=<?php echo $a['id']; ?>" class="btn btn-danger btn-sm me-2">Ezabatu</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr><td colspan='7' class='text-center'>Ez daude caballeros datu basean!</td></tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>