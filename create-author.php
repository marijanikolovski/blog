<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Vivify Blog</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="styles/blog.css" rel="stylesheet">
    <link href="styles/styles.css" rel="stylesheet">
</head>

<body>
    <?php include ('header.php')?>
    <main role="main" class="container">
        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <h2>Create new author</h2>
                        <form method="POST" action="create-author.php">
                        <div>
                            <label>First Name</label>
                            <input type="text" name="first_name">
                        </div>
                        <div>
                            <label>Last Name</label>
                            <input  type="text" name="last_name">
                        </div>
                        <div>
                            <label for="male">Male</label>
                            <input name="gender"  type="radio">
                        </div>
                        <div>
                            <label for="female">Female</label>
                            <input name="gender" type="radio">
                        </div>
                        <button>Create Author</button>
                    </form>
                </div><!-- /.blog-post -->
            </div><!-- /.row -->
            <?php include ('sidebar.php') ?>
        </div><!-- /.blog-main -->
    </main><!-- /.container -->
    <?php include('footer.php')?>
</body>
</html>