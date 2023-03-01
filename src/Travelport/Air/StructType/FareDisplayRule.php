<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FareDisplayRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Fare Display Rule Container
 * @subpackage Structs
 */
class FareDisplayRule extends AbstractStructBase
{
    /**
     * The RuleAdvancedPurchase
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleAdvancedPurchase
     * @var \Travelport\Air\StructType\RuleAdvancedPurchase|null
     */
    public ?\Travelport\Air\StructType\RuleAdvancedPurchase $RuleAdvancedPurchase = null;
    /**
     * The RuleLengthOfStay
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleLengthOfStay
     * @var \Travelport\Air\StructType\RuleLengthOfStay|null
     */
    public ?\Travelport\Air\StructType\RuleLengthOfStay $RuleLengthOfStay = null;
    /**
     * The RuleCharges
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: RuleCharges
     * @var \Travelport\Air\StructType\RuleCharges|null
     */
    public ?\Travelport\Air\StructType\RuleCharges $RuleCharges = null;
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
     * Constructor method for FareDisplayRule
     * @uses FareDisplayRule::setRuleAdvancedPurchase()
     * @uses FareDisplayRule::setRuleLengthOfStay()
     * @uses FareDisplayRule::setRuleCharges()
     * @uses FareDisplayRule::setRuleNumber()
     * @uses FareDisplayRule::setSource()
     * @uses FareDisplayRule::setTariffNumber()
     * @param \Travelport\Air\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @param \Travelport\Air\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @param \Travelport\Air\StructType\RuleCharges $ruleCharges
     * @param string $ruleNumber
     * @param string $source
     * @param string $tariffNumber
     */
    public function __construct(?\Travelport\Air\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null, ?\Travelport\Air\StructType\RuleLengthOfStay $ruleLengthOfStay = null, ?\Travelport\Air\StructType\RuleCharges $ruleCharges = null, ?string $ruleNumber = null, ?string $source = null, ?string $tariffNumber = null)
    {
        $this
            ->setRuleAdvancedPurchase($ruleAdvancedPurchase)
            ->setRuleLengthOfStay($ruleLengthOfStay)
            ->setRuleCharges($ruleCharges)
            ->setRuleNumber($ruleNumber)
            ->setSource($source)
            ->setTariffNumber($tariffNumber);
    }
    /**
     * Get RuleAdvancedPurchase value
     * @return \Travelport\Air\StructType\RuleAdvancedPurchase|null
     */
    public function getRuleAdvancedPurchase(): ?\Travelport\Air\StructType\RuleAdvancedPurchase
    {
        return $this->RuleAdvancedPurchase;
    }
    /**
     * Set RuleAdvancedPurchase value
     * @param \Travelport\Air\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @return \Travelport\Air\StructType\FareDisplayRule
     */
    public function setRuleAdvancedPurchase(?\Travelport\Air\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null): self
    {
        $this->RuleAdvancedPurchase = $ruleAdvancedPurchase;
        
        return $this;
    }
    /**
     * Get RuleLengthOfStay value
     * @return \Travelport\Air\StructType\RuleLengthOfStay|null
     */
    public function getRuleLengthOfStay(): ?\Travelport\Air\StructType\RuleLengthOfStay
    {
        return $this->RuleLengthOfStay;
    }
    /**
     * Set RuleLengthOfStay value
     * @param \Travelport\Air\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @return \Travelport\Air\StructType\FareDisplayRule
     */
    public function setRuleLengthOfStay(?\Travelport\Air\StructType\RuleLengthOfStay $ruleLengthOfStay = null): self
    {
        $this->RuleLengthOfStay = $ruleLengthOfStay;
        
        return $this;
    }
    /**
     * Get RuleCharges value
     * @return \Travelport\Air\StructType\RuleCharges|null
     */
    public function getRuleCharges(): ?\Travelport\Air\StructType\RuleCharges
    {
        return $this->RuleCharges;
    }
    /**
     * Set RuleCharges value
     * @param \Travelport\Air\StructType\RuleCharges $ruleCharges
     * @return \Travelport\Air\StructType\FareDisplayRule
     */
    public function setRuleCharges(?\Travelport\Air\StructType\RuleCharges $ruleCharges = null): self
    {
        $this->RuleCharges = $ruleCharges;
        
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
     * @return \Travelport\Air\StructType\FareDisplayRule
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
     * @return \Travelport\Air\StructType\FareDisplayRule
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
     * @return \Travelport\Air\StructType\FareDisplayRule
     */
    public function setTariffNumber(?string $tariffNumber = null): self
    {
        $this->TariffNumber = $tariffNumber;
        
        return $this;
    }
}
