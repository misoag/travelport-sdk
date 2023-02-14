<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for BaseReservation StructType
 * @subpackage Structs
 */
class BaseReservation extends AbstractStructBase
{
    /**
     * The LocatorCode
     * Meta information extracted from the WSDL
     * - documentation: The unique identifier for this reservation. If this is this View Only UR LocatorCode is '999999'. | A Locator Code that uniquely identifies a Record or searches for one.
     * - base: xs:string
     * - maxLength: 8
     * - minLength: 5
     * - use: required
     * @var string
     */
    protected string $LocatorCode;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: required
     * @var string
     */
    protected string $CreateDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was last modified for any reason.
     * - use: required
     * @var string
     */
    protected string $ModifiedDate;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AccountingRemark
     * @var \StructType\AccountingRemark[]
     */
    protected ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \StructType\GeneralRemark[]
     */
    protected ?array $GeneralRemark = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Restriction
     * @var \StructType\Restriction[]
     */
    protected ?array $Restriction = null;
    /**
     * The PassiveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassiveInfo
     * @var \StructType\PassiveInfo|null
     */
    protected ?\StructType\PassiveInfo $PassiveInfo = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    protected ?string $CustomerNumber = null;
    /**
     * Constructor method for BaseReservation
     * @uses BaseReservation::setLocatorCode()
     * @uses BaseReservation::setCreateDate()
     * @uses BaseReservation::setModifiedDate()
     * @uses BaseReservation::setAccountingRemark()
     * @uses BaseReservation::setGeneralRemark()
     * @uses BaseReservation::setRestriction()
     * @uses BaseReservation::setPassiveInfo()
     * @uses BaseReservation::setCustomerNumber()
     * @param string $locatorCode
     * @param string $createDate
     * @param string $modifiedDate
     * @param \StructType\AccountingRemark[] $accountingRemark
     * @param \StructType\GeneralRemark[] $generalRemark
     * @param \StructType\Restriction[] $restriction
     * @param \StructType\PassiveInfo $passiveInfo
     * @param string $customerNumber
     */
    public function __construct(string $locatorCode, string $createDate, string $modifiedDate, ?array $accountingRemark = null, ?array $generalRemark = null, ?array $restriction = null, ?\StructType\PassiveInfo $passiveInfo = null, ?string $customerNumber = null)
    {
        $this
            ->setLocatorCode($locatorCode)
            ->setCreateDate($createDate)
            ->setModifiedDate($modifiedDate)
            ->setAccountingRemark($accountingRemark)
            ->setGeneralRemark($generalRemark)
            ->setRestriction($restriction)
            ->setPassiveInfo($passiveInfo)
            ->setCustomerNumber($customerNumber);
    }
    /**
     * Get LocatorCode value
     * @return string
     */
    public function getLocatorCode(): string
    {
        return $this->LocatorCode;
    }
    /**
     * Set LocatorCode value
     * @param string $locatorCode
     * @return \StructType\BaseReservation
     */
    public function setLocatorCode(string $locatorCode): self
    {
        // validation for constraint: string
        if (!is_null($locatorCode) && !is_string($locatorCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($locatorCode, true), gettype($locatorCode)), __LINE__);
        }
        // validation for constraint: maxLength(8)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) > 8) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 8', mb_strlen((string) $locatorCode)), __LINE__);
        }
        // validation for constraint: minLength(5)
        if (!is_null($locatorCode) && mb_strlen((string) $locatorCode) < 5) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 5', mb_strlen((string) $locatorCode)), __LINE__);
        }
        $this->LocatorCode = $locatorCode;
        
        return $this;
    }
    /**
     * Get CreateDate value
     * @return string
     */
    public function getCreateDate(): string
    {
        return $this->CreateDate;
    }
    /**
     * Set CreateDate value
     * @param string $createDate
     * @return \StructType\BaseReservation
     */
    public function setCreateDate(string $createDate): self
    {
        // validation for constraint: string
        if (!is_null($createDate) && !is_string($createDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($createDate, true), gettype($createDate)), __LINE__);
        }
        $this->CreateDate = $createDate;
        
        return $this;
    }
    /**
     * Get ModifiedDate value
     * @return string
     */
    public function getModifiedDate(): string
    {
        return $this->ModifiedDate;
    }
    /**
     * Set ModifiedDate value
     * @param string $modifiedDate
     * @return \StructType\BaseReservation
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        // validation for constraint: string
        if (!is_null($modifiedDate) && !is_string($modifiedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($modifiedDate, true), gettype($modifiedDate)), __LINE__);
        }
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setAccountingRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAccountingRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAccountingRemarkForArrayConstraintsFromSetAccountingRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseReservationAccountingRemarkItem) {
            // validation for constraint: itemType
            if (!$baseReservationAccountingRemarkItem instanceof \StructType\AccountingRemark) {
                $invalidValues[] = is_object($baseReservationAccountingRemarkItem) ? get_class($baseReservationAccountingRemarkItem) : sprintf('%s(%s)', gettype($baseReservationAccountingRemarkItem), var_export($baseReservationAccountingRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AccountingRemark property can only contain items of type \StructType\AccountingRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AccountingRemark value
     * @throws InvalidArgumentException
     * @param \StructType\AccountingRemark[] $accountingRemark
     * @return \StructType\BaseReservation
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($accountingRemarkArrayErrorMessage = self::validateAccountingRemarkForArrayConstraintsFromSetAccountingRemark($accountingRemark))) {
            throw new InvalidArgumentException($accountingRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($accountingRemark) && count($accountingRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($accountingRemark)), __LINE__);
        }
        $this->AccountingRemark = $accountingRemark;
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \StructType\AccountingRemark $item
     * @return \StructType\BaseReservation
     */
    public function addToAccountingRemark(\StructType\AccountingRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\AccountingRemark) {
            throw new InvalidArgumentException(sprintf('The AccountingRemark property can only contain items of type \StructType\AccountingRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AccountingRemark) && count($this->AccountingRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AccountingRemark)), __LINE__);
        }
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * This method is responsible for validating the values passed to the setGeneralRemark method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGeneralRemark method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseReservationGeneralRemarkItem) {
            // validation for constraint: itemType
            if (!$baseReservationGeneralRemarkItem instanceof \StructType\GeneralRemark) {
                $invalidValues[] = is_object($baseReservationGeneralRemarkItem) ? get_class($baseReservationGeneralRemarkItem) : sprintf('%s(%s)', gettype($baseReservationGeneralRemarkItem), var_export($baseReservationGeneralRemarkItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GeneralRemark value
     * @throws InvalidArgumentException
     * @param \StructType\GeneralRemark[] $generalRemark
     * @return \StructType\BaseReservation
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        // validation for constraint: array
        if ('' !== ($generalRemarkArrayErrorMessage = self::validateGeneralRemarkForArrayConstraintsFromSetGeneralRemark($generalRemark))) {
            throw new InvalidArgumentException($generalRemarkArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($generalRemark) && count($generalRemark) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($generalRemark)), __LINE__);
        }
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \StructType\GeneralRemark $item
     * @return \StructType\BaseReservation
     */
    public function addToGeneralRemark(\StructType\GeneralRemark $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\GeneralRemark) {
            throw new InvalidArgumentException(sprintf('The GeneralRemark property can only contain items of type \StructType\GeneralRemark, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->GeneralRemark) && count($this->GeneralRemark) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->GeneralRemark)), __LINE__);
        }
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * This method is responsible for validating the values passed to the setRestriction method
     * This method is willingly generated in order to preserve the one-line inline validation within the setRestriction method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateRestrictionForArrayConstraintsFromSetRestriction(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $baseReservationRestrictionItem) {
            // validation for constraint: itemType
            if (!$baseReservationRestrictionItem instanceof \StructType\Restriction) {
                $invalidValues[] = is_object($baseReservationRestrictionItem) ? get_class($baseReservationRestrictionItem) : sprintf('%s(%s)', gettype($baseReservationRestrictionItem), var_export($baseReservationRestrictionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The Restriction property can only contain items of type \StructType\Restriction, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set Restriction value
     * @throws InvalidArgumentException
     * @param \StructType\Restriction[] $restriction
     * @return \StructType\BaseReservation
     */
    public function setRestriction(?array $restriction = null): self
    {
        // validation for constraint: array
        if ('' !== ($restrictionArrayErrorMessage = self::validateRestrictionForArrayConstraintsFromSetRestriction($restriction))) {
            throw new InvalidArgumentException($restrictionArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($restriction) && count($restriction) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($restriction)), __LINE__);
        }
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \StructType\Restriction $item
     * @return \StructType\BaseReservation
     */
    public function addToRestriction(\StructType\Restriction $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \StructType\Restriction) {
            throw new InvalidArgumentException(sprintf('The Restriction property can only contain items of type \StructType\Restriction, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->Restriction) && count($this->Restriction) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->Restriction)), __LINE__);
        }
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveInfo value
     * @return \StructType\PassiveInfo|null
     */
    public function getPassiveInfo(): ?\StructType\PassiveInfo
    {
        return $this->PassiveInfo;
    }
    /**
     * Set PassiveInfo value
     * @param \StructType\PassiveInfo $passiveInfo
     * @return \StructType\BaseReservation
     */
    public function setPassiveInfo(?\StructType\PassiveInfo $passiveInfo = null): self
    {
        $this->PassiveInfo = $passiveInfo;
        
        return $this;
    }
    /**
     * Get CustomerNumber value
     * @return string|null
     */
    public function getCustomerNumber(): ?string
    {
        return $this->CustomerNumber;
    }
    /**
     * Set CustomerNumber value
     * @param string $customerNumber
     * @return \StructType\BaseReservation
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        // validation for constraint: string
        if (!is_null($customerNumber) && !is_string($customerNumber)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($customerNumber, true), gettype($customerNumber)), __LINE__);
        }
        $this->CustomerNumber = $customerNumber;
        
        return $this;
    }
}
