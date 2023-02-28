<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PaymentRestriction StructType
 * @subpackage Structs
 */
class PaymentRestriction extends AbstractStructBase
{
    /**
     * The CardRestriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: CardRestriction
     * @var \Travelport\Hotel\StructType\CardRestriction[]
     */
    protected ?array $CardRestriction = null;
    /**
     * The AddressRestriction
     * Meta information extracted from the WSDL
     * - ref: AddressRestriction
     * @var \Travelport\Hotel\StructType\AddressRestriction|null
     */
    protected ?\Travelport\Hotel\StructType\AddressRestriction $AddressRestriction = null;
    /**
     * Constructor method for PaymentRestriction
     * @uses PaymentRestriction::setCardRestriction()
     * @uses PaymentRestriction::setAddressRestriction()
     * @param \Travelport\Hotel\StructType\CardRestriction[] $cardRestriction
     * @param \Travelport\Hotel\StructType\AddressRestriction $addressRestriction
     */
    public function __construct(?array $cardRestriction = null, ?\Travelport\Hotel\StructType\AddressRestriction $addressRestriction = null)
    {
        $this
            ->setCardRestriction($cardRestriction)
            ->setAddressRestriction($addressRestriction);
    }
    /**
     * Get CardRestriction value
     * @return \Travelport\Hotel\StructType\CardRestriction[]
     */
    public function getCardRestriction(): ?array
    {
        return $this->CardRestriction;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setCardRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCardRestriction method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardRestrictionForArrayConstraintFromSetCardRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentRestrictionCardRestrictionItem) {
            // validation for constraint: itemType
            if (!$paymentRestrictionCardRestrictionItem instanceof \Travelport\Hotel\StructType\CardRestriction) {
                $invalidValues[] = is_object($paymentRestrictionCardRestrictionItem) ? get_class($paymentRestrictionCardRestrictionItem) : sprintf('%s(%s)', gettype($paymentRestrictionCardRestrictionItem), var_export($paymentRestrictionCardRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CardRestriction property can only contain items of type \Travelport\Hotel\StructType\CardRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CardRestriction[] $cardRestriction
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function setCardRestriction(?array $cardRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($cardRestrictionArrayErrorMessage = self::validateCardRestrictionForArrayConstraintFromSetCardRestriction($cardRestriction))) {
            throw new InvalidArgumentException($cardRestrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($cardRestriction) && count($cardRestriction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($cardRestriction)), __LINE__);
        }
        $this->CardRestriction = $cardRestriction;
        
        return $this;
    }
    /**
     * Add item to CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\CardRestriction $item
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function addToCardRestriction(\Travelport\Hotel\StructType\CardRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\CardRestriction) {
            throw new InvalidArgumentException(sprintf('The CardRestriction property can only contain items of type \Travelport\Hotel\StructType\CardRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->CardRestriction) && count($this->CardRestriction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->CardRestriction)), __LINE__);
        }
        $this->CardRestriction[] = $item;
        
        return $this;
    }
    /**
     * Get AddressRestriction value
     * @return \Travelport\Hotel\StructType\AddressRestriction|null
     */
    public function getAddressRestriction(): ?\Travelport\Hotel\StructType\AddressRestriction
    {
        return $this->AddressRestriction;
    }
    /**
     * Set AddressRestriction value
     * @param \Travelport\Hotel\StructType\AddressRestriction $addressRestriction
     * @return \Travelport\Hotel\StructType\PaymentRestriction
     */
    public function setAddressRestriction(?\Travelport\Hotel\StructType\AddressRestriction $addressRestriction = null): self
    {
        $this->AddressRestriction = $addressRestriction;
        
        return $this;
    }
}
