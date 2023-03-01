<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirMerchandisingDetailsReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to retrieve brand details and optional services included in the brand
 * @subpackage Structs
 */
class AirMerchandisingDetailsReq extends BaseReq
{
    /**
     * The MerchandisingDetails
     * Meta information extracted from the WSDL
     * - choice: MerchandisingDetails | OptionalServiceModifiers | MerchandisingAvailabilityDetails
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: MerchandisingDetails
     * @var \Travelport\Air\StructType\MerchandisingDetails|null
     */
    public ?\Travelport\Air\StructType\MerchandisingDetails $MerchandisingDetails = null;
    /**
     * The OptionalServiceModifiers
     * Meta information extracted from the WSDL
     * - choice: MerchandisingDetails | OptionalServiceModifiers | MerchandisingAvailabilityDetails
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: OptionalServiceModifiers
     * @var \Travelport\Air\StructType\OptionalServiceModifiers|null
     */
    public ?\Travelport\Air\StructType\OptionalServiceModifiers $OptionalServiceModifiers = null;
    /**
     * The MerchandisingAvailabilityDetails
     * Meta information extracted from the WSDL
     * - choice: MerchandisingDetails | OptionalServiceModifiers | MerchandisingAvailabilityDetails
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - ref: MerchandisingAvailabilityDetails
     * @var \Travelport\Air\StructType\MerchandisingAvailabilityDetails|null
     */
    public ?\Travelport\Air\StructType\MerchandisingAvailabilityDetails $MerchandisingAvailabilityDetails = null;
    /**
     * Constructor method for AirMerchandisingDetailsReq
     * @uses AirMerchandisingDetailsReq::setMerchandisingDetails()
     * @uses AirMerchandisingDetailsReq::setOptionalServiceModifiers()
     * @uses AirMerchandisingDetailsReq::setMerchandisingAvailabilityDetails()
     * @param \Travelport\Air\StructType\MerchandisingDetails $merchandisingDetails
     * @param \Travelport\Air\StructType\OptionalServiceModifiers $optionalServiceModifiers
     * @param \Travelport\Air\StructType\MerchandisingAvailabilityDetails $merchandisingAvailabilityDetails
     */
    public function __construct(?\Travelport\Air\StructType\MerchandisingDetails $merchandisingDetails = null, ?\Travelport\Air\StructType\OptionalServiceModifiers $optionalServiceModifiers = null, ?\Travelport\Air\StructType\MerchandisingAvailabilityDetails $merchandisingAvailabilityDetails = null)
    {
        $this
            ->setMerchandisingDetails($merchandisingDetails)
            ->setOptionalServiceModifiers($optionalServiceModifiers)
            ->setMerchandisingAvailabilityDetails($merchandisingAvailabilityDetails);
    }
    /**
     * Get MerchandisingDetails value
     * @return \Travelport\Air\StructType\MerchandisingDetails|null
     */
    public function getMerchandisingDetails(): ?\Travelport\Air\StructType\MerchandisingDetails
    {
        return $this->MerchandisingDetails ?? null;
    }
    /**
     * Set MerchandisingDetails value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\MerchandisingDetails $merchandisingDetails
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsReq
     */
    public function setMerchandisingDetails(?\Travelport\Air\StructType\MerchandisingDetails $merchandisingDetails = null): self
    {
        if (is_null($merchandisingDetails) || (is_array($merchandisingDetails) && empty($merchandisingDetails))) {
            unset($this->MerchandisingDetails);
        } else {
            $this->MerchandisingDetails = $merchandisingDetails;
        }
        
        return $this;
    }
    /**
     * Get OptionalServiceModifiers value
     * @return \Travelport\Air\StructType\OptionalServiceModifiers|null
     */
    public function getOptionalServiceModifiers(): ?\Travelport\Air\StructType\OptionalServiceModifiers
    {
        return $this->OptionalServiceModifiers ?? null;
    }
    /**
     * Set OptionalServiceModifiers value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\OptionalServiceModifiers $optionalServiceModifiers
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsReq
     */
    public function setOptionalServiceModifiers(?\Travelport\Air\StructType\OptionalServiceModifiers $optionalServiceModifiers = null): self
    {
        if (is_null($optionalServiceModifiers) || (is_array($optionalServiceModifiers) && empty($optionalServiceModifiers))) {
            unset($this->OptionalServiceModifiers);
        } else {
            $this->OptionalServiceModifiers = $optionalServiceModifiers;
        }
        
        return $this;
    }
    /**
     * Get MerchandisingAvailabilityDetails value
     * @return \Travelport\Air\StructType\MerchandisingAvailabilityDetails|null
     */
    public function getMerchandisingAvailabilityDetails(): ?\Travelport\Air\StructType\MerchandisingAvailabilityDetails
    {
        return $this->MerchandisingAvailabilityDetails ?? null;
    }
    /**
     * Set MerchandisingAvailabilityDetails value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\MerchandisingAvailabilityDetails $merchandisingAvailabilityDetails
     * @return \Travelport\Air\StructType\AirMerchandisingDetailsReq
     */
    public function setMerchandisingAvailabilityDetails(?\Travelport\Air\StructType\MerchandisingAvailabilityDetails $merchandisingAvailabilityDetails = null): self
    {
        if (is_null($merchandisingAvailabilityDetails) || (is_array($merchandisingAvailabilityDetails) && empty($merchandisingAvailabilityDetails))) {
            unset($this->MerchandisingAvailabilityDetails);
        } else {
            $this->MerchandisingAvailabilityDetails = $merchandisingAvailabilityDetails;
        }
        
        return $this;
    }
}
