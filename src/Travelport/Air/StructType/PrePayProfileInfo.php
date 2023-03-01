<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\PrePayId
     */
    public \Travelport\Air\StructType\PrePayId $PrePayId;
    /**
     * The PrePayCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayCustomer
     * @var \Travelport\Air\StructType\PrePayCustomer|null
     */
    public ?\Travelport\Air\StructType\PrePayCustomer $PrePayCustomer = null;
    /**
     * The PrePayAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayAccount
     * @var \Travelport\Air\StructType\PrePayAccount|null
     */
    public ?\Travelport\Air\StructType\PrePayAccount $PrePayAccount = null;
    /**
     * The Affiliations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Affiliations
     * @var \Travelport\Air\StructType\Affiliations|null
     */
    public ?\Travelport\Air\StructType\Affiliations $Affiliations = null;
    /**
     * The AccountRelatedRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountRelatedRules
     * @var \Travelport\Air\StructType\AccountRelatedRules|null
     */
    public ?\Travelport\Air\StructType\AccountRelatedRules $AccountRelatedRules = null;
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
     * @param \Travelport\Air\StructType\PrePayId $prePayId
     * @param \Travelport\Air\StructType\PrePayCustomer $prePayCustomer
     * @param \Travelport\Air\StructType\PrePayAccount $prePayAccount
     * @param \Travelport\Air\StructType\Affiliations $affiliations
     * @param \Travelport\Air\StructType\AccountRelatedRules $accountRelatedRules
     * @param string $statusCode
     * @param string $creatorID
     */
    public function __construct(\Travelport\Air\StructType\PrePayId $prePayId, ?\Travelport\Air\StructType\PrePayCustomer $prePayCustomer = null, ?\Travelport\Air\StructType\PrePayAccount $prePayAccount = null, ?\Travelport\Air\StructType\Affiliations $affiliations = null, ?\Travelport\Air\StructType\AccountRelatedRules $accountRelatedRules = null, ?string $statusCode = null, ?string $creatorID = null)
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
     * @return \Travelport\Air\StructType\PrePayId
     */
    public function getPrePayId(): \Travelport\Air\StructType\PrePayId
    {
        return $this->PrePayId;
    }
    /**
     * Set PrePayId value
     * @param \Travelport\Air\StructType\PrePayId $prePayId
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setPrePayId(\Travelport\Air\StructType\PrePayId $prePayId): self
    {
        $this->PrePayId = $prePayId;
        
        return $this;
    }
    /**
     * Get PrePayCustomer value
     * @return \Travelport\Air\StructType\PrePayCustomer|null
     */
    public function getPrePayCustomer(): ?\Travelport\Air\StructType\PrePayCustomer
    {
        return $this->PrePayCustomer;
    }
    /**
     * Set PrePayCustomer value
     * @param \Travelport\Air\StructType\PrePayCustomer $prePayCustomer
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setPrePayCustomer(?\Travelport\Air\StructType\PrePayCustomer $prePayCustomer = null): self
    {
        $this->PrePayCustomer = $prePayCustomer;
        
        return $this;
    }
    /**
     * Get PrePayAccount value
     * @return \Travelport\Air\StructType\PrePayAccount|null
     */
    public function getPrePayAccount(): ?\Travelport\Air\StructType\PrePayAccount
    {
        return $this->PrePayAccount;
    }
    /**
     * Set PrePayAccount value
     * @param \Travelport\Air\StructType\PrePayAccount $prePayAccount
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setPrePayAccount(?\Travelport\Air\StructType\PrePayAccount $prePayAccount = null): self
    {
        $this->PrePayAccount = $prePayAccount;
        
        return $this;
    }
    /**
     * Get Affiliations value
     * @return \Travelport\Air\StructType\Affiliations|null
     */
    public function getAffiliations(): ?\Travelport\Air\StructType\Affiliations
    {
        return $this->Affiliations;
    }
    /**
     * Set Affiliations value
     * @param \Travelport\Air\StructType\Affiliations $affiliations
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setAffiliations(?\Travelport\Air\StructType\Affiliations $affiliations = null): self
    {
        $this->Affiliations = $affiliations;
        
        return $this;
    }
    /**
     * Get AccountRelatedRules value
     * @return \Travelport\Air\StructType\AccountRelatedRules|null
     */
    public function getAccountRelatedRules(): ?\Travelport\Air\StructType\AccountRelatedRules
    {
        return $this->AccountRelatedRules;
    }
    /**
     * Set AccountRelatedRules value
     * @param \Travelport\Air\StructType\AccountRelatedRules $accountRelatedRules
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setAccountRelatedRules(?\Travelport\Air\StructType\AccountRelatedRules $accountRelatedRules = null): self
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
     * @return \Travelport\Air\StructType\PrePayProfileInfo
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
     * @return \Travelport\Air\StructType\PrePayProfileInfo
     */
    public function setCreatorID(?string $creatorID = null): self
    {
        $this->CreatorID = $creatorID;
        
        return $this;
    }
}
