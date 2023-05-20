.a4-letter {
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*3.7 ?>px;
}

.a4-letter .label {    
    width: <?= $this->labelHeight*1.5 ?>px;
    min-width: <?= $this->labelHeight*1.5 ?>px;
    max-width: <?= $this->labelHeight*1.5 ?>px;
    padding-bottom: <?= $this->labelHeight*0.06 ?>px;
    box-sizing: border-box;
}

.a4-letter .info {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    width: 100%;
    height: 100%;
}

.a4-letter .label::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    min-width: 252%;
    width: 252%;
    min-height: <?= $this->labelHeight*0.6 ?>px;
    height: <?= $this->labelHeight*0.6 ?>px;
    border-radius: <?= $this->labelHeight/6 ?>px;
    position: relative;
    z-index: -1;
    bottom: <?= $this->labelHeight*0.54 ?>px;
}

.a4-letter .label .info div:first-of-type {
    width: <?= $this->labelHeight*0.94 ?>px;
    min-width: <?= $this->labelHeight*0.94 ?>px;
    max-width: <?= $this->labelHeight*0.94 ?>px;
    margin-left: <?= $this->labelHeight*0.11 ?>px;
    position: relative;
    z-index: 1;
}

.a4-letter .label .info div:last-of-type {
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

.a4-letter .mention {
    flex-grow: 1;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.21 ?>px;
    color: white;
    height: <?= $this->labelHeight*0.59 ?>px;
    padding: <?= $this->labelHeight/50 ?>px 0px 0px;
    margin: <?= $this->labelHeight*0.43 ?>px 0px 0px <?= $this->labelHeight*0.1 ?>px;
    box-sizing: border-box;
    text-align: left;
    position: relative;
    z-index: 1;
}