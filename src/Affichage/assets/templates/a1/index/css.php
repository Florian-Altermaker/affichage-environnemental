.a1-index {
    display: flex;
    flex-direction: column;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*1.78 ?>px;
}

.a1-index .label {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    height: <?= $this->labelHeight*0.7 ?>px;
    min-height: <?= $this->labelHeight*0.7 ?>px;
    max-height: <?= $this->labelHeight*0.7 ?>px;
}

.a1-index::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    min-width: 100%;
    width: 100%;
    min-height: <?= $this->labelHeight*0.46 ?>px;
    height: <?= $this->labelHeight*0.46 ?>px;
    border-radius: <?= $this->labelHeight/7 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.7 ?>px;
}

.a1-index .label div:first-of-type {
    width: <?= $this->labelHeight*0.7 ?>px;
    min-width: <?= $this->labelHeight*0.7 ?>px;
    max-width: <?= $this->labelHeight*0.7 ?>px;
    margin-left: <?= $this->labelHeight*0.09 ?>px;
    position: relative;
    z-index: 1;
}

.a1-index .label .score {
    flex-grow: 1;
    color: white;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.38 ?>px;
    line-height: 0.9em;
    position: relative;
    text-align: left;
    z-index: 1;
}

.a1-index .mention {
    height: <?= $this->labelHeight*0.3 ?>px;
    min-height: <?= $this->labelHeight*0.3 ?>px;
    max-height: <?= $this->labelHeight*0.3 ?>px;
    overflow: hidden;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.13 ?>px;
    text-align: center;
    color: #106192;
    padding: <?= $this->labelHeight/10 ?>px 0px;
    box-sizing: border-box;
}