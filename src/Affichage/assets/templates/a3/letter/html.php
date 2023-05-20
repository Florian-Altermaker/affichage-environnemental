<div class="affichage-html a3-letter">

    <div class="label">

        <div class="info">

            <div><?php $planetSize = $this->labelHeight*0.94; include(dirname(__FILE__).'/../../../planet-svg.php'); ?></div>

            <div><?= $this->scoreLetter ?></div>

        </div>

    </div> <!-- .label -->

    <div class="mention"><?= self::OFFICIAL_MENTION ?></div>
    
</div><!-- .affichage-html .a3-letter -->