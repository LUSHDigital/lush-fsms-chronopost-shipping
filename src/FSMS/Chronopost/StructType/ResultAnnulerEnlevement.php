<?php

declare(strict_types=1);

namespace FSMS\Chronopost\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for resultAnnulerEnlevement StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class ResultAnnulerEnlevement extends AbstractStructBase
{
    /**
     * The codeErreur
     * @var int|null
     */
    protected ?int $codeErreur = null;
    /**
     * The errorMessage
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var string|null
     */
    protected ?string $errorMessage = null;
    /**
     * The statut
     * @var \FSMS\Chronopost\StructType\Statut|null
     */
    protected ?\FSMS\Chronopost\StructType\Statut $statut = null;
    /**
     * Constructor method for resultAnnulerEnlevement
     * @uses ResultAnnulerEnlevement::setCodeErreur()
     * @uses ResultAnnulerEnlevement::setErrorMessage()
     * @uses ResultAnnulerEnlevement::setStatut()
     * @param int $codeErreur
     * @param string $errorMessage
     * @param \FSMS\Chronopost\StructType\Statut $statut
     */
    public function __construct(?int $codeErreur = null, ?string $errorMessage = null, ?\FSMS\Chronopost\StructType\Statut $statut = null)
    {
        $this
            ->setCodeErreur($codeErreur)
            ->setErrorMessage($errorMessage)
            ->setStatut($statut);
    }
    /**
     * Get codeErreur value
     * @return int|null
     */
    public function getCodeErreur(): ?int
    {
        return $this->codeErreur;
    }
    /**
     * Set codeErreur value
     * @param int $codeErreur
     * @return \FSMS\Chronopost\StructType\ResultAnnulerEnlevement
     */
    public function setCodeErreur(?int $codeErreur = null): self
    {
        // validation for constraint: int
        if (!is_null($codeErreur) && !(is_int($codeErreur) || ctype_digit($codeErreur))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($codeErreur, true), gettype($codeErreur)), __LINE__);
        }
        $this->codeErreur = $codeErreur;
        
        return $this;
    }
    /**
     * Get errorMessage value
     * @return string|null
     */
    public function getErrorMessage(): ?string
    {
        return $this->errorMessage;
    }
    /**
     * Set errorMessage value
     * @param string $errorMessage
     * @return \FSMS\Chronopost\StructType\ResultAnnulerEnlevement
     */
    public function setErrorMessage(?string $errorMessage = null): self
    {
        // validation for constraint: string
        if (!is_null($errorMessage) && !is_string($errorMessage)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($errorMessage, true), gettype($errorMessage)), __LINE__);
        }
        $this->errorMessage = $errorMessage;
        
        return $this;
    }
    /**
     * Get statut value
     * @return \FSMS\Chronopost\StructType\Statut|null
     */
    public function getStatut(): ?\FSMS\Chronopost\StructType\Statut
    {
        return $this->statut;
    }
    /**
     * Set statut value
     * @param \FSMS\Chronopost\StructType\Statut $statut
     * @return \FSMS\Chronopost\StructType\ResultAnnulerEnlevement
     */
    public function setStatut(?\FSMS\Chronopost\StructType\Statut $statut = null): self
    {
        $this->statut = $statut;
        
        return $this;
    }
}
