<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PromoCodes StructType
 * @subpackage Structs
 */
class PromoCodes extends AbstractStructBase
{
    /**
     * The PromoCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: PromoCode
     * @var \Travelport\UniversalRecord\StructType\PromoCode[]
     */
    protected array $PromoCode;
    /**
     * Constructor method for PromoCodes
     * @uses PromoCodes::setPromoCode()
     * @param \Travelport\UniversalRecord\StructType\PromoCode[] $promoCode
     */
    public function __construct(array $promoCode)
    {
        $this
            ->setPromoCode($promoCode);
    }
    /**
     * Get PromoCode value
     * @return \Travelport\UniversalRecord\StructType\PromoCode[]
     */
    public function getPromoCode(): array
    {
        return $this->PromoCode;
    }
    /**
     * This method is responsible for validating the values passed to the setPromoCode method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPromoCode method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePromoCodeForArrayConstraintsFromSetPromoCode(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $promoCodesPromoCodeItem) {
            // validation for constraint: itemType
            if (!$promoCodesPromoCodeItem instanceof \Travelport\UniversalRecord\StructType\PromoCode) {
                $invalidValues[] = is_object($promoCodesPromoCodeItem) ? get_class($promoCodesPromoCodeItem) : sprintf('%s(%s)', gettype($promoCodesPromoCodeItem), var_export($promoCodesPromoCodeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PromoCode property can only contain items of type \Travelport\UniversalRecord\StructType\PromoCode, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PromoCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromoCode[] $promoCode
     * @return \Travelport\UniversalRecord\StructType\PromoCodes
     */
    public function setPromoCode(array $promoCode): self
    {
        // validation for constraint: array
        if ('' !== ($promoCodeArrayErrorMessage = self::validatePromoCodeForArrayConstraintsFromSetPromoCode($promoCode))) {
            throw new InvalidArgumentException($promoCodeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($promoCode) && count($promoCode) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($promoCode)), __LINE__);
        }
        $this->PromoCode = $promoCode;
        
        return $this;
    }
    /**
     * Add item to PromoCode value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PromoCode $item
     * @return \Travelport\UniversalRecord\StructType\PromoCodes
     */
    public function addToPromoCode(\Travelport\UniversalRecord\StructType\PromoCode $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\PromoCode) {
            throw new InvalidArgumentException(sprintf('The PromoCode property can only contain items of type \Travelport\UniversalRecord\StructType\PromoCode, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PromoCode) && count($this->PromoCode) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PromoCode)), __LINE__);
        }
        $this->PromoCode[] = $item;
        
        return $this;
    }
}
