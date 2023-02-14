<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected ?bool $AdvRsvnOnlyIfTk = null;
    /**
     * The AdvRsvnAnyTm
     * Meta information extracted from the WSDL
     * - documentation: Reservation anytime. True if advanced reservatiosn anytime. False if advanced reservations for a limited time.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnAnyTm = null;
    /**
     * The AdvRsvnHrs
     * Meta information extracted from the WSDL
     * - documentation: Reservation hours. True if advanced reservation time in hours. False if advanced reservation time not in hours.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnHrs = null;
    /**
     * The AdvRsvnDays
     * Meta information extracted from the WSDL
     * - documentation: Reservation days. True if advanced reservation time in days. False if advanced reservation time not in days.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnDays = null;
    /**
     * The AdvRsvnMonths
     * Meta information extracted from the WSDL
     * - documentation: Reservation months. True if advanced reservation time in months. False if advanced reservation time not in months.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnMonths = null;
    /**
     * The AdvRsvnEarliestTm
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation time. True if advanced reservations time is earliest permitted. False is advanced reservation time not earliest permitted time.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnEarliestTm = null;
    /**
     * The AdvRsvnLatestTm
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation time. True if advanced reservations time is latest permitted. False is advanced reservation time not latest permitted time.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnLatestTm = null;
    /**
     * The AdvRsvnWaived
     * Meta information extracted from the WSDL
     * - documentation: Reservation Waived. True if advanced reservation waived. False if advanced reservation not waived.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnWaived = null;
    /**
     * The AdvRsvnDataExists
     * Meta information extracted from the WSDL
     * - documentation: Reservation data exists. True if advanced reservation data exists. False if advanced reservation data does not exist.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnDataExists = null;
    /**
     * The AdvRsvnEndItem
     * Meta information extracted from the WSDL
     * - documentation: Reservation end item. True if advanced reservation end item and more values. False if it does not exist.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvRsvnEndItem = null;
    /**
     * The AdvTkEarliestTm
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing time. True if earliest permitted. False if not earliest permitted.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkEarliestTm = null;
    /**
     * The AdvTkLatestTm
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing time. True if time is latest permitted. False if time is not latest permitted.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkLatestTm = null;
    /**
     * The AdvTkRsvnHrs
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation hours. True if in hours. False if not in hours.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkRsvnHrs = null;
    /**
     * The AdvTkRsvnDays
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation days. True if in days. False if not in days.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkRsvnDays = null;
    /**
     * The AdvTkRsvnMonths
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation months. True if in months. False if not in months.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkRsvnMonths = null;
    /**
     * The AdvTkStartHrs
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing departure. True if time is latest permitted. False if time is not latest permitted.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkStartHrs = null;
    /**
     * The AdvTkStartDays
     * Meta information extracted from the WSDL
     * - documentation: Ticketing departure days. True if in days. False if not in days.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkStartDays = null;
    /**
     * The AdvTkStartMonths
     * Meta information extracted from the WSDL
     * - documentation: Ticketing reservation months. True if in months. False if not in months.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkStartMonths = null;
    /**
     * The AdvTkWaived
     * Meta information extracted from the WSDL
     * - documentation: Ticketing waived. True if waived. False if not waived.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkWaived = null;
    /**
     * The AdvTkAnyTm
     * Meta information extracted from the WSDL
     * - documentation: Ticketing anytime. True if anytime. False if limited time.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkAnyTm = null;
    /**
     * The AdvTkEndItem
     * Meta information extracted from the WSDL
     * - documentation: Ticketing end item. True if advanced ticketing item and more values. False if end item does not exist.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AdvTkEndItem = null;
    /**
     * The AdvRsvnTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced reservation time.
     * - use: optional
     * @var int|null
     */
    protected ?int $AdvRsvnTm = null;
    /**
     * The AdvTkRsvnTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced ticketing reservation time.
     * - use: optional
     * @var int|null
     */
    protected ?int $AdvTkRsvnTm = null;
    /**
     * The AdvTkStartTm
     * Meta information extracted from the WSDL
     * - documentation: Advanced ticketing departure time.
     * - use: optional
     * @var int|null
     */
    protected ?int $AdvTkStartTm = null;
    /**
     * The EarliestRsvnDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $EarliestRsvnDtPresent = null;
    /**
     * The EarliestTkDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $EarliestTkDtPresent = null;
    /**
     * The LatestRsvnDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $LatestRsvnDtPresent = null;
    /**
     * The LatestTkDtPresent
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing date. True if date is present. False if date is not present.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $LatestTkDtPresent = null;
    /**
     * The EarliestRsvnDt
     * Meta information extracted from the WSDL
     * - documentation: Earliest reservation date.
     * - use: optional
     * @var string|null
     */
    protected ?string $EarliestRsvnDt = null;
    /**
     * The EarliestTkDt
     * Meta information extracted from the WSDL
     * - documentation: Earliest ticketing date.
     * - use: optional
     * @var string|null
     */
    protected ?string $EarliestTkDt = null;
    /**
     * The LatestRsvnDt
     * Meta information extracted from the WSDL
     * - documentation: Latest reservation date.
     * - use: optional
     * @var string|null
     */
    protected ?string $LatestRsvnDt = null;
    /**
     * The LatestTkDt
     * Meta information extracted from the WSDL
     * - documentation: Latest ticketing date.
     * - use: optional
     * @var string|null
     */
    protected ?string $LatestTkDt = null;
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnOnlyIfTk(?bool $advRsvnOnlyIfTk = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnOnlyIfTk) && !is_bool($advRsvnOnlyIfTk)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnOnlyIfTk, true), gettype($advRsvnOnlyIfTk)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnAnyTm(?bool $advRsvnAnyTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnAnyTm) && !is_bool($advRsvnAnyTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnAnyTm, true), gettype($advRsvnAnyTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnHrs(?bool $advRsvnHrs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnHrs) && !is_bool($advRsvnHrs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnHrs, true), gettype($advRsvnHrs)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnDays(?bool $advRsvnDays = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnDays) && !is_bool($advRsvnDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnDays, true), gettype($advRsvnDays)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnMonths(?bool $advRsvnMonths = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnMonths) && !is_bool($advRsvnMonths)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnMonths, true), gettype($advRsvnMonths)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnEarliestTm(?bool $advRsvnEarliestTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnEarliestTm) && !is_bool($advRsvnEarliestTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnEarliestTm, true), gettype($advRsvnEarliestTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnLatestTm(?bool $advRsvnLatestTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnLatestTm) && !is_bool($advRsvnLatestTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnLatestTm, true), gettype($advRsvnLatestTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnWaived(?bool $advRsvnWaived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnWaived) && !is_bool($advRsvnWaived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnWaived, true), gettype($advRsvnWaived)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnDataExists(?bool $advRsvnDataExists = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnDataExists) && !is_bool($advRsvnDataExists)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnDataExists, true), gettype($advRsvnDataExists)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnEndItem(?bool $advRsvnEndItem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advRsvnEndItem) && !is_bool($advRsvnEndItem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advRsvnEndItem, true), gettype($advRsvnEndItem)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkEarliestTm(?bool $advTkEarliestTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkEarliestTm) && !is_bool($advTkEarliestTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkEarliestTm, true), gettype($advTkEarliestTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkLatestTm(?bool $advTkLatestTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkLatestTm) && !is_bool($advTkLatestTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkLatestTm, true), gettype($advTkLatestTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkRsvnHrs(?bool $advTkRsvnHrs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkRsvnHrs) && !is_bool($advTkRsvnHrs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkRsvnHrs, true), gettype($advTkRsvnHrs)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkRsvnDays(?bool $advTkRsvnDays = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkRsvnDays) && !is_bool($advTkRsvnDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkRsvnDays, true), gettype($advTkRsvnDays)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkRsvnMonths(?bool $advTkRsvnMonths = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkRsvnMonths) && !is_bool($advTkRsvnMonths)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkRsvnMonths, true), gettype($advTkRsvnMonths)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkStartHrs(?bool $advTkStartHrs = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkStartHrs) && !is_bool($advTkStartHrs)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkStartHrs, true), gettype($advTkStartHrs)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkStartDays(?bool $advTkStartDays = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkStartDays) && !is_bool($advTkStartDays)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkStartDays, true), gettype($advTkStartDays)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkStartMonths(?bool $advTkStartMonths = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkStartMonths) && !is_bool($advTkStartMonths)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkStartMonths, true), gettype($advTkStartMonths)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkWaived(?bool $advTkWaived = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkWaived) && !is_bool($advTkWaived)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkWaived, true), gettype($advTkWaived)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkAnyTm(?bool $advTkAnyTm = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkAnyTm) && !is_bool($advTkAnyTm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkAnyTm, true), gettype($advTkAnyTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkEndItem(?bool $advTkEndItem = null): self
    {
        // validation for constraint: boolean
        if (!is_null($advTkEndItem) && !is_bool($advTkEndItem)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($advTkEndItem, true), gettype($advTkEndItem)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvRsvnTm(?int $advRsvnTm = null): self
    {
        // validation for constraint: int
        if (!is_null($advRsvnTm) && !(is_int($advRsvnTm) || ctype_digit($advRsvnTm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($advRsvnTm, true), gettype($advRsvnTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkRsvnTm(?int $advTkRsvnTm = null): self
    {
        // validation for constraint: int
        if (!is_null($advTkRsvnTm) && !(is_int($advTkRsvnTm) || ctype_digit($advTkRsvnTm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($advTkRsvnTm, true), gettype($advTkRsvnTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setAdvTkStartTm(?int $advTkStartTm = null): self
    {
        // validation for constraint: int
        if (!is_null($advTkStartTm) && !(is_int($advTkStartTm) || ctype_digit($advTkStartTm))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($advTkStartTm, true), gettype($advTkStartTm)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setEarliestRsvnDtPresent(?bool $earliestRsvnDtPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($earliestRsvnDtPresent) && !is_bool($earliestRsvnDtPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($earliestRsvnDtPresent, true), gettype($earliestRsvnDtPresent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setEarliestTkDtPresent(?bool $earliestTkDtPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($earliestTkDtPresent) && !is_bool($earliestTkDtPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($earliestTkDtPresent, true), gettype($earliestTkDtPresent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setLatestRsvnDtPresent(?bool $latestRsvnDtPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($latestRsvnDtPresent) && !is_bool($latestRsvnDtPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($latestRsvnDtPresent, true), gettype($latestRsvnDtPresent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setLatestTkDtPresent(?bool $latestTkDtPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($latestTkDtPresent) && !is_bool($latestTkDtPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($latestTkDtPresent, true), gettype($latestTkDtPresent)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setEarliestRsvnDt(?string $earliestRsvnDt = null): self
    {
        // validation for constraint: string
        if (!is_null($earliestRsvnDt) && !is_string($earliestRsvnDt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestRsvnDt, true), gettype($earliestRsvnDt)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setEarliestTkDt(?string $earliestTkDt = null): self
    {
        // validation for constraint: string
        if (!is_null($earliestTkDt) && !is_string($earliestTkDt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($earliestTkDt, true), gettype($earliestTkDt)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setLatestRsvnDt(?string $latestRsvnDt = null): self
    {
        // validation for constraint: string
        if (!is_null($latestRsvnDt) && !is_string($latestRsvnDt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestRsvnDt, true), gettype($latestRsvnDt)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ADVType
     */
    public function setLatestTkDt(?string $latestTkDt = null): self
    {
        // validation for constraint: string
        if (!is_null($latestTkDt) && !is_string($latestTkDt)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($latestTkDt, true), gettype($latestTkDt)), __LINE__);
        }
        $this->LatestTkDt = $latestTkDt;
        
        return $this;
    }
}
