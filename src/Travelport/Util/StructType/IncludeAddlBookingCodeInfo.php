<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IncludeAddlBookingCodeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Used to include primary or secondary carrier's booking code details
 * @subpackage Structs
 */
class IncludeAddlBookingCodeInfo extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: The type defines that the booking code info is for primary or secondary carrier.
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * The SecondaryCarrier
     * Meta information extracted from the WSDL
     * - documentation: The secondary carrier code is required when type is secondary . | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - use: optional
     * @var string|null
     */
    protected ?string $SecondaryCarrier = null;
    /**
     * Constructor method for IncludeAddlBookingCodeInfo
     * @uses IncludeAddlBookingCodeInfo::setType()
     * @uses IncludeAddlBookingCodeInfo::setSecondaryCarrier()
     * @param string $type
     * @param string $secondaryCarrier
     */
    public function __construct(string $type, ?string $secondaryCarrier = null)
    {
        $this
            ->setType($type)
            ->setSecondaryCarrier($secondaryCarrier);
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
     * @uses \Travelport\Util\EnumType\TypeCarrierCode::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeCarrierCode::getValidValues()
     * @throws InvalidArgumentException
     * @param string $type
     * @return \Travelport\Util\StructType\IncludeAddlBookingCodeInfo
     */
    public function setType(string $type): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeCarrierCode::valueIsValid($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeCarrierCode', is_array($type) ? implode(', ', $type) : var_export($type, true), implode(', ', \Travelport\Util\EnumType\TypeCarrierCode::getValidValues())), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get SecondaryCarrier value
     * @return string|null
     */
    public function getSecondaryCarrier(): ?string
    {
        return $this->SecondaryCarrier;
    }
    /**
     * Set SecondaryCarrier value
     * @param string $secondaryCarrier
     * @return \Travelport\Util\StructType\IncludeAddlBookingCodeInfo
     */
    public function setSecondaryCarrier(?string $secondaryCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($secondaryCarrier) && !is_string($secondaryCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($secondaryCarrier, true), gettype($secondaryCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($secondaryCarrier) && mb_strlen((string) $secondaryCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $secondaryCarrier)), __LINE__);
        }
        $this->SecondaryCarrier = $secondaryCarrier;
        
        return $this;
    }
}
