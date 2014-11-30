<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'Sistema SIM');
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>
<html>
    <head>
        
            <?php echo $this->Html->charset(); ?>
            <title>
                    <?php echo $cakeDescription ?>:
                    <?php echo $this->fetch('title'); ?>
            </title>
            <?php

                    echo $this->fetch('meta');
                    echo $this->fetch('css');
                    echo $this->fetch('script');
                    
            ?>
        <link rel="shortcut icon" type="image/x-icon" href="/sim/favicon.ico">
        <link href="/sim/css/style.css" type="text/css" rel="stylesheet">
        
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
        
        <script src="/sim/js/jquery-1.10.2.min.js" type="text/javascript"></script>
        <script src="/sim/js/jquery-1.2.6.pack.js" type="text/javascript"></script>
        <script src="/sim/js/jquery.maskedinput-1.1.4.pack.js" type="text/javascript"></script>
        
       
    </head>
    <body>
       
       <header> </header>
       
        <div id="content">
            <?php echo $this->fetch('content'); ?>        
        </div>
       
    </body>
</html>
