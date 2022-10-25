<?php include_once "./include/init.php"; ?>
<?php

if (!isset($DATABASE)) show_message("DATABASE NULL");

$statement = $DATABASE->prepare("
	SELECT
		*
	FROM
		theater
");
$statement->execute();

$theaters = $statement->fetchAll(PDO::FETCH_ASSOC);

?>
    <div>
        <?php for ($index = 0; $index < count($theaters); $index++) { ?>

        <?php } ?>
    </div>
<?php include_once "./include/footer.php"; ?>