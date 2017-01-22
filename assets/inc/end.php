<?php
/**
 * end.php
 *
 * Author: Patrick McGranaghan
 *
 * Ending HTML for web pages. Includes the following:
 * + HTML [END]
 * + Body [END]
 */
?>      
        <?php 

            echo '<input type="text" value="' . (checkSetup() ? 'true' : 'false') . '" id="accountInfo" hidden>';
        ?>
        </div>
        <!-- END Page Container div -->
    </body>

</html>