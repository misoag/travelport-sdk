<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * Constructor method for FareDisplayRule
     * @uses FareDisplayRule::setRuleAdvancedPurchase()
     * @uses FareDisplayRule::setRuleLengthOfStay()
     * @uses FareDisplayRule::setRuleCharges()
     * @uses FareDisplayRule::setRuleNumber()
     * @uses FareDisplayRule::setSource()
     * @uses FareDisplayRule::setTariffNumber()
     * @param \Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @param \Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay
     * @param \Travelport\Util\StructType\RuleCharges $ruleCharges
     * @param string $ruleNumber
     * @param string $source
     * @param string $tariffNumber
     */
    public function __construct(?\Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase = null, ?\Travelport\Util\StructType\RuleLengthOfStay $ruleLengthOfStay = null, ?\Travelport\Util\StructType\RuleCharges $ruleCharges = null, ?string $ruleNumber = null, ?string $source = null, ?string $tariffNumber = null)
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
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase|null
     */
    public function getRuleAdvancedPurchase(): ?\Travelport\Util\StructType\RuleAdvancedPurchase
    {
        return $this->RuleAdvancedPurchase;
    }
    /**
     * Set RuleAdvancedPurchase value
     * @param \Travelport\Util\StructType\RuleAdvancedPurchase $ruleAdvancedPurchase
     * @return \Travelport\Util\StructType\FareDisplayRule
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
     * @return \Travelport\Util\StructType\FareDisplayRule
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
     * @return \Travelport\Util\StructType\FareDisplayRule
     */
    public function setRuleCharges(?\Travelport\Util\StructType\RuleCharges $ruleCharges = null): self
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
     * @return \Travelport\Util\StructType\FareDisplayRule
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
     * @return \Travelport\Util\StructType\FareDisplayRule
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
     * @return \Travelport\Util\StructType\FareDisplayRule
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
}
