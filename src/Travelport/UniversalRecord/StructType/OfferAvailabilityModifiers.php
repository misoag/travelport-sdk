<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for OfferAvailabilityModifiers StructType
 * @subpackage Structs
 */
class OfferAvailabilityModifiers extends AbstractStructBase
{
    /**
     * The ServiceType
     * Meta information extracted from the WSDL
     * - documentation: To restrict offers to only this type. | An identifier that labels this Merchandising Service (Baggage, Nomiles,GroundTransportation etc)
     * - base: xs:string
     * - maxLength: 128
     * - maxOccurs: 999
     * - minLength: 1
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $ServiceType = null;
    /**
     * The Carrier
     * Meta information extracted from the WSDL
     * - documentation: The carrier whose paid seat optional services is to be returned by uAPI. | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var string[]
     */
    protected ?array $Carrier = null;
    /**
     * The CurrencyType
     * Meta information extracted from the WSDL
     * - documentation: Currency code override. Providers: ACH, 1G, 1V, 1P | 3 Letter Currency Code
     * - base: xs:string
     * - length: 3
     * @var string|null
     */
    protected ?string $CurrencyType = null;
    /**
     * Constructor method for OfferAvailabilityModifiers
     * @uses OfferAvailabilityModifiers::setServiceType()
     * @uses OfferAvailabilityModifiers::setCarrier()
     * @uses OfferAvailabilityModifiers::setCurrencyType()
     * @param string[] $serviceType
     * @param string[] $carrier
     * @param string $currencyType
     */
    public function __construct(?array $serviceType = null, ?array $carrier = null, ?string $currencyType = null)
    {
        $this
            ->setServiceType($serviceType)
            ->setCarrier($carrier)
            ->setCurrencyType($currencyType);
    }
    /**
     * Get ServiceType value
     * @return string[]
     */
    public function getServiceType(): ?array
    {
        return $this->ServiceType;
    }
    /**
     * This method is responsible for validating the values passed to the setServiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceTypeForArrayConstraintsFromSetServiceType(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerAvailabilityModifiersServiceTypeItem) {
            // validation for constraint: itemType
            if (!is_string($offerAvailabilityModifiersServiceTypeItem)) {
                $invalidValues[] = is_object($offerAvailabilityModifiersServiceTypeItem) ? get_class($offerAvailabilityModifiersServiceTypeItem) : sprintf('%s(%s)', gettype($offerAvailabilityModifiersServiceTypeItem), var_export($offerAvailabilityModifiersServiceTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ServiceType property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setServiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceType method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceTypeForMaxLengthConstraintFromSetServiceType($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerAvailabilityModifiersServiceTypeItem) {
            // validation for constraint: maxLength(128)
            if (mb_strlen((string) $offerAvailabilityModifiersServiceTypeItem) > 128) {
                $invalidValues[] = var_export($offerAvailabilityModifiersServiceTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be less than or equal to 128', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setServiceType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setServiceType method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateServiceTypeForMinLengthConstraintFromSetServiceType($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerAvailabilityModifiersServiceTypeItem) {
            // validation for constraint: minLength(1)
            if (mb_strlen((string) $offerAvailabilityModifiersServiceTypeItem) < 1) {
                $invalidValues[] = var_export($offerAvailabilityModifiersServiceTypeItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be greater than or equal to 1', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ServiceType value
     * @throws InvalidArgumentException
     * @param string[] $serviceType
     * @return \Travelport\UniversalRecord\StructType\OfferAvailabilityModifiers
     */
    public function setServiceType(?array $serviceType = null): self
    {
        // validation for constraint: array
        if ('' !== ($serviceTypeArrayErrorMessage = self::validateServiceTypeForArrayConstraintsFromSetServiceType($serviceType))) {
            throw new InvalidArgumentException($serviceTypeArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxLength(128)
        if ('' !== ($serviceTypeMaxLengthErrorMessage = self::validateServiceTypeForMaxLengthConstraintFromSetServiceType($serviceType))) {
            throw new InvalidArgumentException($serviceTypeMaxLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($serviceType) && count($serviceType) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($serviceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if ('' !== ($serviceTypeMinLengthErrorMessage = self::validateServiceTypeForMinLengthConstraintFromSetServiceType($serviceType))) {
            throw new InvalidArgumentException($serviceTypeMinLengthErrorMessage, __LINE__);
        }
        $this->ServiceType = $serviceType;
        
        return $this;
    }
    /**
     * Add item to ServiceType value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\OfferAvailabilityModifiers
     */
    public function addToServiceType(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The ServiceType property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (mb_strlen((string) $item) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ServiceType) && count($this->ServiceType) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ServiceType)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (mb_strlen((string) $item) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $item)), __LINE__);
        }
        $this->ServiceType[] = $item;
        
        return $this;
    }
    /**
     * Get Carrier value
     * @return string[]
     */
    public function getCarrier(): ?array
    {
        return $this->Carrier;
    }
    /**
     * This method is responsible for validating the values passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForArrayConstraintsFromSetCarrier(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerAvailabilityModifiersCarrierItem) {
            // validation for constraint: itemType
            if (!is_string($offerAvailabilityModifiersCarrierItem)) {
                $invalidValues[] = is_object($offerAvailabilityModifiersCarrierItem) ? get_class($offerAvailabilityModifiersCarrierItem) : sprintf('%s(%s)', gettype($offerAvailabilityModifiersCarrierItem), var_export($offerAvailabilityModifiersCarrierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Carrier property can only contain items of type string, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value passed to the setCarrier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCarrier method
     * This has to validate that the items contained by the array match the length constraint
     * @param mixed $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCarrierForLengthConstraintFromSetCarrier($values): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $offerAvailabilityModifiersCarrierItem) {
            // validation for constraint: length(2)
            if (mb_strlen((string) $offerAvailabilityModifiersCarrierItem) !== 2) {
                $invalidValues[] = var_export($offerAvailabilityModifiersCarrierItem, true);
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid length for value(s) %s, the number of characters/octets contained by the literal must be equal to 2', implode(', ', $invalidValues));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Carrier value
     * @throws InvalidArgumentException
     * @param string[] $carrier
     * @return \Travelport\UniversalRecord\StructType\OfferAvailabilityModifiers
     */
    public function setCarrier(?array $carrier = null): self
    {
        // validation for constraint: array
        if ('' !== ($carrierArrayErrorMessage = self::validateCarrierForArrayConstraintsFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierArrayErrorMessage, __LINE__);
        }
        // validation for constraint: length(2)
        if ('' !== ($carrierLengthErrorMessage = self::validateCarrierForLengthConstraintFromSetCarrier($carrier))) {
            throw new InvalidArgumentException($carrierLengthErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($carrier) && count($carrier) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($carrier)), __LINE__);
        }
        $this->Carrier = $carrier;
        
        return $this;
    }
    /**
     * Add item to Carrier value
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\UniversalRecord\StructType\OfferAvailabilityModifiers
     */
    public function addToCarrier(string $item): self
    {
        // validation for constraint: itemType
        if (!is_string($item)) {
            throw new InvalidArgumentException(sprintf('The Carrier property can only contain items of type string, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: length(2)
        if (mb_strlen((string) $item) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $item)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Carrier) && count($this->Carrier) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Carrier)), __LINE__);
        }
        $this->Carrier[] = $item;
        
        return $this;
    }
    /**
     * Get CurrencyType value
     * @return string|null
     */
    public function getCurrencyType(): ?string
    {
        return $this->CurrencyType;
    }
    /**
     * Set CurrencyType value
     * @param string $currencyType
     * @return \Travelport\UniversalRecord\StructType\OfferAvailabilityModifiers
     */
    public function setCurrencyType(?string $currencyType = null): self
    {
        // validation for constraint: string
        if (!is_null($currencyType) && !is_string($currencyType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currencyType, true), gettype($currencyType)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($currencyType) && mb_strlen((string) $currencyType) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $currencyType)), __LINE__);
        }
        $this->CurrencyType = $currencyType;
        
        return $this;
    }
}
