<?php

function show_message($message, $redirect = null): never {

    $output = ob_get_clean();

    ?>
        <!doctype html>
        <html lang="ko">
        <head>
            <meta charset="UTF-8">
            <title>ERROR</title>
            <script>
                window.alert("<?= $message ?>");
                <?= $redirect ? "window.location.replace(\"${$redirect}\");" : "window.history.back();" ?>
            </script>
        </head>
        <body>
            <?= $output ?>
        </body>
        </html>
    <?php

    exit;

}