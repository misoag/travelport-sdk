<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $LocatorCode;
    /**
     * The CreateDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was created.
     * - use: required
     * @var string
     */
    public string $CreateDate;
    /**
     * The ModifiedDate
     * Meta information extracted from the WSDL
     * - documentation: The date and time that this reservation was last modified for any reason.
     * - use: required
     * @var string
     */
    public string $ModifiedDate;
    /**
     * The AccountingRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: AccountingRemark
     * @var \Travelport\Air\StructType\AccountingRemark[]
     */
    public ?array $AccountingRemark = null;
    /**
     * The GeneralRemark
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: GeneralRemark
     * @var \Travelport\Air\StructType\GeneralRemark[]
     */
    public ?array $GeneralRemark = null;
    /**
     * The Restriction
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: Restriction
     * @var \Travelport\Air\StructType\Restriction[]
     */
    public ?array $Restriction = null;
    /**
     * The PassiveInfo
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PassiveInfo
     * @var \Travelport\Air\StructType\PassiveInfo|null
     */
    public ?\Travelport\Air\StructType\PassiveInfo $PassiveInfo = null;
    /**
     * The CustomerNumber
     * Meta information extracted from the WSDL
     * - use: optional
     * @var string|null
     */
    public ?string $CustomerNumber = null;
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
     * @param \Travelport\Air\StructType\AccountingRemark[] $accountingRemark
     * @param \Travelport\Air\StructType\GeneralRemark[] $generalRemark
     * @param \Travelport\Air\StructType\Restriction[] $restriction
     * @param \Travelport\Air\StructType\PassiveInfo $passiveInfo
     * @param string $customerNumber
     */
    public function __construct(string $locatorCode, string $createDate, string $modifiedDate, ?array $accountingRemark = null, ?array $generalRemark = null, ?array $restriction = null, ?\Travelport\Air\StructType\PassiveInfo $passiveInfo = null, ?string $customerNumber = null)
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
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setLocatorCode(string $locatorCode): self
    {
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
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setCreateDate(string $createDate): self
    {
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
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setModifiedDate(string $modifiedDate): self
    {
        $this->ModifiedDate = $modifiedDate;
        
        return $this;
    }
    /**
     * Get AccountingRemark value
     * @return \Travelport\Air\StructType\AccountingRemark[]
     */
    public function getAccountingRemark(): ?array
    {
        return $this->AccountingRemark;
    }
    /**
     * Set AccountingRemark value
     * @param \Travelport\Air\StructType\AccountingRemark[] $accountingRemark
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setAccountingRemark(?array $accountingRemark = null): self
    {
        $this->AccountingRemark = $accountingRemark;
        
        return $this;
    }
    /**
     * Add item to AccountingRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\AccountingRemark $item
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function addToAccountingRemark(\Travelport\Air\StructType\AccountingRemark $item): self
    {
        $this->AccountingRemark[] = $item;
        
        return $this;
    }
    /**
     * Get GeneralRemark value
     * @return \Travelport\Air\StructType\GeneralRemark[]
     */
    public function getGeneralRemark(): ?array
    {
        return $this->GeneralRemark;
    }
    /**
     * Set GeneralRemark value
     * @param \Travelport\Air\StructType\GeneralRemark[] $generalRemark
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setGeneralRemark(?array $generalRemark = null): self
    {
        $this->GeneralRemark = $generalRemark;
        
        return $this;
    }
    /**
     * Add item to GeneralRemark value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\GeneralRemark $item
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function addToGeneralRemark(\Travelport\Air\StructType\GeneralRemark $item): self
    {
        $this->GeneralRemark[] = $item;
        
        return $this;
    }
    /**
     * Get Restriction value
     * @return \Travelport\Air\StructType\Restriction[]
     */
    public function getRestriction(): ?array
    {
        return $this->Restriction;
    }
    /**
     * Set Restriction value
     * @param \Travelport\Air\StructType\Restriction[] $restriction
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setRestriction(?array $restriction = null): self
    {
        $this->Restriction = $restriction;
        
        return $this;
    }
    /**
     * Add item to Restriction value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\Restriction $item
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function addToRestriction(\Travelport\Air\StructType\Restriction $item): self
    {
        $this->Restriction[] = $item;
        
        return $this;
    }
    /**
     * Get PassiveInfo value
     * @return \Travelport\Air\StructType\PassiveInfo|null
     */
    public function getPassiveInfo(): ?\Travelport\Air\StructType\PassiveInfo
    {
        return $this->PassiveInfo;
    }
    /**
     * Set PassiveInfo value
     * @param \Travelport\Air\StructType\PassiveInfo $passiveInfo
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setPassiveInfo(?\Travelport\Air\StructType\PassiveInfo $passiveInfo = null): self
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
     * @return \Travelport\Air\StructType\BaseReservation
     */
    public function setCustomerNumber(?string $customerNumber = null): self
    {
        $this->CustomerNumber = $customerNumber;
        
        return $this;
    }
}
