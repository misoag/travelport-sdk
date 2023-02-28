<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MCOExchangeInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Information related to the exchange tickets available for the MCO
 * @subpackage Structs
 */
class MCOExchangeInfo extends AbstractStructBase
{
    /**
     * The FormOfPayment
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: FormOfPayment
     * @var \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    protected ?\Travelport\UniversalRecord\StructType\FormOfPayment $FormOfPayment = null;
    /**
     * The ExchangedCoupon
     * Meta information extracted from the WSDL
     * - maxOccurs: 4
     * - minOccurs: 0
     * - ref: ExchangedCoupon
     * @var \Travelport\UniversalRecord\StructType\ExchangedCoupon[]
     */
    protected ?array $ExchangedCoupon = null;
    /**
     * The OriginalTicketNumber
     * Meta information extracted from the WSDL
     * - documentation: Airline form and serial number of the original ticket issued. | Reference Ticket Number
     * - base: xs:string
     * - length: 13
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalTicketNumber = null;
    /**
     * The OriginalCityCode
     * Meta information extracted from the WSDL
     * - documentation: Location of honoring carrier or operator. | 3 Letter City Code
     * - base: xs:string
     * - length: 3
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalCityCode = null;
    /**
     * The OriginalTicketDate
     * Meta information extracted from the WSDL
     * - documentation: Date that the Original ticket was issued. | Date without time zones YYYY-MM-DD
     * - base: xs:date
     * - pattern: [^:Z].*
     * - use: optional
     * @var string|null
     */
    protected ?string $OriginalTicketDate = null;
    /**
     * The IATACode
     * Meta information extracted from the WSDL
     * - documentation: IATA code of the issuing agency. | ARC/IATA code that represents a branch/agency.
     * - base: xs:string
     * - maxLength: 8
     * - use: optional
     * @var string|null
     */
    protected ?string $IATACode = null;
    /**
     * Constructor method for MCOExchangeInfo
     * @uses MCOExchangeInfo::setFormOfPayment()
     * @uses MCOExchangeInfo::setExchangedCoupon()
     * @uses MCOExchangeInfo::setOriginalTicketNumber()
     * @uses MCOExchangeInfo::setOriginalCityCode()
     * @uses MCOExchangeInfo::setOriginalTicketDate()
     * @uses MCOExchangeInfo::setIATACode()
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon[] $exchangedCoupon
     * @param string $originalTicketNumber
     * @param string $originalCityCode
     * @param string $originalTicketDate
     * @param string $iATACode
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null, ?array $exchangedCoupon = null, ?string $originalTicketNumber = null, ?string $originalCityCode = null, ?string $originalTicketDate = null, ?string $iATACode = null)
    {
        $this
            ->setFormOfPayment($formOfPayment)
            ->setExchangedCoupon($exchangedCoupon)
            ->setOriginalTicketNumber($originalTicketNumber)
            ->setOriginalCityCode($originalCityCode)
            ->setOriginalTicketDate($originalTicketDate)
            ->setIATACode($iATACode);
    }
    /**
     * Get FormOfPayment value
     * @return \Travelport\UniversalRecord\StructType\FormOfPayment|null
     */
    public function getFormOfPayment(): ?\Travelport\UniversalRecord\StructType\FormOfPayment
    {
        return $this->FormOfPayment;
    }
    /**
     * Set FormOfPayment value
     * @param \Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setFormOfPayment(?\Travelport\UniversalRecord\StructType\FormOfPayment $formOfPayment = null): self
    {
        $this->FormOfPayment = $formOfPayment;
        
        return $this;
    }
    /**
     * Get ExchangedCoupon value
     * @return \Travelport\UniversalRecord\StructType\ExchangedCoupon[]
     */
    public function getExchangedCoupon(): ?array
    {
        return $this->ExchangedCoupon;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setExchangedCoupon method
     * This method is willingly generated in order to preserve the one-line inline validation within the setExchangedCoupon method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateExchangedCouponForArrayConstraintFromSetExchangedCoupon(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $mCOExchangeInfoExchangedCouponItem) {
            // validation for constraint: itemType
            if (!$mCOExchangeInfoExchangedCouponItem instanceof \Travelport\UniversalRecord\StructType\ExchangedCoupon) {
                $invalidValues[] = is_object($mCOExchangeInfoExchangedCouponItem) ? get_class($mCOExchangeInfoExchangedCouponItem) : sprintf('%s(%s)', gettype($mCOExchangeInfoExchangedCouponItem), var_export($mCOExchangeInfoExchangedCouponItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ExchangedCoupon property can only contain items of type \Travelport\UniversalRecord\StructType\ExchangedCoupon, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ExchangedCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon[] $exchangedCoupon
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setExchangedCoupon(?array $exchangedCoupon = null): self
    {
        // validation for constraint: array
        if ('' !== ($exchangedCouponArrayErrorMessage = self::validateExchangedCouponForArrayConstraintFromSetExchangedCoupon($exchangedCoupon))) {
            throw new InvalidArgumentException($exchangedCouponArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($exchangedCoupon) && count($exchangedCoupon) > 4) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 4', count($exchangedCoupon)), __LINE__);
        }
        $this->ExchangedCoupon = $exchangedCoupon;
        
        return $this;
    }
    /**
     * Add item to ExchangedCoupon value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\ExchangedCoupon $item
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function addToExchangedCoupon(\Travelport\UniversalRecord\StructType\ExchangedCoupon $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\UniversalRecord\StructType\ExchangedCoupon) {
            throw new InvalidArgumentException(sprintf('The ExchangedCoupon property can only contain items of type \Travelport\UniversalRecord\StructType\ExchangedCoupon, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(4)
        if (is_array($this->ExchangedCoupon) && count($this->ExchangedCoupon) >= 4) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 4', count($this->ExchangedCoupon)), __LINE__);
        }
        $this->ExchangedCoupon[] = $item;
        
        return $this;
    }
    /**
     * Get OriginalTicketNumber value
     * @return string|null
     */
    public function getOriginalTicketNumber(): ?string
    {
        return $this->OriginalTicketNumber;
    }
    /**
     * Set OriginalTicketNumber value
     * @param string $originalTicketNumber
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalTicketNumber(?string $originalTicketNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($originalTicketNumber) && !is_string($originalTicketNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalTicketNumber, true), gettype($originalTicketNumber)), __LINE__);
        }
        // validation for constraint: length(13)
        if (!is_null($originalTicketNumber) && mb_strlen((string) $originalTicketNumber) !== 13) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 13', mb_strlen((string) $originalTicketNumber)), __LINE__);
        }
        $this->OriginalTicketNumber = $originalTicketNumber;
        
        return $this;
    }
    /**
     * Get OriginalCityCode value
     * @return string|null
     */
    public function getOriginalCityCode(): ?string
    {
        return $this->OriginalCityCode;
    }
    /**
     * Set OriginalCityCode value
     * @param string $originalCityCode
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalCityCode(?string $originalCityCode = null): self
    {
        // validation for constraint: string
        if (!is_null($originalCityCode) && !is_string($originalCityCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalCityCode, true), gettype($originalCityCode)), __LINE__);
        }
        // validation for constraint: length(3)
        if (!is_null($originalCityCode) && mb_strlen((string) $originalCityCode) !== 3) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 3', mb_strlen((string) $originalCityCode)), __LINE__);
        }
        $this->OriginalCityCode = $originalCityCode;
        
        return $this;
    }
    /**
     * Get OriginalTicketDate value
     * @return string|null
     */
    public function getOriginalTicketDate(): ?string
    {
        return $this->OriginalTicketDate;
    }
    /**
     * Set OriginalTicketDate value
     * @param string $originalTicketDate
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setOriginalTicketDate(?string $originalTicketDate = null): self
    {
        // validation for constraint: string
        if (!is_null($originalTicketDate) && !is_string($originalTicketDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($originalTicketDate, true), gettype($originalTicketDate)), __LINE__);
        }
        // validation for constraint: pattern([^:Z].*)
        if (!is_null($originalTicketDate) && !preg_match('/[^:Z].*/', $originalTicketDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /[^:Z].*/', var_export($originalTicketDate, true)), __LINE__);
        }
        $this->OriginalTicketDate = $originalTicketDate;
        
        return $this;
    }
    /**
     * Get IATACode value
     * @return string|null
     */
    public function getIATACode(): ?string
    {
        return $this->IATACode;
    }
    /**
     * Set IATACode value
     * @param string $iATACode
     * @return \Travelport\UniversalRecord\StructType\MCOExchangeInfo
     */
    public function setIATACode(?string $iATACode = null): self
    {
        // validation for constraint: string
        if (!is_null($iATACode) && !is_string($iATACode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($iATACode, true), gettype($iATACode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($iATACode) && mb_strlen((string) $iATACode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $iATACode)), __LINE__);
        }
        $this->IATACode = $iATACode;
        
        return $this;
    }
}
