<!DOCTYPE html>
<html>
    <head>
	<link rel="stylesheet" type="text/css" href="wiki.css">
        <meta charset="utf-8">
        <title>Wiki</title>
    </head>
    <body>
	<?php

if (file_exists('wiki.txt')) {
    $content = file_get_contents('wiki.txt');
} else {
    $content = '(no content)';
}
if (isset($_GET['content'])) {
    $content = $_GET['content'];
    file_put_contents('wiki.txt', $content);
}
$safe_content = htmlentities($content);
?>
<div id="content">
    <?php echo $safe_content; ?>
</div>
<form class="hidden" action="wiki.php">
$('#content').click(function() {
    $('form').removeClass('hidden');
    $('#content').addClass('hidden');
});
    <textarea name="content" rows="8" cols="80"><?php

echo $safe_content;

?></textarea>
    <input type="submit" value="Save">
</form>
</body>
</html>