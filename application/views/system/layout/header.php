<!DOCTYPE HTML>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title> <?php echo $title; ?></title>
    </head>
    <body>
        <div id="wrapper">
            <header>
                <h1> Admin </h1>
                
                <section>
                    <p> Logged in as: <?php echo $user; ?></p>
                </section>
            </header>
            
            <aside>
                <ul>
                    <?php foreach ($links as $label => $link): ?>
                        <li><a href="<?php echo $link; ?>"> <?php echo $label; ?> </a></li>
                    <?php endforeach; ?>
                </ul>
            </aside>