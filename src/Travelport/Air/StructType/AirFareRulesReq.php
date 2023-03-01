<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirFareRulesReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request to display the full text fare rules.
 * @subpackage Structs
 */
class AirFareRulesReq extends BaseReq
{
    /**
     * The AirReservationSelector
     * Meta information extracted from the WSDL
     * - choice: AirReservationSelector | FareRuleLookup | FareRuleKey | AirFareDisplayRuleKey
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * @var \Travelport\Air\StructType\AirReservationSelector|null
     */
    public ?\Travelport\Air\StructType\AirReservationSelector $AirReservationSelector = null;
    /**
     * The FareRuleLookup
     * Meta information extracted from the WSDL
     * - choice: AirReservationSelector | FareRuleLookup | FareRuleKey | AirFareDisplayRuleKey
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: FareRuleLookup
     * @var \Travelport\Air\StructType\FareRuleLookup|null
     */
    public ?\Travelport\Air\StructType\FareRuleLookup $FareRuleLookup = null;
    /**
     * The FareRuleKey
     * Meta information extracted from the WSDL
     * - choice: AirReservationSelector | FareRuleLookup | FareRuleKey | AirFareDisplayRuleKey
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 999
     * - ref: FareRuleKey
     * @var \Travelport\Air\StructType\FareRuleKey[]
     */
    public ?array $FareRuleKey = null;
    /**
     * The AirFareDisplayRuleKey
     * Meta information extracted from the WSDL
     * - choice: AirReservationSelector | FareRuleLookup | FareRuleKey | AirFareDisplayRuleKey
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - maxOccurs: 1
     * - ref: AirFareDisplayRuleKey
     * @var \Travelport\Air\StructType\AirFareDisplayRuleKey|null
     */
    public ?\Travelport\Air\StructType\AirFareDisplayRuleKey $AirFareDisplayRuleKey = null;
    /**
     * The AirFareRulesModifier
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AirFareRulesModifier
     * @var \Travelport\Air\StructType\AirFareRulesModifier|null
     */
    public ?\Travelport\Air\StructType\AirFareRulesModifier $AirFareRulesModifier = null;
    /**
     * The FareRulesFilterCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: 16
     * - minOccurs: 0
     * @var \Travelport\Air\StructType\FareRulesFilterCategory[]
     */
    public ?array $FareRulesFilterCategory = null;
    /**
     * The FareRuleType
     * Meta information extracted from the WSDL
     * - documentation: Provider: 1G,1V,1P,ACH.
     * - default: long
     * - use: optional
     * @var string|null
     */
    public ?string $FareRuleType = null;
    /**
     * Constructor method for AirFareRulesReq
     * @uses AirFareRulesReq::setAirReservationSelector()
     * @uses AirFareRulesReq::setFareRuleLookup()
     * @uses AirFareRulesReq::setFareRuleKey()
     * @uses AirFareRulesReq::setAirFareDisplayRuleKey()
     * @uses AirFareRulesReq::setAirFareRulesModifier()
     * @uses AirFareRulesReq::setFareRulesFilterCategory()
     * @uses AirFareRulesReq::setFareRuleType()
     * @param \Travelport\Air\StructType\AirReservationSelector $airReservationSelector
     * @param \Travelport\Air\StructType\FareRuleLookup $fareRuleLookup
     * @param \Travelport\Air\StructType\FareRuleKey[] $fareRuleKey
     * @param \Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @param \Travelport\Air\StructType\AirFareRulesModifier $airFareRulesModifier
     * @param \Travelport\Air\StructType\FareRulesFilterCategory[] $fareRulesFilterCategory
     * @param string $fareRuleType
     */
    public function __construct(?\Travelport\Air\StructType\AirReservationSelector $airReservationSelector = null, ?\Travelport\Air\StructType\FareRuleLookup $fareRuleLookup = null, ?array $fareRuleKey = null, ?\Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null, ?\Travelport\Air\StructType\AirFareRulesModifier $airFareRulesModifier = null, ?array $fareRulesFilterCategory = null, ?string $fareRuleType = null)
    {
        $this
            ->setAirReservationSelector($airReservationSelector)
            ->setFareRuleLookup($fareRuleLookup)
            ->setFareRuleKey($fareRuleKey)
            ->setAirFareDisplayRuleKey($airFareDisplayRuleKey)
            ->setAirFareRulesModifier($airFareRulesModifier)
            ->setFareRulesFilterCategory($fareRulesFilterCategory)
            ->setFareRuleType($fareRuleType);
    }
    /**
     * Get AirReservationSelector value
     * @return \Travelport\Air\StructType\AirReservationSelector|null
     */
    public function getAirReservationSelector(): ?\Travelport\Air\StructType\AirReservationSelector
    {
        return $this->AirReservationSelector ?? null;
    }
    /**
     * Set AirReservationSelector value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirReservationSelector $airReservationSelector
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setAirReservationSelector(?\Travelport\Air\StructType\AirReservationSelector $airReservationSelector = null): self
    {
        if (is_null($airReservationSelector) || (is_array($airReservationSelector) && empty($airReservationSelector))) {
            unset($this->AirReservationSelector);
        } else {
            $this->AirReservationSelector = $airReservationSelector;
        }
        
        return $this;
    }
    /**
     * Get FareRuleLookup value
     * @return \Travelport\Air\StructType\FareRuleLookup|null
     */
    public function getFareRuleLookup(): ?\Travelport\Air\StructType\FareRuleLookup
    {
        return $this->FareRuleLookup ?? null;
    }
    /**
     * Set FareRuleLookup value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\FareRuleLookup $fareRuleLookup
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setFareRuleLookup(?\Travelport\Air\StructType\FareRuleLookup $fareRuleLookup = null): self
    {
        if (is_null($fareRuleLookup) || (is_array($fareRuleLookup) && empty($fareRuleLookup))) {
            unset($this->FareRuleLookup);
        } else {
            $this->FareRuleLookup = $fareRuleLookup;
        }
        
        return $this;
    }
    /**
     * Get FareRuleKey value
     * @return \Travelport\Air\StructType\FareRuleKey[]|null
     */
    public function getFareRuleKey(): ?array
    {
        return $this->FareRuleKey ?? null;
    }
    /**
     * Set FareRuleKey value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\FareRuleKey[] $fareRuleKey
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setFareRuleKey(?array $fareRuleKey = null): self
    {
        if (is_null($fareRuleKey) || (is_array($fareRuleKey) && empty($fareRuleKey))) {
            unset($this->FareRuleKey);
        } else {
            $this->FareRuleKey = $fareRuleKey;
        }
        
        return $this;
    }
    /**
     * Add item to FareRuleKey value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRuleKey $item
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function addToFareRuleKey(\Travelport\Air\StructType\FareRuleKey $item): self
    {
        $this->FareRuleKey[] = $item;
        
        return $this;
    }
    /**
     * Get AirFareDisplayRuleKey value
     * @return \Travelport\Air\StructType\AirFareDisplayRuleKey|null
     */
    public function getAirFareDisplayRuleKey(): ?\Travelport\Air\StructType\AirFareDisplayRuleKey
    {
        return $this->AirFareDisplayRuleKey ?? null;
    }
    /**
     * Set AirFareDisplayRuleKey value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @param \Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setAirFareDisplayRuleKey(?\Travelport\Air\StructType\AirFareDisplayRuleKey $airFareDisplayRuleKey = null): self
    {
        if (is_null($airFareDisplayRuleKey) || (is_array($airFareDisplayRuleKey) && empty($airFareDisplayRuleKey))) {
            unset($this->AirFareDisplayRuleKey);
        } else {
            $this->AirFareDisplayRuleKey = $airFareDisplayRuleKey;
        }
        
        return $this;
    }
    /**
     * Get AirFareRulesModifier value
     * @return \Travelport\Air\StructType\AirFareRulesModifier|null
     */
    public function getAirFareRulesModifier(): ?\Travelport\Air\StructType\AirFareRulesModifier
    {
        return $this->AirFareRulesModifier;
    }
    /**
     * Set AirFareRulesModifier value
     * @param \Travelport\Air\StructType\AirFareRulesModifier $airFareRulesModifier
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setAirFareRulesModifier(?\Travelport\Air\StructType\AirFareRulesModifier $airFareRulesModifier = null): self
    {
        $this->AirFareRulesModifier = $airFareRulesModifier;
        
        return $this;
    }
    /**
     * Get FareRulesFilterCategory value
     * @return \Travelport\Air\StructType\FareRulesFilterCategory[]
     */
    public function getFareRulesFilterCategory(): ?array
    {
        return $this->FareRulesFilterCategory;
    }
    /**
     * Set FareRulesFilterCategory value
     * @param \Travelport\Air\StructType\FareRulesFilterCategory[] $fareRulesFilterCategory
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setFareRulesFilterCategory(?array $fareRulesFilterCategory = null): self
    {
        $this->FareRulesFilterCategory = $fareRulesFilterCategory;
        
        return $this;
    }
    /**
     * Add item to FareRulesFilterCategory value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\FareRulesFilterCategory $item
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function addToFareRulesFilterCategory(\Travelport\Air\StructType\FareRulesFilterCategory $item): self
    {
        $this->FareRulesFilterCategory[] = $item;
        
        return $this;
    }
    /**
     * Get FareRuleType value
     * @return string|null
     */
    public function getFareRuleType(): ?string
    {
        return $this->FareRuleType;
    }
    /**
     * Set FareRuleType value
     * @param string $fareRuleType
     * @return \Travelport\Air\StructType\AirFareRulesReq
     */
    public function setFareRuleType(?string $fareRuleType = null): self
    {
        $this->FareRuleType = $fareRuleType;
        
        return $this;
    }
}
