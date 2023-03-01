<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Ticket StructType
 * Meta information extracted from the WSDL
 * - documentation: The ticket that resulted from an air booking
 * @subpackage Structs
 */
class Ticket extends AbstractStructBase
{
    /**
     * The TicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: required
     * @var string
     */
    public string $TicketNumber;
    /**
     * The Coupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - ref: Coupon
     * @var \Travelport\Air\StructType\Coupon[]
     */
    public ?array $Coupon = null;
    /**
     * The TicketEndorsement
     * Meta information extracted from the WSDL
     * - maxOccurs: 6
     * - minOccurs: 0
     * - ref: TicketEndorsement
     * @var \Travelport\Air\StructType\TicketEndorsement[]
     */
    public ?array $TicketEndorsement = null;
    /**
     * The TourCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TourCode
     * @var \Travelport\Air\StructType\TourCode[]
     */
    public ?array $TourCode = null;
    /**
     * The ExchangedTicketInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: ExchangedTicketInfo
     * @var \Travelport\Air\StructType\ExchangedTicketInfo[]
     */
    public ?array $ExchangedTicketInfo = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The TicketStatus
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $TicketStatus = null;
    /**
     * The ElStat
     * @var string|null
     */
    public ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    public ?bool $KeyOverride = null;
    /**
     * Constructor method for Ticket
     * @uses Ticket::setTicketNumber()
     * @uses Ticket::setCoupon()
     * @uses Ticket::setTicketEndorsement()
     * @uses Ticket::setTourCode()
     * @uses Ticket::setExchangedTicketInfo()
     * @uses Ticket::setKey()
     * @uses Ticket::setTicketStatus()
     * @uses Ticket::setElStat()
     * @uses Ticket::setKeyOverride()
     * @param string $ticketNumber
     * @param \Travelport\Air\StructType\Coupon[] $coupon
     * @param \Travelport\Air\StructType\TicketEndorsement[] $ticketEndorsement
     * @param \Travelport\Air\StructType\TourCode[] $tourCode
     * @param \Travelport\Air\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @param string $key
     * @param string $ticketStatus
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $ticketNumber, ?array $coupon = null, ?array $ticketEndorsement = null, ?array $tourCode = null, ?array $exchangedTicketInfo = null, ?string $key = null, ?string $ticketStatus = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setTicketNumber($ticketNumber)
            ->setCoupon($coupon)
            ->setTicketEndorsement($ticketEndorsement)
            ->setTourCode($tourCode)
            ->setExchangedTicketInfo($exchangedTicketInfo)
            ->setKey($key)
            ->setTicketStatus($ticketStatus)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get TicketNumber value
     * @return string
     */
    public function getTicketNumber(): string
    {
        return $this->TicketNumber;
    }
    /**
     * Set TicketNumber value
     * @param string $ticketNumber
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setTicketNumber(string $ticketNumber): self
    {
        $this->TicketNumber = $ticketNumber;
        
        return $this;
    }
    /**
     * Get Coupon value
     * @return \Travelport\Air\StructType\Coupon[]
     */
    public function getCoupon(): ?array
    {
        return $this->Coupon;
    }
    /**
     * Set Coupon value
     * @param \Travelport\Air\StructType\Coupon[] $coupon
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setCoupon(?array $coupon = null): self
    {
        $this->Coupon = $coupon;
        
        return $this;
    }
    /**
     * Add item to Coupon value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Coupon $item
     * @return \Travelport\Air\StructType\Ticket
     */
    public function addToCoupon(\Travelport\Air\StructType\Coupon $item): self
    {
        $this->Coupon[] = $item;
        
        return $this;
    }
    /**
     * Get TicketEndorsement value
     * @return \Travelport\Air\StructType\TicketEndorsement[]
     */
    public function getTicketEndorsement(): ?array
    {
        return $this->TicketEndorsement;
    }
    /**
     * Set TicketEndorsement value
     * @param \Travelport\Air\StructType\TicketEndorsement[] $ticketEndorsement
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setTicketEndorsement(?array $ticketEndorsement = null): self
    {
        $this->TicketEndorsement = $ticketEndorsement;
        
        return $this;
    }
    /**
     * Add item to TicketEndorsement value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TicketEndorsement $item
     * @return \Travelport\Air\StructType\Ticket
     */
    public function addToTicketEndorsement(\Travelport\Air\StructType\TicketEndorsement $item): self
    {
        $this->TicketEndorsement[] = $item;
        
        return $this;
    }
    /**
     * Get TourCode value
     * @return \Travelport\Air\StructType\TourCode[]
     */
    public function getTourCode(): ?array
    {
        return $this->TourCode;
    }
    /**
     * Set TourCode value
     * @param \Travelport\Air\StructType\TourCode[] $tourCode
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setTourCode(?array $tourCode = null): self
    {
        $this->TourCode = $tourCode;
        
        return $this;
    }
    /**
     * Add item to TourCode value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TourCode $item
     * @return \Travelport\Air\StructType\Ticket
     */
    public function addToTourCode(\Travelport\Air\StructType\TourCode $item): self
    {
        $this->TourCode[] = $item;
        
        return $this;
    }
    /**
     * Get ExchangedTicketInfo value
     * @return \Travelport\Air\StructType\ExchangedTicketInfo[]
     */
    public function getExchangedTicketInfo(): ?array
    {
        return $this->ExchangedTicketInfo;
    }
    /**
     * Set ExchangedTicketInfo value
     * @param \Travelport\Air\StructType\ExchangedTicketInfo[] $exchangedTicketInfo
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setExchangedTicketInfo(?array $exchangedTicketInfo = null): self
    {
        $this->ExchangedTicketInfo = $exchangedTicketInfo;
        
        return $this;
    }
    /**
     * Add item to ExchangedTicketInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ExchangedTicketInfo $item
     * @return \Travelport\Air\StructType\Ticket
     */
    public function addToExchangedTicketInfo(\Travelport\Air\StructType\ExchangedTicketInfo $item): self
    {
        $this->ExchangedTicketInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Key value
     * @return string|null
     */
    public function getKey(): ?string
    {
        return $this->Key;
    }
    /**
     * Set Key value
     * @param string $key
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get TicketStatus value
     * @return string|null
     */
    public function getTicketStatus(): ?string
    {
        return $this->TicketStatus;
    }
    /**
     * Set TicketStatus value
     * @param string $ticketStatus
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setTicketStatus(?string $ticketStatus = null): self
    {
        $this->TicketStatus = $ticketStatus;
        
        return $this;
    }
    /**
     * Get ElStat value
     * @return string|null
     */
    public function getElStat(): ?string
    {
        return $this->ElStat;
    }
    /**
     * Set ElStat value
     * @param string $elStat
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setElStat(?string $elStat = null): self
    {
        $this->ElStat = $elStat;
        
        return $this;
    }
    /**
     * Get KeyOverride value
     * @return bool|null
     */
    public function getKeyOverride(): ?bool
    {
        return $this->KeyOverride;
    }
    /**
     * Set KeyOverride value
     * @param bool $keyOverride
     * @return \Travelport\Air\StructType\Ticket
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
