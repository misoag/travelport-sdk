<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BackOfficeHandOff StructType
 * Meta information extracted from the WSDL
 * - documentation: Allows an agency to select the back office documents and also route to different host to produce for the itinerary.
 * @subpackage Structs
 */
class BackOfficeHandOff extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type of back office document,valid options are Accounting,Global,NonAccounting,NonAccountingRemote,Dual.
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The Location
     * Meta information extracted from the WSDL
     * - documentation: This is required for NonAccountingRemote,Dual and Global type back office.
     * - use: optional
     * @var string|null
     */
    protected ?string $Location = null;
    /**
     * The PseudoCityCode
     * Meta information extracted from the WSDL
     * - documentation: The PCC of the host system where it would be routed. | 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $PseudoCityCode = null;
    /**
     * Constructor method for BackOfficeHandOff
     * @uses BackOfficeHandOff::setType()
     * @uses BackOfficeHandOff::setLocation()
     * @uses BackOfficeHandOff::setPseudoCityCode()
     * @param string $type
     * @param string $location
     * @param string $pseudoCityCode
     */
    public function __construct(string $type, ?string $location = null, ?string $pseudoCityCode = null)
    {
        $this
            ->setType($type)
            ->setLocation($location)
            ->setPseudoCityCode($pseudoCityCode);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @uses \Travelport\Util\EnumType\TypeBackOffice::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeBackOffice::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\BackOfficeHandOff
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeBackOffice::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeBackOffice', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeBackOffice::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Location value
     * @return string|null
     */
    public function getLocation(): ?string
    {
        return $this->Location;
    }
    /**
     * Set Location value
     * @param string $location
     * @return \Travelport\Util\StructType\BackOfficeHandOff
     */
    public function setLocation(?string $location = null): self
    {
        // validation for constraint: string
        if (!is_null($location) && !is_string($location)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($location, true), gettype($location)), __LINE__);
        }
        $this->Location = $location;
        
        return $this;
    }
    /**
     * Get PseudoCityCode value
     * @return string|null
     */
    public function getPseudoCityCode(): ?string
    {
        return $this->PseudoCityCode;
    }
    /**
     * Set PseudoCityCode value
     * @param string $pseudoCityCode
     * @return \Travelport\Util\StructType\BackOfficeHandOff
     */
    public function setPseudoCityCode(?string $pseudoCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($pseudoCityCode) && !is_string($pseudoCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pseudoCityCode, true), gettype($pseudoCityCode)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($pseudoCityCode) && mb_strlen((string) $pseudoCityCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $pseudoCityCode)), __LINE__);
        }
        $this->PseudoCityCode = $pseudoCityCode;
        
        return $this;
    }
}
