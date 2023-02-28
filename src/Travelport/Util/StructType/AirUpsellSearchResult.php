<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirUpsellSearchResult StructType
 * Meta information extracted from the WSDL
 * - documentation: Air upsell search criteria result having matching offer and qualifies.
 * @subpackage Structs
 */
class AirUpsellSearchResult extends AbstractStructBase
{
    /**
     * The AirUpsellQualify
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: AirUpsellQualify
     * @var \Travelport\Util\StructType\AirUpsellQualify[]
     */
    protected ?array $AirUpsellQualify = null;
    /**
     * The AirUpsellOffer
     * Meta information extracted from the WSDL
     * - ref: AirUpsellOffer
     * @var \Travelport\Util\StructType\AirUpsellOffer|null
     */
    protected ?\Travelport\Util\StructType\AirUpsellOffer $AirUpsellOffer = null;
    /**
     * Constructor method for AirUpsellSearchResult
     * @uses AirUpsellSearchResult::setAirUpsellQualify()
     * @uses AirUpsellSearchResult::setAirUpsellOffer()
     * @param \Travelport\Util\StructType\AirUpsellQualify[] $airUpsellQualify
     * @param \Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer
     */
    public function __construct(?array $airUpsellQualify = null, ?\Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer = null)
    {
        $this
            ->setAirUpsellQualify($airUpsellQualify)
            ->setAirUpsellOffer($airUpsellOffer);
    }
    /**
     * Get AirUpsellQualify value
     * @return \Travelport\Util\StructType\AirUpsellQualify[]
     */
    public function getAirUpsellQualify(): ?array
    {
        return $this->AirUpsellQualify;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setAirUpsellQualify method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirUpsellQualify method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirUpsellQualifyForArrayConstraintFromSetAirUpsellQualify(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $airUpsellSearchResultAirUpsellQualifyItem) {
            // validation for constraint: itemType
            if (!$airUpsellSearchResultAirUpsellQualifyItem instanceof \Travelport\Util\StructType\AirUpsellQualify) {
                $invalidValues[] = is_object($airUpsellSearchResultAirUpsellQualifyItem) ? get_class($airUpsellSearchResultAirUpsellQualifyItem) : sprintf('%s(%s)', gettype($airUpsellSearchResultAirUpsellQualifyItem), var_export($airUpsellSearchResultAirUpsellQualifyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirUpsellQualify property can only contain items of type \Travelport\Util\StructType\AirUpsellQualify, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirUpsellQualify value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellQualify[] $airUpsellQualify
     * @return \Travelport\Util\StructType\AirUpsellSearchResult
     */
    public function setAirUpsellQualify(?array $airUpsellQualify = null): self
    {
        // validation for constraint: array
        if ('' !== ($airUpsellQualifyArrayErrorMessage = self::validateAirUpsellQualifyForArrayConstraintFromSetAirUpsellQualify($airUpsellQualify))) {
            throw new InvalidArgumentException($airUpsellQualifyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airUpsellQualify) && count($airUpsellQualify) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airUpsellQualify)), __LINE__);
        }
        $this->AirUpsellQualify = $airUpsellQualify;
        
        return $this;
    }
    /**
     * Add item to AirUpsellQualify value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AirUpsellQualify $item
     * @return \Travelport\Util\StructType\AirUpsellSearchResult
     */
    public function addToAirUpsellQualify(\Travelport\Util\StructType\AirUpsellQualify $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AirUpsellQualify) {
            throw new InvalidArgumentException(sprintf('The AirUpsellQualify property can only contain items of type \Travelport\Util\StructType\AirUpsellQualify, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirUpsellQualify) && count($this->AirUpsellQualify) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirUpsellQualify)), __LINE__);
        }
        $this->AirUpsellQualify[] = $item;
        
        return $this;
    }
    /**
     * Get AirUpsellOffer value
     * @return \Travelport\Util\StructType\AirUpsellOffer|null
     */
    public function getAirUpsellOffer(): ?\Travelport\Util\StructType\AirUpsellOffer
    {
        return $this->AirUpsellOffer;
    }
    /**
     * Set AirUpsellOffer value
     * @param \Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer
     * @return \Travelport\Util\StructType\AirUpsellSearchResult
     */
    public function setAirUpsellOffer(?\Travelport\Util\StructType\AirUpsellOffer $airUpsellOffer = null): self
    {
        $this->AirUpsellOffer = $airUpsellOffer;
        
        return $this;
    }
}
