<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
     * @var \Travelport\UniversalRecord\StructType\FareRuleLong[]
     */
    public ?array $FareRuleLong = null;
    /**
     * The FareRuleShort
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: FareRuleShort
     * @var \Travelport\UniversalRecord\StructType\FareRuleShort[]
     */
    public ?array $FareRuleShort = null;
    /**
     * The RuleAdvancedPurchase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleAdvancedPurchase
     * @var \Travelport\UniversalRecord\StructType\RuleAdvancedPurchase|null
     */
    public ?\Travelport\UniversalRecord\StructType\RuleAdvancedPurchase $RuleAdvancedPurchase = null;
    /**
     * The RuleLengthOfStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleLengthOfStay
     * @var \Travelport\UniversalRecord\StructType\RuleLengthOfStay|null
     */
    public ?\Travelport\UniversalRecord\StructType\RuleLengthOfStay $RuleLengthOfStay = null;
    /**
     * The RuleCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleCharges
     * @var \Travelport\UniversalRecord\StructType\RuleCharges|null
     */
    public ?\Travelport\UniversalRecord\StructType\RuleCharges $RuleCharges = null;
    /**
     * The FareRuleResultMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public ?array $FareRuleResultMessage = null;
    /**
     * The StructuredFareRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\UniversalRecord\StructType\StructuredFareRulesType|null
     */
    public ?\Travelport\UniversalRecord\StructType\StructuredFareRulesType $StructuredFareRules = null;
    /**
     * The FareInfoRef
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $FareInfoRef = null;
    /**
     * The RuleNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $RuleNumber = null;
    /**
     * The Source
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $Source = null;
    /**
     * The TariffNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TariffNumber = null;
    /**
     * The ProviderCode
     * Meta information extracted from the WSDL
     * - documentation: 5 Character Provider Code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 2
     * @var string|null
     */
    public ?string $ProviderCode = null;
    /**
     * The SupplierCode
     * Meta information extracted from the WSDL
     * - documentation: 1 to 5 Character Supplier code
     * - base: xs:string
     * - maxLength: 5
     * - minLength: 1
     * @var string|null
     */
    public ?string $SupplierCode = null;
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
     * @param \Travelport\UniversalRecord\StructType\FareRuleLong[] $fareRuleLong
     * @param \Travelport\UniversalRecord\StructType\FareRuleShort[] $fareRuleShort
     * @param \Travelport\UniversalRecord\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @param \Travelport\UniversalRecord\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @param \Travelport\UniversalRecord\StructType\RuleCharges $ruleCharges
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $fareRuleResultMessage
     * @param \Travelport\UniversalRecord\StructType\StructuredFareRulesType $structuredFareRules
     * @param string $fareInfoRef
     * @param string $ruleNumber
     * @param string $source
     * @param string $tariffNumber
     * @param string $providerCode
     * @param string $supplierCode
     */
    public function __construct(?array $fareRuleLong = null, ?array $fareRuleShort = null, ?\Travelport\UniversalRecord\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null, ?\Travelport\UniversalRecord\StructType\RuleLengthOfStay $ruleLengthOfStay = null, ?\Travelport\UniversalRecord\StructType\RuleCharges $ruleCharges = null, ?array $fareRuleResultMessage = null, ?\Travelport\UniversalRecord\StructType\StructuredFareRulesType $structuredFareRules = null, ?string $fareInfoRef = null, ?string $ruleNumber = null, ?string $source = null, ?string $tariffNumber = null, ?string $providerCode = null, ?string $supplierCode = null)
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
     * @return \Travelport\UniversalRecord\StructType\FareRuleLong[]
     */
    public function getFareRuleLong(): ?array
    {
        return $this->FareRuleLong;
    }
    /**
     * Set FareRuleLong value
     * @param \Travelport\UniversalRecord\StructType\FareRuleLong[] $fareRuleLong
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setFareRuleLong(?array $fareRuleLong = null): self
    {
        $this->FareRuleLong = $fareRuleLong;
        
        return $this;
    }
    /**
     * Add item to FareRuleLong value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleLong $item
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function addToFareRuleLong(\Travelport\UniversalRecord\StructType\FareRuleLong $item): self
    {
        $this->FareRuleLong[] = $item;
        
        return $this;
    }
    /**
     * Get FareRuleShort value
     * @return \Travelport\UniversalRecord\StructType\FareRuleShort[]
     */
    public function getFareRuleShort(): ?array
    {
        return $this->FareRuleShort;
    }
    /**
     * Set FareRuleShort value
     * @param \Travelport\UniversalRecord\StructType\FareRuleShort[] $fareRuleShort
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setFareRuleShort(?array $fareRuleShort = null): self
    {
        $this->FareRuleShort = $fareRuleShort;
        
        return $this;
    }
    /**
     * Add item to FareRuleShort value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\FareRuleShort $item
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function addToFareRuleShort(\Travelport\UniversalRecord\StructType\FareRuleShort $item): self
    {
        $this->FareRuleShort[] = $item;
        
        return $this;
    }
    /**
     * Get RuleAdvancedPurchase value
     * @return \Travelport\UniversalRecord\StructType\RuleAdvancedPurchase|null
     */
    public function getRuleAdvancedPurchase(): ?\Travelport\UniversalRecord\StructType\RuleAdvancedPurchase
    {
        return $this->RuleAdvancedPurchase;
    }
    /**
     * Set RuleAdvancedPurchase value
     * @param \Travelport\UniversalRecord\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setRuleAdvancedPurchase(?\Travelport\UniversalRecord\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null): self
    {
        $this->RuleAdvancedPurchase = $ruleAdvancedPurchase;
        
        return $this;
    }
    /**
     * Get RuleLengthOfStay value
     * @return \Travelport\UniversalRecord\StructType\RuleLengthOfStay|null
     */
    public function getRuleLengthOfStay(): ?\Travelport\UniversalRecord\StructType\RuleLengthOfStay
    {
        return $this->RuleLengthOfStay;
    }
    /**
     * Set RuleLengthOfStay value
     * @param \Travelport\UniversalRecord\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setRuleLengthOfStay(?\Travelport\UniversalRecord\StructType\RuleLengthOfStay $ruleLengthOfStay = null): self
    {
        $this->RuleLengthOfStay = $ruleLengthOfStay;
        
        return $this;
    }
    /**
     * Get RuleCharges value
     * @return \Travelport\UniversalRecord\StructType\RuleCharges|null
     */
    public function getRuleCharges(): ?\Travelport\UniversalRecord\StructType\RuleCharges
    {
        return $this->RuleCharges;
    }
    /**
     * Set RuleCharges value
     * @param \Travelport\UniversalRecord\StructType\RuleCharges $ruleCharges
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setRuleCharges(?\Travelport\UniversalRecord\StructType\RuleCharges $ruleCharges = null): self
    {
        $this->RuleCharges = $ruleCharges;
        
        return $this;
    }
    /**
     * Get FareRuleResultMessage value
     * @return \Travelport\UniversalRecord\StructType\TypeResultMessage[]
     */
    public function getFareRuleResultMessage(): ?array
    {
        return $this->FareRuleResultMessage;
    }
    /**
     * Set FareRuleResultMessage value
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage[] $fareRuleResultMessage
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setFareRuleResultMessage(?array $fareRuleResultMessage = null): self
    {
        $this->FareRuleResultMessage = $fareRuleResultMessage;
        
        return $this;
    }
    /**
     * Add item to FareRuleResultMessage value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TypeResultMessage $item
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function addToFareRuleResultMessage(\Travelport\UniversalRecord\StructType\TypeResultMessage $item): self
    {
        $this->FareRuleResultMessage[] = $item;
        
        return $this;
    }
    /**
     * Get StructuredFareRules value
     * @return \Travelport\UniversalRecord\StructType\StructuredFareRulesType|null
     */
    public function getStructuredFareRules(): ?\Travelport\UniversalRecord\StructType\StructuredFareRulesType
    {
        return $this->StructuredFareRules;
    }
    /**
     * Set StructuredFareRules value
     * @param \Travelport\UniversalRecord\StructType\StructuredFareRulesType $structuredFareRules
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setStructuredFareRules(?\Travelport\UniversalRecord\StructType\StructuredFareRulesType $structuredFareRules = null): self
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setFareInfoRef(?string $fareInfoRef = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setRuleNumber(?string $ruleNumber = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setSource(?string $source = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setTariffNumber(?string $tariffNumber = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setProviderCode(?string $providerCode = null): self
    {
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
     * @return \Travelport\UniversalRecord\StructType\FareRule
     */
    public function setSupplierCode(?string $supplierCode = null): self
    {
        $this->SupplierCode = $supplierCode;
        
        return $this;
    }
}
