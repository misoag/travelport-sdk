<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for HotelUpsellSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Hotel upsell search criteria result having matching offer and qualifies.
 * @subpackage Structs
 */
class HotelUpsellSearchResult extends AbstractStructBase
{
    /**
     * The HotelUpsellQualify
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: HotelUpsellQualify
     * @var \Travelport\Util\StructType\HotelUpsellQualify[]
     */
    protected ?array $HotelUpsellQualify = null;
    /**
     * The HotelUpsellOffer
     * Meta information extracted from the WSDL
     * - ref: HotelUpsellOffer
     * @var \Travelport\Util\StructType\HotelUpsellOffer|null
     */
    protected ?\Travelport\Util\StructType\HotelUpsellOffer $HotelUpsellOffer = null;
    /**
     * Constructor method for HotelUpsellSearchResult
     * @uses HotelUpsellSearchResult::setHotelUpsellQualify()
     * @uses HotelUpsellSearchResult::setHotelUpsellOffer()
     * @param \Travelport\Util\StructType\HotelUpsellQualify[] $hotelUpsellQualify
     * @param \Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer
     */
    public function __construct(?array $hotelUpsellQualify = null, ?\Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer = null)
    {
        $this
            ->setHotelUpsellQualify($hotelUpsellQualify)
            ->setHotelUpsellOffer($hotelUpsellOffer);
    }
    /**
     * Get HotelUpsellQualify value
     * @return \Travelport\Util\StructType\HotelUpsellQualify[]
     */
    public function getHotelUpsellQualify(): ?array
    {
        return $this->HotelUpsellQualify;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setHotelUpsellQualify method
     * This method is willingly generated in order to preserve the one-line inline validation within the setHotelUpsellQualify method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateHotelUpsellQualifyForArrayConstraintFromSetHotelUpsellQualify(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $hotelUpsellSearchResultHotelUpsellQualifyItem) {
            // validation for constraint: itemType
            if (!$hotelUpsellSearchResultHotelUpsellQualifyItem instanceof \Travelport\Util\StructType\HotelUpsellQualify) {
                $invalidValues[] = is_object($hotelUpsellSearchResultHotelUpsellQualifyItem) ? get_class($hotelUpsellSearchResultHotelUpsellQualifyItem) : sprintf('%s(%s)', gettype($hotelUpsellSearchResultHotelUpsellQualifyItem), var_export($hotelUpsellSearchResultHotelUpsellQualifyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The HotelUpsellQualify property can only contain items of type \Travelport\Util\StructType\HotelUpsellQualify, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set HotelUpsellQualify value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellQualify[] $hotelUpsellQualify
     * @return \Travelport\Util\StructType\HotelUpsellSearchResult
     */
    public function setHotelUpsellQualify(?array $hotelUpsellQualify = null): self
    {
        // validation for constraint: array
        if ('' !== ($hotelUpsellQualifyArrayErrorMessage = self::validateHotelUpsellQualifyForArrayConstraintFromSetHotelUpsellQualify($hotelUpsellQualify))) {
            throw new InvalidArgumentException($hotelUpsellQualifyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($hotelUpsellQualify) && count($hotelUpsellQualify) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($hotelUpsellQualify)), __LINE__);
        }
        $this->HotelUpsellQualify = $hotelUpsellQualify;
        
        return $this;
    }
    /**
     * Add item to HotelUpsellQualify value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\HotelUpsellQualify $item
     * @return \Travelport\Util\StructType\HotelUpsellSearchResult
     */
    public function addToHotelUpsellQualify(\Travelport\Util\StructType\HotelUpsellQualify $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\HotelUpsellQualify) {
            throw new InvalidArgumentException(sprintf('The HotelUpsellQualify property can only contain items of type \Travelport\Util\StructType\HotelUpsellQualify, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->HotelUpsellQualify) && count($this->HotelUpsellQualify) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->HotelUpsellQualify)), __LINE__);
        }
        $this->HotelUpsellQualify[] = $item;
        
        return $this;
    }
    /**
     * Get HotelUpsellOffer value
     * @return \Travelport\Util\StructType\HotelUpsellOffer|null
     */
    public function getHotelUpsellOffer(): ?\Travelport\Util\StructType\HotelUpsellOffer
    {
        return $this->HotelUpsellOffer;
    }
    /**
     * Set HotelUpsellOffer value
     * @param \Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer
     * @return \Travelport\Util\StructType\HotelUpsellSearchResult
     */
    public function setHotelUpsellOffer(?\Travelport\Util\StructType\HotelUpsellOffer $hotelUpsellOffer = null): self
    {
        $this->HotelUpsellOffer = $hotelUpsellOffer;
        
        return $this;
    }
}
