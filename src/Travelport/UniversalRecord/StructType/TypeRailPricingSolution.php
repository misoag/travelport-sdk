<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRailPricingSolution StructType
 * Meta information extracted from the WSDL
 * - documentation: Use references on rail availability response. | Common RailPricingSolution container
 * @subpackage Structs
 */
abstract class TypeRailPricingSolution extends AbstractStructBase
{
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Key;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * - use: required
     * @var string
     */
    protected string $ProviderCode;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * - use: required
     * @var string
     */
    protected string $SupplierCode;
    /**
     * The RailJourney
     * Meta information extracted from the WSDL
     * - choice: RailJourney | RailJourneyRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailJourney
     * @var \Travelport\UniversalRecord\StructType\RailJourney[]
     */
    protected ?array $RailJourney = null;
    /**
     * The RailJourneyRef
     * Meta information extracted from the WSDL
     * - choice: RailJourney | RailJourneyRef
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: RailJourneyRef
     * @var \Travelport\UniversalRecord\StructType\RailJourneyRef[]
     */
    protected ?array $RailJourneyRef = null;
    /**
     * The RailPricingInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: RailPricingInfo
     * @var \Travelport\UniversalRecord\StructType\RailPricingInfo[]
     */
    protected ?array $RailPricingInfo = null;
    /**
     * The OfferId
     * Meta information extracted from the WSDL
     * - documentation: OfferID must be included if the RailCreateReq contains a price. If the RailCreateReq is used for the Direct Book function, the OfferID is not included.
     * - use: optional
     * @var int|null
     */
    protected ?int $OfferId = null;
    /**
     * The HostTokenRef
     * Meta information extracted from the WSDL
     * - documentation: HostTokenRef will reference the value in HostTokenList/HostToken @ Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $HostTokenRef = null;
    /**
     * The Reference
     * Meta information extracted from the WSDL
     * - documentation: Offer Reference required for Booking(eg.TL).
     * - use: optional
     * @var string|null
     */
    protected ?string $Reference = null;
    /**
     * The TotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $TotalPrice = null;
    /**
     * The BasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $BasePrice = null;
    /**
     * The ApproximateTotalPrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTotalPrice = null;
    /**
     * The ApproximateBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateBasePrice = null;
    /**
     * The EquivalentBasePrice
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $EquivalentBasePrice = null;
    /**
     * The Taxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Taxes = null;
    /**
     * The Fees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Fees = null;
    /**
     * The Services
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $Services = null;
    /**
     * The ApproximateTaxes
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateTaxes = null;
    /**
     * The ApproximateFees
     * Meta information extracted from the WSDL
     * - documentation: A monetary value (valid to req/rsp Currency type) Format : Currency Code + Amount(USD123.10)
     * - base: xs:string
     * @var string|null
     */
    protected ?string $ApproximateFees = null;
    /**
     * Constructor method for typeRailPricingSolution
     * @uses TypeRailPricingSolution::setKey()
     * @uses TypeRailPricingSolution::setProviderCode()
     * @uses TypeRailPricingSolution::setSupplierCode()
     * @uses TypeRailPricingSolution::setRailJourney()
     * @uses TypeRailPricingSolution::setRailJourneyRef()
     * @uses TypeRailPricingSolution::setRailPricingInfo()
     * @uses TypeRailPricingSolution::setOfferId()
     * @uses TypeRailPricingSolution::setHostTokenRef()
     * @uses TypeRailPricingSolution::setReference()
     * @uses TypeRailPricingSolution::setTotalPrice()
     * @uses TypeRailPricingSolution::setBasePrice()
     * @uses TypeRailPricingSolution::setApproximateTotalPrice()
     * @uses TypeRailPricingSolution::setApproximateBasePrice()
     * @uses TypeRailPricingSolution::setEquivalentBasePrice()
     * @uses TypeRailPricingSolution::setTaxes()
     * @uses TypeRailPricingSolution::setFees()
     * @uses TypeRailPricingSolution::setServices()
     * @uses TypeRailPricingSolution::setApproximateTaxes()
     * @uses TypeRailPricingSolution::setApproximateFees()
     * @param string $key
     * @param string $providerCode
     * @param string $supplierCode
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo[] $railPricingInfo
     * @param int $offerId
     * @param string $hostTokenRef
     * @param string $reference
     * @param string $totalPrice
     * @param string $basePrice
     * @param string $approximateTotalPrice
     * @param string $approximateBasePrice
     * @param string $equivalentBasePrice
     * @param string $taxes
     * @param string $fees
     * @param string $services
     * @param string $approximateTaxes
     * @param string $approximateFees
     */
    public function __construct(string $key, string $providerCode, string $supplierCode, ?array $railJourney = null, ?array $railJourneyRef = null, ?array $railPricingInfo = null, ?int $offerId = null, ?string $hostTokenRef = null, ?string $reference = null, ?string $totalPrice = null, ?string $basePrice = null, ?string $approximateTotalPrice = null, ?string $approximateBasePrice = null, ?string $equivalentBasePrice = null, ?string $taxes = null, ?string $fees = null, ?string $services = null, ?string $approximateTaxes = null, ?string $approximateFees = null)
    {
        $this
            ->setKey($key)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode)
            ->setRailJourney($railJourney)
            ->setRailJourneyRef($railJourneyRef)
            ->setRailPricingInfo($railPricingInfo)
            ->setOfferId($offerId)
            ->setHostTokenRef($hostTokenRef)
            ->setReference($reference)
            ->setTotalPrice($totalPrice)
            ->setBasePrice($basePrice)
            ->setApproximateTotalPrice($approximateTotalPrice)
            ->setApproximateBasePrice($approximateBasePrice)
            ->setEquivalentBasePrice($equivalentBasePrice)
            ->setTaxes($taxes)
            ->setFees($fees)
            ->setServices($services)
            ->setApproximateTaxes($approximateTaxes)
            ->setApproximateFees($approximateFees);
    }
    /**
     * Get Key value
     * @return string
     */
    public function getKey(): string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setKey(string $key): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string
     */
    public function getProviderCode(): string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setProviderCode(string $providerCode): self
    {
        // validation for constraint: string
        if (!is_null($providerCode) && !is_string($providerCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerCode, true), gettype($providerCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $providerCode)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($providerCode) && mb_strlen((string) $providerCode) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $providerCode)), __LINE__);
        }
        $this->ProviderCode = $providerCode;
        
        return $this;
    }
    /**
     * Get SupplierCode value
     * @return string
     */
    public function getSupplierCode(): string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setSupplierCode(string $supplierCode): self
    {
        // validation for constraint: string
        if (!is_null($supplierCode) && !is_string($supplierCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($supplierCode, true), gettype($supplierCode)), __LINE__);
        }
        // validation for constraint: maxLength(5)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) > 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 5', mb_strlen((string) $supplierCode)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($supplierCode) && mb_strlen((string) $supplierCode) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $supplierCode)), __LINE__);
        }
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
    /**
     * Get RailJourney value
     * @return \Travelport\UniversalRecord\StructType\RailJourney[]|null
     */
    public function getRailJourney(): ?array
    {
        return $this->RailJourney ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourney method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailJourneyForArrayConstraintFromSetRailJourney(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeRailPricingSolutionRailJourneyItem) {
            // validation for constraint: itemType
            if (!$typeRailPricingSolutionRailJourneyItem instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
                $invalidValues[] = is_object($typeRailPricingSolutionRailJourneyItem) ? get_class($typeRailPricingSolutionRailJourneyItem) : sprintf('%s(%s)', gettype($typeRailPricingSolutionRailJourneyItem), var_export($typeRailPricingSolutionRailJourneyItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourney method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailJourneyForChoiceConstraintFromSetRailJourney($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailJourneyRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailJourney can\'t be set as the property %s is already set. Only one property must be set among these properties: RailJourney, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailJourney value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney[] $railJourney
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setRailJourney(?array $railJourney = null): self
    {
        // validation for constraint: array
        if ('' !== ($railJourneyArrayErrorMessage = self::validateRailJourneyForArrayConstraintFromSetRailJourney($railJourney))) {
            throw new InvalidArgumentException($railJourneyArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailJourney, RailJourneyRef)
        if ('' !== ($railJourneyChoiceErrorMessage = self::validateRailJourneyForChoiceConstraintFromSetRailJourney($railJourney))) {
            throw new InvalidArgumentException($railJourneyChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railJourney) && count($railJourney) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railJourney)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railJourney) && count($railJourney) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railJourney)), __LINE__);
        }
        if (is_null($railJourney) || (is_array($railJourney) && empty($railJourney))) {
            unset($this->RailJourney);
        } else {
            $this->RailJourney = $railJourney;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailJourney method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailJourney method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailJourney($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailJourneyRef',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailJourney can\'t be set as the property %s is already set. Only one property must be set among these properties: RailJourney, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailJourney value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourney $item
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function addToRailJourney(\Travelport\UniversalRecord\StructType\RailJourney $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailJourney) {
            throw new InvalidArgumentException(sprintf('The RailJourney property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourney, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailJourney, RailJourneyRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailJourney($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailJourney) && count($this->RailJourney) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailJourney)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailJourney) && count($this->RailJourney) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailJourney)), __LINE__);
        }
        $this->RailJourney[] = $item;
        
        return $this;
    }
    /**
     * Get RailJourneyRef value
     * @return \Travelport\UniversalRecord\StructType\RailJourneyRef[]|null
     */
    public function getRailJourneyRef(): ?array
    {
        return $this->RailJourneyRef ?? null;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourneyRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourneyRef method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailJourneyRefForArrayConstraintFromSetRailJourneyRef(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeRailPricingSolutionRailJourneyRefItem) {
            // validation for constraint: itemType
            if (!$typeRailPricingSolutionRailJourneyRefItem instanceof \Travelport\UniversalRecord\StructType\RailJourneyRef) {
                $invalidValues[] = is_object($typeRailPricingSolutionRailJourneyRefItem) ? get_class($typeRailPricingSolutionRailJourneyRefItem) : sprintf('%s(%s)', gettype($typeRailPricingSolutionRailJourneyRefItem), var_export($typeRailPricingSolutionRailJourneyRefItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailJourneyRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourneyRef, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailJourneyRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailJourneyRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateRailJourneyRefForChoiceConstraintFromSetRailJourneyRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailJourney',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailJourneyRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailJourneyRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set RailJourneyRef value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef[] $railJourneyRef
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setRailJourneyRef(?array $railJourneyRef = null): self
    {
        // validation for constraint: array
        if ('' !== ($railJourneyRefArrayErrorMessage = self::validateRailJourneyRefForArrayConstraintFromSetRailJourneyRef($railJourneyRef))) {
            throw new InvalidArgumentException($railJourneyRefArrayErrorMessage, __LINE__);
        }
        // validation for constraint: choice(RailJourney, RailJourneyRef)
        if ('' !== ($railJourneyRefChoiceErrorMessage = self::validateRailJourneyRefForChoiceConstraintFromSetRailJourneyRef($railJourneyRef))) {
            throw new InvalidArgumentException($railJourneyRefChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($railJourneyRef) && count($railJourneyRef) > 1) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 1', count($railJourneyRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railJourneyRef) && count($railJourneyRef) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railJourneyRef)), __LINE__);
        }
        if (is_null($railJourneyRef) || (is_array($railJourneyRef) && empty($railJourneyRef))) {
            unset($this->RailJourneyRef);
        } else {
            $this->RailJourneyRef = $railJourneyRef;
        }
        
        return $this;
    }
    /**
     * This method is responsible for validating the value(s) passed to the addToRailJourneyRef method
     * This method is willingly generated in order to preserve the one-line inline validation within the addToRailJourneyRef method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateItemForChoiceConstraintFromAddToRailJourneyRef($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'RailJourney',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property RailJourneyRef can\'t be set as the property %s is already set. Only one property must be set among these properties: RailJourneyRef, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Add item to RailJourneyRef value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailJourneyRef $item
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function addToRailJourneyRef(\Travelport\UniversalRecord\StructType\RailJourneyRef $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailJourneyRef) {
            throw new InvalidArgumentException(sprintf('The RailJourneyRef property can only contain items of type \Travelport\UniversalRecord\StructType\RailJourneyRef, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: choice(RailJourney, RailJourneyRef)
        if ('' !== ($itemChoiceErrorMessage = self::validateItemForChoiceConstraintFromAddToRailJourneyRef($item))) {
            throw new InvalidArgumentException($itemChoiceErrorMessage, __LINE__);
        }
        // validation for constraint: choiceMaxOccurs(1)
        if (is_array($this->RailJourneyRef) && count($this->RailJourneyRef) >= 1) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 1', count($this->RailJourneyRef)), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailJourneyRef) && count($this->RailJourneyRef) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailJourneyRef)), __LINE__);
        }
        $this->RailJourneyRef[] = $item;
        
        return $this;
    }
    /**
     * Get RailPricingInfo value
     * @return \Travelport\UniversalRecord\StructType\RailPricingInfo[]
     */
    public function getRailPricingInfo(): ?array
    {
        return $this->RailPricingInfo;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setRailPricingInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRailPricingInfo method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRailPricingInfoForArrayConstraintFromSetRailPricingInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $typeRailPricingSolutionRailPricingInfoItem) {
            // validation for constraint: itemType
            if (!$typeRailPricingSolutionRailPricingInfoItem instanceof \Travelport\UniversalRecord\StructType\RailPricingInfo) {
                $invalidValues[] = is_object($typeRailPricingSolutionRailPricingInfoItem) ? get_class($typeRailPricingSolutionRailPricingInfoItem) : sprintf('%s(%s)', gettype($typeRailPricingSolutionRailPricingInfoItem), var_export($typeRailPricingSolutionRailPricingInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The RailPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo[] $railPricingInfo
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setRailPricingInfo(?array $railPricingInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($railPricingInfoArrayErrorMessage = self::validateRailPricingInfoForArrayConstraintFromSetRailPricingInfo($railPricingInfo))) {
            throw new InvalidArgumentException($railPricingInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($railPricingInfo) && count($railPricingInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($railPricingInfo)), __LINE__);
        }
        $this->RailPricingInfo = $railPricingInfo;
        
        return $this;
    }
    /**
     * Add item to RailPricingInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\RailPricingInfo $item
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function addToRailPricingInfo(\Travelport\UniversalRecord\StructType\RailPricingInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\RailPricingInfo) {
            throw new InvalidArgumentException(sprintf('The RailPricingInfo property can only contain items of type \Travelport\UniversalRecord\StructType\RailPricingInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->RailPricingInfo) && count($this->RailPricingInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->RailPricingInfo)), __LINE__);
        }
        $this->RailPricingInfo[] = $item;
        
        return $this;
    }
    /**
     * Get OfferId value
     * @return int|null
     */
    public function getOfferId(): ?int
    {
        return $this->OfferId;
    }
    /**
     * Set OfferId value
     * @param int $offerId
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setOfferId(?int $offerId = null): self
    {
        // validation for constraint: int
        if (!is_null($offerId) && !(is_int($offerId) || ctype_digit($offerId))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($offerId, true), gettype($offerId)), __LINE__);
        }
        $this->OfferId = $offerId;
        
        return $this;
    }
    /**
     * Get HostTokenRef value
     * @return string|null
     */
    public function getHostTokenRef(): ?string
    {
        return $this->HostTokenRef;
    }
    /**
     * Set HostTokenRef value
     * @param string $hostTokenRef
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setHostTokenRef(?string $hostTokenRef = null): self
    {
        // validation for constraint: string
        if (!is_null($hostTokenRef) && !is_string($hostTokenRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hostTokenRef, true), gettype($hostTokenRef)), __LINE__);
        }
        $this->HostTokenRef = $hostTokenRef;
        
        return $this;
    }
    /**
     * Get Reference value
     * @return string|null
     */
    public function getReference(): ?string
    {
        return $this->Reference;
    }
    /**
     * Set Reference value
     * @param string $reference
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setReference(?string $reference = null): self
    {
        // validation for constraint: string
        if (!is_null($reference) && !is_string($reference)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reference, true), gettype($reference)), __LINE__);
        }
        $this->Reference = $reference;
        
        return $this;
    }
    /**
     * Get TotalPrice value
     * @return string|null
     */
    public function getTotalPrice(): ?string
    {
        return $this->TotalPrice;
    }
    /**
     * Set TotalPrice value
     * @param string $totalPrice
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setTotalPrice(?string $totalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($totalPrice) && !is_string($totalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($totalPrice, true), gettype($totalPrice)), __LINE__);
        }
        $this->TotalPrice = $totalPrice;
        
        return $this;
    }
    /**
     * Get BasePrice value
     * @return string|null
     */
    public function getBasePrice(): ?string
    {
        return $this->BasePrice;
    }
    /**
     * Set BasePrice value
     * @param string $basePrice
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setBasePrice(?string $basePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($basePrice) && !is_string($basePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($basePrice, true), gettype($basePrice)), __LINE__);
        }
        $this->BasePrice = $basePrice;
        
        return $this;
    }
    /**
     * Get ApproximateTotalPrice value
     * @return string|null
     */
    public function getApproximateTotalPrice(): ?string
    {
        return $this->ApproximateTotalPrice;
    }
    /**
     * Set ApproximateTotalPrice value
     * @param string $approximateTotalPrice
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setApproximateTotalPrice(?string $approximateTotalPrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTotalPrice) && !is_string($approximateTotalPrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTotalPrice, true), gettype($approximateTotalPrice)), __LINE__);
        }
        $this->ApproximateTotalPrice = $approximateTotalPrice;
        
        return $this;
    }
    /**
     * Get ApproximateBasePrice value
     * @return string|null
     */
    public function getApproximateBasePrice(): ?string
    {
        return $this->ApproximateBasePrice;
    }
    /**
     * Set ApproximateBasePrice value
     * @param string $approximateBasePrice
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setApproximateBasePrice(?string $approximateBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateBasePrice) && !is_string($approximateBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateBasePrice, true), gettype($approximateBasePrice)), __LINE__);
        }
        $this->ApproximateBasePrice = $approximateBasePrice;
        
        return $this;
    }
    /**
     * Get EquivalentBasePrice value
     * @return string|null
     */
    public function getEquivalentBasePrice(): ?string
    {
        return $this->EquivalentBasePrice;
    }
    /**
     * Set EquivalentBasePrice value
     * @param string $equivalentBasePrice
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setEquivalentBasePrice(?string $equivalentBasePrice = null): self
    {
        // validation for constraint: string
        if (!is_null($equivalentBasePrice) && !is_string($equivalentBasePrice)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($equivalentBasePrice, true), gettype($equivalentBasePrice)), __LINE__);
        }
        $this->EquivalentBasePrice = $equivalentBasePrice;
        
        return $this;
    }
    /**
     * Get Taxes value
     * @return string|null
     */
    public function getTaxes(): ?string
    {
        return $this->Taxes;
    }
    /**
     * Set Taxes value
     * @param string $taxes
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setTaxes(?string $taxes = null): self
    {
        // validation for constraint: string
        if (!is_null($taxes) && !is_string($taxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($taxes, true), gettype($taxes)), __LINE__);
        }
        $this->Taxes = $taxes;
        
        return $this;
    }
    /**
     * Get Fees value
     * @return string|null
     */
    public function getFees(): ?string
    {
        return $this->Fees;
    }
    /**
     * Set Fees value
     * @param string $fees
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setFees(?string $fees = null): self
    {
        // validation for constraint: string
        if (!is_null($fees) && !is_string($fees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fees, true), gettype($fees)), __LINE__);
        }
        $this->Fees = $fees;
        
        return $this;
    }
    /**
     * Get Services value
     * @return string|null
     */
    public function getServices(): ?string
    {
        return $this->Services;
    }
    /**
     * Set Services value
     * @param string $services
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setServices(?string $services = null): self
    {
        // validation for constraint: string
        if (!is_null($services) && !is_string($services)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($services, true), gettype($services)), __LINE__);
        }
        $this->Services = $services;
        
        return $this;
    }
    /**
     * Get ApproximateTaxes value
     * @return string|null
     */
    public function getApproximateTaxes(): ?string
    {
        return $this->ApproximateTaxes;
    }
    /**
     * Set ApproximateTaxes value
     * @param string $approximateTaxes
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setApproximateTaxes(?string $approximateTaxes = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateTaxes) && !is_string($approximateTaxes)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateTaxes, true), gettype($approximateTaxes)), __LINE__);
        }
        $this->ApproximateTaxes = $approximateTaxes;
        
        return $this;
    }
    /**
     * Get ApproximateFees value
     * @return string|null
     */
    public function getApproximateFees(): ?string
    {
        return $this->ApproximateFees;
    }
    /**
     * Set ApproximateFees value
     * @param string $approximateFees
     * @return \Travelport\UniversalRecord\StructType\TypeRailPricingSolution
     */
    public function setApproximateFees(?string $approximateFees = null): self
    {
        // validation for constraint: string
        if (!is_null($approximateFees) && !is_string($approximateFees)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($approximateFees, true), gettype($approximateFees)), __LINE__);
        }
        $this->ApproximateFees = $approximateFees;
        
        return $this;
    }
}
