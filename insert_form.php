<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div style="margin-top: 2%;">
            <h1 style="text-align: center;">Civil Aviation Form</h1>
        </div><br>
        <div>
            <form method="post">
                <h4>Personal Information</h4>
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
                        <input type="text" class="form-control" id="first_name" name="first_name" required placeholder="e.g. Samreen">
                    </div>
                    <div class="form-group col-md-5">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name" required placeholder="e.g. Karim">
                    </div>
                </div>
                <div class="form-group mx-2">
                    <fieldset class="form-group">
                        <div class="row">
                            <legend class="col-form-label col-sm-2 pt-0">Select Gender</legend>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" required name="gender" id="male" value="Male"
                                        checked>
                                    <label class="form-check-label" for="male">
                                        Male
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" required type="radio" name="gender" id="female"
                                        value="Female">
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
                    <input type="text" class="form-control" required name="address" id="address" placeholder="e.g. 1234 Main St">
                </div>
                <div class="form-group">
                    <label for="address2">Address 2</label>
                    <input type="text" class="form-control" required id="address2" name="address2"
                        placeholder="e.g. Apartment, studio, or floor">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" required id="city" name="city" placeholder="e.g. Islamabad">
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
                        <input type="text" required class="form-control" id="zip" name="zip" placeholder="e.g. 8000">
                    </div>
                </div>
                <div class="form-group">
                    <label for="textarea">About Yourself</label>
                    <textarea class="form-control" required id="textarea" rows="3" placeholder="e.g. Designer"
                        name="textarea"></textarea>
                </div>
                <input type="submit" name="submit" class="btn btn-primary col-md-2 col-md-offset-10" value="Submit Application" />
            </form>
        </div><br>

    </div>
</body>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>


</html>