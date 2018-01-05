<?php
if (post_password_required()) {
    return;
}
?>

<div class="comments">

    <?php
    // You can start editing here -- including this comment!
    if (have_comments()) :
        ?>
        <h2 class="comments__title">
            <?php
            $comments_number = get_comments_number();
            $title = get_the_title();
            if ('1' === $comments_number):
                /* translators: %s: post title */
                printf('Eine Antwort zu &ldquo;%s&rdquo;', $title);
            else :
                printf('%1$s Antworten zu &ldquo;%2$s&rdquo;', $comments_number, $title);
            endif;
            ?>
        </h2>

        <ol class="comments__list">
            <?php
            wp_list_comments(
                array(
                    'avatar_size' => 100,
                    'style' => 'ol',
                    'short_ping' => true,
                )
            );
            ?>
        </ol>

        <?php
        the_comments_pagination();
    endif; // Check for have_comments().
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if (!comments_open() && get_comments_number() && post_type_supports(get_post_type(), 'comments')) :
        ?>

        <p class="comments__closed">Kommentare sind geschlossen</p>
    <?php
    endif;
    comment_form();
    ?>

</div>
