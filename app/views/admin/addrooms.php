
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lavalust CRUD</title>
</head>

<body class="bg-light"> 

    <div class="container" style="margin-top: 60px;">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card">
                    <div class="card-body p-2 p-md-3"> 
                        <h3 class="mb-2 pb-1 pb-md-2 mb-md-3">Add Room Details</h3> 
                        <form action="<?php echo site_url('add');?>" method="post">
                            <div class="mb-1"> 
                                <label for="room_name" class="form-label">Room Name</label>
                                <input type="text" name="room_name" id="room_name" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="price" class="form-label">price</label>
                                <input type="text" name="price" id="price" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="size" class="form-label">size</label>
                                <input type="float" name="size" id="size" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="capacity" class="form-label">Capacity</label>
                                <input type="text" name="capacity" id="capacity" class="form-control" required>
                            </div>
                            <div class="mb-1">
                                <label for="services" class="form-label">Services</label>
                                <input type="text" name="services" id="services" class="form-control" required>
                            </div>

                            <div class="mb-1">
                                <label for="status" class="form-label">Status</label>
                                <input type="text" name="status" id="status" class="form-control" required>
                            </div>
                            <div class="mb-1">
                                <label for="image_url" class="form-label">Image</label>
                                <input type="file" name="image_url" id="image_url" class="form-control" required>
                            </div>

                            <div class="mb-1"> 
                                <input class="btn btn-primary btn-sm" type="submit" value="Submit"> 
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
