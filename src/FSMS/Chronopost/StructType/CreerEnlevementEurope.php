<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for creerEnlevementEurope StructType
 * Meta information extracted from the WSDL
 * - type: tns:creerEnlevementEurope
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class CreerEnlevementEurope extends AbstractStructBase
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
     * The destinatairesEsd
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \FSMS\Chronopost\StructType\DestinatairesDpd|null
     */
    protected ?\FSMS\Chronopost\StructType\DestinatairesDpd $destinatairesEsd = null;
    /**
     * The locale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $locale = null;
    /**
     * Constructor method for creerEnlevementEurope
     * @uses CreerEnlevementEurope::setHeaderValue()
     * @uses CreerEnlevementEurope::setPassword()
     * @uses CreerEnlevementEurope::setDatePassage()
     * @uses CreerEnlevementEurope::setDonneurDOrdre()
     * @uses CreerEnlevementEurope::setAdresseEnlevement()
     * @uses CreerEnlevementEurope::setDestinatairesEsd()
     * @uses CreerEnlevementEurope::setLocale()
     * @param \FSMS\Chronopost\StructType\HeaderValue $headerValue
     * @param string $password
     * @param string $datePassage
     * @param \FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre
     * @param \FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement
     * @param \FSMS\Chronopost\StructType\DestinatairesDpd $destinatairesEsd
     * @param string $locale
     */
    public function __construct(?\FSMS\Chronopost\StructType\HeaderValue $headerValue = null, ?string $password = null, ?string $datePassage = null, ?\FSMS\Chronopost\StructType\DonneurDOrdre $donneurDOrdre = null, ?\FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null, ?\FSMS\Chronopost\StructType\DestinatairesDpd $destinatairesEsd = null, ?string $locale = null)
    {
        $this
            ->setHeaderValue($headerValue)
            ->setPassword($password)
            ->setDatePassage($datePassage)
            ->setDonneurDOrdre($donneurDOrdre)
            ->setAdresseEnlevement($adresseEnlevement)
            ->setDestinatairesEsd($destinatairesEsd)
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
     */
    public function setAdresseEnlevement(?\FSMS\Chronopost\StructType\AdresseEnlevementV3 $adresseEnlevement = null): self
    {
        $this->adresseEnlevement = $adresseEnlevement;
        
        return $this;
    }
    /**
     * Get destinatairesEsd value
     * @return \FSMS\Chronopost\StructType\DestinatairesDpd|null
     */
    public function getDestinatairesEsd(): ?\FSMS\Chronopost\StructType\DestinatairesDpd
    {
        return $this->destinatairesEsd;
    }
    /**
     * Set destinatairesEsd value
     * @param \FSMS\Chronopost\StructType\DestinatairesDpd $destinatairesEsd
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
     */
    public function setDestinatairesEsd(?\FSMS\Chronopost\StructType\DestinatairesDpd $destinatairesEsd = null): self
    {
        $this->destinatairesEsd = $destinatairesEsd;
        
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
     * @return \FSMS\Chronopost\StructType\CreerEnlevementEurope
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
