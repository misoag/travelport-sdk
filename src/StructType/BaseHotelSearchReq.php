<?php

declare(strict_types=1);

namespace StructType;

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
     * @var \StructType\HotelSearchLocation|null
     */
    protected ?\StructType\HotelSearchLocation $HotelSearchLocation = null;
    /**
     * The HotelSearchModifiers
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: HotelSearchModifiers
     * @var \StructType\HotelSearchModifiers|null
     */
    protected ?\StructType\HotelSearchModifiers $HotelSearchModifiers = null;
    /**
     * The HotelStay
     * Meta information extracted from the WSDL
     * - ref: HotelStay
     * @var \StructType\HotelStay|null
     */
    protected ?\StructType\HotelStay $HotelStay = null;
    /**
     * The PointOfSale
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:PointOfSale
     * @var \StructType\PointOfSale|null
     */
    protected ?\StructType\PointOfSale $PointOfSale = null;
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
     * @param \StructType\HotelSearchLocation $hotelSearchLocation
     * @param \StructType\HotelSearchModifiers $hotelSearchModifiers
     * @param \StructType\HotelStay $hotelStay
     * @param \StructType\PointOfSale $pointOfSale
     * @param string $policyReference
     */
    public function __construct(?\StructType\HotelSearchLocation $hotelSearchLocation = null, ?\StructType\HotelSearchModifiers $hotelSearchModifiers = null, ?\StructType\HotelStay $hotelStay = null, ?\StructType\PointOfSale $pointOfSale = null, ?string $policyReference = null)
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
     * @return \StructType\HotelSearchLocation|null
     */
    public function getHotelSearchLocation(): ?\StructType\HotelSearchLocation
    {
        return $this->HotelSearchLocation;
    }
    /**
     * Set HotelSearchLocation value
     * @param \StructType\HotelSearchLocation $hotelSearchLocation
     * @return \StructType\BaseHotelSearchReq
     */
    public function setHotelSearchLocation(?\StructType\HotelSearchLocation $hotelSearchLocation = null): self
    {
        $this->HotelSearchLocation = $hotelSearchLocation;
        
        return $this;
    }
    /**
     * Get HotelSearchModifiers value
     * @return \StructType\HotelSearchModifiers|null
     */
    public function getHotelSearchModifiers(): ?\StructType\HotelSearchModifiers
    {
        return $this->HotelSearchModifiers;
    }
    /**
     * Set HotelSearchModifiers value
     * @param \StructType\HotelSearchModifiers $hotelSearchModifiers
     * @return \StructType\BaseHotelSearchReq
     */
    public function setHotelSearchModifiers(?\StructType\HotelSearchModifiers $hotelSearchModifiers = null): self
    {
        $this->HotelSearchModifiers = $hotelSearchModifiers;
        
        return $this;
    }
    /**
     * Get HotelStay value
     * @return \StructType\HotelStay|null
     */
    public function getHotelStay(): ?\StructType\HotelStay
    {
        return $this->HotelStay;
    }
    /**
     * Set HotelStay value
     * @param \StructType\HotelStay $hotelStay
     * @return \StructType\BaseHotelSearchReq
     */
    public function setHotelStay(?\StructType\HotelStay $hotelStay = null): self
    {
        $this->HotelStay = $hotelStay;
        
        return $this;
    }
    /**
     * Get PointOfSale value
     * @return \StructType\PointOfSale|null
     */
    public function getPointOfSale(): ?\StructType\PointOfSale
    {
        return $this->PointOfSale;
    }
    /**
     * Set PointOfSale value
     * @param \StructType\PointOfSale $pointOfSale
     * @return \StructType\BaseHotelSearchReq
     */
    public function setPointOfSale(?\StructType\PointOfSale $pointOfSale = null): self
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
     * @return \StructType\BaseHotelSearchReq
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
