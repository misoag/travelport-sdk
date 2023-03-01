<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ADVType StructType
 * @subpackage Structs
 */
class ADVType extends AbstractStructBase
{
    /**
     * The AdvRsvnOnlyIfTk
     * Meta information extracted from the WSDL
     * - documentation: Reservation only if ticketed. True is advanced reservations only if tickets. False is no advanced reservations
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnOnlyIfTk = null;
    /**
     * The AdvRsvnAnyTm
     * Meta information extracted from the WSDL
     * - documentation: Reservation anytime. True if advanced reservatiosn anytime. False if advanced reservations for a limited time.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnAnyTm = null;
    /**
     * The AdvRsvnHrs
     * Meta information extracted from the WSDL
     * - documentation: Reservation hours. True if advanced reservation time in hours. False if advanced reservation time not in hours.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnHrs = null;
    /**
     * The AdvRsvnDays
     * Meta information extracted from the WSDL
     * - documentation: Reservation days. True if advanced reservation time in days. False if advanced reservation time not in days.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnDays = null;
    /**
     * The AdvRsvnMonths
     * Meta information extracted from the WSDL
     * - documentation: Reservation months. True if advanced reservation time in months. False if advanced reservation time not in months.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnMonths = null;
    /**
     * The AdvRsvnEarliestTm
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation time. True if advanced reservations time is earliest permitted. False is advanced reservation time not earliest permitted time.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnEarliestTm = null;
    /**
     * The AdvRsvnLatestTm
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation time. True if advanced reservations time is latest permitted. False is advanced reservation time not latest permitted time.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnLatestTm = null;
    /**
     * The AdvRsvnWaived
     * Meta information extracted from the WSDL
     * - documentation: Reservation Waived. True if advanced reservation waived. False if advanced reservation not waived.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnWaived = null;
    /**
     * The AdvRsvnDataExists
     * Meta information extracted from the WSDL
     * - documentation: Reservation data exists. True if advanced reservation data exists. False if advanced reservation data does not exist.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnDataExists = null;
    /**
     * The AdvRsvnEndItem
     * Meta information extracted from the WSDL
     * - documentation: Reservation end item. True if advanced reservation end item and more values. False if it does not exist.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvRsvnEndItem = null;
    /**
     * The AdvTkEarliestTm
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing time. True if earliest permitted. False if not earliest permitted.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkEarliestTm = null;
    /**
     * The AdvTkLatestTm
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing time. True if time is latest permitted. False if time is not latest permitted.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkLatestTm = null;
    /**
     * The AdvTkRsvnHrs
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation hours. True if in hours. False if not in hours.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkRsvnHrs = null;
    /**
     * The AdvTkRsvnDays
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation days. True if in days. False if not in days.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkRsvnDays = null;
    /**
     * The AdvTkRsvnMonths
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation months. True if in months. False if not in months.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkRsvnMonths = null;
    /**
     * The AdvTkStartHrs
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing departure. True if time is latest permitted. False if time is not latest permitted.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkStartHrs = null;
    /**
     * The AdvTkStartDays
     * Meta information extracted from the WSDL
     * - documentation: Ticketing departure days. True if in days. False if not in days.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkStartDays = null;
    /**
     * The AdvTkStartMonths
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation months. True if in months. False if not in months.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkStartMonths = null;
    /**
     * The AdvTkWaived
     * Meta information extracted from the WSDL
     * - documentation: Ticketing waived. True if waived. False if not waived.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkWaived = null;
    /**
     * The AdvTkAnyTm
     * Meta information extracted from the WSDL
     * - documentation: Ticketing anytime. True if anytime. False if limited time.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkAnyTm = null;
    /**
     * The AdvTkEndItem
     * Meta information extracted from the WSDL
     * - documentation: Ticketing end item. True if advanced ticketing item and more values. False if end item does not exist.
     * - use: optional
     * @var bool|null
     */
    public ?bool $AdvTkEndItem = null;
    /**
     * The AdvRsvnTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced reservation time.
     * - use: optional
     * @var int|null
     */
    public ?int $AdvRsvnTm = null;
    /**
     * The AdvTkRsvnTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced ticketing reservation time.
     * - use: optional
     * @var int|null
     */
    public ?int $AdvTkRsvnTm = null;
    /**
     * The AdvTkStartTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced ticketing departure time.
     * - use: optional
     * @var int|null
     */
    public ?int $AdvTkStartTm = null;
    /**
     * The EarliestRsvnDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    public ?bool $EarliestRsvnDtPresent = null;
    /**
     * The EarliestTkDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    public ?bool $EarliestTkDtPresent = null;
    /**
     * The LatestRsvnDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    public ?bool $LatestRsvnDtPresent = null;
    /**
     * The LatestTkDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    public ?bool $LatestTkDtPresent = null;
    /**
     * The EarliestRsvnDt
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation date.
     * - use: optional
     * @var string|null
     */
    public ?string $EarliestRsvnDt = null;
    /**
     * The EarliestTkDt
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing date.
     * - use: optional
     * @var string|null
     */
    public ?string $EarliestTkDt = null;
    /**
     * The LatestRsvnDt
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation date.
     * - use: optional
     * @var string|null
     */
    public ?string $LatestRsvnDt = null;
    /**
     * The LatestTkDt
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing date.
     * - use: optional
     * @var string|null
     */
    public ?string $LatestTkDt = null;
    /**
     * Constructor method for ADVType
     * @uses ADVType::setAdvRsvnOnlyIfTk()
     * @uses ADVType::setAdvRsvnAnyTm()
     * @uses ADVType::setAdvRsvnHrs()
     * @uses ADVType::setAdvRsvnDays()
     * @uses ADVType::setAdvRsvnMonths()
     * @uses ADVType::setAdvRsvnEarliestTm()
     * @uses ADVType::setAdvRsvnLatestTm()
     * @uses ADVType::setAdvRsvnWaived()
     * @uses ADVType::setAdvRsvnDataExists()
     * @uses ADVType::setAdvRsvnEndItem()
     * @uses ADVType::setAdvTkEarliestTm()
     * @uses ADVType::setAdvTkLatestTm()
     * @uses ADVType::setAdvTkRsvnHrs()
     * @uses ADVType::setAdvTkRsvnDays()
     * @uses ADVType::setAdvTkRsvnMonths()
     * @uses ADVType::setAdvTkStartHrs()
     * @uses ADVType::setAdvTkStartDays()
     * @uses ADVType::setAdvTkStartMonths()
     * @uses ADVType::setAdvTkWaived()
     * @uses ADVType::setAdvTkAnyTm()
     * @uses ADVType::setAdvTkEndItem()
     * @uses ADVType::setAdvRsvnTm()
     * @uses ADVType::setAdvTkRsvnTm()
     * @uses ADVType::setAdvTkStartTm()
     * @uses ADVType::setEarliestRsvnDtPresent()
     * @uses ADVType::setEarliestTkDtPresent()
     * @uses ADVType::setLatestRsvnDtPresent()
     * @uses ADVType::setLatestTkDtPresent()
     * @uses ADVType::setEarliestRsvnDt()
     * @uses ADVType::setEarliestTkDt()
     * @uses ADVType::setLatestRsvnDt()
     * @uses ADVType::setLatestTkDt()
     * @param bool $advRsvnOnlyIfTk
     * @param bool $advRsvnAnyTm
     * @param bool $advRsvnHrs
     * @param bool $advRsvnDays
     * @param bool $advRsvnMonths
     * @param bool $advRsvnEarliestTm
     * @param bool $advRsvnLatestTm
     * @param bool $advRsvnWaived
     * @param bool $advRsvnDataExists
     * @param bool $advRsvnEndItem
     * @param bool $advTkEarliestTm
     * @param bool $advTkLatestTm
     * @param bool $advTkRsvnHrs
     * @param bool $advTkRsvnDays
     * @param bool $advTkRsvnMonths
     * @param bool $advTkStartHrs
     * @param bool $advTkStartDays
     * @param bool $advTkStartMonths
     * @param bool $advTkWaived
     * @param bool $advTkAnyTm
     * @param bool $advTkEndItem
     * @param int $advRsvnTm
     * @param int $advTkRsvnTm
     * @param int $advTkStartTm
     * @param bool $earliestRsvnDtPresent
     * @param bool $earliestTkDtPresent
     * @param bool $latestRsvnDtPresent
     * @param bool $latestTkDtPresent
     * @param string $earliestRsvnDt
     * @param string $earliestTkDt
     * @param string $latestRsvnDt
     * @param string $latestTkDt
     */
    public function __construct(?bool $advRsvnOnlyIfTk = null, ?bool $advRsvnAnyTm = null, ?bool $advRsvnHrs = null, ?bool $advRsvnDays = null, ?bool $advRsvnMonths = null, ?bool $advRsvnEarliestTm = null, ?bool $advRsvnLatestTm = null, ?bool $advRsvnWaived = null, ?bool $advRsvnDataExists = null, ?bool $advRsvnEndItem = null, ?bool $advTkEarliestTm = null, ?bool $advTkLatestTm = null, ?bool $advTkRsvnHrs = null, ?bool $advTkRsvnDays = null, ?bool $advTkRsvnMonths = null, ?bool $advTkStartHrs = null, ?bool $advTkStartDays = null, ?bool $advTkStartMonths = null, ?bool $advTkWaived = null, ?bool $advTkAnyTm = null, ?bool $advTkEndItem = null, ?int $advRsvnTm = null, ?int $advTkRsvnTm = null, ?int $advTkStartTm = null, ?bool $earliestRsvnDtPresent = null, ?bool $earliestTkDtPresent = null, ?bool $latestRsvnDtPresent = null, ?bool $latestTkDtPresent = null, ?string $earliestRsvnDt = null, ?string $earliestTkDt = null, ?string $latestRsvnDt = null, ?string $latestTkDt = null)
    {
        $this
            ->setAdvRsvnOnlyIfTk($advRsvnOnlyIfTk)
            ->setAdvRsvnAnyTm($advRsvnAnyTm)
            ->setAdvRsvnHrs($advRsvnHrs)
            ->setAdvRsvnDays($advRsvnDays)
            ->setAdvRsvnMonths($advRsvnMonths)
            ->setAdvRsvnEarliestTm($advRsvnEarliestTm)
            ->setAdvRsvnLatestTm($advRsvnLatestTm)
            ->setAdvRsvnWaived($advRsvnWaived)
            ->setAdvRsvnDataExists($advRsvnDataExists)
            ->setAdvRsvnEndItem($advRsvnEndItem)
            ->setAdvTkEarliestTm($advTkEarliestTm)
            ->setAdvTkLatestTm($advTkLatestTm)
            ->setAdvTkRsvnHrs($advTkRsvnHrs)
            ->setAdvTkRsvnDays($advTkRsvnDays)
            ->setAdvTkRsvnMonths($advTkRsvnMonths)
            ->setAdvTkStartHrs($advTkStartHrs)
            ->setAdvTkStartDays($advTkStartDays)
            ->setAdvTkStartMonths($advTkStartMonths)
            ->setAdvTkWaived($advTkWaived)
            ->setAdvTkAnyTm($advTkAnyTm)
            ->setAdvTkEndItem($advTkEndItem)
            ->setAdvRsvnTm($advRsvnTm)
            ->setAdvTkRsvnTm($advTkRsvnTm)
            ->setAdvTkStartTm($advTkStartTm)
            ->setEarliestRsvnDtPresent($earliestRsvnDtPresent)
            ->setEarliestTkDtPresent($earliestTkDtPresent)
            ->setLatestRsvnDtPresent($latestRsvnDtPresent)
            ->setLatestTkDtPresent($latestTkDtPresent)
            ->setEarliestRsvnDt($earliestRsvnDt)
            ->setEarliestTkDt($earliestTkDt)
            ->setLatestRsvnDt($latestRsvnDt)
            ->setLatestTkDt($latestTkDt);
    }
    /**
     * Get AdvRsvnOnlyIfTk value
     * @return bool|null
     */
    public function getAdvRsvnOnlyIfTk(): ?bool
    {
        return $this->AdvRsvnOnlyIfTk;
    }
    /**
     * Set AdvRsvnOnlyIfTk value
     * @param bool $advRsvnOnlyIfTk
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnOnlyIfTk(?bool $advRsvnOnlyIfTk = null): self
    {
        $this->AdvRsvnOnlyIfTk = $advRsvnOnlyIfTk;
        
        return $this;
    }
    /**
     * Get AdvRsvnAnyTm value
     * @return bool|null
     */
    public function getAdvRsvnAnyTm(): ?bool
    {
        return $this->AdvRsvnAnyTm;
    }
    /**
     * Set AdvRsvnAnyTm value
     * @param bool $advRsvnAnyTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnAnyTm(?bool $advRsvnAnyTm = null): self
    {
        $this->AdvRsvnAnyTm = $advRsvnAnyTm;
        
        return $this;
    }
    /**
     * Get AdvRsvnHrs value
     * @return bool|null
     */
    public function getAdvRsvnHrs(): ?bool
    {
        return $this->AdvRsvnHrs;
    }
    /**
     * Set AdvRsvnHrs value
     * @param bool $advRsvnHrs
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnHrs(?bool $advRsvnHrs = null): self
    {
        $this->AdvRsvnHrs = $advRsvnHrs;
        
        return $this;
    }
    /**
     * Get AdvRsvnDays value
     * @return bool|null
     */
    public function getAdvRsvnDays(): ?bool
    {
        return $this->AdvRsvnDays;
    }
    /**
     * Set AdvRsvnDays value
     * @param bool $advRsvnDays
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnDays(?bool $advRsvnDays = null): self
    {
        $this->AdvRsvnDays = $advRsvnDays;
        
        return $this;
    }
    /**
     * Get AdvRsvnMonths value
     * @return bool|null
     */
    public function getAdvRsvnMonths(): ?bool
    {
        return $this->AdvRsvnMonths;
    }
    /**
     * Set AdvRsvnMonths value
     * @param bool $advRsvnMonths
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnMonths(?bool $advRsvnMonths = null): self
    {
        $this->AdvRsvnMonths = $advRsvnMonths;
        
        return $this;
    }
    /**
     * Get AdvRsvnEarliestTm value
     * @return bool|null
     */
    public function getAdvRsvnEarliestTm(): ?bool
    {
        return $this->AdvRsvnEarliestTm;
    }
    /**
     * Set AdvRsvnEarliestTm value
     * @param bool $advRsvnEarliestTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnEarliestTm(?bool $advRsvnEarliestTm = null): self
    {
        $this->AdvRsvnEarliestTm = $advRsvnEarliestTm;
        
        return $this;
    }
    /**
     * Get AdvRsvnLatestTm value
     * @return bool|null
     */
    public function getAdvRsvnLatestTm(): ?bool
    {
        return $this->AdvRsvnLatestTm;
    }
    /**
     * Set AdvRsvnLatestTm value
     * @param bool $advRsvnLatestTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnLatestTm(?bool $advRsvnLatestTm = null): self
    {
        $this->AdvRsvnLatestTm = $advRsvnLatestTm;
        
        return $this;
    }
    /**
     * Get AdvRsvnWaived value
     * @return bool|null
     */
    public function getAdvRsvnWaived(): ?bool
    {
        return $this->AdvRsvnWaived;
    }
    /**
     * Set AdvRsvnWaived value
     * @param bool $advRsvnWaived
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnWaived(?bool $advRsvnWaived = null): self
    {
        $this->AdvRsvnWaived = $advRsvnWaived;
        
        return $this;
    }
    /**
     * Get AdvRsvnDataExists value
     * @return bool|null
     */
    public function getAdvRsvnDataExists(): ?bool
    {
        return $this->AdvRsvnDataExists;
    }
    /**
     * Set AdvRsvnDataExists value
     * @param bool $advRsvnDataExists
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnDataExists(?bool $advRsvnDataExists = null): self
    {
        $this->AdvRsvnDataExists = $advRsvnDataExists;
        
        return $this;
    }
    /**
     * Get AdvRsvnEndItem value
     * @return bool|null
     */
    public function getAdvRsvnEndItem(): ?bool
    {
        return $this->AdvRsvnEndItem;
    }
    /**
     * Set AdvRsvnEndItem value
     * @param bool $advRsvnEndItem
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnEndItem(?bool $advRsvnEndItem = null): self
    {
        $this->AdvRsvnEndItem = $advRsvnEndItem;
        
        return $this;
    }
    /**
     * Get AdvTkEarliestTm value
     * @return bool|null
     */
    public function getAdvTkEarliestTm(): ?bool
    {
        return $this->AdvTkEarliestTm;
    }
    /**
     * Set AdvTkEarliestTm value
     * @param bool $advTkEarliestTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkEarliestTm(?bool $advTkEarliestTm = null): self
    {
        $this->AdvTkEarliestTm = $advTkEarliestTm;
        
        return $this;
    }
    /**
     * Get AdvTkLatestTm value
     * @return bool|null
     */
    public function getAdvTkLatestTm(): ?bool
    {
        return $this->AdvTkLatestTm;
    }
    /**
     * Set AdvTkLatestTm value
     * @param bool $advTkLatestTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkLatestTm(?bool $advTkLatestTm = null): self
    {
        $this->AdvTkLatestTm = $advTkLatestTm;
        
        return $this;
    }
    /**
     * Get AdvTkRsvnHrs value
     * @return bool|null
     */
    public function getAdvTkRsvnHrs(): ?bool
    {
        return $this->AdvTkRsvnHrs;
    }
    /**
     * Set AdvTkRsvnHrs value
     * @param bool $advTkRsvnHrs
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkRsvnHrs(?bool $advTkRsvnHrs = null): self
    {
        $this->AdvTkRsvnHrs = $advTkRsvnHrs;
        
        return $this;
    }
    /**
     * Get AdvTkRsvnDays value
     * @return bool|null
     */
    public function getAdvTkRsvnDays(): ?bool
    {
        return $this->AdvTkRsvnDays;
    }
    /**
     * Set AdvTkRsvnDays value
     * @param bool $advTkRsvnDays
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkRsvnDays(?bool $advTkRsvnDays = null): self
    {
        $this->AdvTkRsvnDays = $advTkRsvnDays;
        
        return $this;
    }
    /**
     * Get AdvTkRsvnMonths value
     * @return bool|null
     */
    public function getAdvTkRsvnMonths(): ?bool
    {
        return $this->AdvTkRsvnMonths;
    }
    /**
     * Set AdvTkRsvnMonths value
     * @param bool $advTkRsvnMonths
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkRsvnMonths(?bool $advTkRsvnMonths = null): self
    {
        $this->AdvTkRsvnMonths = $advTkRsvnMonths;
        
        return $this;
    }
    /**
     * Get AdvTkStartHrs value
     * @return bool|null
     */
    public function getAdvTkStartHrs(): ?bool
    {
        return $this->AdvTkStartHrs;
    }
    /**
     * Set AdvTkStartHrs value
     * @param bool $advTkStartHrs
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkStartHrs(?bool $advTkStartHrs = null): self
    {
        $this->AdvTkStartHrs = $advTkStartHrs;
        
        return $this;
    }
    /**
     * Get AdvTkStartDays value
     * @return bool|null
     */
    public function getAdvTkStartDays(): ?bool
    {
        return $this->AdvTkStartDays;
    }
    /**
     * Set AdvTkStartDays value
     * @param bool $advTkStartDays
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkStartDays(?bool $advTkStartDays = null): self
    {
        $this->AdvTkStartDays = $advTkStartDays;
        
        return $this;
    }
    /**
     * Get AdvTkStartMonths value
     * @return bool|null
     */
    public function getAdvTkStartMonths(): ?bool
    {
        return $this->AdvTkStartMonths;
    }
    /**
     * Set AdvTkStartMonths value
     * @param bool $advTkStartMonths
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkStartMonths(?bool $advTkStartMonths = null): self
    {
        $this->AdvTkStartMonths = $advTkStartMonths;
        
        return $this;
    }
    /**
     * Get AdvTkWaived value
     * @return bool|null
     */
    public function getAdvTkWaived(): ?bool
    {
        return $this->AdvTkWaived;
    }
    /**
     * Set AdvTkWaived value
     * @param bool $advTkWaived
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkWaived(?bool $advTkWaived = null): self
    {
        $this->AdvTkWaived = $advTkWaived;
        
        return $this;
    }
    /**
     * Get AdvTkAnyTm value
     * @return bool|null
     */
    public function getAdvTkAnyTm(): ?bool
    {
        return $this->AdvTkAnyTm;
    }
    /**
     * Set AdvTkAnyTm value
     * @param bool $advTkAnyTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkAnyTm(?bool $advTkAnyTm = null): self
    {
        $this->AdvTkAnyTm = $advTkAnyTm;
        
        return $this;
    }
    /**
     * Get AdvTkEndItem value
     * @return bool|null
     */
    public function getAdvTkEndItem(): ?bool
    {
        return $this->AdvTkEndItem;
    }
    /**
     * Set AdvTkEndItem value
     * @param bool $advTkEndItem
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkEndItem(?bool $advTkEndItem = null): self
    {
        $this->AdvTkEndItem = $advTkEndItem;
        
        return $this;
    }
    /**
     * Get AdvRsvnTm value
     * @return int|null
     */
    public function getAdvRsvnTm(): ?int
    {
        return $this->AdvRsvnTm;
    }
    /**
     * Set AdvRsvnTm value
     * @param int $advRsvnTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvRsvnTm(?int $advRsvnTm = null): self
    {
        $this->AdvRsvnTm = $advRsvnTm;
        
        return $this;
    }
    /**
     * Get AdvTkRsvnTm value
     * @return int|null
     */
    public function getAdvTkRsvnTm(): ?int
    {
        return $this->AdvTkRsvnTm;
    }
    /**
     * Set AdvTkRsvnTm value
     * @param int $advTkRsvnTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkRsvnTm(?int $advTkRsvnTm = null): self
    {
        $this->AdvTkRsvnTm = $advTkRsvnTm;
        
        return $this;
    }
    /**
     * Get AdvTkStartTm value
     * @return int|null
     */
    public function getAdvTkStartTm(): ?int
    {
        return $this->AdvTkStartTm;
    }
    /**
     * Set AdvTkStartTm value
     * @param int $advTkStartTm
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setAdvTkStartTm(?int $advTkStartTm = null): self
    {
        $this->AdvTkStartTm = $advTkStartTm;
        
        return $this;
    }
    /**
     * Get EarliestRsvnDtPresent value
     * @return bool|null
     */
    public function getEarliestRsvnDtPresent(): ?bool
    {
        return $this->EarliestRsvnDtPresent;
    }
    /**
     * Set EarliestRsvnDtPresent value
     * @param bool $earliestRsvnDtPresent
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setEarliestRsvnDtPresent(?bool $earliestRsvnDtPresent = null): self
    {
        $this->EarliestRsvnDtPresent = $earliestRsvnDtPresent;
        
        return $this;
    }
    /**
     * Get EarliestTkDtPresent value
     * @return bool|null
     */
    public function getEarliestTkDtPresent(): ?bool
    {
        return $this->EarliestTkDtPresent;
    }
    /**
     * Set EarliestTkDtPresent value
     * @param bool $earliestTkDtPresent
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setEarliestTkDtPresent(?bool $earliestTkDtPresent = null): self
    {
        $this->EarliestTkDtPresent = $earliestTkDtPresent;
        
        return $this;
    }
    /**
     * Get LatestRsvnDtPresent value
     * @return bool|null
     */
    public function getLatestRsvnDtPresent(): ?bool
    {
        return $this->LatestRsvnDtPresent;
    }
    /**
     * Set LatestRsvnDtPresent value
     * @param bool $latestRsvnDtPresent
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setLatestRsvnDtPresent(?bool $latestRsvnDtPresent = null): self
    {
        $this->LatestRsvnDtPresent = $latestRsvnDtPresent;
        
        return $this;
    }
    /**
     * Get LatestTkDtPresent value
     * @return bool|null
     */
    public function getLatestTkDtPresent(): ?bool
    {
        return $this->LatestTkDtPresent;
    }
    /**
     * Set LatestTkDtPresent value
     * @param bool $latestTkDtPresent
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setLatestTkDtPresent(?bool $latestTkDtPresent = null): self
    {
        $this->LatestTkDtPresent = $latestTkDtPresent;
        
        return $this;
    }
    /**
     * Get EarliestRsvnDt value
     * @return string|null
     */
    public function getEarliestRsvnDt(): ?string
    {
        return $this->EarliestRsvnDt;
    }
    /**
     * Set EarliestRsvnDt value
     * @param string $earliestRsvnDt
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setEarliestRsvnDt(?string $earliestRsvnDt = null): self
    {
        $this->EarliestRsvnDt = $earliestRsvnDt;
        
        return $this;
    }
    /**
     * Get EarliestTkDt value
     * @return string|null
     */
    public function getEarliestTkDt(): ?string
    {
        return $this->EarliestTkDt;
    }
    /**
     * Set EarliestTkDt value
     * @param string $earliestTkDt
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setEarliestTkDt(?string $earliestTkDt = null): self
    {
        $this->EarliestTkDt = $earliestTkDt;
        
        return $this;
    }
    /**
     * Get LatestRsvnDt value
     * @return string|null
     */
    public function getLatestRsvnDt(): ?string
    {
        return $this->LatestRsvnDt;
    }
    /**
     * Set LatestRsvnDt value
     * @param string $latestRsvnDt
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setLatestRsvnDt(?string $latestRsvnDt = null): self
    {
        $this->LatestRsvnDt = $latestRsvnDt;
        
        return $this;
    }
    /**
     * Get LatestTkDt value
     * @return string|null
     */
    public function getLatestTkDt(): ?string
    {
        return $this->LatestTkDt;
    }
    /**
     * Set LatestTkDt value
     * @param string $latestTkDt
     * @return \Travelport\UniversalRecord\StructType\ADVType
     */
    public function setLatestTkDt(?string $latestTkDt = null): self
    {
        $this->LatestTkDt = $latestTkDt;
        
        return $this;
    }
}
