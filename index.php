<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">




    <!-- Start Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- End Bootstrap CSS -->
    <title>Document</title>
</head>

<body>

    <div class="container">
        <form class="my-5" method="POST" action="">




            <div class="form-group mb-5">
                <input type="text" id="name" placeholder="name" class="form-control">
            </div>
            <div class="form-group mb-5">
                <input type="text" id="description" placeholder="description" class="form-control">
            </div>


            <button type="button" id="btnSubmit" class="btn btn-primary">Submit</button>


        </form>

        <div id="suc" class="text-success mt-3"></div>

    </div>



    <!-- Include jQuery -->
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    <script>
        $(document).ready(function() {
            $("#btnSubmit").click(function() {


                let name = $("#name").val();
                let description = $("#description").val();

                $.ajax({
                    method: "POST",
                    url: "./create.php",
                    data: {
                        name: name,
                        description: description
                    },
                    success: function(d, s, x) {

                        console.log(d)
                        $("#suc").html(d);

                        setTimeout(function() {
                            $("#suc").addClass("d-none");
                        }, 3000);
                    },
                    error: function(error) {

                    }
                });


            });
        });
    </script>


</body>

</html>