<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

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
     * @var \Travelport\Hotel\StructType\ShopInformation|null
     */
    public ?\Travelport\Hotel\StructType\ShopInformation $ShopInformation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\Hotel\StructType\PolicyInformation[]
     */
    public ?array $PolicyInformation = null;
    /**
     * The AccountInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountInformation
     * @var \Travelport\Hotel\StructType\AccountInformation|null
     */
    public ?\Travelport\Hotel\StructType\AccountInformation $AccountInformation = null;
    /**
     * The AgencyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyInformation
     * @var \Travelport\Hotel\StructType\AgencyInformation|null
     */
    public ?\Travelport\Hotel\StructType\AgencyInformation $AgencyInformation = null;
    /**
     * The TravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelerInformation
     * @var \Travelport\Hotel\StructType\TravelerInformation[]
     */
    public ?array $TravelerInformation = null;
    /**
     * The CustomProfileInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomProfileInformation
     * @var \Travelport\Hotel\StructType\CustomProfileInformation|null
     */
    public ?\Travelport\Hotel\StructType\CustomProfileInformation $CustomProfileInformation = null;
    /**
     * Constructor method for FileFinishingInfo
     * @uses FileFinishingInfo::setShopInformation()
     * @uses FileFinishingInfo::setPolicyInformation()
     * @uses FileFinishingInfo::setAccountInformation()
     * @uses FileFinishingInfo::setAgencyInformation()
     * @uses FileFinishingInfo::setTravelerInformation()
     * @uses FileFinishingInfo::setCustomProfileInformation()
     * @param \Travelport\Hotel\StructType\ShopInformation $shopInformation
     * @param \Travelport\Hotel\StructType\PolicyInformation[] $policyInformation
     * @param \Travelport\Hotel\StructType\AccountInformation $accountInformation
     * @param \Travelport\Hotel\StructType\AgencyInformation $agencyInformation
     * @param \Travelport\Hotel\StructType\TravelerInformation[] $travelerInformation
     * @param \Travelport\Hotel\StructType\CustomProfileInformation $customProfileInformation
     */
    public function __construct(?\Travelport\Hotel\StructType\ShopInformation $shopInformation = null, ?array $policyInformation = null, ?\Travelport\Hotel\StructType\AccountInformation $accountInformation = null, ?\Travelport\Hotel\StructType\AgencyInformation $agencyInformation = null, ?array $travelerInformation = null, ?\Travelport\Hotel\StructType\CustomProfileInformation $customProfileInformation = null)
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
     * @return \Travelport\Hotel\StructType\ShopInformation|null
     */
    public function getShopInformation(): ?\Travelport\Hotel\StructType\ShopInformation
    {
        return $this->ShopInformation;
    }
    /**
     * Set ShopInformation value
     * @param \Travelport\Hotel\StructType\ShopInformation $shopInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setShopInformation(?\Travelport\Hotel\StructType\ShopInformation $shopInformation = null): self
    {
        $this->ShopInformation = $shopInformation;
        
        return $this;
    }
    /**
     * Get PolicyInformation value
     * @return \Travelport\Hotel\StructType\PolicyInformation[]
     */
    public function getPolicyInformation(): ?array
    {
        return $this->PolicyInformation;
    }
    /**
     * Set PolicyInformation value
     * @param \Travelport\Hotel\StructType\PolicyInformation[] $policyInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setPolicyInformation(?array $policyInformation = null): self
    {
        $this->PolicyInformation = $policyInformation;
        
        return $this;
    }
    /**
     * Add item to PolicyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PolicyInformation $item
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function addToPolicyInformation(\Travelport\Hotel\StructType\PolicyInformation $item): self
    {
        $this->PolicyInformation[] = $item;
        
        return $this;
    }
    /**
     * Get AccountInformation value
     * @return \Travelport\Hotel\StructType\AccountInformation|null
     */
    public function getAccountInformation(): ?\Travelport\Hotel\StructType\AccountInformation
    {
        return $this->AccountInformation;
    }
    /**
     * Set AccountInformation value
     * @param \Travelport\Hotel\StructType\AccountInformation $accountInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setAccountInformation(?\Travelport\Hotel\StructType\AccountInformation $accountInformation = null): self
    {
        $this->AccountInformation = $accountInformation;
        
        return $this;
    }
    /**
     * Get AgencyInformation value
     * @return \Travelport\Hotel\StructType\AgencyInformation|null
     */
    public function getAgencyInformation(): ?\Travelport\Hotel\StructType\AgencyInformation
    {
        return $this->AgencyInformation;
    }
    /**
     * Set AgencyInformation value
     * @param \Travelport\Hotel\StructType\AgencyInformation $agencyInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setAgencyInformation(?\Travelport\Hotel\StructType\AgencyInformation $agencyInformation = null): self
    {
        $this->AgencyInformation = $agencyInformation;
        
        return $this;
    }
    /**
     * Get TravelerInformation value
     * @return \Travelport\Hotel\StructType\TravelerInformation[]
     */
    public function getTravelerInformation(): ?array
    {
        return $this->TravelerInformation;
    }
    /**
     * Set TravelerInformation value
     * @param \Travelport\Hotel\StructType\TravelerInformation[] $travelerInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setTravelerInformation(?array $travelerInformation = null): self
    {
        $this->TravelerInformation = $travelerInformation;
        
        return $this;
    }
    /**
     * Add item to TravelerInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TravelerInformation $item
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function addToTravelerInformation(\Travelport\Hotel\StructType\TravelerInformation $item): self
    {
        $this->TravelerInformation[] = $item;
        
        return $this;
    }
    /**
     * Get CustomProfileInformation value
     * @return \Travelport\Hotel\StructType\CustomProfileInformation|null
     */
    public function getCustomProfileInformation(): ?\Travelport\Hotel\StructType\CustomProfileInformation
    {
        return $this->CustomProfileInformation;
    }
    /**
     * Set CustomProfileInformation value
     * @param \Travelport\Hotel\StructType\CustomProfileInformation $customProfileInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setCustomProfileInformation(?\Travelport\Hotel\StructType\CustomProfileInformation $customProfileInformation = null): self
    {
        $this->CustomProfileInformation = $customProfileInformation;
        
        return $this;
    }
}
