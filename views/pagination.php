<div class="pagination">
    <ul>
        <!-- Establecemos el nro de paginas -->
        <?php

        require '../models/post_model.php';
        require '../functions.php';
        
        $post = new PostModel();
       
        $number_pages = $post->number_pages(5, $conexion);

        if (current_page() === 1) {
            echo '<li class="disabled">&laquo;</li>';
        } else {
            echo '<li>';
            echo "<a href='controllers/post_controller.php?p=" . current_page() - 1 . "'>&laquo;</a>";
            echo '</li>';
        }

        for ($i = 1; $i <= $number_pages; $i++) {
            if (current_page() === $i) {
                echo '<li class="active">' . $i . '</li>';
            } else {
                echo '<li>';
                echo "<a href='controllers/post_controller.php?p=" . $i . "'>" . $i . "</a>";
                echo '</li>';
            }
        }

        if (current_page() === $number_pages) {
            echo '<li class="disabled">&raquo;</li>';
        } else {
            echo '<li>';
            echo "<a href='controllers/post_controller.php?p=" . current_page() + 1 . "'>&raquo;</a>";
            echo '</li>';
        }
        ?>
    </ul>
</div>