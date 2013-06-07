<?php

namespace TheMountain\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="dbTest")
 */

class DbTest
{
    /**
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $dbtestID;
    
    /**
     *
     * @ORM\Column(type="string") 
     */
    protected $dbtestNAME;
            
}
?>
