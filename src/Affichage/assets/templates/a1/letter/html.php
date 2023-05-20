<div class="affichage-html a1-letter">

    <div class="label">

        <div><?php $planetSize = $this->labelHeight*0.83; include(dirname(__FILE__).'/../../../planet-svg.php'); ?></div>

        <div class="score"><?= $this->scoreLetter ?></div>

    </div> <!-- .label -->

    <div class="mention"><?= self::OFFICIAL_MENTION ?></div>
    
</div><!-- .affichage-html .a1-letter -->