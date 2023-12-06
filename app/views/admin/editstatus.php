<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Lavalust CRUD</title>
</head>

<body class="bg-dark">
<section class="vh-100 gradient-custom">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6">
                    <div class="card">
                        <div class="card-body p-4 p-md-5">
                            <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">Approval and Denial Form</h3>
                            <form action="http://localhost/lavalustverif/editstat/<?=$data['id'];?>" method="post">

                                

                                <div class="mb-3">
    <label for="roomName" class="form-label">Room Name</label>
    <input type="hidden" name="id" value="<?=$data['id']?>">
    <input type="text"  class="form-control" id="roomName" name= "roomName" value="<?=$data['roomName']?>" readonly>
</div>


<div class="mb-3">
    <label for="checkInDate" class="form-label">Check-In Date</label>
    <input type="text"  class="form-control" id="checkInDate" name= "checkInDate" value="<?=$data['checkInDate']?>" readonly>
</div>

<div class="mb-3">
    <label for="checkOutDate" class="form-label">Check-Out Date</label>
    <input type="text" class="form-control" id="checkOutDate" name= "checkOutDate" value="<?=$data['checkOutDate']?>" readonly>
</div>

<div class="form-group">
    <label for="specialRequests">Special Request:</label>
    <input specialRequests="specialRequests" placeholder="  specialRequests" style="height: 70px;" type="text" class="form-control" id="specialRequests" name = "specialRequests" value="<?=$data['specialRequests']?>" readonly>
</div>
<a>Number of Guests </a>
<br>
<br>

<div class="form-group">
    <label for="adults">Adults:</label>
    <input name="adults" placeholder=" number of adults" type="number" class="form-control" id="adults" name= "adults" value="<?=$data['adults']?>" readonly>
</div>

<div class="form-group">
    <label for="children">Children:</label>
    <input name="children" placeholder=" number of children" type="number" class="form-control" id="children" name= "children" value="<?=$data['children']?>" readonly>
</div>

<a>Contact Information</a>
<br>
<br>

<div class="form-group">
    <label for="name">Name:</label>
    <input name="name" placeholder="  name" type="text" class="form-control" id="name" name= "name" value="<?=$data['name']?>" readonly>
</div>
<div class="form-group">
    <label for="email">Email:</label>
    <input name="email" placeholder="sample@email.com" type="email" class="form-control" id="email" name= "email" value="<?=$data['email']?>" readonly>
</div>
<div class="form-group">
    <label for="phone">Phone Number:</label>
    <input name="phone" placeholder="sample +639012371263" type="tel" class="form-control" id="phone" name= "phone" value="<?=$data['phone']?>" readonly>
</div>
<div class="form-group">
    <label for="address">Address:</label>
    <input name="address" placeholder=" address" type="text" class="form-control" id="address" name= "address" value="<?=$data['address']?>" readonly>
</div>

<div class="form-group">
    <label for="status">Status:</label>
    <input name="status" placeholder=" status" type="text" class="form-control" id="status" name= "status" value="<?=$data['status']?>" readonly>
</div>
<div class="mt-4">
                <!-- <input class="btn btn-primary btn-lg" type="submit" value="Submit"> -->
                <button type="submit" class="btn btn-success btn-lg" value="Submit" onclick="approveBooking()">Approved</button>
                <button type="submit" class="btn btn-danger btn-lg" value="Submit" onclick="declineBooking()">Declined</button>
</div>
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        function approveBooking() {
            // Update the status field to "Approved"
            document.getElementById('status').value = 'Approved';
        }

        function declineBooking() {
            // Update the status field to "Approved"
            document.getElementById('status').value = 'Declined';
        }
    </script>
</body>

</html>