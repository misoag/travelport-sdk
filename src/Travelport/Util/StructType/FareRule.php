<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Rule Container
 * @subpackage Structs
 */
class FareRule extends AbstractStructBase
{
    /**
     * The FareRuleLong
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRuleLong
     * @var \Travelport\Util\StructType\FareRuleLong[]
     */
    protected ?array $FareRuleLong = null;
    /**
     * The FareRuleShort
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRuleShort
     * @var \Travelport\Util\StructType\FareRuleShort[]
     */
    protected ?array $FareRuleShort = null;
    /**
     * The RuleAdvancedPurchase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleAdvancedPurchase
     * @var \Travelport\Util\StructType\RuleAdvancedPurchase|null
     */
    protected ?\Travelport\Util\StructType\RuleAdvancedPurchase $RuleAdvancedPurchase = null;
    /**
     * The RuleLengthOfStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleLengthOfStay
     * @var \Travelport\Util\StructType\RuleLengthOfStay|null
     */
    protected ?\Travelport\Util\StructType\RuleLengthOfStay $RuleLengthOfStay = null;
    /**
     * The RuleCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleCharges
     * @var \Travelport\Util\StructType\RuleCharges|null
     */
    protected ?\Travelport\Util\StructType\RuleCharges $RuleCharges = null;
    /**
     * The FareRuleResultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\TypeResultMessage[]
     */
    protected ?array $FareRuleResultMessage = null;
    /**
     * The StructuredFareRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\StructuredFareRulesType|null
     */
    protected ?\Travelport\Util\StructType\StructuredFareRulesType $StructuredFareRules = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $FareInfoRef = null;
    /**
     * The RuleNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $RuleNumber = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $Source = null;
    /**
     * The TariffNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TariffNumber = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    protected ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    protected ?string $SupplierCode = null;
    /**
     * Constructor method for FareRule
     * @uses FareRule::setFareRuleLong()
     * @uses FareRule::setFareRuleShort()
     * @uses FareRule::setRuleAdvancedPurchase()
     * @uses FareRule::setRuleLengthOfStay()
     * @uses FareRule::setRuleCharges()
     * @uses FareRule::setFareRuleResultMessage()
     * @uses FareRule::setStructuredFareRules()
     * @uses FareRule::setFareInfoRef()
     * @uses FareRule::setRuleNumber()
     * @uses FareRule::setSource()
     * @uses FareRule::setTariffNumber()
     * @uses FareRule::setProviderCode()
     * @uses FareRule::setSupplierCode()
     * @param \Travelport\Util\StructType\FareRuleLong[] $fareRuleLong
     * @param \Travelport\Util\StructType\FareRuleShort[] $fareRuleShort
     * @param \Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @param \Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @param \Travelport\Util\StructType\RuleCharges $ruleCharges
     * @param \Travelport\Util\StructType\TypeResultMessage[] $fareRuleResultMessage
     * @param \Travelport\Util\StructType\StructuredFareRulesType $structuredFareRules
     * @param string $fareInfoRef
     * @param string $ruleNumber
     * @param string $source
     * @param string $tariffNumber
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(?array $fareRuleLong = null, ?array $fareRuleShort = null, ?\Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null, ?\Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay = null, ?\Travelport\Util\StructType\RuleCharges $ruleCharges = null, ?array $fareRuleResultMessage = null, ?\Travelport\Util\StructType\StructuredFareRulesType $structuredFareRules = null, ?string $fareInfoRef = null, ?string $ruleNumber = null, ?string $source = null, ?string $tariffNumber = null, ?string $providerCode = null, ?string $supplierCode = null)
    {
        $this
            ->setFareRuleLong($fareRuleLong)
            ->setFareRuleShort($fareRuleShort)
            ->setRuleAdvancedPurchase($ruleAdvancedPurchase)
            ->setRuleLengthOfStay($ruleLengthOfStay)
            ->setRuleCharges($ruleCharges)
            ->setFareRuleResultMessage($fareRuleResultMessage)
            ->setStructuredFareRules($structuredFareRules)
            ->setFareInfoRef($fareInfoRef)
            ->setRuleNumber($ruleNumber)
            ->setSource($source)
            ->setTariffNumber($tariffNumber)
            ->setProviderCode($providerCode)
            ->setSupplierCode($supplierCode);
    }
    /**
     * Get FareRuleLong value
     * @return \Travelport\Util\StructType\FareRuleLong[]
     */
    public function getFareRuleLong(): ?array
    {
        return $this->FareRuleLong;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRuleLong method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleLong method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleLongForArrayConstraintFromSetFareRuleLong(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleFareRuleLongItem) {
            // validation for constraint: itemType
            if (!$fareRuleFareRuleLongItem instanceof \Travelport\Util\StructType\FareRuleLong) {
                $invalidValues[] = is_object($fareRuleFareRuleLongItem) ? get_class($fareRuleFareRuleLongItem) : sprintf('%s(%s)', gettype($fareRuleFareRuleLongItem), var_export($fareRuleFareRuleLongItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleLong property can only contain items of type \Travelport\Util\StructType\FareRuleLong, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleLong value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleLong[] $fareRuleLong
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setFareRuleLong(?array $fareRuleLong = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleLongArrayErrorMessage = self::validateFareRuleLongForArrayConstraintFromSetFareRuleLong($fareRuleLong))) {
            throw new InvalidArgumentException($fareRuleLongArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRuleLong) && count($fareRuleLong) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRuleLong)), __LINE__);
        }
        $this->FareRuleLong = $fareRuleLong;
        
        return $this;
    }
    /**
     * Add item to FareRuleLong value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleLong $item
     * @return \Travelport\Util\StructType\FareRule
     */
    public function addToFareRuleLong(\Travelport\Util\StructType\FareRuleLong $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRuleLong) {
            throw new InvalidArgumentException(sprintf('The FareRuleLong property can only contain items of type \Travelport\Util\StructType\FareRuleLong, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRuleLong) && count($this->FareRuleLong) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRuleLong)), __LINE__);
        }
        $this->FareRuleLong[] = $item;
        
        return $this;
    }
    /**
     * Get FareRuleShort value
     * @return \Travelport\Util\StructType\FareRuleShort[]
     */
    public function getFareRuleShort(): ?array
    {
        return $this->FareRuleShort;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRuleShort method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleShort method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleShortForArrayConstraintFromSetFareRuleShort(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleFareRuleShortItem) {
            // validation for constraint: itemType
            if (!$fareRuleFareRuleShortItem instanceof \Travelport\Util\StructType\FareRuleShort) {
                $invalidValues[] = is_object($fareRuleFareRuleShortItem) ? get_class($fareRuleFareRuleShortItem) : sprintf('%s(%s)', gettype($fareRuleFareRuleShortItem), var_export($fareRuleFareRuleShortItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleShort property can only contain items of type \Travelport\Util\StructType\FareRuleShort, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleShort value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleShort[] $fareRuleShort
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setFareRuleShort(?array $fareRuleShort = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleShortArrayErrorMessage = self::validateFareRuleShortForArrayConstraintFromSetFareRuleShort($fareRuleShort))) {
            throw new InvalidArgumentException($fareRuleShortArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRuleShort) && count($fareRuleShort) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRuleShort)), __LINE__);
        }
        $this->FareRuleShort = $fareRuleShort;
        
        return $this;
    }
    /**
     * Add item to FareRuleShort value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\FareRuleShort $item
     * @return \Travelport\Util\StructType\FareRule
     */
    public function addToFareRuleShort(\Travelport\Util\StructType\FareRuleShort $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\FareRuleShort) {
            throw new InvalidArgumentException(sprintf('The FareRuleShort property can only contain items of type \Travelport\Util\StructType\FareRuleShort, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRuleShort) && count($this->FareRuleShort) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRuleShort)), __LINE__);
        }
        $this->FareRuleShort[] = $item;
        
        return $this;
    }
    /**
     * Get RuleAdvancedPurchase value
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase|null
     */
    public function getRuleAdvancedPurchase(): ?\Travelport\Util\StructType\RuleAdvancedPurchase
    {
        return $this->RuleAdvancedPurchase;
    }
    /**
     * Set RuleAdvancedPurchase value
     * @param \Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setRuleAdvancedPurchase(?\Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null): self
    {
        $this->RuleAdvancedPurchase = $ruleAdvancedPurchase;
        
        return $this;
    }
    /**
     * Get RuleLengthOfStay value
     * @return \Travelport\Util\StructType\RuleLengthOfStay|null
     */
    public function getRuleLengthOfStay(): ?\Travelport\Util\StructType\RuleLengthOfStay
    {
        return $this->RuleLengthOfStay;
    }
    /**
     * Set RuleLengthOfStay value
     * @param \Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setRuleLengthOfStay(?\Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay = null): self
    {
        $this->RuleLengthOfStay = $ruleLengthOfStay;
        
        return $this;
    }
    /**
     * Get RuleCharges value
     * @return \Travelport\Util\StructType\RuleCharges|null
     */
    public function getRuleCharges(): ?\Travelport\Util\StructType\RuleCharges
    {
        return $this->RuleCharges;
    }
    /**
     * Set RuleCharges value
     * @param \Travelport\Util\StructType\RuleCharges $ruleCharges
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setRuleCharges(?\Travelport\Util\StructType\RuleCharges $ruleCharges = null): self
    {
        $this->RuleCharges = $ruleCharges;
        
        return $this;
    }
    /**
     * Get FareRuleResultMessage value
     * @return \Travelport\Util\StructType\TypeResultMessage[]
     */
    public function getFareRuleResultMessage(): ?array
    {
        return $this->FareRuleResultMessage;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setFareRuleResultMessage method
     * This method is willingly generated in order to preserve the one-line inline validation within the setFareRuleResultMessage method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateFareRuleResultMessageForArrayConstraintFromSetFareRuleResultMessage(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fareRuleFareRuleResultMessageItem) {
            // validation for constraint: itemType
            if (!$fareRuleFareRuleResultMessageItem instanceof \Travelport\Util\StructType\TypeResultMessage) {
                $invalidValues[] = is_object($fareRuleFareRuleResultMessageItem) ? get_class($fareRuleFareRuleResultMessageItem) : sprintf('%s(%s)', gettype($fareRuleFareRuleResultMessageItem), var_export($fareRuleFareRuleResultMessageItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The FareRuleResultMessage property can only contain items of type \Travelport\Util\StructType\TypeResultMessage, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set FareRuleResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeResultMessage[] $fareRuleResultMessage
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setFareRuleResultMessage(?array $fareRuleResultMessage = null): self
    {
        // validation for constraint: array
        if ('' !== ($fareRuleResultMessageArrayErrorMessage = self::validateFareRuleResultMessageForArrayConstraintFromSetFareRuleResultMessage($fareRuleResultMessage))) {
            throw new InvalidArgumentException($fareRuleResultMessageArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($fareRuleResultMessage) && count($fareRuleResultMessage) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($fareRuleResultMessage)), __LINE__);
        }
        $this->FareRuleResultMessage = $fareRuleResultMessage;
        
        return $this;
    }
    /**
     * Add item to FareRuleResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\TypeResultMessage $item
     * @return \Travelport\Util\StructType\FareRule
     */
    public function addToFareRuleResultMessage(\Travelport\Util\StructType\TypeResultMessage $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\TypeResultMessage) {
            throw new InvalidArgumentException(sprintf('The FareRuleResultMessage property can only contain items of type \Travelport\Util\StructType\TypeResultMessage, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->FareRuleResultMessage) && count($this->FareRuleResultMessage) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->FareRuleResultMessage)), __LINE__);
        }
        $this->FareRuleResultMessage[] = $item;
        
        return $this;
    }
    /**
     * Get StructuredFareRules value
     * @return \Travelport\Util\StructType\StructuredFareRulesType|null
     */
    public function getStructuredFareRules(): ?\Travelport\Util\StructType\StructuredFareRulesType
    {
        return $this->StructuredFareRules;
    }
    /**
     * Set StructuredFareRules value
     * @param \Travelport\Util\StructType\StructuredFareRulesType $structuredFareRules
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setStructuredFareRules(?\Travelport\Util\StructType\StructuredFareRulesType $structuredFareRules = null): self
    {
        $this->StructuredFareRules = $structuredFareRules;
        
        return $this;
    }
    /**
     * Get FareInfoRef value
     * @return string|null
     */
    public function getFareInfoRef(): ?string
    {
        return $this->FareInfoRef;
    }
    /**
     * Set FareInfoRef value
     * @param string $fareInfoRef
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
        // validation for constraint: string
        if (!is_null($fareInfoRef) && !is_string($fareInfoRef)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($fareInfoRef, true), gettype($fareInfoRef)), __LINE__);
        }
        $this->FareInfoRef = $fareInfoRef;
        
        return $this;
    }
    /**
     * Get RuleNumber value
     * @return string|null
     */
    public function getRuleNumber(): ?string
    {
        return $this->RuleNumber;
    }
    /**
     * Set RuleNumber value
     * @param string $ruleNumber
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setRuleNumber(?string $ruleNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($ruleNumber) && !is_string($ruleNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ruleNumber, true), gettype($ruleNumber)), __LINE__);
        }
        $this->RuleNumber = $ruleNumber;
        
        return $this;
    }
    /**
     * Get Source value
     * @return string|null
     */
    public function getSource(): ?string
    {
        return $this->Source;
    }
    /**
     * Set Source value
     * @param string $source
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setSource(?string $source = null): self
    {
        // validation for constraint: string
        if (!is_null($source) && !is_string($source)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($source, true), gettype($source)), __LINE__);
        }
        $this->Source = $source;
        
        return $this;
    }
    /**
     * Get TariffNumber value
     * @return string|null
     */
    public function getTariffNumber(): ?string
    {
        return $this->TariffNumber;
    }
    /**
     * Set TariffNumber value
     * @param string $tariffNumber
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setTariffNumber(?string $tariffNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($tariffNumber) && !is_string($tariffNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tariffNumber, true), gettype($tariffNumber)), __LINE__);
        }
        $this->TariffNumber = $tariffNumber;
        
        return $this;
    }
    /**
     * Get ProviderCode value
     * @return string|null
     */
    public function getProviderCode(): ?string
    {
        return $this->ProviderCode;
    }
    /**
     * Set ProviderCode value
     * @param string $providerCode
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setProviderCode(?string $providerCode = null): self
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
     * @return string|null
     */
    public function getSupplierCode(): ?string
    {
        return $this->SupplierCode;
    }
    /**
     * Set SupplierCode value
     * @param string $supplierCode
     * @return \Travelport\Util\StructType\FareRule
     */
    public function setSupplierCode(?string $supplierCode = null): self
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
}
