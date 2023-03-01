<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
    public ?int $Code = null;
    /**
     * The Quantity
     * Meta information extracted from the WSDL
     * - documentation: Bed Quantity.
     * @var int|null
     */
    public ?int $Quantity = null;
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
        $this->Quantity = $quantity;
        
        return $this;
    }
}
