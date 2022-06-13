<?php
    include ('db.php');

    if(isset($_POST['submit'])) {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $author = $_POST['author'];
        if(empty($title) || empty($body) || empty($author)) {
            $errMessage = 'All fields are not filled';
        } else {
            $currentDate = date("Y-m-d h:i");
            $sql = "INSERT INTO posts (
                title, body, author_id, created_at)
                VALUES ('$title', '$body', '$author', '$currentDate')";
             $statement = $connection->prepare($sql);
             $statement->execute();
             header("Location: home.php");
             echo ("Upisi u bazu");
        }
    }

    $sqlAuthor = "SELECT id, first_name, last_name, gender FROM author";
    $authors = fetch($sqlAuthor, $connection,true);

    //var_dump($authors);
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
                    <h2>Create new post</h2>
                    <form class="post" action="create-post.php" method="POST" id="postsForma">
                            <div>
                                <p><?php
                                        if (isset($errMessage)) {
                                        echo $errMessage;
                                        } ?></p>
                                <label for="author">Author</label>
                                <select type="text" name="author" class="<?php echo $author['gender']?>" placeholder="Select Author">
                                    <?php 
                                        foreach($authors as $author) {
                                        ?>
                                        <option class="<?php echo $author['gender']?>" 
                                            value="<?php echo $author['id'] ?>"><?php
                                                echo ($author['first_name']) . ' ' . ($author['last_name']) ?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div>
                                <label for="title">Title</label>
                                <input name="title" placeholder="Enter title"  id="title">
                            </div>
                            <div>
                                <label for="body">Content</label>
                                <textarea name="body" placeholder="Enter body" rows="10" id="bodyPosts"></textarea><br>
                            </div>
                            <div>
                                <button class="btn-add-post" type="submit" name="submit">Add post</button>
                            </div>
                    </form>
                </div><!-- /.blog-post -->
            </div><!-- /.row -->
            <?php include ('sidebar.php') ?>
        </div><!-- /.blog-main -->
    </main><!-- /.container -->
    <?php include('footer.php')?>
</body>
</html>