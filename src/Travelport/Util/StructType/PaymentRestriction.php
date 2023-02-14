<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

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
     * @var \Travelport\Util\StructType\CardRestriction[]
     */
    protected ?array $CardRestriction = null;
    /**
     * The AddressRestriction
     * Meta information extracted from the WSDL
     * - ref: AddressRestriction
     * @var \Travelport\Util\StructType\AddressRestriction|null
     */
    protected ?\Travelport\Util\StructType\AddressRestriction $AddressRestriction = null;
    /**
     * Constructor method for PaymentRestriction
     * @uses PaymentRestriction::setCardRestriction()
     * @uses PaymentRestriction::setAddressRestriction()
     * @param \Travelport\Util\StructType\CardRestriction[] $cardRestriction
     * @param \Travelport\Util\StructType\AddressRestriction $addressRestriction
     */
    public function __construct(?array $cardRestriction = null, ?\Travelport\Util\StructType\AddressRestriction $addressRestriction = null)
    {
        $this
            ->setCardRestriction($cardRestriction)
            ->setAddressRestriction($addressRestriction);
    }
    /**
     * Get CardRestriction value
     * @return \Travelport\Util\StructType\CardRestriction[]
     */
    public function getCardRestriction(): ?array
    {
        return $this->CardRestriction;
    }
    /**
     * This method is responsible for validating the values passed to the setCardRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCardRestriction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCardRestrictionForArrayConstraintsFromSetCardRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $paymentRestrictionCardRestrictionItem) {
            // validation for constraint: itemType
            if (!$paymentRestrictionCardRestrictionItem instanceof \Travelport\Util\StructType\CardRestriction) {
                $invalidValues[] = is_object($paymentRestrictionCardRestrictionItem) ? get_class($paymentRestrictionCardRestrictionItem) : sprintf('%s(%s)', gettype($paymentRestrictionCardRestrictionItem), var_export($paymentRestrictionCardRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The CardRestriction property can only contain items of type \Travelport\Util\StructType\CardRestriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set CardRestriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\CardRestriction[] $cardRestriction
     * @return \Travelport\Util\StructType\PaymentRestriction
     */
    public function setCardRestriction(?array $cardRestriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($cardRestrictionArrayErrorMessage = self::validateCardRestrictionForArrayConstraintsFromSetCardRestriction($cardRestriction))) {
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
     * @param \Travelport\Util\StructType\CardRestriction $item
     * @return \Travelport\Util\StructType\PaymentRestriction
     */
    public function addToCardRestriction(\Travelport\Util\StructType\CardRestriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\CardRestriction) {
            throw new InvalidArgumentException(sprintf('The CardRestriction property can only contain items of type \Travelport\Util\StructType\CardRestriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
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
     * @return \Travelport\Util\StructType\AddressRestriction|null
     */
    public function getAddressRestriction(): ?\Travelport\Util\StructType\AddressRestriction
    {
        return $this->AddressRestriction;
    }
    /**
     * Set AddressRestriction value
     * @param \Travelport\Util\StructType\AddressRestriction $addressRestriction
     * @return \Travelport\Util\StructType\PaymentRestriction
     */
    public function setAddressRestriction(?\Travelport\Util\StructType\AddressRestriction $addressRestriction = null): self
    {
        $this->AddressRestriction = $addressRestriction;
        
        return $this;
    }
}
