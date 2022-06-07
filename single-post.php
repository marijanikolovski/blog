<?php
    include ('db.php');

    session_start();

    if (isset($_GET['post_id'])) {
        //$sql = "SELECT * FROM posts WHERE id = {$_GET['post_id']}";
        $sql = "SELECT p.id, p.title, p.body, p.created_at, a.first_name, a.last_name
        FROM posts as p INNER JOIN author as a
        ON p.author_id = a.id
        WHERE p.id = {$_GET['post_id']}";

        $post =fetch($sql, $connection);
    }

    $id = $post['id'];             
    $_SESSION['post_id'] =  $id;        

    //var_dump($post);
    //var_dump($id);
?>

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
                            <h2 class="blog-post-title"><?php echo $post['title'] ?></h2>
                            <p class="blog-post-meta"><?php echo $post['created_at'] ?> by <a href="#"><?php echo ($post['first_name']) . ' ' . ($post['last_name'])  ?></a></p>
                            <p><?php echo $post['body'] ?></p>
                        </div><!-- /.blog-post -->
                    <?php include ('comments.php') ?>
                </div><!-- /.blog-main -->
                <?php include ('sidebar.php') ?>
            </div><!-- /.row -->
        </main><!-- /.container -->
    <?php include('footer.php')?>
</body>
</html>
