<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementNational StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementNational
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementNational extends AbstractStructBase
{
    /**
     * The headerValue
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\HeaderValue|null
     */
    protected ?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null;
    /**
     * The password
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $password = null;
    /**
     * The datePassage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePassage = null;
    /**
     * The datePassageFermeture
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $datePassageFermeture = null;
    /**
     * The donneurDOrdre
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\DonneurDOrdre|null
     */
    protected ?\FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null;
    /**
     * The adresseEnlevement
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\AdresseEnlevementV3|null
     */
    protected ?\FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null;
    /**
     * The particulartiesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\ParticularitesEsd|null
     */
    protected ?\FSMS\Chronopost\StructType\ParticularitesEsd $particulartiesEsd = null;
    /**
     * The referenceEsdClient
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $referenceEsdClient = null;
    /**
     * The contenu
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $contenu = null;
    /**
     * The options
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\Options|null
     */
    protected ?\FSMS\Chronopost\StructType\Options $options = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for creerEnlevementNational
     * @uses CreerEnlevementNational::setHeaderValue()
     * @uses CreerEnlevementNational::setPassword()
     * @uses CreerEnlevementNational::setDatePassage()
     * @uses CreerEnlevementNational::setDatePassageFermeture()
     * @uses CreerEnlevementNational::setDonneurDOrdre()
     * @uses CreerEnlevementNational::setAdresseEnlevement()
     * @uses CreerEnlevementNational::setParticulartiesEsd()
     * @uses CreerEnlevementNational::setReferenceEsdClient()
     * @uses CreerEnlevementNational::setContenu()
     * @uses CreerEnlevementNational::setOptions()
     * @uses CreerEnlevementNational::setLocale()
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param string $datePassageFermeture
     * @param \FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @param \FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @param \FSMS\Chronopost\StructType\ParticularitesEsd $particulartiesEsd
     * @param string $referenceEsdClient
     * @param string $contenu
     * @param \FSMS\Chronopost\StructType\Options $options
     * @param string $locale
     */
    public function __construct(?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?string $datePassageFermeture = null, ?\FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null, ?\FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null, ?\FSMS\Chronopost\StructType\ParticularitesEsd $particulartiesEsd = null, ?string $referenceEsdClient = null, ?string $contenu = null, ?\FSMS\Chronopost\StructType\Options $options = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDatePassageFermeture($datePassageFermeture)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setParticulartiesEsd($particulartiesEsd)
            ->setReferenceEsdClient($referenceEsdClient)
            ->setContenu($contenu)
            ->setOptions($options)
            ->setLocale($locale);
    }
    /**
     * Get headerValue value
     * @return \FSMS\Chronopost\StructType\HeaderValue|null
     */
    public function getHeaderValue(): ?\FSMS\Chronopost\StructType\HeaderValue
    {
        return $this->headerValue;
    }
    /**
     * Set headerValue value
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setHeaderValue(?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null): self
    {
        $this->headerValue = $headerValue;
        
        return $this;
    }
    /**
     * Get password value
     * @return string|null
     */
    public function getPassword(): ?string
    {
        return $this->password;
    }
    /**
     * Set password value
     * @param string $password
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setPassword(?string $password = null): self
    {
        // validation for constraint: string
        if (!is_null($password) && !is_string($password)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), gettype($password)), __LINE__);
        }
        $this->password = $password;
        
        return $this;
    }
    /**
     * Get datePassage value
     * @return string|null
     */
    public function getDatePassage(): ?string
    {
        return $this->datePassage;
    }
    /**
     * Set datePassage value
     * @param string $datePassage
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setDatePassage(?string $datePassage = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassage) && !is_string($datePassage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassage, true), gettype($datePassage)), __LINE__);
        }
        $this->datePassage = $datePassage;
        
        return $this;
    }
    /**
     * Get datePassageFermeture value
     * @return string|null
     */
    public function getDatePassageFermeture(): ?string
    {
        return $this->datePassageFermeture;
    }
    /**
     * Set datePassageFermeture value
     * @param string $datePassageFermeture
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setDatePassageFermeture(?string $datePassageFermeture = null): self
    {
        // validation for constraint: string
        if (!is_null($datePassageFermeture) && !is_string($datePassageFermeture)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($datePassageFermeture, true), gettype($datePassageFermeture)), __LINE__);
        }
        $this->datePassageFermeture = $datePassageFermeture;
        
        return $this;
    }
    /**
     * Get donneurDOrdre value
     * @return \FSMS\Chronopost\StructType\DonneurDOrdre|null
     */
    public function getDonneurDOrdre(): ?\FSMS\Chronopost\StructType\DonneurDOrdre
    {
        return $this->donneurDOrdre;
    }
    /**
     * Set donneurDOrdre value
     * @param \FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setDonneurDOrdre(?\FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null): self
    {
        $this->donneurDOrdre = $donneurDOrdre;
        
        return $this;
    }
    /**
     * Get adresseEnlevement value
     * @return \FSMS\Chronopost\StructType\AdresseEnlevementV3|null
     */
    public function getAdresseEnlevement(): ?\FSMS\Chronopost\StructType\AdresseEnlevementV3
    {
        return $this->adresseEnlevement;
    }
    /**
     * Set adresseEnlevement value
     * @param \FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setAdresseEnlevement(?\FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;
        
        return $this;
    }
    /**
     * Get particulartiesEsd value
     * @return \FSMS\Chronopost\StructType\ParticularitesEsd|null
     */
    public function getParticulartiesEsd(): ?\FSMS\Chronopost\StructType\ParticularitesEsd
    {
        return $this->particulartiesEsd;
    }
    /**
     * Set particulartiesEsd value
     * @param \FSMS\Chronopost\StructType\ParticularitesEsd $particulartiesEsd
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setParticulartiesEsd(?\FSMS\Chronopost\StructType\ParticularitesEsd $particulartiesEsd = null): self
    {
        $this->particulartiesEsd = $particulartiesEsd;
        
        return $this;
    }
    /**
     * Get referenceEsdClient value
     * @return string|null
     */
    public function getReferenceEsdClient(): ?string
    {
        return $this->referenceEsdClient;
    }
    /**
     * Set referenceEsdClient value
     * @param string $referenceEsdClient
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setReferenceEsdClient(?string $referenceEsdClient = null): self
    {
        // validation for constraint: string
        if (!is_null($referenceEsdClient) && !is_string($referenceEsdClient)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($referenceEsdClient, true), gettype($referenceEsdClient)), __LINE__);
        }
        $this->referenceEsdClient = $referenceEsdClient;
        
        return $this;
    }
    /**
     * Get contenu value
     * @return string|null
     */
    public function getContenu(): ?string
    {
        return $this->contenu;
    }
    /**
     * Set contenu value
     * @param string $contenu
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setContenu(?string $contenu = null): self
    {
        // validation for constraint: string
        if (!is_null($contenu) && !is_string($contenu)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($contenu, true), gettype($contenu)), __LINE__);
        }
        $this->contenu = $contenu;
        
        return $this;
    }
    /**
     * Get options value
     * @return \FSMS\Chronopost\StructType\Options|null
     */
    public function getOptions(): ?\FSMS\Chronopost\StructType\Options
    {
        return $this->options;
    }
    /**
     * Set options value
     * @param \FSMS\Chronopost\StructType\Options $options
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setOptions(?\FSMS\Chronopost\StructType\Options $options = null): self
    {
        $this->options = $options;
        
        return $this;
    }
    /**
     * Get locale value
     * @return string|null
     */
    public function getLocale(): ?string
    {
        return $this->locale;
    }
    /**
     * Set locale value
     * @param string $locale
     * @return \FSMS\Chronopost\StructType\CreerEnlevementNational
     */
    public function setLocale(?string $locale = null): self
    {
        // validation for constraint: string
        if (!is_null($locale) && !is_string($locale)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locale, true), gettype($locale)), __LINE__);
        }
        $this->locale = $locale;
        
        return $this;
    }
}
