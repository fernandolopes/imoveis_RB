<?php defined('SYSPATH') or die('No direct script access.'); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <script type="text/javascript" src="<?php echo url::base(); ?>js/jquery-1.7.js"></script>
        <script type="text/javascript" src="<?php echo url::base(); ?>js/jquery.meio.mask.js" ></script>
        <link type="text/css" href="<?php echo url::base(); ?>css/template.css" rel="stylesheet" media="screen" />
    </head>
    <body>
        <div style="text-align: center; float: left; position: absolute; height: 100%">
            <div style="float: left; width: 1024px; position: absolute; height: 100%; text-align: left;">
                <div style="float: left; width: 1024px; background-color: #090; height: 100px; border-bottom: 1px solid;">
                    Cabeçário
                </div>
                
                <div style="float: left; width: 1024px; height: 82%">
                    <?php echo $body; ?>
                </div>    
                
                <div style="float: left; text-align: center; bottom: 0; height: 20px; background-color: silver; border-top: 1px solid; position: absolute; width: 100%">
                    Todos os direitos reservados - 2011
                </div>
            </div>    
        </div>
    </body>
</html>