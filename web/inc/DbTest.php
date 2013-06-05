<?php

namespace TheMountain\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DbTest
 */
class DbTest
{
    /**
     * @var integer
     */
    private $dbtestID;

    /**
     * @var string
     */
    private $dbtestNAME;


    /**
     * Get dbtestID
     *
     * @return integer 
     */
    public function getDbtestID()
    {
        return $this->dbtestID;
    }

    /**
     * Set dbtestNAME
     *
     * @param string $dbtestNAME
     * @return DbTest
     */
    public function setDbtestNAME($dbtestNAME)
    {
        $this->dbtestNAME = $dbtestNAME;
    
        return $this;
    }

    /**
     * Get dbtestNAME
     *
     * @return string 
     */
    public function getDbtestNAME()
    {
        return $this->dbtestNAME;
    }
}
