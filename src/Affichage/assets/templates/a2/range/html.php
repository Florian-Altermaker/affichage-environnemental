<div class="affichage-html a2-range">

    <div class="label">

        <div class="range">

            <div><?php $planetSize = $this->labelHeight*0.68; include(dirname(__FILE__).'/../../../planet-svg.php'); ?></div>

            <?php foreach (self::LETTERS as $letter): ?>

                <div class="letter<?php if ($letter == $this->scoreLetter): ?> score<?php endif; ?>">
                    
                    <?= $letter ?>

                </div><!-- .letter -->

            <?php endforeach; ?>

        </div><!-- .range -->

    </div> <!-- .label -->

    <div class="mention"><?= self::OFFICIAL_MENTION ?></div>
    
</div><!-- .affichage-html .a2-range -->