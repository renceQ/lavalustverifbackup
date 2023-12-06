<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    <style>
        /* Additional custom styles can be added here */
        .custom-table th,
        .custom-table td {
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container" style="margin-top: 100px;">
        <table class="table custom-table">
            <thead class="table-dark">
                <tr>
                    <th>Room Name</th>
                    <th>Price</th>
                    <th>Size</th>
                    <th>Capacity</th>
                    <th>Services</th>
                    <th>Status</th>
                    <th>Image</th>
                    <th>Other Options</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $info) : ?>
                    <tr>
                        <td><?= $info['room_name'] ?></td>
                        <td><?= $info['price'] ?></td>
                        <td><?= $info['size'] ?></td>
                        <td><?= $info['capacity'] ?></td>
                        <td><?= $info['services'] ?></td>
                        <td><?= $info['status'] ?></td>
                        <td><?= $info['image_url'] ?></td>
                        <td>
                            <a href="<?= site_url('delete/' . $info['id']); ?>" class="btn btn-danger btn-sm">Delete</a>
                            &nbsp;<a href="<?php echo site_url('edit/' . $info['id']); ?>" class="btn btn-warning btn-sm">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>

</html>
