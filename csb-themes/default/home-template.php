<?php
/**
 * Created by PhpStorm.
 * User: starstryder
 * Date: 6/4/19
 * Time: 1:18 PM
 */

/** Get the setup files for the app dynamically TODO make this a function */
require_once ($BASE_DIR . "/csb-apps/Bennu/bennu-template.php");
$lang = $BASE_DIR . "csb-apps/Bennu/lang/bennu.en.json";

$lang = file_get_contents($lang);
$lang = json_decode($lang, true);

?>

<div id="main">
    <div class="container">

        <!-- Left block -----------------------------------------------------------------!>
        <div id="app-left" class="left">
            <?php $txt = $lang['app_page']['text-boxes']['app-left']; ?>
            <h2><?php echo $txt['title']; ?></h2>
            <p> <?php echo $txt['fact1-title']; ?><br/>
                <?php echo $txt['fact1-content']; ?></p>
            <p> <?php echo $txt['fact2-title']; ?><br/>
                <?php echo $txt['fact2-content']; ?></p>
            <p> <?php echo $txt['fact3-title']; ?><br/>
                <?php echo $txt['fact3-content']; ?></p>
            <p> <?php echo $txt['completed']; ?><br/>
                 #####</p>
            <p><?php echo $txt['remaining']; ?><br/>
                 #####</p>
            <p><?php echo $txt['dueDate']; ?><br/>
               <?php echo $txt['dueDateValue'];?></p>
            <img class="app-spacecraft" src="<?php echo $BASE_URL.'csb-apps/Bennu/images/ORex-Transparent.png';?>">
        </div>

        <!-- main block -----------------------------------------------------------------!>
        <div id="app-main" class="left">
                <?php

                if ( $user === FALSE) {         // NOT LOGGED IN
                    ?><H3>Welcome!</H3>
                        <div class="center">
                            <a id="alert-botton-home" class="btn-default" href="#">Login</a>
                        </div>
                    <?php
                }
                else {                           // LOGGED IN
                ?><H3>Hello, <?php echo $user['name'];?> !</H3>
                        <div class="center">
                            <a class="btn-default" href="<?php echo $ADMIN_URL;?>profile.php">Profile</a>
                        </div>
        <?php
                }
                ?>


            <p> Bennu Mappers Phase 1 is over, but we're not done!</p>
            <p> You made more than 10 million rock measurements and
                mapped the potential landing sites for the OSIRIS-REx
                spacecraft. Phase 2 is coming for Hero Markers
                (you know who you are). </p>
            <p> We're developing cool extras for all of you. Stay tuned!</p>
        </div>

        <!-- Right block ----------------------------------------------------------------!>
        <?php $txt = $lang['app_page']['text-boxes']['app-right']; ?>
        <div id="app-right" class="right">
        <h1><?php echo $txt['title'];?></h1>
            <p><?php echo $txt['blurb'];?></p>
            <p><?php echo $txt['footer'];?></p>
            <input type="button" value="Discord"><input type="button" value="Twitch"><br/>
           <!-- <iframe src="https://titanembeds.com/embed/443490369443856384" height="245" width="350" frameborder="0"></iframe> -->
        </div>
        <div class="clear"></div>
    </div>
</div>