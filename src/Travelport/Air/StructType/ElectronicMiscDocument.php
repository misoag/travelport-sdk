<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ElectronicMiscDocument StructType
 * Meta information extracted from the WSDL
 * - documentation: Element Key related supporting attributes | The coupon information for the EMD issued. | Electronic miscellaneous document. Supported providers are 1G/1V/1P
 * @subpackage Structs
 */
class ElectronicMiscDocument extends AbstractStructBase
{
    /**
     * The Number
     * Meta information extracted from the WSDL
     * - documentation: EMD Number | 13 character EMD number
     * - base: xs:string
     * - length: 13
     * - type: typeEMDNumber
     * - use: required
     * @var string
     */
    public string $Number;
    /**
     * The EMDCoupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: EMDCoupon
     * @var \Travelport\Air\StructType\EMDCoupon[]
     */
    public ?array $EMDCoupon = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the EMD calculated on the basis of coupon status. Possible values Open, Void, Refunded, Exchanged, Irregular Operations,Airport Control, Checked In, Flown/Used, Boarded/Lifted, Suspended, Unknown
     * - use: optional
     * @var string|null
     */
    public ?string $Status = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $Key = null;
    /**
     * The PrimaryDocumentIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the EMD is a primary EMD.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $PrimaryDocumentIndicator = null;
    /**
     * The InConjunctionWith
     * Meta information extracted from the WSDL
     * - documentation: Returns the number of the Primary EMD, if this EMD is a conjunctive EMD | 13 character EMD number
     * - base: xs:string
     * - length: 13
     * - type: typeEMDNumber
     * - use: optional
     * @var string|null
     */
    public ?string $InConjunctionWith = null;
    /**
     * The AssociatedTicketNumber
     * Meta information extracted from the WSDL
     * - documentation: This number indicates the e-Ticket number associated with this EMD | Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - type: common:typeTicketNumber
     * - use: optional
     * @var string|null
     */
    public ?string $AssociatedTicketNumber = null;
    /**
     * The PlatingCarrier
     * Meta information extracted from the WSDL
     * - documentation: Plating carrier code for which this EMD is issued | 2 Letter Carrier code
     * - base: xs:string
     * - length: 2
     * - type: common:typeCarrier
     * - use: optional
     * @var string|null
     */
    public ?string $PlatingCarrier = null;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Issue Date for this EMD
     * - type: xs:dateTime
     * - use: optional
     * @var string|null
     */
    public ?string $IssueDate = null;
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
     * Constructor method for ElectronicMiscDocument
     * @uses ElectronicMiscDocument::setNumber()
     * @uses ElectronicMiscDocument::setEMDCoupon()
     * @uses ElectronicMiscDocument::setStatus()
     * @uses ElectronicMiscDocument::setKey()
     * @uses ElectronicMiscDocument::setPrimaryDocumentIndicator()
     * @uses ElectronicMiscDocument::setInConjunctionWith()
     * @uses ElectronicMiscDocument::setAssociatedTicketNumber()
     * @uses ElectronicMiscDocument::setPlatingCarrier()
     * @uses ElectronicMiscDocument::setIssueDate()
     * @uses ElectronicMiscDocument::setElStat()
     * @uses ElectronicMiscDocument::setKeyOverride()
     * @param string $number
     * @param \Travelport\Air\StructType\EMDCoupon[] $eMDCoupon
     * @param string $status
     * @param string $key
     * @param bool $primaryDocumentIndicator
     * @param string $inConjunctionWith
     * @param string $associatedTicketNumber
     * @param string $platingCarrier
     * @param string $issueDate
     * @param string $elStat
     * @param bool $keyOverride
     */
    public function __construct(string $number, ?array $eMDCoupon = null, ?string $status = null, ?string $key = null, ?bool $primaryDocumentIndicator = null, ?string $inConjunctionWith = null, ?string $associatedTicketNumber = null, ?string $platingCarrier = null, ?string $issueDate = null, ?string $elStat = null, ?bool $keyOverride = null)
    {
        $this
            ->setNumber($number)
            ->setEMDCoupon($eMDCoupon)
            ->setStatus($status)
            ->setKey($key)
            ->setPrimaryDocumentIndicator($primaryDocumentIndicator)
            ->setInConjunctionWith($inConjunctionWith)
            ->setAssociatedTicketNumber($associatedTicketNumber)
            ->setPlatingCarrier($platingCarrier)
            ->setIssueDate($issueDate)
            ->setElStat($elStat)
            ->setKeyOverride($keyOverride);
    }
    /**
     * Get Number value
     * @return string
     */
    public function getNumber(): string
    {
        return $this->Number;
    }
    /**
     * Set Number value
     * @param string $number
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setNumber(string $number): self
    {
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return \Travelport\Air\StructType\EMDCoupon[]
     */
    public function getEMDCoupon(): ?array
    {
        return $this->EMDCoupon;
    }
    /**
     * Set EMDCoupon value
     * @param \Travelport\Air\StructType\EMDCoupon[] $eMDCoupon
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setEMDCoupon(?array $eMDCoupon = null): self
    {
        $this->EMDCoupon = $eMDCoupon;
        
        return $this;
    }
    /**
     * Add item to EMDCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\EMDCoupon $item
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function addToEMDCoupon(\Travelport\Air\StructType\EMDCoupon $item): self
    {
        $this->EMDCoupon[] = $item;
        
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus(): ?string
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setStatus(?string $status = null): self
    {
        $this->Status = $status;
        
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
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setKey(?string $key = null): self
    {
        $this->Key = $key;
        
        return $this;
    }
    /**
     * Get PrimaryDocumentIndicator value
     * @return bool|null
     */
    public function getPrimaryDocumentIndicator(): ?bool
    {
        return $this->PrimaryDocumentIndicator;
    }
    /**
     * Set PrimaryDocumentIndicator value
     * @param bool $primaryDocumentIndicator
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setPrimaryDocumentIndicator(?bool $primaryDocumentIndicator = null): self
    {
        $this->PrimaryDocumentIndicator = $primaryDocumentIndicator;
        
        return $this;
    }
    /**
     * Get InConjunctionWith value
     * @return string|null
     */
    public function getInConjunctionWith(): ?string
    {
        return $this->InConjunctionWith;
    }
    /**
     * Set InConjunctionWith value
     * @param string $inConjunctionWith
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setInConjunctionWith(?string $inConjunctionWith = null): self
    {
        $this->InConjunctionWith = $inConjunctionWith;
        
        return $this;
    }
    /**
     * Get AssociatedTicketNumber value
     * @return string|null
     */
    public function getAssociatedTicketNumber(): ?string
    {
        return $this->AssociatedTicketNumber;
    }
    /**
     * Set AssociatedTicketNumber value
     * @param string $associatedTicketNumber
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setAssociatedTicketNumber(?string $associatedTicketNumber = null): self
    {
        $this->AssociatedTicketNumber = $associatedTicketNumber;
        
        return $this;
    }
    /**
     * Get PlatingCarrier value
     * @return string|null
     */
    public function getPlatingCarrier(): ?string
    {
        return $this->PlatingCarrier;
    }
    /**
     * Set PlatingCarrier value
     * @param string $platingCarrier
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        $this->PlatingCarrier = $platingCarrier;
        
        return $this;
    }
    /**
     * Get IssueDate value
     * @return string|null
     */
    public function getIssueDate(): ?string
    {
        return $this->IssueDate;
    }
    /**
     * Set IssueDate value
     * @param string $issueDate
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        $this->IssueDate = $issueDate;
        
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
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
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
     * @return \Travelport\Air\StructType\ElectronicMiscDocument
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
