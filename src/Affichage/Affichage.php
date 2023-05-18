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

    /**
     * List of allowed letters
     */
    protected const LETTERS = ['A', 'B', 'C', 'D', 'E'];

    /**
     * Score as a letter
     */
    protected string $scoreLetter;

    /**
     * Score as an index
     */
    protected float $scoreIndex;

    /**
     * @param string  $scoreLetter  The result expressed as a letter
     * @param float   $scoreIndex   The result expressed as a numeric index
     */
    public function __construct(string $scoreLetter, float $scoreIndex)
    {
        $this->setScoreLetter($scoreLetter);
        $this->setScoreIndex($scoreIndex);
    }

    /**
     * Set score as a letter
     *
     * @param string  $scoreLetter  The result expressed as a letter
     */
    public function setScoreLetter(string $scoreLetter)
    {
        $scoreLetter = strtoupper($scoreLetter);
        
        if (!in_array($scoreLetter, self::LETTERS)) {
            throw new Exception('This is not a valid score as a letter. Allowed values are:'.explode(', ', self::LETTERS));
        }

        $this->scoreLetter = $scoreLetter;
        
    }

    /**
     * Set score as an index
     *
     * @param float   $scoreIndex   The result expressed as a numeric index
     */
    public function setScoreIndex(float $scoreIndex)
    {
        if (!is_numeric($scoreIndex)) {
            throw new Exception('This is not a valid score as an index. The index must be numeric.');
        }

        $this->scoreIndex = $scoreIndex;
        
    }

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
    public function scoreIndex(): string
    {
        return $this->scoreIndex;
    }

}