<div class="affichage-html">

    <div class="range">

        <div><?php include_once('planet-svg.php') ?></div>

        <?php foreach (self::LETTERS as $letter): ?>

            <div class="letter<?php if ($letter == $this->scoreLetter): ?> score<?php endif; ?>">
                
                <?= $letter ?>

            </div><!-- .letter -->

        <?php endforeach; ?>

    </div><!-- .range -->
    
</div><!-- .affichage-html -->

<style>
    @font-face {
        font-family: 'Roboto';
        src: url('assets/css/Roboto-Medium.ttf') format('truetype');
    }

    .affichage-html {
        min-height: <?= $height ?>px;
        height: <?= $height ?>px;
        max-height: <?= $height ?>px;
        min-width: <?= $height*2.8 ?>px;
        width: <?= $height*2.8 ?>px;
        max-width: <?= $height*2.8 ?>px;
        overflow: hidden;
    }

    .affichage-html::after {
        content: '';
        display: inline-block;
        background-color: #106192;
        width: <?= $height*2.8*0.94 ?>px;
        height: <?= $height*0.59 ?>px;
        border-radius: <?= $height/6 ?>px;
        position: relative;
        bottom: <?= $height*0.532 ?>px;
    }

    .affichage-html .range {
        display: flex;
        flex-direction: row;
        height: <?= $height*0.94 ?>px;
        position: relative;
        z-index: 1;
        padding-left: <?= $height*0.12 ?>px;
        align-items: flex-end;
    }

    .affichage-html .range div:first-of-type {
        margin-right: <?= $height/40 ?>px;
    }
    
    .affichage-html .range .letter {
        padding: <?= $height/20 ?>px <?= $height/26 ?>px;
        background-color: white;
        color: #106192;
        border: <?= $height/60 ?>px #106192 solid;
        border-radius: <?= $height/18 ?>px;
        font-family: 'Roboto', arial, sans-serif;
        font-weight: bold;
        font-size: <?= $height*0.27 ?>px;
        line-height: 1em;
    }

    .affichage-html .range .score {
        font-size: <?= $height*0.6 ?>px;
        padding: 0px <?= $height/25 ?>px;
        border-radius: <?= $height/15 ?>px;
    }
</style>