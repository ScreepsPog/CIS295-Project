<!DOCTYPE html>
<html lang="en">
    <head>
        <?php $pagetitle = '404 Error Page'; $description = '404 Error Page. Page inaccessible'; include 'inc/head-info.inc'; ?>
        <link rel="stylesheet" href="styles/404error.css">
    </head>
    <body>
        <div id="top" class="bodyContainer">
            <?php include 'inc/header.inc'; ?>
            <div class="errorImageContainer">
                <img src="images/error.svg" alt="A photo of a robot displaying a 404 Error">
            </div>
            <div class="messageContainer">
                <h1>Uh Oh!</h1>
                <p>The page you may be looking for may have moved or no longer exists.<br><br>Try retyping the URL, or use the navigation above to get back to the main site!</p>
            </div>
            <div class="divider"></div>
            <?php include 'inc/footer.inc'; ?>
        </div>
    </body>
</html>