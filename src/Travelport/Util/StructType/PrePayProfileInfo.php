<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\PrePayId
     */
    protected \Travelport\Util\StructType\PrePayId $PrePayId;
    /**
     * The PrePayCustomer
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayCustomer
     * @var \Travelport\Util\StructType\PrePayCustomer|null
     */
    protected ?\Travelport\Util\StructType\PrePayCustomer $PrePayCustomer = null;
    /**
     * The PrePayAccount
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: PrePayAccount
     * @var \Travelport\Util\StructType\PrePayAccount|null
     */
    protected ?\Travelport\Util\StructType\PrePayAccount $PrePayAccount = null;
    /**
     * The Affiliations
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     * - ref: Affiliations
     * @var \Travelport\Util\StructType\Affiliations|null
     */
    protected ?\Travelport\Util\StructType\Affiliations $Affiliations = null;
    /**
     * The AccountRelatedRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountRelatedRules
     * @var \Travelport\Util\StructType\AccountRelatedRules|null
     */
    protected ?\Travelport\Util\StructType\AccountRelatedRules $AccountRelatedRules = null;
    /**
     * The StatusCode
     * Meta information extracted from the WSDL
     * - documentation: Customer pre pay profile status code(One of Marked for deletion,Lapsed,Terminated,Active,Inactive)
     * - use: optional
     * @var string|null
     */
    protected ?string $StatusCode = null;
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
    protected ?string $CreatorID = null;
    /**
     * Constructor method for PrePayProfileInfo
     * @uses PrePayProfileInfo::setPrePayId()
     * @uses PrePayProfileInfo::setPrePayCustomer()
     * @uses PrePayProfileInfo::setPrePayAccount()
     * @uses PrePayProfileInfo::setAffiliations()
     * @uses PrePayProfileInfo::setAccountRelatedRules()
     * @uses PrePayProfileInfo::setStatusCode()
     * @uses PrePayProfileInfo::setCreatorID()
     * @param \Travelport\Util\StructType\PrePayId $prePayId
     * @param \Travelport\Util\StructType\PrePayCustomer $prePayCustomer
     * @param \Travelport\Util\StructType\PrePayAccount $prePayAccount
     * @param \Travelport\Util\StructType\Affiliations $affiliations
     * @param \Travelport\Util\StructType\AccountRelatedRules $accountRelatedRules
     * @param string $statusCode
     * @param string $creatorID
     */
    public function __construct(\Travelport\Util\StructType\PrePayId $prePayId, ?\Travelport\Util\StructType\PrePayCustomer $prePayCustomer = null, ?\Travelport\Util\StructType\PrePayAccount $prePayAccount = null, ?\Travelport\Util\StructType\Affiliations $affiliations = null, ?\Travelport\Util\StructType\AccountRelatedRules $accountRelatedRules = null, ?string $statusCode = null, ?string $creatorID = null)
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
     * @return \Travelport\Util\StructType\PrePayId
     */
    public function getPrePayId(): \Travelport\Util\StructType\PrePayId
    {
        return $this->PrePayId;
    }
    /**
     * Set PrePayId value
     * @param \Travelport\Util\StructType\PrePayId $prePayId
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setPrePayId(\Travelport\Util\StructType\PrePayId $prePayId): self
    {
        $this->PrePayId = $prePayId;
        
        return $this;
    }
    /**
     * Get PrePayCustomer value
     * @return \Travelport\Util\StructType\PrePayCustomer|null
     */
    public function getPrePayCustomer(): ?\Travelport\Util\StructType\PrePayCustomer
    {
        return $this->PrePayCustomer;
    }
    /**
     * Set PrePayCustomer value
     * @param \Travelport\Util\StructType\PrePayCustomer $prePayCustomer
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setPrePayCustomer(?\Travelport\Util\StructType\PrePayCustomer $prePayCustomer = null): self
    {
        $this->PrePayCustomer = $prePayCustomer;
        
        return $this;
    }
    /**
     * Get PrePayAccount value
     * @return \Travelport\Util\StructType\PrePayAccount|null
     */
    public function getPrePayAccount(): ?\Travelport\Util\StructType\PrePayAccount
    {
        return $this->PrePayAccount;
    }
    /**
     * Set PrePayAccount value
     * @param \Travelport\Util\StructType\PrePayAccount $prePayAccount
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setPrePayAccount(?\Travelport\Util\StructType\PrePayAccount $prePayAccount = null): self
    {
        $this->PrePayAccount = $prePayAccount;
        
        return $this;
    }
    /**
     * Get Affiliations value
     * @return \Travelport\Util\StructType\Affiliations|null
     */
    public function getAffiliations(): ?\Travelport\Util\StructType\Affiliations
    {
        return $this->Affiliations;
    }
    /**
     * Set Affiliations value
     * @param \Travelport\Util\StructType\Affiliations $affiliations
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setAffiliations(?\Travelport\Util\StructType\Affiliations $affiliations = null): self
    {
        $this->Affiliations = $affiliations;
        
        return $this;
    }
    /**
     * Get AccountRelatedRules value
     * @return \Travelport\Util\StructType\AccountRelatedRules|null
     */
    public function getAccountRelatedRules(): ?\Travelport\Util\StructType\AccountRelatedRules
    {
        return $this->AccountRelatedRules;
    }
    /**
     * Set AccountRelatedRules value
     * @param \Travelport\Util\StructType\AccountRelatedRules $accountRelatedRules
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setAccountRelatedRules(?\Travelport\Util\StructType\AccountRelatedRules $accountRelatedRules = null): self
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
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setStatusCode(?string $statusCode = null): self
    {
        // validation for constraint: string
        if (!is_null($statusCode) && !is_string($statusCode)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusCode, true), gettype($statusCode)), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\PrePayProfileInfo
     */
    public function setCreatorID(?string $creatorID = null): self
    {
        // validation for constraint: string
        if (!is_null($creatorID) && !is_string($creatorID)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($creatorID, true), gettype($creatorID)), __LINE__);
        }
        // validation for constraint: maxLength(36)
        if (!is_null($creatorID) && mb_strlen((string) $creatorID) > 36) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 36', mb_strlen((string) $creatorID)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($creatorID) && mb_strlen((string) $creatorID) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $creatorID)), __LINE__);
        }
        $this->CreatorID = $creatorID;
        
        return $this;
    }
}
