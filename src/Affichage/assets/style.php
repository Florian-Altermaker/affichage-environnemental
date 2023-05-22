<style>

    @font-face {
        font-family: 'Roboto';
        src: url('<?= self::$pathToRoboto ?>') format('truetype');
    }

    .affichage-html {
        overflow: hidden;
        box-sizing: content-box;
        padding: <?= $this->labelHeight/6 ?>px;
    }

    <?php include('templates/'.$this->variant.'/'.$this->format.'/css.php'); ?>

</style>