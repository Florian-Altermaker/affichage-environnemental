.c-index {
    display: flex;
    flex-direction: column;
    height: <?= $this->labelHeight ?>px;
    width: <?= $this->labelHeight*2.45 ?>px;
}

.c-index .label {
    display: flex;
    flex-direction: row;
    align-items: flex-end;
    height: <?= $this->labelHeight ?>px;
    min-height: <?= $this->labelHeight ?>px;
    max-height: <?= $this->labelHeight ?>px;
}

.c-index::after {
    content: '';
    display: inline-block;
    background-color: #106192;
    min-width: 100%;
    width: 100%;
    min-height: <?= $this->labelHeight*0.63 ?>px;
    height: <?= $this->labelHeight*0.63 ?>px;
    border-radius: <?= $this->labelHeight/7 ?>px;
    position: relative;
    bottom: <?= $this->labelHeight*0.57 ?>px;
}

.c-index .label div:first-of-type {
    width: <?= $this->labelHeight ?>px;
    min-width: <?= $this->labelHeight ?>px;
    max-width: <?= $this->labelHeight ?>px;
    margin-left: <?= $this->labelHeight*0.09 ?>px;
    position: relative;
    z-index: 1;
}

.c-index .label .score {
    flex-grow: 1;
    color: white;
    font-family: 'Roboto', arial, sans-serif;
    font-weight: bold;
    font-size: <?= $this->labelHeight*0.54 ?>px;
    line-height: 0.9em;
    position: relative;
    text-align: left;
    z-index: 1;
}