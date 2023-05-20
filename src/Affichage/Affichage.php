<?php

/*
 * This class represents the core of Affichage package.
 *
 * (c) Altermaker <contact@altermaker.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Altermaker\Affichage;

/**
* Affichage Environnemental
*
* An "Affichage Environnemental" refers to environmental french labelling system.
* It defines strict rules to display an environmental impact score.
* For further information please refer to: https://base-empreinte.ademe.fr/
*
* @author Altermaker <contact@altermaker.com>
* @final
*/
class Affichage
{

    // ------------------------------------------------------------------------
    // PARAMETERS

    /**
     * Official mention
     */
    protected const OFFICIAL_MENTION = "IMPACT ENVIRONNEMENTAL";
    
    /**
     * List of allowed letters
     */
    protected const LETTERS = ['A', 'B', 'C', 'D', 'E'];

    /**
     * List of allowed formats
     */
    protected const FORMATS = ['letter', 'range', 'index'];
    
    /**
     * List of allowed variants
     */
    protected const VARIANTS = ['a1', 'a2', 'a3', 'a4', 'c'];    

    /**
     * Score as a letter
     */
    protected string $scoreLetter = 'E';

    /**
     * Score as an index
     */
    protected float $scoreIndex = 0;

    /**
     * Format
     */
    protected string $format = 'range';
    
    /**
     * Variant
     */
    protected string $variant = 'a3';

    /**
     * Label height
     */
    protected int $labelHeight = 100;

    // ------------------------------------------------------------------------
    // METHODS

    /**
     * By default, constructor do not set any default value
     */
    public function __construct(){}

    /**
     * Generate the label image as an HTML block
     * 
     */
    public function htmlLabel() : string
    {
        ob_start();

        include('assets/templates/'.$this->variant.'/'.$this->format.'/html.php');

        include('assets/style.php');

        $html = ob_get_clean();

        return $html;
    }

    // ------------------------------------------------------------------------
    // SETTERS

    /**
     * Set score as a letter
     *
     * @param string  $scoreLetter  The result expressed as a letter
     */
    public function setScoreLetter(string $scoreLetter)
    {
        $scoreLetter = strtoupper($scoreLetter);
        
        if (!in_array($scoreLetter, self::LETTERS)) {
            throw new Exception('This is not a valid score as a letter. Allowed values are: '.implode(', ', self::LETTERS));
        }

        $this->scoreLetter = $scoreLetter;

        return $this;        
    }

    /**
     * Set score as an index
     *
     * @param float  $scoreIndex  The result expressed as a numeric index
     */
    public function setScoreIndex(float $scoreIndex)
    {
        if (!is_numeric($scoreIndex)) {
            throw new Exception('This is not a valid score as an index. The index must be numeric.');
        }

        $this->scoreIndex = $scoreIndex;

        return $this;        
    }

    /**
     * Set format
     *
     * @param string  $format  The format of label
     */
    public function setFormat(string $format)
    {
        $format = strtolower($format);
        
        if (!in_array($format, self::FORMATS)) {
            throw new Exception('This is not a valid format. Allowed values are: '.implode(', ', self::FORMATS));
        }

        $this->format = $format;
        
        return $this;
    }

    /**
     * Set variant
     *
     * @param string  $variant  The variant of label
     */
    public function setVariant(string $variant)
    {
        $variant = strtolower($variant);
        
        if (!in_array($variant, self::VARIANTS)) {
            throw new \Exception('This is not a valid variant. Allowed values are: '.implode(', ', self::VARIANTS));
        }

        $this->variant = $variant;
        
        return $this;
    }

    /**
     * Set label height
     *
     * @param int  $labelHeight  The label height expressed in px
     */
    public function setLabelHeight(int $labelHeight)
    {
        if (!is_int($labelHeight)) {
            throw new Exception('This is not a valid height. The height must be an integer value.');
        }

        $this->labelHeight = $labelHeight;

        return $this;        
    }

    // ------------------------------------------------------------------------
    // GETTERS

    /**
     * Get score as a letter
     */
    public function scoreLetter(): string
    {
        return $this->scoreLetter;
    }

    /**
     * Get score as an index
     */
    public function scoreIndex(): float
    {
        return $this->scoreIndex;
    }

    /**
     * Get variant
     */
    public function variant(): string
    {
        return $this->variant;
    }

    /**
     * Get format
     */
    public function format(): string
    {
        return $this->format;
    }

    /**
     * Get label height
     */
    public function labelHeight(): int
    {
        return $this->labelHeight;
    }

}