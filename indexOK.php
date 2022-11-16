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
    ?>
    <!-- SLIDER starts here -->

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://source.unsplash.com/1280x360/?computer,club" class="d-block w-100" alt="tech image">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1280x360/?technology,coding" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://source.unsplash.com/1280x360/?tech,apple." class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- SLIDER ends here -->

    <!-- Category container starts here -->
    <div class="container my-4">
        <h2 class="text-center">techTalk - browse categories!</h2>

        <div class="row">
            <!-- //Using a for loop to iterate through categories -->
            <!-- fetch all categories -->

            <?php
            $sql = "SELECT * FROM `categories`";
            $fireq = mysqli_query($con, $sql);
            while ($row = mysqli_fetch_assoc($fireq)) {
                $catid = $row['category_id'];
                $catName = $row['category_name'];
                $desc = substr($row['category_description'], 0, 40);
                echo '<div class="col-md-4">
                            <div class="card my-2" style="width: 18rem;">
                                <!-- https://source.unsplash.com/360x360/?nature,water -->
                                <img src="https://source.unsplash.com/720x480/?code,' . $catName . '" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><a href="thread_list.php?category_id=' . $catid . '">' . $catName . '</a></h5>
                                    <p class="card-text" maxlength="30">' . $desc . '...</p>
                                    <a href="thread_list.php?category_id=' . $catid . '" class="btn btn-success">Explore the threads</a>
                                </div>
                            </div>
                        </div>
                        ';
            }
            ?>
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