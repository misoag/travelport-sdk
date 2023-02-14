<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleAdvancedPurchase StructType
 * Meta information extracted from the WSDL
 * - documentation: Container for rules regarding advance purchase restrictions. TicketingEarliestDate and TicketingLatestDate are strings representing respective dates. If a year component is present then it signifies an exact date. If only day and
 * month components are present then it signifies a seasonal date, which means applicable for that date in any year
 * @subpackage Structs
 */
class RuleAdvancedPurchase extends AbstractStructBase
{
    /**
     * The ReservationLatestPeriod
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReservationLatestPeriod = null;
    /**
     * The ReservationLatestUnit
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $ReservationLatestUnit = null;
    /**
     * The TicketingEarliestDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingEarliestDate = null;
    /**
     * The TicketingLatestDate
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $TicketingLatestDate = null;
    /**
     * The MoreRulesPresent
     * Meta information extracted from the WSDL
     * - documentation: If true, specifies that advance purchase information will be present in fare rules.
     * - use: optional
     * @var bool|null
     */
    protected ?bool $MoreRulesPresent = null;
    /**
     * Constructor method for RuleAdvancedPurchase
     * @uses RuleAdvancedPurchase::setReservationLatestPeriod()
     * @uses RuleAdvancedPurchase::setReservationLatestUnit()
     * @uses RuleAdvancedPurchase::setTicketingEarliestDate()
     * @uses RuleAdvancedPurchase::setTicketingLatestDate()
     * @uses RuleAdvancedPurchase::setMoreRulesPresent()
     * @param string $reservationLatestPeriod
     * @param string $reservationLatestUnit
     * @param string $ticketingEarliestDate
     * @param string $ticketingLatestDate
     * @param bool $moreRulesPresent
     */
    public function __construct(?string $reservationLatestPeriod = null, ?string $reservationLatestUnit = null, ?string $ticketingEarliestDate = null, ?string $ticketingLatestDate = null, ?bool $moreRulesPresent = null)
    {
        $this
            ->setReservationLatestPeriod($reservationLatestPeriod)
            ->setReservationLatestUnit($reservationLatestUnit)
            ->setTicketingEarliestDate($ticketingEarliestDate)
            ->setTicketingLatestDate($ticketingLatestDate)
            ->setMoreRulesPresent($moreRulesPresent);
    }
    /**
     * Get ReservationLatestPeriod value
     * @return string|null
     */
    public function getReservationLatestPeriod(): ?string
    {
        return $this->ReservationLatestPeriod;
    }
    /**
     * Set ReservationLatestPeriod value
     * @param string $reservationLatestPeriod
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase
     */
    public function setReservationLatestPeriod(?string $reservationLatestPeriod = null): self
    {
        // validation for constraint: string
        if (!is_null($reservationLatestPeriod) && !is_string($reservationLatestPeriod)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($reservationLatestPeriod, true), gettype($reservationLatestPeriod)), __LINE__);
        }
        $this->ReservationLatestPeriod = $reservationLatestPeriod;
        
        return $this;
    }
    /**
     * Get ReservationLatestUnit value
     * @return string|null
     */
    public function getReservationLatestUnit(): ?string
    {
        return $this->ReservationLatestUnit;
    }
    /**
     * Set ReservationLatestUnit value
     * @uses \Travelport\Util\EnumType\TypeStayUnit::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeStayUnit::getValidValues()
     * @throws InvalidArgumentException
     * @param string $reservationLatestUnit
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase
     */
    public function setReservationLatestUnit(?string $reservationLatestUnit = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeStayUnit::valueIsValid($reservationLatestUnit)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeStayUnit', is_array($reservationLatestUnit) ? implode(', ', $reservationLatestUnit) : var_export($reservationLatestUnit, true), implode(', ', \Travelport\Util\EnumType\TypeStayUnit::getValidValues())), __LINE__);
        }
        $this->ReservationLatestUnit = $reservationLatestUnit;
        
        return $this;
    }
    /**
     * Get TicketingEarliestDate value
     * @return string|null
     */
    public function getTicketingEarliestDate(): ?string
    {
        return $this->TicketingEarliestDate;
    }
    /**
     * Set TicketingEarliestDate value
     * @param string $ticketingEarliestDate
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase
     */
    public function setTicketingEarliestDate(?string $ticketingEarliestDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingEarliestDate) && !is_string($ticketingEarliestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingEarliestDate, true), gettype($ticketingEarliestDate)), __LINE__);
        }
        $this->TicketingEarliestDate = $ticketingEarliestDate;
        
        return $this;
    }
    /**
     * Get TicketingLatestDate value
     * @return string|null
     */
    public function getTicketingLatestDate(): ?string
    {
        return $this->TicketingLatestDate;
    }
    /**
     * Set TicketingLatestDate value
     * @param string $ticketingLatestDate
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase
     */
    public function setTicketingLatestDate(?string $ticketingLatestDate = null): self
    {
        // validation for constraint: string
        if (!is_null($ticketingLatestDate) && !is_string($ticketingLatestDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($ticketingLatestDate, true), gettype($ticketingLatestDate)), __LINE__);
        }
        $this->TicketingLatestDate = $ticketingLatestDate;
        
        return $this;
    }
    /**
     * Get MoreRulesPresent value
     * @return bool|null
     */
    public function getMoreRulesPresent(): ?bool
    {
        return $this->MoreRulesPresent;
    }
    /**
     * Set MoreRulesPresent value
     * @param bool $moreRulesPresent
     * @return \Travelport\Util\StructType\RuleAdvancedPurchase
     */
    public function setMoreRulesPresent(?bool $moreRulesPresent = null): self
    {
        // validation for constraint: boolean
        if (!is_null($moreRulesPresent) && !is_bool($moreRulesPresent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($moreRulesPresent, true), gettype($moreRulesPresent)), __LINE__);
        }
        $this->MoreRulesPresent = $moreRulesPresent;
        
        return $this;
    }
}
