<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FileFinishingInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Policy Information required for File Finishing. Would repeat per Policy Type | Misc Data required for File Finishing. This data is transient and not saved in database.
 * @subpackage Structs
 */
class FileFinishingInfo extends AbstractStructBase
{
    /**
     * The ShopInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ShopInformation
     * @var \Travelport\UniversalRecord\StructType\ShopInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\ShopInformation $ShopInformation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\UniversalRecord\StructType\PolicyInformation[]
     */
    public ?array $PolicyInformation = null;
    /**
     * The AccountInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountInformation
     * @var \Travelport\UniversalRecord\StructType\AccountInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\AccountInformation $AccountInformation = null;
    /**
     * The AgencyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyInformation
     * @var \Travelport\UniversalRecord\StructType\AgencyInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\AgencyInformation $AgencyInformation = null;
    /**
     * The TravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelerInformation
     * @var \Travelport\UniversalRecord\StructType\TravelerInformation[]
     */
    public ?array $TravelerInformation = null;
    /**
     * The CustomProfileInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomProfileInformation
     * @var \Travelport\UniversalRecord\StructType\CustomProfileInformation|null
     */
    public ?\Travelport\UniversalRecord\StructType\CustomProfileInformation $CustomProfileInformation = null;
    /**
     * Constructor method for FileFinishingInfo
     * @uses FileFinishingInfo::setShopInformation()
     * @uses FileFinishingInfo::setPolicyInformation()
     * @uses FileFinishingInfo::setAccountInformation()
     * @uses FileFinishingInfo::setAgencyInformation()
     * @uses FileFinishingInfo::setTravelerInformation()
     * @uses FileFinishingInfo::setCustomProfileInformation()
     * @param \Travelport\UniversalRecord\StructType\ShopInformation $shopInformation
     * @param \Travelport\UniversalRecord\StructType\PolicyInformation[] $policyInformation
     * @param \Travelport\UniversalRecord\StructType\AccountInformation $accountInformation
     * @param \Travelport\UniversalRecord\StructType\AgencyInformation $agencyInformation
     * @param \Travelport\UniversalRecord\StructType\TravelerInformation[] $travelerInformation
     * @param \Travelport\UniversalRecord\StructType\CustomProfileInformation $customProfileInformation
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\ShopInformation $shopInformation = null, ?array $policyInformation = null, ?\Travelport\UniversalRecord\StructType\AccountInformation $accountInformation = null, ?\Travelport\UniversalRecord\StructType\AgencyInformation $agencyInformation = null, ?array $travelerInformation = null, ?\Travelport\UniversalRecord\StructType\CustomProfileInformation $customProfileInformation = null)
    {
        $this
            ->setShopInformation($shopInformation)
            ->setPolicyInformation($policyInformation)
            ->setAccountInformation($accountInformation)
            ->setAgencyInformation($agencyInformation)
            ->setTravelerInformation($travelerInformation)
            ->setCustomProfileInformation($customProfileInformation);
    }
    /**
     * Get ShopInformation value
     * @return \Travelport\UniversalRecord\StructType\ShopInformation|null
     */
    public function getShopInformation(): ?\Travelport\UniversalRecord\StructType\ShopInformation
    {
        return $this->ShopInformation;
    }
    /**
     * Set ShopInformation value
     * @param \Travelport\UniversalRecord\StructType\ShopInformation $shopInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setShopInformation(?\Travelport\UniversalRecord\StructType\ShopInformation $shopInformation = null): self
    {
        $this->ShopInformation = $shopInformation;
        
        return $this;
    }
    /**
     * Get PolicyInformation value
     * @return \Travelport\UniversalRecord\StructType\PolicyInformation[]
     */
    public function getPolicyInformation(): ?array
    {
        return $this->PolicyInformation;
    }
    /**
     * Set PolicyInformation value
     * @param \Travelport\UniversalRecord\StructType\PolicyInformation[] $policyInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setPolicyInformation(?array $policyInformation = null): self
    {
        $this->PolicyInformation = $policyInformation;
        
        return $this;
    }
    /**
     * Add item to PolicyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\PolicyInformation $item
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function addToPolicyInformation(\Travelport\UniversalRecord\StructType\PolicyInformation $item): self
    {
        $this->PolicyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get AccountInformation value
     * @return \Travelport\UniversalRecord\StructType\AccountInformation|null
     */
    public function getAccountInformation(): ?\Travelport\UniversalRecord\StructType\AccountInformation
    {
        return $this->AccountInformation;
    }
    /**
     * Set AccountInformation value
     * @param \Travelport\UniversalRecord\StructType\AccountInformation $accountInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setAccountInformation(?\Travelport\UniversalRecord\StructType\AccountInformation $accountInformation = null): self
    {
        $this->AccountInformation = $accountInformation;
        
        return $this;
    }
    /**
     * Get AgencyInformation value
     * @return \Travelport\UniversalRecord\StructType\AgencyInformation|null
     */
    public function getAgencyInformation(): ?\Travelport\UniversalRecord\StructType\AgencyInformation
    {
        return $this->AgencyInformation;
    }
    /**
     * Set AgencyInformation value
     * @param \Travelport\UniversalRecord\StructType\AgencyInformation $agencyInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setAgencyInformation(?\Travelport\UniversalRecord\StructType\AgencyInformation $agencyInformation = null): self
    {
        $this->AgencyInformation = $agencyInformation;
        
        return $this;
    }
    /**
     * Get TravelerInformation value
     * @return \Travelport\UniversalRecord\StructType\TravelerInformation[]
     */
    public function getTravelerInformation(): ?array
    {
        return $this->TravelerInformation;
    }
    /**
     * Set TravelerInformation value
     * @param \Travelport\UniversalRecord\StructType\TravelerInformation[] $travelerInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setTravelerInformation(?array $travelerInformation = null): self
    {
        $this->TravelerInformation = $travelerInformation;
        
        return $this;
    }
    /**
     * Add item to TravelerInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\UniversalRecord\StructType\TravelerInformation $item
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function addToTravelerInformation(\Travelport\UniversalRecord\StructType\TravelerInformation $item): self
    {
        $this->TravelerInformation[] = $item;
        
        return $this;
    }
    /**
     * Get CustomProfileInformation value
     * @return \Travelport\UniversalRecord\StructType\CustomProfileInformation|null
     */
    public function getCustomProfileInformation(): ?\Travelport\UniversalRecord\StructType\CustomProfileInformation
    {
        return $this->CustomProfileInformation;
    }
    /**
     * Set CustomProfileInformation value
     * @param \Travelport\UniversalRecord\StructType\CustomProfileInformation $customProfileInformation
     * @return \Travelport\UniversalRecord\StructType\FileFinishingInfo
     */
    public function setCustomProfileInformation(?\Travelport\UniversalRecord\StructType\CustomProfileInformation $customProfileInformation = null): self
    {
        $this->CustomProfileInformation = $customProfileInformation;
        
        return $this;
    }
}
