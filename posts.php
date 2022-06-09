<?php 
    include ('db.php');

    //$sql = "SELECT * FROM posts ORDER BY created_at DESC";
    $sql = "SELECT  p.author_id, p.title, p.body, p.created_at, a.first_name, a.last_name, a.id
    FROM posts as p INNER JOIN author as a
    ON p.author_id = a.id
    ORDER BY created_at DESC";

    $posts = fetch($sql, $connection,true);

    $sqlAuthor = "SELECT id, first_name, last_name, gender FROM author";
    $authors = fetch($sqlAuthor, $connection,true);

    if(isset($_GET['id'])) {

        $sqlSelectAuthor = "SELECT  p.author_id, p.title, p.body, p.created_at, a.first_name, a.last_name, a.id
        FROM posts as p INNER JOIN author as a
        ON p.author_id = a.id
        WHERE p.author_id = {$_GET['id']}
        ORDER BY created_at DESC";
        $posts = fetch($sqlSelectAuthor, $connection,true);
}
    //var_dump($posts);
?>

<div class="col-sm-8 blog-main">
    <div>
        <form class="post" action="create-post.php" method="POST" id="postsForma">
            <label for="author">Author</label>
            <select type="text" name="author"  id="post" placeholder="Select Author">
            <?php
                foreach($authors as $author) {
            ?>
            <option value="none" selected disabled hidden>All authors</option>
            <option class="<?php echo $author['id'] ?>" value="<?php echo $author['id'] ?>"> 
            <?php echo ($author['first_name']) . ' ' . ($author['last_name']) ?>
            </option>
            <?php
                }
            ?>
            </select>
        </form>
    </div>
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
