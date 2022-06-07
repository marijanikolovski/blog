<?php 

    $id = $_SESSION['post_id'];  

    //$sql_commenst = "SELECT * FROM comments WHERE post_id = $id";
    $sql_commenst = "SELECT c.id, c.text, a.first_name, a.last_name
        FROM comments as c INNER JOIN author as a
        ON c.author_id = a.id
        WHERE c.post_id = $id";
    $comments = fetch($sql_commenst, $connection, true);
?>

        <h4>Comments</h4>
        <ul>
            <?php
            foreach ($comments as $comment) {
            ?>
            <li>
                <span>Posted by: <?php echo ($comment['first_name']) . ' ' . ($comment['last_name']) ?></span>
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