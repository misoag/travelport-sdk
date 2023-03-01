<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\ShopInformation|null
     */
    public ?\Travelport\Air\StructType\ShopInformation $ShopInformation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\Air\StructType\PolicyInformation[]
     */
    public ?array $PolicyInformation = null;
    /**
     * The AccountInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountInformation
     * @var \Travelport\Air\StructType\AccountInformation|null
     */
    public ?\Travelport\Air\StructType\AccountInformation $AccountInformation = null;
    /**
     * The AgencyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyInformation
     * @var \Travelport\Air\StructType\AgencyInformation|null
     */
    public ?\Travelport\Air\StructType\AgencyInformation $AgencyInformation = null;
    /**
     * The TravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelerInformation
     * @var \Travelport\Air\StructType\TravelerInformation[]
     */
    public ?array $TravelerInformation = null;
    /**
     * The CustomProfileInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomProfileInformation
     * @var \Travelport\Air\StructType\CustomProfileInformation|null
     */
    public ?\Travelport\Air\StructType\CustomProfileInformation $CustomProfileInformation = null;
    /**
     * Constructor method for FileFinishingInfo
     * @uses FileFinishingInfo::setShopInformation()
     * @uses FileFinishingInfo::setPolicyInformation()
     * @uses FileFinishingInfo::setAccountInformation()
     * @uses FileFinishingInfo::setAgencyInformation()
     * @uses FileFinishingInfo::setTravelerInformation()
     * @uses FileFinishingInfo::setCustomProfileInformation()
     * @param \Travelport\Air\StructType\ShopInformation $shopInformation
     * @param \Travelport\Air\StructType\PolicyInformation[] $policyInformation
     * @param \Travelport\Air\StructType\AccountInformation $accountInformation
     * @param \Travelport\Air\StructType\AgencyInformation $agencyInformation
     * @param \Travelport\Air\StructType\TravelerInformation[] $travelerInformation
     * @param \Travelport\Air\StructType\CustomProfileInformation $customProfileInformation
     */
    public function __construct(?\Travelport\Air\StructType\ShopInformation $shopInformation = null, ?array $policyInformation = null, ?\Travelport\Air\StructType\AccountInformation $accountInformation = null, ?\Travelport\Air\StructType\AgencyInformation $agencyInformation = null, ?array $travelerInformation = null, ?\Travelport\Air\StructType\CustomProfileInformation $customProfileInformation = null)
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
     * @return \Travelport\Air\StructType\ShopInformation|null
     */
    public function getShopInformation(): ?\Travelport\Air\StructType\ShopInformation
    {
        return $this->ShopInformation;
    }
    /**
     * Set ShopInformation value
     * @param \Travelport\Air\StructType\ShopInformation $shopInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setShopInformation(?\Travelport\Air\StructType\ShopInformation $shopInformation = null): self
    {
        $this->ShopInformation = $shopInformation;
        
        return $this;
    }
    /**
     * Get PolicyInformation value
     * @return \Travelport\Air\StructType\PolicyInformation[]
     */
    public function getPolicyInformation(): ?array
    {
        return $this->PolicyInformation;
    }
    /**
     * Set PolicyInformation value
     * @param \Travelport\Air\StructType\PolicyInformation[] $policyInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setPolicyInformation(?array $policyInformation = null): self
    {
        $this->PolicyInformation = $policyInformation;
        
        return $this;
    }
    /**
     * Add item to PolicyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\PolicyInformation $item
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function addToPolicyInformation(\Travelport\Air\StructType\PolicyInformation $item): self
    {
        $this->PolicyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get AccountInformation value
     * @return \Travelport\Air\StructType\AccountInformation|null
     */
    public function getAccountInformation(): ?\Travelport\Air\StructType\AccountInformation
    {
        return $this->AccountInformation;
    }
    /**
     * Set AccountInformation value
     * @param \Travelport\Air\StructType\AccountInformation $accountInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setAccountInformation(?\Travelport\Air\StructType\AccountInformation $accountInformation = null): self
    {
        $this->AccountInformation = $accountInformation;
        
        return $this;
    }
    /**
     * Get AgencyInformation value
     * @return \Travelport\Air\StructType\AgencyInformation|null
     */
    public function getAgencyInformation(): ?\Travelport\Air\StructType\AgencyInformation
    {
        return $this->AgencyInformation;
    }
    /**
     * Set AgencyInformation value
     * @param \Travelport\Air\StructType\AgencyInformation $agencyInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setAgencyInformation(?\Travelport\Air\StructType\AgencyInformation $agencyInformation = null): self
    {
        $this->AgencyInformation = $agencyInformation;
        
        return $this;
    }
    /**
     * Get TravelerInformation value
     * @return \Travelport\Air\StructType\TravelerInformation[]
     */
    public function getTravelerInformation(): ?array
    {
        return $this->TravelerInformation;
    }
    /**
     * Set TravelerInformation value
     * @param \Travelport\Air\StructType\TravelerInformation[] $travelerInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setTravelerInformation(?array $travelerInformation = null): self
    {
        $this->TravelerInformation = $travelerInformation;
        
        return $this;
    }
    /**
     * Add item to TravelerInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\TravelerInformation $item
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function addToTravelerInformation(\Travelport\Air\StructType\TravelerInformation $item): self
    {
        $this->TravelerInformation[] = $item;
        
        return $this;
    }
    /**
     * Get CustomProfileInformation value
     * @return \Travelport\Air\StructType\CustomProfileInformation|null
     */
    public function getCustomProfileInformation(): ?\Travelport\Air\StructType\CustomProfileInformation
    {
        return $this->CustomProfileInformation;
    }
    /**
     * Set CustomProfileInformation value
     * @param \Travelport\Air\StructType\CustomProfileInformation $customProfileInformation
     * @return \Travelport\Air\StructType\FileFinishingInfo
     */
    public function setCustomProfileInformation(?\Travelport\Air\StructType\CustomProfileInformation $customProfileInformation = null): self
    {
        $this->CustomProfileInformation = $customProfileInformation;
        
        return $this;
    }
}
