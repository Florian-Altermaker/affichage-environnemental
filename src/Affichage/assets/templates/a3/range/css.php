.a3-range {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*5 ?>px;        
}

.a3-range .label {        
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*2.8 ?>px;
    min-width: <?= $this->labelHeight*2.8 ?>px;
    max-width: <?= $this->labelHeight*2.8 ?>px;
}

.a3-range .label::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    width: <?= $this->labelHeight*2.8*0.94 ?>px;
    height: <?= $this->labelHeight*0.59 ?>px;
    border-radius: <?= $this->labelHeight/6 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.532 ?>px;
}

.a3-range .label .range {
    display: flex;
    flex-direction: row;
    height: <?= $this->labelHeight*0.94 ?>px;
    position: relative;
    z-index: 1;
    padding-left: <?= $this->labelHeight*0.1 ?>px;
    align-items: flex-end;
}

.a3-range .label .range div:first-of-type {
    margin-right: <?= $this->labelHeight/40 ?>px;
}

.a3-range .label .range .letter {
    padding: <?= $this->labelHeight/20 ?>px <?= $this->labelHeight/26 ?>px;
    margin: 0px <?= $this->labelHeight/70 ?>px;
    background-color: white;
    color: #106192;
    outline: <?= $this->labelHeight/60 ?>px #106192 solid;
    border-radius: <?= $this->labelHeight/20 ?>px;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.27 ?>px;
    line-height: 1em;
}

.a3-range .label .range .score {
    font-size: <?= $this->labelHeight*0.6 ?>px;
    padding: 0px <?= $this->labelHeight/25 ?>px;
    border-radius: <?= $this->labelHeight/15 ?>px;
}

.a3-range .mention {
    flex-grow: 1;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: normal;
    font-size: <?= $this->labelHeight*0.22 ?>px;
    color: #106192;
    height: <?= $this->labelHeight*0.59 ?>px;
    padding: <?= $this->labelHeight/25 ?>px 0px 0px;
    box-sizing: border-box;
    text-align: left;
}