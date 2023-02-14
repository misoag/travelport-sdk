<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareFamilyCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: It is a branded Fare for a carrier and given fare basis code.
 * @subpackage Structs
 */
class FareFamilyCriteria extends AbstractStructBase
{
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: required
     * @var string
     */
    protected string $Carrier;
    /**
     * The Label
     * Meta information extracted from the WSDL
     * - documentation: An alpha-numeric string which denotes fare family. Some carriers may return this in lieu of or in addition to the CabinClass.
     * - base: xs:string
     * - maxLength: 32
     * - minLength: 0
     * - use: optional
     * @var string|null
     */
    protected ?string $Label = null;
    /**
     * The FareBasis
     * Meta information extracted from the WSDL
     * - documentation: The fare basis code to be used for pricing.
     * - base: xs:string
     * - maxLength: 20
     * - use: optional
     * @var string|null
     */
    protected ?string $FareBasis = null;
    /**
     * Constructor method for FareFamilyCriteria
     * @uses FareFamilyCriteria::setCarrier()
     * @uses FareFamilyCriteria::setLabel()
     * @uses FareFamilyCriteria::setFareBasis()
     * @param string $carrier
     * @param string $label
     * @param string $fareBasis
     */
    public function __construct(string $carrier, ?string $label = null, ?string $fareBasis = null)
    {
        $this
            ->setCarrier($carrier)
            ->setLabel($label)
            ->setFareBasis($fareBasis);
    }
    /**
     * Get Carrier value
     * @return string
     */
    public function getCarrier(): string
    {
        return $this->Carrier;
    }
    /**
     * Set Carrier value
     * @param string $carrier
     * @return \Travelport\Util\StructType\FareFamilyCriteria
     */
    public function setCarrier(string $carrier): self
    {
        // validation for constraint: string
        if (!is_null($carrier) && !is_string($carrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrier, true), gettype($carrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($carrier) && mb_strlen((string) $carrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Get Label value
     * @return string|null
     */
    public function getLabel(): ?string
    {
        return $this->Label;
    }
    /**
     * Set Label value
     * @param string $label
     * @return \Travelport\Util\StructType\FareFamilyCriteria
     */
    public function setLabel(?string $label = null): self
    {
        // validation for constraint: string
        if (!is_null($label) && !is_string($label)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($label, true), gettype($label)), __LINE__);
        }
        // validation for constraint: maxLength(32)
        if (!is_null($label) && mb_strlen((string) $label) > 32) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 32', mb_strlen((string) $label)), __LINE__);
        }
        // validation for constraint: minLength
        if (!is_null($label) && mb_strlen((string) $label) < 0) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 0', mb_strlen((string) $label)), __LINE__);
        }
        $this->Label = $label;
        
        return $this;
    }
    /**
     * Get FareBasis value
     * @return string|null
     */
    public function getFareBasis(): ?string
    {
        return $this->FareBasis;
    }
    /**
     * Set FareBasis value
     * @param string $fareBasis
     * @return \Travelport\Util\StructType\FareFamilyCriteria
     */
    public function setFareBasis(?string $fareBasis = null): self
    {
        // validation for constraint: string
        if (!is_null($fareBasis) && !is_string($fareBasis)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareBasis, true), gettype($fareBasis)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($fareBasis) && mb_strlen((string) $fareBasis) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $fareBasis)), __LINE__);
        }
        $this->FareBasis = $fareBasis;
        
        return $this;
    }
}
