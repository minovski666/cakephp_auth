<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?= $this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">

                <?php if ($auth) { ?>
                <li><a target="_blank" href="https://book.cakephp.org/3.0/"><?php echo $auth['User']['email']; ?></a></li>
                <li>
                    <?php echo $this->Html->Link('Logout', ['controller' => 'Users', 'action' => 'logout']); ?>
                </li>
                <?php }else{ ?>
                <li>
                <?php echo $this->Html->Link('Login', ['controller' => 'Users', 'action' => 'login']); ?>
                </li>
                <li>
                <?php echo $this->Html->Link('Signup', ['controller' => 'Users', 'action' => 'signup']); ?>
                </li>
                <li>
                <?php echo $this->Html->Link('Forgot Password', ['controller' => 'Users', 'action' => 'forgotPassword']); ?>
            </li>
                <?php } ?>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?php
        if($auth){

            $currentViewDetails = strtolower($Inflector::singularize($this->name));



            if (isset($$currentViewDetails->user_id)) {
                $currentViewDetailsId = $$currentViewDetails->user_id;
            }
            
            

            if ($currentViewDetails == 'User') {
                $currentViewDetailsId = $$currentViewDetails->id;
            }

            $isUserAuthorized = false;
        if (isset($currentViewDetailsId) AND $$currentViewDetails->id == $auth['User']['id']) {
            $isUserAuthorized = true;
        }

        echo $this->element('sidemenus/side_menu_logged_in', ['viewName' => $Inflector::singularize($this->name), 'isUserAuthorized' => $isUserAuthorized]);
    }else{
        echo $this->element('sidemenus/side_menu');
    }
?>

        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
