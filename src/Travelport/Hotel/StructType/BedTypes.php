<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BedTypes StructType
 * Meta information extracted from the WSDL
 * - documentation: Bed types in the rate plan.
 * @subpackage Structs
 */
class BedTypes extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Bed Type Code. Uses Open Travel Code List Room Amenity Type (RMA). Encode/decode data in Util ReferenceDataRetrieveReq TypeCode=“HotelAmenities”. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * @var int|null
     */
    protected ?int $Code = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Bed Quantity.
     * @var int|null
     */
    protected ?int $Quantity = null;
    /**
     * Constructor method for BedTypes
     * @uses BedTypes::setCode()
     * @uses BedTypes::setQuantity()
     * @param int $code
     * @param int $quantity
     */
    public function __construct(?int $code = null, ?int $quantity = null)
    {
        $this
            ->setCode($code)
            ->setQuantity($quantity);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\Hotel\StructType\BedTypes
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get Quantity value
     * @return int|null
     */
    public function getQuantity(): ?int
    {
        return $this->Quantity;
    }
    /**
     * Set Quantity value
     * @param int $quantity
     * @return \Travelport\Hotel\StructType\BedTypes
     */
    public function setQuantity(?int $quantity = null): self
    {
        // validation for constraint: int
        if (!is_null($quantity) && !(is_int($quantity) || ctype_digit($quantity))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($quantity, true), gettype($quantity)), __LINE__);
        }
        $this->Quantity = $quantity;
        
        return $this;
    }
}
