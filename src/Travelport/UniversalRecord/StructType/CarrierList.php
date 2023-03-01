<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CarrierList StructType
 * @subpackage Structs
 */
class CarrierList extends AbstractStructBase
{
    /**
     * The IncludeCarrier
     * Meta information extracted from the WSDL
     * - use: required
     * @var bool
     */
    public bool $IncludeCarrier;
    /**
     * The CarrierCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - ref: CarrierCode
     * @var \Travelport\UniversalRecord\StructType\CarrierCode[]
     */
    public ?array $CarrierCode = null;
    /**
     * Constructor method for CarrierList
     * @uses CarrierList::setIncludeCarrier()
     * @uses CarrierList::setCarrierCode()
     * @param bool $includeCarrier
     * @param \Travelport\UniversalRecord\StructType\CarrierCode[] $carrierCode
     */
    public function __construct(bool $includeCarrier, ?array $carrierCode = null)
    {
        $this
            ->setIncludeCarrier($includeCarrier)
            ->setCarrierCode($carrierCode);
    }
    /**
     * Get IncludeCarrier value
     * @return bool
     */
    public function getIncludeCarrier(): bool
    {
        return $this->IncludeCarrier;
    }
    /**
     * Set IncludeCarrier value
     * @param bool $includeCarrier
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function setIncludeCarrier(bool $includeCarrier): self
    {
        $this->IncludeCarrier = $includeCarrier;
        
        return $this;
    }
    /**
     * Get CarrierCode value
     * @return \Travelport\UniversalRecord\StructType\CarrierCode[]
     */
    public function getCarrierCode(): ?array
    {
        return $this->CarrierCode;
    }
    /**
     * Set CarrierCode value
     * @param \Travelport\UniversalRecord\StructType\CarrierCode[] $carrierCode
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function setCarrierCode(?array $carrierCode = null): self
    {
        $this->CarrierCode = $carrierCode;
        
        return $this;
    }
    /**
     * Add item to CarrierCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\CarrierCode $item
     * @return \Travelport\UniversalRecord\StructType\CarrierList
     */
    public function addToCarrierCode(\Travelport\UniversalRecord\StructType\CarrierCode $item): self
    {
        $this->CarrierCode[] = $item;
        
        return $this;
    }
}
