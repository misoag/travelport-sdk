<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PrePayProfileInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Pre pay account related rules.This information block is returned only in detail retrieve transactions. | Pre pay affiliations detail.This information block is returned only in detail retrieve transactions. | Pre pay account
 * detail.This information block is returned both in list and detail retrieve transactions. | Pre pay customer detail.This information block is returned both in list and detail retrieve transactions. | Pre pay unique identifier detail.This information
 * block is returned both in list and detail retrieve transactions.Example flight pass number | PrePay Profile associated with the customer
 * @subpackage Structs
 */
class PrePayProfileInfo extends AbstractStructBase
{
    /**
     * The PrePayId
     * Meta information extracted from the WSDL
     * - minOccurs: 1
     * - ref: PrePayId
     * @var \Travelport\UniversalRecord\StructType\PrePayId
     */
    public \Travelport\UniversalRecord\StructType\PrePayId $PrePayId;
    /**
     * The PrePayCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayCustomer
     * @var \Travelport\UniversalRecord\StructType\PrePayCustomer|null
     */
    public ?\Travelport\UniversalRecord\StructType\PrePayCustomer $PrePayCustomer = null;
    /**
     * The PrePayAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayAccount
     * @var \Travelport\UniversalRecord\StructType\PrePayAccount|null
     */
    public ?\Travelport\UniversalRecord\StructType\PrePayAccount $PrePayAccount = null;
    /**
     * The Affiliations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Affiliations
     * @var \Travelport\UniversalRecord\StructType\Affiliations|null
     */
    public ?\Travelport\UniversalRecord\StructType\Affiliations $Affiliations = null;
    /**
     * The AccountRelatedRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountRelatedRules
     * @var \Travelport\UniversalRecord\StructType\AccountRelatedRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\AccountRelatedRules $AccountRelatedRules = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - documentation: Customer pre pay profile status code(One of Marked for deletion,Lapsed,Terminated,Active,Inactive)
     * - use: optional
     * @var string|null
     */
    public ?string $StatusCode = null;
    /**
     * The CreatorID
     * Meta information extracted from the WSDL
     * - documentation: This is the loyalty card number of the person who originally purchased/setup the flight pass | Loyalty Card number with maximum length as 36.
     * - base: xs:string
     * - maxLength: 36
     * - minLength: 1
     * - use: optional
     * @var string|null
     */
    public ?string $CreatorID = null;
    /**
     * Constructor method for PrePayProfileInfo
     * @uses PrePayProfileInfo::setPrePayId()
     * @uses PrePayProfileInfo::setPrePayCustomer()
     * @uses PrePayProfileInfo::setPrePayAccount()
     * @uses PrePayProfileInfo::setAffiliations()
     * @uses PrePayProfileInfo::setAccountRelatedRules()
     * @uses PrePayProfileInfo::setStatusCode()
     * @uses PrePayProfileInfo::setCreatorID()
     * @param \Travelport\UniversalRecord\StructType\PrePayId $prePayId
     * @param \Travelport\UniversalRecord\StructType\PrePayCustomer $prePayCustomer
     * @param \Travelport\UniversalRecord\StructType\PrePayAccount $prePayAccount
     * @param \Travelport\UniversalRecord\StructType\Affiliations $affiliations
     * @param \Travelport\UniversalRecord\StructType\AccountRelatedRules $accountRelatedRules
     * @param string $statusCode
     * @param string $creatorID
     */
    public function __construct(\Travelport\UniversalRecord\StructType\PrePayId $prePayId, ?\Travelport\UniversalRecord\StructType\PrePayCustomer $prePayCustomer = null, ?\Travelport\UniversalRecord\StructType\PrePayAccount $prePayAccount = null, ?\Travelport\UniversalRecord\StructType\Affiliations $affiliations = null, ?\Travelport\UniversalRecord\StructType\AccountRelatedRules $accountRelatedRules = null, ?string $statusCode = null, ?string $creatorID = null)
    {
        $this
            ->setPrePayId($prePayId)
            ->setPrePayCustomer($prePayCustomer)
            ->setPrePayAccount($prePayAccount)
            ->setAffiliations($affiliations)
            ->setAccountRelatedRules($accountRelatedRules)
            ->setStatusCode($statusCode)
            ->setCreatorID($creatorID);
    }
    /**
     * Get PrePayId value
     * @return \Travelport\UniversalRecord\StructType\PrePayId
     */
    public function getPrePayId(): \Travelport\UniversalRecord\StructType\PrePayId
    {
        return $this->PrePayId;
    }
    /**
     * Set PrePayId value
     * @param \Travelport\UniversalRecord\StructType\PrePayId $prePayId
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setPrePayId(\Travelport\UniversalRecord\StructType\PrePayId $prePayId): self
    {
        $this->PrePayId = $prePayId;
        
        return $this;
    }
    /**
     * Get PrePayCustomer value
     * @return \Travelport\UniversalRecord\StructType\PrePayCustomer|null
     */
    public function getPrePayCustomer(): ?\Travelport\UniversalRecord\StructType\PrePayCustomer
    {
        return $this->PrePayCustomer;
    }
    /**
     * Set PrePayCustomer value
     * @param \Travelport\UniversalRecord\StructType\PrePayCustomer $prePayCustomer
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setPrePayCustomer(?\Travelport\UniversalRecord\StructType\PrePayCustomer $prePayCustomer = null): self
    {
        $this->PrePayCustomer = $prePayCustomer;
        
        return $this;
    }
    /**
     * Get PrePayAccount value
     * @return \Travelport\UniversalRecord\StructType\PrePayAccount|null
     */
    public function getPrePayAccount(): ?\Travelport\UniversalRecord\StructType\PrePayAccount
    {
        return $this->PrePayAccount;
    }
    /**
     * Set PrePayAccount value
     * @param \Travelport\UniversalRecord\StructType\PrePayAccount $prePayAccount
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setPrePayAccount(?\Travelport\UniversalRecord\StructType\PrePayAccount $prePayAccount = null): self
    {
        $this->PrePayAccount = $prePayAccount;
        
        return $this;
    }
    /**
     * Get Affiliations value
     * @return \Travelport\UniversalRecord\StructType\Affiliations|null
     */
    public function getAffiliations(): ?\Travelport\UniversalRecord\StructType\Affiliations
    {
        return $this->Affiliations;
    }
    /**
     * Set Affiliations value
     * @param \Travelport\UniversalRecord\StructType\Affiliations $affiliations
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setAffiliations(?\Travelport\UniversalRecord\StructType\Affiliations $affiliations = null): self
    {
        $this->Affiliations = $affiliations;
        
        return $this;
    }
    /**
     * Get AccountRelatedRules value
     * @return \Travelport\UniversalRecord\StructType\AccountRelatedRules|null
     */
    public function getAccountRelatedRules(): ?\Travelport\UniversalRecord\StructType\AccountRelatedRules
    {
        return $this->AccountRelatedRules;
    }
    /**
     * Set AccountRelatedRules value
     * @param \Travelport\UniversalRecord\StructType\AccountRelatedRules $accountRelatedRules
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setAccountRelatedRules(?\Travelport\UniversalRecord\StructType\AccountRelatedRules $accountRelatedRules = null): self
    {
        $this->AccountRelatedRules = $accountRelatedRules;
        
        return $this;
    }
    /**
     * Get StatusCode value
     * @return string|null
     */
    public function getStatusCode(): ?string
    {
        return $this->StatusCode;
    }
    /**
     * Set StatusCode value
     * @param string $statusCode
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        $this->StatusCode = $statusCode;
        
        return $this;
    }
    /**
     * Get CreatorID value
     * @return string|null
     */
    public function getCreatorID(): ?string
    {
        return $this->CreatorID;
    }
    /**
     * Set CreatorID value
     * @param string $creatorID
     * @return \Travelport\UniversalRecord\StructType\PrePayProfileInfo
     */
    public function setCreatorID(?string $creatorID = null): self
    {
        $this->CreatorID = $creatorID;
        
        return $this;
    }
}
