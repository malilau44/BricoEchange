<?php
namespace BricoAppliBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
/**
 * * @ORM\Entity
 * @ORM\Table(name="annonce")
 * 
 * Description of Annonce
 * @author mlaurenchet2018
 */
class Annonce {
    
    /**
    * @ORM\Id
    * @ORM\Column(name="id",type="integer")
    * @ORM\GeneratedValue(strategy="AUTO")
    */ 
    private $id;
    
    /**
     * @ORM\Column(targetEntity="BricoAppliBundle\Entity\Type",mappedBy="annonce")
     * @var Annonce 
     */
    private $idType;
    
    /**
     * @ORM\Column(targetEntity="BricoAppliBundle\Entity\Categorie",mappedBy="annonce")
     * @var Annonce 
     */
    private $idCategorie;
    private $photo;
    private $marque;
    private $ville;
    private $dateDepot;
    private $dateDebutValid;
    private $desc_resume;
    private $desc_longue;
    private $idUser;
    private $publique;
    private $codeLien;
    
}
