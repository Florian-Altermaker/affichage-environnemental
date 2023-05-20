.a3-index {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*4.6 ?>px;
}

.a3-index .label {    
    width: <?= $this->labelHeight*2.35 ?>px;
    min-width: <?= $this->labelHeight*2.35 ?>px;
    max-width: <?= $this->labelHeight*2.35 ?>px;
    padding-bottom: <?= $this->labelHeight*0.06 ?>px;
    box-sizing: border-box;
}

.a3-index .info {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    width: 100%;
    height: 100%;
}

.a3-index .label::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    min-width: 100%;
    width: 100%;
    min-height: <?= $this->labelHeight*0.58 ?>px;
    height: <?= $this->labelHeight*0.58 ?>px;
    border-radius: <?= $this->labelHeight/6 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.53 ?>px;
}

.a3-index .label .info div:first-of-type {
    width: <?= $this->labelHeight*0.94 ?>px;
    min-width: <?= $this->labelHeight*0.94 ?>px;
    max-width: <?= $this->labelHeight*0.94 ?>px;
    margin-left: <?= $this->labelHeight*0.11 ?>px;
    position: relative;
    z-index: 1;
}

.a3-index .label .info div:last-of-type {
    flex-grow: 1;

    color: white;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.51 ?>px;
    line-height: 0.9em;
    position: relative;
    text-align: left;
    z-index: 1;
}

.a3-index .mention {
    flex-grow: 1;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.22 ?>px;
    color: #106192;
    height: <?= $this->labelHeight*0.59 ?>px;
    padding: <?= $this->labelHeight/80 ?>px 0px 0px;
    margin: <?= $this->labelHeight*0.43 ?>px 0px 0px <?= $this->labelHeight*0.1 ?>px;
    box-sizing: border-box;
    text-align: left;
}