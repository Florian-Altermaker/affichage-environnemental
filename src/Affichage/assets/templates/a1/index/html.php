<div class="affichage-html a1-index">

    <div class="label">

        <div><?php $planetSize = $this->labelHeight*0.7; include(dirname(__FILE__).'/../../../planet-svg.php'); ?></div>

        <div class="score"><?= $this->scoreIndex ?></div>

    </div> <!-- .label -->

    <div class="mention"><?= self::OFFICIAL_MENTION ?></div>
    
</div><!-- .affichage-html .a1-index -->