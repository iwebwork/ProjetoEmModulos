<html>
    <header>
        <title>Meu site</title>
        <link rel="stylesheet" type="text/css" href="<?php echo BASE_URL;?>assets/css/style.css"/>
        <script type="text/javascript" src="<?php echo BASE_URL;?>assets/js/style.js"></script>
    </header>
    <body onload="alert()">
        
        <?php $this->loadViewInTemplateOne($viewName, $viewData);?>
    </body>
</html>