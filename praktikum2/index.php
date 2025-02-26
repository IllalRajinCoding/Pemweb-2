<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
    <style>
        .bootstrap-iso .formden_header h2,
        .bootstrap-iso .formden_header p,
        .bootstrap-iso form {
            font-family: Arial, Helvetica, sans-serif;
            color: black
        }

        .bootstrap-iso form button,
        .bootstrap-iso form button:hover {
            color: white !important;
        }

        .asteriskField {
            color: red;
        }
    </style>
</head>

<body>
    <form action="output.php" method="post">
        <!-- HTML Form (wrapped in a .bootstrap-iso div) -->
        <div class="bootstrap-iso">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <form method="post">
                            <div class="form-group ">
                                <label class="control-label " for="name">
                                    Name
                                </label>
                                <input class="form-control" id="name" name="name" type="text" />
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="tel">
                                    Telephone #
                                </label>
                                <input class="form-control" id="tel" name="tel" type="text" />
                            </div>
                            <div class="form-group ">
                                <label class="control-label " for="date">
                                    Date
                                </label>
                                <input class="form-control" id="date" name="date" placeholder="MM/DD/YYYY" type="text" />
                            </div>
                            <div class="form-group">
                                <div>
                                    <button class="btn btn-primary " name="submit" type="submit">
                                        Submit
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </form>
</body>

</html>