<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
    protected string $Number;
    /**
     * The EMDCoupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - ref: EMDCoupon
     * @var \Travelport\Util\StructType\EMDCoupon[]
     */
    protected ?array $EMDCoupon = null;
    /**
     * The Status
     * Meta information extracted from the WSDL
     * - documentation: Status of the EMD calculated on the basis of coupon status. Possible values Open, Void, Refunded, Exchanged, Irregular Operations,Airport Control, Checked In, Flown/Used, Boarded/Lifted, Suspended, Unknown
     * - use: optional
     * @var string|null
     */
    protected ?string $Status = null;
    /**
     * The Key
     * Meta information extracted from the WSDL
     * - documentation: System generated Key | Reference type
     * - base: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $Key = null;
    /**
     * The PrimaryDocumentIndicator
     * Meta information extracted from the WSDL
     * - documentation: Indicates whether the EMD is a primary EMD.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $PrimaryDocumentIndicator = null;
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
    protected ?string $InConjunctionWith = null;
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
    protected ?string $AssociatedTicketNumber = null;
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
    protected ?string $PlatingCarrier = null;
    /**
     * The IssueDate
     * Meta information extracted from the WSDL
     * - documentation: Issue Date for this EMD
     * - type: xs:dateTime
     * - use: optional
     * @var string|null
     */
    protected ?string $IssueDate = null;
    /**
     * The ElStat
     * @var string|null
     */
    protected ?string $ElStat = null;
    /**
     * The KeyOverride
     * @var bool|null
     */
    protected ?bool $KeyOverride = null;
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
     * @param \Travelport\Util\StructType\EMDCoupon[] $eMDCoupon
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setNumber(string $number): self
    {
        // validation for constraint: string
        if (!is_null($number) && !is_string($number)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($number, true), gettype($number)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($number) && mb_strlen((string) $number) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $number)), __LINE__);
        }
        $this->Number = $number;
        
        return $this;
    }
    /**
     * Get EMDCoupon value
     * @return \Travelport\Util\StructType\EMDCoupon[]
     */
    public function getEMDCoupon(): ?array
    {
        return $this->EMDCoupon;
    }
    /**
     * This method is responsible for validating the values passed to the setEMDCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the setEMDCoupon method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateEMDCouponForArrayConstraintsFromSetEMDCoupon(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $electronicMiscDocumentEMDCouponItem) {
            // validation for constraint: itemType
            if (!$electronicMiscDocumentEMDCouponItem instanceof \Travelport\Util\StructType\EMDCoupon) {
                $invalidValues[] = is_object($electronicMiscDocumentEMDCouponItem) ? get_class($electronicMiscDocumentEMDCouponItem) : sprintf('%s(%s)', gettype($electronicMiscDocumentEMDCouponItem), var_export($electronicMiscDocumentEMDCouponItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The EMDCoupon property can only contain items of type \Travelport\Util\StructType\EMDCoupon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set EMDCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\EMDCoupon[] $eMDCoupon
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setEMDCoupon(?array $eMDCoupon = null): self
    {
        // validation for constraint: array
        if ('' !== ($eMDCouponArrayErrorMessage = self::validateEMDCouponForArrayConstraintsFromSetEMDCoupon($eMDCoupon))) {
            throw new InvalidArgumentException($eMDCouponArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($eMDCoupon) && count($eMDCoupon) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($eMDCoupon)), __LINE__);
        }
        $this->EMDCoupon = $eMDCoupon;
        
        return $this;
    }
    /**
     * Add item to EMDCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\EMDCoupon $item
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function addToEMDCoupon(\Travelport\Util\StructType\EMDCoupon $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\EMDCoupon) {
            throw new InvalidArgumentException(sprintf('The EMDCoupon property can only contain items of type \Travelport\Util\StructType\EMDCoupon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->EMDCoupon) && count($this->EMDCoupon) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->EMDCoupon)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setStatus(?string $status = null): self
    {
        // validation for constraint: string
        if (!is_null($status) && !is_string($status)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($status, true), gettype($status)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setKey(?string $key = null): self
    {
        // validation for constraint: string
        if (!is_null($key) && !is_string($key)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($key, true), gettype($key)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setPrimaryDocumentIndicator(?bool $primaryDocumentIndicator = null): self
    {
        // validation for constraint: boolean
        if (!is_null($primaryDocumentIndicator) && !is_bool($primaryDocumentIndicator)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($primaryDocumentIndicator, true), gettype($primaryDocumentIndicator)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setInConjunctionWith(?string $inConjunctionWith = null): self
    {
        // validation for constraint: string
        if (!is_null($inConjunctionWith) && !is_string($inConjunctionWith)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($inConjunctionWith, true), gettype($inConjunctionWith)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($inConjunctionWith) && mb_strlen((string) $inConjunctionWith) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $inConjunctionWith)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setAssociatedTicketNumber(?string $associatedTicketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($associatedTicketNumber) && !is_string($associatedTicketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($associatedTicketNumber, true), gettype($associatedTicketNumber)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($associatedTicketNumber) && mb_strlen((string) $associatedTicketNumber) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $associatedTicketNumber)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setPlatingCarrier(?string $platingCarrier = null): self
    {
        // validation for constraint: string
        if (!is_null($platingCarrier) && !is_string($platingCarrier)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($platingCarrier, true), gettype($platingCarrier)), __LINE__);
        }
        // validation for constraint: length(2)
        if (!is_null($platingCarrier) && mb_strlen((string) $platingCarrier) !== 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 2', mb_strlen((string) $platingCarrier)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setIssueDate(?string $issueDate = null): self
    {
        // validation for constraint: string
        if (!is_null($issueDate) && !is_string($issueDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($issueDate, true), gettype($issueDate)), __LINE__);
        }
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
     * @uses \Travelport\Util\EnumType\TypeElementStatus::valueIsValid()
     * @uses \Travelport\Util\EnumType\TypeElementStatus::getValidValues()
     * @throws InvalidArgumentException
     * @param string $elStat
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setElStat(?string $elStat = null): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\TypeElementStatus::valueIsValid($elStat)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\TypeElementStatus', is_array($elStat) ? implode(', ', $elStat) : var_export($elStat, true), implode(', ', \Travelport\Util\EnumType\TypeElementStatus::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ElectronicMiscDocument
     */
    public function setKeyOverride(?bool $keyOverride = null): self
    {
        // validation for constraint: boolean
        if (!is_null($keyOverride) && !is_bool($keyOverride)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keyOverride, true), gettype($keyOverride)), __LINE__);
        }
        $this->KeyOverride = $keyOverride;
        
        return $this;
    }
}
