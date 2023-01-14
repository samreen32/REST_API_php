<!DOCTYPE html>
<html>

<head>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <title>Civil Aviation Form- Read</title>

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

        <!-- Modal Login-->
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="exampleModalLongTitle">Edit Record</h4>
                        <button type="button" class="close" data-dismiss="modal">x</button>
                    </div>

                    <div class="modal-body">
                        <form method="post" name="form_edit" id="form_edit">
                            <div class="form-row">
                                <div class="form-group col-md-2">
                                    <label class="my-1 mr-2" for="title">Title</label>
                                    <select class="form-control" id="title" name="title">
                                        <option selected>Choose...</option>
                                        <option value="Mr.">Mr.</option>
                                        <option value="Miss">Miss</option>
                                        <option value="Mrs">Mrs</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-5">
                                    <label for="first_name">First Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" required
                                        placeholder="e.g. Samreen">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="last_name">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" required
                                        placeholder="e.g. Karim">
                                </div>
                            </div>
                            <div class="form-group mx-2">
                                <fieldset class="form-group">
                                    <div class="row">
                                        <legend class="col-form-label col-sm-2 pt-0">Select Gender</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" required name="gender"
                                                    id="male" value="Male" checked>
                                                <label class="form-check-label" for="male">
                                                    Male
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" required type="radio" name="gender"
                                                    id="female" value="Female">
                                                <label class="form-check-label" for="female">
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" required name="address" id="address"
                                    placeholder="e.g. 1234 Main St">
                            </div>
                            <div class="form-group">
                                <label for="address2">Address 2</label>
                                <input type="text" class="form-control" required id="address2" name="address2"
                                    placeholder="e.g. Apartment, studio, or floor">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input type="text" class="form-control" required id="city" name="city"
                                        placeholder="e.g. Islamabad">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="state">State</label>
                                    <select id="state" class="form-control" name="state">
                                        <option selected>Choose...</option>
                                        <option>Pakistan</option>
                                        <option>Turkey</option>
                                        <option>Korea</option>
                                        <option>Nepal</option>
                                        <option>USA</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-2">
                                    <label for="zip">Zip</label>
                                    <input type="text" required class="form-control" id="zip" name="zip"
                                        placeholder="e.g. 8000">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="textarea">About Yourself</label>
                                <textarea class="form-control" required id="textarea" rows="3"
                                    placeholder="e.g. Designer" name="textarea"></textarea>
                            </div>

                            <div style="align-items: right;">
                                <a type="button" class="btn btn-secondary" data-dismiss="modal"
                                    style="color:white">Cancel</a>
                                <button type="submit" class="btn btn-success" name="btn_update">Update Record</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>

<script src="jquery.js"></script>
<script>
$(document).ready(function() {

    /***** 1st Route.....View All Records ******/
    function viewData() {
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
                            "<a class='btn btn-primary col-md-12 edit-btn' data-toggle='modal' data-target='#modal' style='color: white' data-eid='" +
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
    viewData();


    /****** 2nd Route....Fetch User Record For Updating ******/
    $(document).on("click", ".edit-btn", function() {
        var id = $(this).data("eid");
        var obj = {id: id};
        var convertJson = JSON.stringify(obj);
        //console.log(convertJson);
        $.ajax({
            url: "http://localhost/MyWork/API_Task/fetch_singleRecord.php",
            type: "POST",
            data: convertJson,
            success: function(data) {
                $("#id").val(data[0].id);
                $("#title").val(data[0].title);
                $("#first_name").val(data[0].first_name);
                $("#last_name").val(data[0].last_name);
                $("#gender").val(data[0].gender);
                $("#address").val(data[0].address);
                $("#address2").val(data[0].address2);
                $("#city").val(data[0].city);
                $("#state").val(data[0].state);
                $("#zip").val(data[0].zip);
                $("#textarea").val(data[0].textarea);
                //console.log(data);
            }
        });
    });
});
</script>

</html>