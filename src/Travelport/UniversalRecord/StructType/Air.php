<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Air StructType
 * @subpackage Structs
 */
class Air extends TypeTransactionsAllowed
{
    /**
     * The OneWayShop
     * Meta information extracted from the WSDL
     * - documentation: Allows or prohibits one way shopping functionality for the associated provisioning provider configuration
     * @var bool|null
     */
    public ?bool $OneWayShop = null;
    /**
     * The FlexExplore
     * Meta information extracted from the WSDL
     * - documentation: Allows or prohibits flex explore functionality for the associated provisioning provider configuration
     * @var bool|null
     */
    public ?bool $FlexExplore = null;
    /**
     * The RapidRepriceEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allows or prohibits rapid reprice functionality for the associated provisioning provider configuration. Providers: 1G/1V
     * @var bool|null
     */
    public ?bool $RapidRepriceEnabled = null;
    /**
     * The ReturnUpsellFare
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, Upsell information will be returned in the shop response.  Provider: 1G, 1V, 1P, ACH
     * @var bool|null
     */
    public ?bool $ReturnUpsellFare = null;
    /**
     * The Tier
     * @var int|null
     */
    public ?int $Tier = null;
    /**
     * The DaysEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Days (within a date range) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $DaysEnabled = null;
    /**
     * The WeekendsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Weekends shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $WeekendsEnabled = null;
    /**
     * The AirportsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Airport (choice of Origin and Destination airports) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $AirportsEnabled = null;
    /**
     * The ODEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Origin and Destination (choice of airports within a radius) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    public ?bool $ODEnabled = null;
    /**
     * Constructor method for Air
     * @uses Air::setOneWayShop()
     * @uses Air::setFlexExplore()
     * @uses Air::setRapidRepriceEnabled()
     * @uses Air::setReturnUpsellFare()
     * @uses Air::setTier()
     * @uses Air::setDaysEnabled()
     * @uses Air::setWeekendsEnabled()
     * @uses Air::setAirportsEnabled()
     * @uses Air::setODEnabled()
     * @param bool $oneWayShop
     * @param bool $flexExplore
     * @param bool $rapidRepriceEnabled
     * @param bool $returnUpsellFare
     * @param int $tier
     * @param bool $daysEnabled
     * @param bool $weekendsEnabled
     * @param bool $airportsEnabled
     * @param bool $oDEnabled
     */
    public function __construct(?bool $oneWayShop = null, ?bool $flexExplore = null, ?bool $rapidRepriceEnabled = null, ?bool $returnUpsellFare = null, ?int $tier = null, ?bool $daysEnabled = null, ?bool $weekendsEnabled = null, ?bool $airportsEnabled = null, ?bool $oDEnabled = null)
    {
        $this
            ->setOneWayShop($oneWayShop)
            ->setFlexExplore($flexExplore)
            ->setRapidRepriceEnabled($rapidRepriceEnabled)
            ->setReturnUpsellFare($returnUpsellFare)
            ->setTier($tier)
            ->setDaysEnabled($daysEnabled)
            ->setWeekendsEnabled($weekendsEnabled)
            ->setAirportsEnabled($airportsEnabled)
            ->setODEnabled($oDEnabled);
    }
    /**
     * Get OneWayShop value
     * @return bool|null
     */
    public function getOneWayShop(): ?bool
    {
        return $this->OneWayShop;
    }
    /**
     * Set OneWayShop value
     * @param bool $oneWayShop
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setOneWayShop(?bool $oneWayShop = null): self
    {
        $this->OneWayShop = $oneWayShop;
        
        return $this;
    }
    /**
     * Get FlexExplore value
     * @return bool|null
     */
    public function getFlexExplore(): ?bool
    {
        return $this->FlexExplore;
    }
    /**
     * Set FlexExplore value
     * @param bool $flexExplore
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setFlexExplore(?bool $flexExplore = null): self
    {
        $this->FlexExplore = $flexExplore;
        
        return $this;
    }
    /**
     * Get RapidRepriceEnabled value
     * @return bool|null
     */
    public function getRapidRepriceEnabled(): ?bool
    {
        return $this->RapidRepriceEnabled;
    }
    /**
     * Set RapidRepriceEnabled value
     * @param bool $rapidRepriceEnabled
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setRapidRepriceEnabled(?bool $rapidRepriceEnabled = null): self
    {
        $this->RapidRepriceEnabled = $rapidRepriceEnabled;
        
        return $this;
    }
    /**
     * Get ReturnUpsellFare value
     * @return bool|null
     */
    public function getReturnUpsellFare(): ?bool
    {
        return $this->ReturnUpsellFare;
    }
    /**
     * Set ReturnUpsellFare value
     * @param bool $returnUpsellFare
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setReturnUpsellFare(?bool $returnUpsellFare = null): self
    {
        $this->ReturnUpsellFare = $returnUpsellFare;
        
        return $this;
    }
    /**
     * Get Tier value
     * @return int|null
     */
    public function getTier(): ?int
    {
        return $this->Tier;
    }
    /**
     * Set Tier value
     * @param int $tier
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setTier(?int $tier = null): self
    {
        $this->Tier = $tier;
        
        return $this;
    }
    /**
     * Get DaysEnabled value
     * @return bool|null
     */
    public function getDaysEnabled(): ?bool
    {
        return $this->DaysEnabled;
    }
    /**
     * Set DaysEnabled value
     * @param bool $daysEnabled
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setDaysEnabled(?bool $daysEnabled = null): self
    {
        $this->DaysEnabled = $daysEnabled;
        
        return $this;
    }
    /**
     * Get WeekendsEnabled value
     * @return bool|null
     */
    public function getWeekendsEnabled(): ?bool
    {
        return $this->WeekendsEnabled;
    }
    /**
     * Set WeekendsEnabled value
     * @param bool $weekendsEnabled
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setWeekendsEnabled(?bool $weekendsEnabled = null): self
    {
        $this->WeekendsEnabled = $weekendsEnabled;
        
        return $this;
    }
    /**
     * Get AirportsEnabled value
     * @return bool|null
     */
    public function getAirportsEnabled(): ?bool
    {
        return $this->AirportsEnabled;
    }
    /**
     * Set AirportsEnabled value
     * @param bool $airportsEnabled
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setAirportsEnabled(?bool $airportsEnabled = null): self
    {
        $this->AirportsEnabled = $airportsEnabled;
        
        return $this;
    }
    /**
     * Get ODEnabled value
     * @return bool|null
     */
    public function getODEnabled(): ?bool
    {
        return $this->ODEnabled;
    }
    /**
     * Set ODEnabled value
     * @param bool $oDEnabled
     * @return \Travelport\UniversalRecord\StructType\Air
     */
    public function setODEnabled(?bool $oDEnabled = null): self
    {
        $this->ODEnabled = $oDEnabled;
        
        return $this;
    }
}
