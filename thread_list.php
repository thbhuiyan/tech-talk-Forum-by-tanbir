<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Welcome to Tech-talk Discussion Forums</title>
</head>

<body>
    <?php
    include 'partials/_header.php';
    include 'partials/_db.php';
    $id = $_GET['category_id'];
    $sql = "Select * from categories where category_id = $id ";
    $fireq = mysqli_query($connect, $sql);

    while ($row = mysqli_fetch_assoc($fireq)) {
        $catName = $row['category_name'];
        $catDesc = $row['category_description'];
    }
    ?>

    <!-- Category container starts here -->
    <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4">Welcome to <?php echo $catName ?> Forums!</h1>
            <p class="lead"> <?php echo $catDesc ?> </p>
            <hr class="my-4">
            <p>This is a peer to peer forum for sharing knowledge with each other and to share experiences and build
                common
                responses.
                So, Keep it friendly.
                Be courteous and respectful. Appreciate that others may have an opinion different from yours.
                Stay on topic. Self promote is not allowed in the forum.
                Share your knowledge.
                Refrain from demeaning, discriminatory, or harassing behavior and speech.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
    <div class="container">
        <h1 class="py-2">Browse Questions</h1>
        <div class="media my-3">
            <img src="images/user.png" width="36px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Unable to install pyCharm!</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <div class="media my-3">
            <img src="images/user.png" width="36px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Unable to install pyCharm!</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
        <div class="media my-3">
            <img src="images/user.png" width="36px" class="mr-3" alt="...">
            <div class="media-body">
                <h5 class="mt-0">Unable to install pyCharm!</h5>
                Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus
                odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate
                fringilla. Donec lacinia congue felis in faucibus.
            </div>
        </div>
    </div>

    <?php
    include 'partials/_footer.php';
    ?>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
</body>

</html>