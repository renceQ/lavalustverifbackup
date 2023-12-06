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
    <h2 class="text-center mb-4">Pending Reservation List</h2>
        <table class="table custom-table">
            <thead class="table-dark">
                <tr>
                    <th>Room Name</th>
                    <th>Check-In Date</th>
                    <th>Check-out Date</th>
                    <th>special Requests</th>
                    <th>Number of Adults</th>
                    <th>Number of Children</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $info) : ?>
                    <?php if ($info['status'] == 'Pending') : ?>
                    <tr>
                        
                        <td><?= $info['roomName'] ?></td>
                        <td><?= $info['checkInDate'] ?></td>
                        <td><?= $info['checkOutDate'] ?></td>
                        <td><?= $info['specialRequests'] ?></td>
                        <td><?= $info['adults'] ?></td>
                        <td><?= $info['children'] ?></td>
                        <td><?= $info['name'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['phone'] ?></td>
                        <td><?= $info['address'] ?></td>
                        <td><?= $info['status'] ?></td>
                        
                        <td>
                             <a class="btn btn-primary btn-sm" id="bookNowBtn" data-toggle="modal" data-target="#bookNowModal">View Request Details</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <div class="container" style="margin-top: 100px;">
    <h2 class="text-center mb-4">Approved Reservation List</h2>
        <table class="table custom-table">
            <thead class="table-dark">
                <tr>
                    <th>Room Name</th>
                    <th>Check-In Date</th>
                    <th>Check-out Date</th>
                    <th>special Requests</th>
                    <th>Number of Adults</th>
                    <th>Number of Children</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $info) : ?>
                    <?php if ($info['status'] == 'Approved') : ?>
                    <tr>
                        <td><?= $info['roomName'] ?></td>
                        <td><?= $info['checkInDate'] ?></td>
                        <td><?= $info['checkOutDate'] ?></td>
                        <td><?= $info['specialRequests'] ?></td>
                        <td><?= $info['adults'] ?></td>
                        <td><?= $info['children'] ?></td>
                        <td><?= $info['name'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['phone'] ?></td>
                        <td><?= $info['address'] ?></td>
                        <td><?= $info['status'] ?></td>
                        
                       
                        <td>
                            <a class="btn btn-primary btn-sm" id="bookNowBtn" data-toggle="modal" data-target="#bookNowModal">View Request Details</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    
    <div class="container" style="margin-top: 100px;">
    <h2 class="text-center mb-4">Declined Reservation List</h2>
        <table class="table custom-table">
            <thead class="table-dark">
                <tr>
                    <th>Room Name</th>
                    <th>Check-In Date</th>
                    <th>Check-out Date</th>
                    <th>special Requests</th>
                    <th>Number of Adults</th>
                    <th>Number of Children</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $info) : ?>
                    <?php if ($info['status'] == 'Declined') : ?>
                    <tr>
                        <td><?= $info['roomName'] ?></td>
                        <td><?= $info['checkInDate'] ?></td>
                        <td><?= $info['checkOutDate'] ?></td>
                        <td><?= $info['specialRequests'] ?></td>
                        <td><?= $info['adults'] ?></td>
                        <td><?= $info['children'] ?></td>
                        <td><?= $info['name'] ?></td>
                        <td><?= $info['email'] ?></td>
                        <td><?= $info['phone'] ?></td>
                        <td><?= $info['address'] ?></td>
                        <td><?= $info['status'] ?></td>
                        
                       
                        <td>
                            <a class="btn btn-primary btn-sm" id="bookNowBtn" data-toggle="modal" data-target="#bookNowModal">View Request Details</a>
                        </td>
                    </tr>
                    <?php endif; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

 
<!-- process modal -->
<div class="modal fade" id="bookNowModal" tabindex="-1" role="dialog" aria-labelledby="bookNowModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookNowModalLabel">Booking Confirmation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
            <form action="http://localhost/lavalustverif/updatestat/<?= $info['id'] ?>" method="POST">

                <div class="mb-3">
                        <label for="roomName" class="form-label">Room Name</label>
                        <input name="roomName" type="text" class="form-control" id="roomName" readonly>
                    </div>

                    <div class="mb-3">
                        <label for="checkInDate" class="form-label">Check-In Date</label>
                        <input name="checkInDate"  type="text" class="form-control" id="checkInDate" readonly>
                    </div>
                    
                    <div class="mb-3">
                        <label for="checkOutDate" class="form-label">Check-Out Date</label>
                        <input name="checkOutDate"  type="text" class="form-control" id="checkOutDate" readonly>
                    </div>
                    <div class="form-group">
                        <label for="specialRequests">Special Requests:</label>
                        <textarea name="specialRequests" class="form-control" id="specialRequests" rows="3"readonly></textarea>
                    </div>

                    <a>Number of Guests </a>
                    <br>
                    <br>

                    <div class="form-group">
                        <label for="adults">Adults:</label>
                        <input name="adults" placeholder=" number of adults" type="number" class="form-control" id="adults" readonly>
                    </div>

                    <div class="form-group">
                        <label for="children">Children:</label>
                        <input name="children" placeholder=" number of children" type="number" class="form-control" id="children" readonly>
                    </div>

                    <a>Contact Information</a>
                    <br>
                    <br>

                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input name="name" placeholder="  name" type="text" class="form-control" id="name" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input name="email" placeholder="sample@email.com" type="email" class="form-control" id="email" readonly>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone Number:</label>
                        <input name="phone" placeholder="sample +639012371263" type="tel" class="form-control" id="phone" readonly>
                    </div>
                    <div class="form-group">
                        <label for="address">Address:</label>
                        <input name="address" placeholder=" address" type="text" class="form-control" id="address" readonly>
                    </div>

                    <div class="form-group">
        <label for="status">Status:</label>
        <input name="status" placeholder="status" type="text" class="form-control" id="status" readonly>
    </div>

    <div class="mt-4">
        <button type="submit" class="btn btn-success btn-lg" value="Submit" onclick="approveBooking()">Approve</button>
        <button type="submit" class="btn btn-danger btn-lg" value="Submit" onclick="declineBooking()">Decline</button>
    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

    <script src="public/js/jquery-3.3.1.min.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/jquery.nice-select.min.js"></script>
    <script src="public/js/jquery-ui.min.js"></script>
    <script src="public/js/jquery.slicknav.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script>
    $(document).ready(function() {
        $('.btn-primary').click(function() {
            // Get the row data related to the clicked button
            var rowData = $(this).closest('tr').find('td').map(function() {
                return $(this).text();
            }).get();

            // Populate the modal fields with the retrieved data
            $('#roomName').val(rowData[0]); // Check-In Date
            $('#checkInDate').val(rowData[1]); // Check-In Date
            $('#checkOutDate').val(rowData[2]); // Check-Out Date
            $('#specialRequests').val(rowData[3]); // Special Requests
            $('#adults').val(rowData[4]); // Number of Adults
            $('#children').val(rowData[5]); // Number of Children
            $('#name').val(rowData[6]); // Name
            $('#email').val(rowData[7]); // Email
            $('#phone').val(rowData[8]); // Phone
            $('#address').val(rowData[9]); // Address
            $('#status').val(rowData[10]); // Address

            // Show the modal
            $('#bookNowModal').modal('show');
        });
    });
</script>
</body>




</html>
