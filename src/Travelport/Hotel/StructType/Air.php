<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?bool $OneWayShop = null;
    /**
     * The FlexExplore
     * Meta information extracted from the WSDL
     * - documentation: Allows or prohibits flex explore functionality for the associated provisioning provider configuration
     * @var bool|null
     */
    protected ?bool $FlexExplore = null;
    /**
     * The RapidRepriceEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allows or prohibits rapid reprice functionality for the associated provisioning provider configuration. Providers: 1G/1V
     * @var bool|null
     */
    protected ?bool $RapidRepriceEnabled = null;
    /**
     * The ReturnUpsellFare
     * Meta information extracted from the WSDL
     * - documentation: When set to “true”, Upsell information will be returned in the shop response.  Provider: 1G, 1V, 1P, 1J, ACH
     * @var bool|null
     */
    protected ?bool $ReturnUpsellFare = null;
    /**
     * The Tier
     * @var int|null
     */
    protected ?int $Tier = null;
    /**
     * The DaysEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Days (within a date range) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $DaysEnabled = null;
    /**
     * The WeekendsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Weekends shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $WeekendsEnabled = null;
    /**
     * The AirportsEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Airport (choice of Origin and Destination airports) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $AirportsEnabled = null;
    /**
     * The ODEnabled
     * Meta information extracted from the WSDL
     * - documentation: Allow or prohibit Flexible Origin and Destination (choice of airports within a radius) shopping option
     * - type: xs:boolean
     * @var bool|null
     */
    protected ?bool $ODEnabled = null;
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setOneWayShop(?bool $oneWayShop = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oneWayShop) && !is_bool($oneWayShop)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oneWayShop, true), gettype($oneWayShop)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setFlexExplore(?bool $flexExplore = null): self
    {
        // validation for constraint: boolean
        if (!is_null($flexExplore) && !is_bool($flexExplore)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($flexExplore, true), gettype($flexExplore)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setRapidRepriceEnabled(?bool $rapidRepriceEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($rapidRepriceEnabled) && !is_bool($rapidRepriceEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($rapidRepriceEnabled, true), gettype($rapidRepriceEnabled)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setReturnUpsellFare(?bool $returnUpsellFare = null): self
    {
        // validation for constraint: boolean
        if (!is_null($returnUpsellFare) && !is_bool($returnUpsellFare)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($returnUpsellFare, true), gettype($returnUpsellFare)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setTier(?int $tier = null): self
    {
        // validation for constraint: int
        if (!is_null($tier) && !(is_int($tier) || ctype_digit($tier))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($tier, true), gettype($tier)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setDaysEnabled(?bool $daysEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($daysEnabled) && !is_bool($daysEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($daysEnabled, true), gettype($daysEnabled)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setWeekendsEnabled(?bool $weekendsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($weekendsEnabled) && !is_bool($weekendsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($weekendsEnabled, true), gettype($weekendsEnabled)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setAirportsEnabled(?bool $airportsEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($airportsEnabled) && !is_bool($airportsEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($airportsEnabled, true), gettype($airportsEnabled)), __LINE__);
        }
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
     * @return \Travelport\Hotel\StructType\Air
     */
    public function setODEnabled(?bool $oDEnabled = null): self
    {
        // validation for constraint: boolean
        if (!is_null($oDEnabled) && !is_bool($oDEnabled)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($oDEnabled, true), gettype($oDEnabled)), __LINE__);
        }
        $this->ODEnabled = $oDEnabled;
        
        return $this;
    }
}
