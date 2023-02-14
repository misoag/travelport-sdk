<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DetailedBillingInformation StructType
 * Meta information extracted from the WSDL
 * - documentation: Returns related air pricing infos. | Container to send Detailed Billing Information for ticketing
 * @subpackage Structs
 */
class DetailedBillingInformation extends AbstractStructBase
{
    /**
     * The AirPricingInfoRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 1
     * - ref: AirPricingInfoRef
     * @var \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    protected array $AirPricingInfoRef;
    /**
     * The FormOfPaymentRef
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: common:FormOfPaymentRef
     * @var \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $FormOfPaymentRef = null;
    /**
     * The BillingDetailItem
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: BillingDetailItem
     * @var \Travelport\UniversalRecord\StructType\BillingDetailItem[]
     */
    protected ?array $BillingDetailItem = null;
    /**
     * Constructor method for DetailedBillingInformation
     * @uses DetailedBillingInformation::setAirPricingInfoRef()
     * @uses DetailedBillingInformation::setFormOfPaymentRef()
     * @uses DetailedBillingInformation::setBillingDetailItem()
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem[] $billingDetailItem
     */
    public function __construct(array $airPricingInfoRef, ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null, ?array $billingDetailItem = null)
    {
        $this
            ->setAirPricingInfoRef($airPricingInfoRef)
            ->setFormOfPaymentRef($formOfPaymentRef)
            ->setBillingDetailItem($billingDetailItem);
    }
    /**
     * Get AirPricingInfoRef value
     * @return \Travelport\UniversalRecord\StructType\AirPricingInfoRef[]
     */
    public function getAirPricingInfoRef(): array
    {
        return $this->AirPricingInfoRef;
    }
    /**
     * This method is responsible for validating the values passed to the setAirPricingInfoRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAirPricingInfoRef method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $detailedBillingInformationAirPricingInfoRefItem) {
            // validation for constraint: itemType
            if (!$detailedBillingInformationAirPricingInfoRefItem instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
                $invalidValues[] = is_object($detailedBillingInformationAirPricingInfoRefItem) ? get_class($detailedBillingInformationAirPricingInfoRefItem) : sprintf('%s(%s)', gettype($detailedBillingInformationAirPricingInfoRefItem), var_export($detailedBillingInformationAirPricingInfoRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef[] $airPricingInfoRef
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setAirPricingInfoRef(array $airPricingInfoRef): self
    {
        // validation for constraint: array
        if ('' !== ($airPricingInfoRefArrayErrorMessage = self::validateAirPricingInfoRefForArrayConstraintsFromSetAirPricingInfoRef($airPricingInfoRef))) {
            throw new InvalidArgumentException($airPricingInfoRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($airPricingInfoRef) && count($airPricingInfoRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($airPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef = $airPricingInfoRef;
        
        return $this;
    }
    /**
     * Add item to AirPricingInfoRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\AirPricingInfoRef $item
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function addToAirPricingInfoRef(\Travelport\UniversalRecord\StructType\AirPricingInfoRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\AirPricingInfoRef) {
            throw new InvalidArgumentException(sprintf('The AirPricingInfoRef property can only contain items of type \Travelport\UniversalRecord\StructType\AirPricingInfoRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AirPricingInfoRef) && count($this->AirPricingInfoRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AirPricingInfoRef)), __LINE__);
        }
        $this->AirPricingInfoRef[] = $item;
        
        return $this;
    }
    /**
     * Get FormOfPaymentRef value
     * @return \Travelport\UniversalRecord\StructType\FormOfPaymentRef|null
     */
    public function getFormOfPaymentRef(): ?\Travelport\UniversalRecord\StructType\FormOfPaymentRef
    {
        return $this->FormOfPaymentRef;
    }
    /**
     * Set FormOfPaymentRef value
     * @param \Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setFormOfPaymentRef(?\Travelport\UniversalRecord\StructType\FormOfPaymentRef $formOfPaymentRef = null): self
    {
        $this->FormOfPaymentRef = $formOfPaymentRef;
        
        return $this;
    }
    /**
     * Get BillingDetailItem value
     * @return \Travelport\UniversalRecord\StructType\BillingDetailItem[]
     */
    public function getBillingDetailItem(): ?array
    {
        return $this->BillingDetailItem;
    }
    /**
     * This method is responsible for validating the values passed to the setBillingDetailItem method
     * This method is willingly generated in order to preserve the one-line inline validation within the setBillingDetailItem method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateBillingDetailItemForArrayConstraintsFromSetBillingDetailItem(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $detailedBillingInformationBillingDetailItemItem) {
            // validation for constraint: itemType
            if (!$detailedBillingInformationBillingDetailItemItem instanceof \Travelport\UniversalRecord\StructType\BillingDetailItem) {
                $invalidValues[] = is_object($detailedBillingInformationBillingDetailItemItem) ? get_class($detailedBillingInformationBillingDetailItemItem) : sprintf('%s(%s)', gettype($detailedBillingInformationBillingDetailItemItem), var_export($detailedBillingInformationBillingDetailItemItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The BillingDetailItem property can only contain items of type \Travelport\UniversalRecord\StructType\BillingDetailItem, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set BillingDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem[] $billingDetailItem
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function setBillingDetailItem(?array $billingDetailItem = null): self
    {
        // validation for constraint: array
        if ('' !== ($billingDetailItemArrayErrorMessage = self::validateBillingDetailItemForArrayConstraintsFromSetBillingDetailItem($billingDetailItem))) {
            throw new InvalidArgumentException($billingDetailItemArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($billingDetailItem) && count($billingDetailItem) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($billingDetailItem)), __LINE__);
        }
        $this->BillingDetailItem = $billingDetailItem;
        
        return $this;
    }
    /**
     * Add item to BillingDetailItem value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\BillingDetailItem $item
     * @return \Travelport\UniversalRecord\StructType\DetailedBillingInformation
     */
    public function addToBillingDetailItem(\Travelport\UniversalRecord\StructType\BillingDetailItem $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\BillingDetailItem) {
            throw new InvalidArgumentException(sprintf('The BillingDetailItem property can only contain items of type \Travelport\UniversalRecord\StructType\BillingDetailItem, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->BillingDetailItem) && count($this->BillingDetailItem) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->BillingDetailItem)), __LINE__);
        }
        $this->BillingDetailItem[] = $item;
        
        return $this;
    }
}
