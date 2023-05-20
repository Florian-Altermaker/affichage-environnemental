.a2-letter {
    display: flex;
    flex-direction: column;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*1.35 ?>px;
}

.a2-letter .label {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    height: <?= $this->labelHeight*0.83 ?>px;
    min-height: <?= $this->labelHeight*0.83 ?>px;
    max-height: <?= $this->labelHeight*0.83 ?>px;
}

.a2-letter::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    min-width: 100%;
    width: 100%;
    min-height: <?= $this->labelHeight*0.7 ?>px;
    height: <?= $this->labelHeight*0.7 ?>px;
    border-radius: <?= $this->labelHeight/7 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.64 ?>px;
}

.a2-letter .label div:first-of-type {
    width: <?= $this->labelHeight*0.85 ?>px;
    min-width: <?= $this->labelHeight*0.85 ?>px;
    max-width: <?= $this->labelHeight*0.85 ?>px;
    margin-left: <?= $this->labelHeight*0.09 ?>px;
    position: relative;
    z-index: 1;
}

.a2-letter .label .score {
    flex-grow: 1;
    color: white;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.45 ?>px;
    line-height: 0.9em;
    position: relative;
    text-align: left;
    z-index: 1;
}

.a2-letter .mention {
    height: <?= $this->labelHeight*0.17 ?>px;
    min-height: <?= $this->labelHeight*0.17 ?>px;
    max-height: <?= $this->labelHeight*0.17 ?>px;
    overflow: hidden;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.09 ?>px;
    text-align: center;
    color: white;
    padding: <?= $this->labelHeight/20 ?>px 0px;
    box-sizing: border-box;
    position: relative;
    z-index: 1;
}