<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellOfferSearchCriteria StructType
 * Meta information extracted from the WSDL
 * - documentation: Search criteria for HotelUpsellOffer.
 * @subpackage Structs
 */
class HotelUpsellOfferSearchCriteria extends AbstractStructBase
{
    /**
     * The RatePlanType
     * Meta information extracted from the WSDL
     * - documentation: Represents the rate plan code of room type for specified hotel property.
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $RatePlanType;
    /**
     * The CorporateDiscountID
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:CorporateDiscountID
     * @var \Travelport\Util\StructType\CorporateDiscountID|null
     */
    protected ?\Travelport\Util\StructType\CorporateDiscountID $CorporateDiscountID = null;
    /**
     * Constructor method for HotelUpsellOfferSearchCriteria
     * @uses HotelUpsellOfferSearchCriteria::setRatePlanType()
     * @uses HotelUpsellOfferSearchCriteria::setCorporateDiscountID()
     * @param string $ratePlanType
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     */
    public function __construct(string $ratePlanType, ?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null)
    {
        $this
            ->setRatePlanType($ratePlanType)
            ->setCorporateDiscountID($corporateDiscountID);
    }
    /**
     * Get RatePlanType value
     * @return string
     */
    public function getRatePlanType(): string
    {
        return $this->RatePlanType;
    }
    /**
     * Set RatePlanType value
     * @param string $ratePlanType
     * @return \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria
     */
    public function setRatePlanType(string $ratePlanType): self
    {
        // validation for constraint: string
        if (!is_null($ratePlanType) && !is_string($ratePlanType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ratePlanType, true), gettype($ratePlanType)), __LINE__);
        }
        $this->RatePlanType = $ratePlanType;
        
        return $this;
    }
    /**
     * Get CorporateDiscountID value
     * @return \Travelport\Util\StructType\CorporateDiscountID|null
     */
    public function getCorporateDiscountID(): ?\Travelport\Util\StructType\CorporateDiscountID
    {
        return $this->CorporateDiscountID;
    }
    /**
     * Set CorporateDiscountID value
     * @param \Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID
     * @return \Travelport\Util\StructType\HotelUpsellOfferSearchCriteria
     */
    public function setCorporateDiscountID(?\Travelport\Util\StructType\CorporateDiscountID $corporateDiscountID = null): self
    {
        $this->CorporateDiscountID = $corporateDiscountID;
        
        return $this;
    }
}
