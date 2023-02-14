<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseHotelSearchReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Base hotel Search Request
 * @subpackage Structs
 */
class BaseHotelSearchReq extends BaseSearchReq
{
    /**
     * The HotelSearchLocation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchLocation
     * @var \Travelport\Hotel\StructType\HotelSearchLocation|null
     */
    protected ?\Travelport\Hotel\StructType\HotelSearchLocation $HotelSearchLocation = null;
    /**
     * The HotelSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchModifiers
     * @var \Travelport\Hotel\StructType\HotelSearchModifiers|null
     */
    protected ?\Travelport\Hotel\StructType\HotelSearchModifiers $HotelSearchModifiers = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \Travelport\Hotel\StructType\HotelStay|null
     */
    protected ?\Travelport\Hotel\StructType\HotelStay $HotelStay = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \Travelport\Hotel\StructType\PointOfSale|null
     */
    protected ?\Travelport\Hotel\StructType\PointOfSale $PointOfSale = null;
    /**
     * The PolicyReference
     * Meta information extracted from the WSDL
     * - documentation: This attribute will be used to pass in a value on the request which would be used to link to a ‘Policy Group’ in a policy engine external to UAPI. | Type for PolicyReference attribute.
     * - base: xs:string
     * - maxLength: 20
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    protected ?string $PolicyReference = null;
    /**
     * Constructor method for BaseHotelSearchReq
     * @uses BaseHotelSearchReq::setHotelSearchLocation()
     * @uses BaseHotelSearchReq::setHotelSearchModifiers()
     * @uses BaseHotelSearchReq::setHotelStay()
     * @uses BaseHotelSearchReq::setPointOfSale()
     * @uses BaseHotelSearchReq::setPolicyReference()
     * @param \Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation
     * @param \Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @param \Travelport\Hotel\StructType\PointOfSale $pointOfSale
     * @param string $policyReference
     */
    public function __construct(?\Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation = null, ?\Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers = null, ?\Travelport\Hotel\StructType\HotelStay $hotelStay = null, ?\Travelport\Hotel\StructType\PointOfSale $pointOfSale = null, ?string $policyReference = null)
    {
        $this
            ->setHotelSearchLocation($hotelSearchLocation)
            ->setHotelSearchModifiers($hotelSearchModifiers)
            ->setHotelStay($hotelStay)
            ->setPointOfSale($pointOfSale)
            ->setPolicyReference($policyReference);
    }
    /**
     * Get HotelSearchLocation value
     * @return \Travelport\Hotel\StructType\HotelSearchLocation|null
     */
    public function getHotelSearchLocation(): ?\Travelport\Hotel\StructType\HotelSearchLocation
    {
        return $this->HotelSearchLocation;
    }
    /**
     * Set HotelSearchLocation value
     * @param \Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation
     * @return \Travelport\Hotel\StructType\BaseHotelSearchReq
     */
    public function setHotelSearchLocation(?\Travelport\Hotel\StructType\HotelSearchLocation $hotelSearchLocation = null): self
    {
        $this->HotelSearchLocation = $hotelSearchLocation;
        
        return $this;
    }
    /**
     * Get HotelSearchModifiers value
     * @return \Travelport\Hotel\StructType\HotelSearchModifiers|null
     */
    public function getHotelSearchModifiers(): ?\Travelport\Hotel\StructType\HotelSearchModifiers
    {
        return $this->HotelSearchModifiers;
    }
    /**
     * Set HotelSearchModifiers value
     * @param \Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers
     * @return \Travelport\Hotel\StructType\BaseHotelSearchReq
     */
    public function setHotelSearchModifiers(?\Travelport\Hotel\StructType\HotelSearchModifiers $hotelSearchModifiers = null): self
    {
        $this->HotelSearchModifiers = $hotelSearchModifiers;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \Travelport\Hotel\StructType\HotelStay|null
     */
    public function getHotelStay(): ?\Travelport\Hotel\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \Travelport\Hotel\StructType\HotelStay $hotelStay
     * @return \Travelport\Hotel\StructType\BaseHotelSearchReq
     */
    public function setHotelStay(?\Travelport\Hotel\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \Travelport\Hotel\StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\Travelport\Hotel\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \Travelport\Hotel\StructType\PointOfSale $pointOfSale
     * @return \Travelport\Hotel\StructType\BaseHotelSearchReq
     */
    public function setPointOfSale(?\Travelport\Hotel\StructType\PointOfSale $pointOfSale = null): self
    {
        $this->PointOfSale = $pointOfSale;
        
        return $this;
    }
    /**
     * Get PolicyReference value
     * @return string|null
     */
    public function getPolicyReference(): ?string
    {
        return $this->PolicyReference;
    }
    /**
     * Set PolicyReference value
     * @param string $policyReference
     * @return \Travelport\Hotel\StructType\BaseHotelSearchReq
     */
    public function setPolicyReference(?string $policyReference = null): self
    {
        // validation for constraint: string
        if (!is_null($policyReference) && !is_string($policyReference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($policyReference, true), gettype($policyReference)), __LINE__);
        }
        // validation for constraint: maxLength(20)
        if (!is_null($policyReference) && mb_strlen((string) $policyReference) > 20) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 20', mb_strlen((string) $policyReference)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($policyReference) && mb_strlen((string) $policyReference) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $policyReference)), __LINE__);
        }
        $this->PolicyReference = $policyReference;
        
        return $this;
    }
}
