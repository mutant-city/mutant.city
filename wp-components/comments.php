<?php
if (comments_open() || '0' != get_comments_number()) {
    comments_template();
}
?>
