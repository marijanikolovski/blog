<?php 

    $id = $_SESSION['post_id'];  

    $sql_commenst = "SELECT * FROM comments WHERE post_id = $id";
    $comments = fetch($sql_commenst, $connection, true);
?>

        <h4>Comments</h4>
        <ul>
            <?php
            foreach ($comments as $comment) {
            ?>
            <li>
                <span>Posted by: <?php echo ($comment['author']) ?></span>
                <div>
                <?php echo ($comment['text']) ?>
                </div>
                 <hr>
            </li>
            <!-- /.comment-post -->
            <?php
            }
            ?>
        </ul>