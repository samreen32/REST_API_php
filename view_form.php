<!DOCTYPE html>
<html>

<head>
    <title>Civil Aviation Form- Read</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


</head>

<body>

    <div class="container">
        <div class="row">
            <table class="table">
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Address 2</th>
                    <th>City</th>
                    <th>State</th>
                    <th>Zip</th>
                    <th>About Yourself</th>
                    <th>Extra Operations</th>
                </tr>

                <tbody id="load-data"></tbody>

            </table>
        </div>
    </div>
</body>


<script src="jquery.js"></script>
<script>
$(document).ready(function() {
    function loadTable() {
        $.ajax({
            url: "http://localhost/MyWork/API_Task/view_api.php",
            type: "GET",
            success: function(data) {
                //console.log(data);
                if (data.status == false) {
                    $("#load-data").append("<tr><td colspan = '10'><h2>" + data.message +
                        "</h2></td></tr>"); //incase no row found
                } else {
                    $.each(data, function(key, value) {
                        $("#load-data").append("<tr>" +
                            "<td>" + value.id + "</td>" +
                            "<td>" + value.title + "</td>" +
                            "<td>" + value.first_name + "</td>" +
                            "<td>" + value.last_name + "</td>" +
                            "<td>" + value.gender + "</td>" +
                            "<td>" + value.address + "</td>" +
                            "<td>" + value.address2 + "</td>" +
                            "<td>" + value.city + "</td>" +
                            "<td>" + value.state + "</td>" +
                            "<td>" + value.zip + "</td>" +
                            "<td>" + value.textarea + "</td>" +
                            "<td>" +
                            "<a class='btn btn-primary col-md-12 edit-btn' style='color: white' data-eid='" +
                            value.id + "'>Edit Record</a>&nbsp;" +
                            "<a class='btn btn-danger col-md-12 delete-btn' style='color: white' data-id='" +
                            value.id + "'>Delete Record</a>" +
                            "</td>" +
                            "</tr>");

                    });
                }
            }
        });
    }
    loadTable();
});
</script>

</html>