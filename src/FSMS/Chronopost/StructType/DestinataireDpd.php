<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for destinataireDpd StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class DestinataireDpd extends AbstractStructBase
{
    /**
     * The adresseDestinataire
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\AdresseDestinataire|null
     */
    protected ?\FSMS\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null;
    /**
     * The infoClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\InfoClient|null
     */
    protected ?\FSMS\Chronopost\StructType\InfoClient $infoClient = null;
    /**
     * The particularites
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\Particularites|null
     */
    protected ?\FSMS\Chronopost\StructType\Particularites $particularites = null;
    /**
     * The particularitesColisDpd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ParticularitesColisDpd|null
     */
    protected ?\FSMS\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null;
    /**
     * Constructor method for destinataireDpd
     * @uses DestinataireDpd::setAdresseDestinataire()
     * @uses DestinataireDpd::setInfoClient()
     * @uses DestinataireDpd::setParticularites()
     * @uses DestinataireDpd::setParticularitesColisDpd()
     * @param \FSMS\Chronopost\StructType\AdresseDestinataire $adresseDestinataire
     * @param \FSMS\Chronopost\StructType\InfoClient $infoClient
     * @param \FSMS\Chronopost\StructType\Particularites $particularites
     * @param \FSMS\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     */
    public function __construct(?\FSMS\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null, ?\FSMS\Chronopost\StructType\InfoClient $infoClient = null, ?\FSMS\Chronopost\StructType\Particularites $particularites = null, ?\FSMS\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null)
    {
        $this
            ->setAdresseDestinataire($adresseDestinataire)
            ->setInfoClient($infoClient)
            ->setParticularites($particularites)
            ->setParticularitesColisDpd($particularitesColisDpd);
    }
    /**
     * Get adresseDestinataire value
     * @return \FSMS\Chronopost\StructType\AdresseDestinataire|null
     */
    public function getAdresseDestinataire(): ?\FSMS\Chronopost\StructType\AdresseDestinataire
    {
        return $this->adresseDestinataire;
    }
    /**
     * Set adresseDestinataire value
     * @param \FSMS\Chronopost\StructType\AdresseDestinataire $adresseDestinataire
     * @return \FSMS\Chronopost\StructType\DestinataireDpd
     */
    public function setAdresseDestinataire(?\FSMS\Chronopost\StructType\AdresseDestinataire $adresseDestinataire = null): self
    {
        $this->adresseDestinataire = $adresseDestinataire;
        
        return $this;
    }
    /**
     * Get infoClient value
     * @return \FSMS\Chronopost\StructType\InfoClient|null
     */
    public function getInfoClient(): ?\FSMS\Chronopost\StructType\InfoClient
    {
        return $this->infoClient;
    }
    /**
     * Set infoClient value
     * @param \FSMS\Chronopost\StructType\InfoClient $infoClient
     * @return \FSMS\Chronopost\StructType\DestinataireDpd
     */
    public function setInfoClient(?\FSMS\Chronopost\StructType\InfoClient $infoClient = null): self
    {
        $this->infoClient = $infoClient;
        
        return $this;
    }
    /**
     * Get particularites value
     * @return \FSMS\Chronopost\StructType\Particularites|null
     */
    public function getParticularites(): ?\FSMS\Chronopost\StructType\Particularites
    {
        return $this->particularites;
    }
    /**
     * Set particularites value
     * @param \FSMS\Chronopost\StructType\Particularites $particularites
     * @return \FSMS\Chronopost\StructType\DestinataireDpd
     */
    public function setParticularites(?\FSMS\Chronopost\StructType\Particularites $particularites = null): self
    {
        $this->particularites = $particularites;
        
        return $this;
    }
    /**
     * Get particularitesColisDpd value
     * @return \FSMS\Chronopost\StructType\ParticularitesColisDpd|null
     */
    public function getParticularitesColisDpd(): ?\FSMS\Chronopost\StructType\ParticularitesColisDpd
    {
        return $this->particularitesColisDpd;
    }
    /**
     * Set particularitesColisDpd value
     * @param \FSMS\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd
     * @return \FSMS\Chronopost\StructType\DestinataireDpd
     */
    public function setParticularitesColisDpd(?\FSMS\Chronopost\StructType\ParticularitesColisDpd $particularitesColisDpd = null): self
    {
        $this->particularitesColisDpd = $particularitesColisDpd;
        
        return $this;
    }
}
