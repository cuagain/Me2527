<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $title_for_layout; ?>
        </title>
        <?php


            echo $this->fetch('meta');
            echo $this->fetch('css');
            echo $this->fetch('script');
            echo $this->Html->script('jquery-1.9.1.min.js');
            echo $this->Html->script('jquery-migrate-1.1.1.min.js');
        ?>
        <link rel="stylesheet" type="text/css" href="/bootstrap/css/bootstrap.css">
        <?php
            echo $this->Html->css('login');
        ?>

    </head>
    <body>
        <div id="container">
            <?php echo $this->fetch('content'); ?>
        </div>
        <script type="text/javascript" src="/bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
