<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Edit Product</title>
</head>

<body class="bg-light">

  <div class="container" style="margin-top: 60px;">
    <div class="row justify-content-center">
      <div class="col-12 col-lg-6">
        <div class="card">
          <div class="card-body p-2 p-md-3"> 
            <h3 class="mb-2 pb-1 pb-md-2 mb-md-3">Edit Rooms</h3> 
            <form action="http://localhost/lavalustverif/edit/<?=$data['id'];?>" method="post">

              <div class="mb-1"> 
                <label for="room_name">Room Name</label>
                <input type="hidden" name="id" value="<?=$data['id']?>">
                <input type="text" name="room_name" id="room_name" value="<?=$data['room_name']?>" class="form-control">
              </div>

              <div class="mb-1"> 
                <label for="price">Price</label>
                <input type="text" name="price" id="price" value="<?=$data['price']?>" class="form-control">
              </div>

              <div class="mb-1"> 
                <label for="size">Size </label>
                <input type="text" name="size" id="size" value="<?=$data['size']?>" class="form-control">
              </div>

              <div class="mb-1"> 
                <label for="capacity">Capacity</label>
                <input type="float" name="capacity" id="capacity" value="<?=$data['capacity']?>" class="form-control">
              </div>

              <div class="mb-1"> 
                <label for="services">Services</label>
                <input type="float" name="services" id="services" value="<?=$data['services']?>" class="form-control">
              </div>
             
              <div class="mb-1"> 
                <label for="status">Status</label>
                <input type="float" name="status" id="status" value="<?=$data['status']?>" class="form-control">
              </div>
              
              <div class="mb-1"> 
                <label for="image_url">Image</label>
                <input type="file" name="image_url" id="image_url" value="<?=$data['image_url']?>" class="form-control">
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
