<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <?php echo $this->Html->charset(); ?>
            <title>
                IMS - Inventory Management System
            </title>
            <?php
            echo $this->Html->meta('icon');

            echo $this->fetch('meta');

            echo $this->Html->css('bootstrap.min');
            echo $this->Html->css('bootstrap-responsive.min');
            echo $this->Html->css('core');

            echo $this->fetch('css');

            echo $this->Html->script('libs/jquery');
            echo $this->Html->script('libs/bootstrap.min.js');
            echo $this->fetch('script');
            ?>
        </meta>
    </head>

    <body>

        <div id="main-container">

            
            <div id="header" class="container">
                <?php echo $this->element('menu/top_menu'); ?>
            </div><!-- #header .container -->

            <div id="content" class="container">


                <?php echo $this->fetch('content'); ?>
            </div><!-- #header .container -->

        </div><!-- #main-container -->

        <div id="footer" class="container">
            <div class="well">
                <small>
                    <p class="text-center"><strong>All Rights Reserved By 2013 Liquid Infusion - Mobile Bar Hire Melbourne, Cocktail Party Catering Melbourne - Beverage Catering</strong></p>
                    <?php /* echo $this->element('sql_dump'); */ ?>
                </small>
            </div>
        </div><!-- .container -->

    </body>

</html>