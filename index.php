<?php include('public/translations.php'); $lang = $_GET['lang']; ?>
<!Doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="FatApp - web development">
        <meta name="keywords"    content="fat, app, fatapp, web, dev, development">

        <title><?php if(!empty($_GET['title'])){ echo $_GET['title']; } ?></title>
    </head>
    <body>
        <header id="upper-banner">
            FATAPP
        </header>
        <nav id="main-nav">
            <a href="index.php?template=team&title=<?php echo $translations[$lang]['fatAppTeam']; ?>&lang=<?php echo $lang; ?>" title="<?php echo $translations[$lang]['meetOurTeam']; ?>!">
                <nav class="main-nav-tile">
                    <?php echo $translations[$lang]['team']; ?>
                </nav>
            </a>
            <a href="index.php?template=projects&title=<?php echo $translations[$lang]['ourProjects']; ?>&lang=<?php echo $lang; ?>" title="<?php echo $translations[$lang]['checkOurProjects']; ?>!">
                <nav class="main-nav-tile">
                    <?php echo $translations[$lang]['projects']; ?>
                </nav>
            </a>
            <a href="index.php?template=contact&title=<?php echo $translations[$lang]['contact']; ?>&lang=<?php echo $lang; ?>" title="<?php echo $translations[$lang]['contactUs']; ?>">
                <nav class="main-nav-tile">
                    <?php echo $translations[$lang]['contact']; ?>
                </nav>
            </a>
            <a href="index.php?template=login&title=<?php echo $translations[$lang]['login']; ?>&lang=<?php echo $lang; ?>" title="<?php echo $translations[$lang]['login']; ?>">
                <nav class="main-nav-tile">
                    <?php echo $translations[$lang]['login']; ?>
                </nav>
            </a>
            <a href="index.php?template=admin&title=<?php echo $translations[$lang]['adminPanel']; ?>&lang=<?php echo $lang; ?>" title="<?php echo $translations[$lang]['adminEnterAlert']; ?>)">
                <nav class="main-nav-tile">
                    <?php echo $translations[$lang]['admin']; ?>
                </nav>
            </a>
        </nav>
<?php
        $template = $_GET['template'];
        include_once('templates/' . $template . '.html.php');
?>
    </body>
</html>
