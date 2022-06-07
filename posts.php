<?php 
    include ('db.php');

    //$sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $sql = "SELECT p.id, p.title, p.body, p.created_at, a.first_name, a.last_name
    FROM posts as p INNER JOIN author as a
    ON p.author_id = a.id
    ORDER BY created_at DESC";

    $posts = fetch($sql, $connection,true);

    //var_dump($posts);
?>

<div class="col-sm-8 blog-main">

<?php
    foreach ($posts as $post) {

?>

<div class="blog-post">
    <h2 class="blog-post-title"><a href="single-post.php?post_id=<?php echo($post['id']) ?>"><?php echo $post['title'] ?></a></h2>
    <p class="blog-post-meta"><?php echo $post['created_at'] ?> by <a href="#"><?php echo ($post['first_name']) . ' ' . ($post['last_name'])  ?></a></p>

    <p><?php echo $post['body'] ?></p>
</div><!-- /.blog-post -->

<?php
    }
?>

<nav class="blog-pagination">
    <a class="btn btn-outline-primary" href="#">Older</a>
    <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
</nav>

</div><!-- /.blog-main -->
