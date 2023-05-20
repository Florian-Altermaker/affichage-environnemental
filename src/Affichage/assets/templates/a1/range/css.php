.a1-range {
    display: flex;
    flex-direction: column;
    height: <?= $this->labelHeight ?>px;
    min-height: <?= $this->labelHeight ?>px;
    max-height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*1.92 ?>px;
}

.a1-range .label {
    flex-shrink: 0;
    flex-basis: 0;
}

.a1-range .label .range {
    display: flex;
    flex-direction: row;
    height: <?= $this->labelHeight*0.7 ?>px;
    min-height: <?= $this->labelHeight*0.7 ?>px;
    max-height: <?= $this->labelHeight*0.7 ?>px;
    position: relative;
    z-index: 1;
    padding-left: <?= $this->labelHeight*0.08 ?>px;
    align-items: flex-end;
}

.a1-range .label .range div:first-of-type {
    margin-right: <?= $this->labelHeight/40 ?>px;
}

.a1-range .label .range .letter {
    padding: <?= $this->labelHeight/30 ?>px <?= $this->labelHeight/38 ?>px;
    margin: 0px <?= $this->labelHeight/90 ?>px;
    background-color: white;
    color: #106192;
    outline: <?= $this->labelHeight/80 ?>px #106192 solid;
    border-radius: <?= $this->labelHeight/28 ?>px;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.19 ?>px;
    line-height: 1em;
}

.a1-range .label .range .score {
    font-size: <?= $this->labelHeight*0.43 ?>px;
    padding: 0px <?= $this->labelHeight/25 ?>px;
    border-radius: <?= $this->labelHeight/20 ?>px;
}

.a1-range .mention {
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.14 ?>px;
    flex-shrink: 0;
    flex-basis: 0;
    color: #106192;
    height: <?= $this->labelHeight*0.3 ?>px;
    min-height: <?= $this->labelHeight*0.3 ?>px;
    max-height: <?= $this->labelHeight*0.3 ?>px;
    padding: <?= $this->labelHeight/12 ?>px 0px;
    box-sizing: border-box;
    text-align: center;
}

.a1-range .mention::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    width: 100%;
    height: <?= $this->labelHeight*0.43 ?>px;
    border-radius: <?= $this->labelHeight/9 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.64 ?>px;
}