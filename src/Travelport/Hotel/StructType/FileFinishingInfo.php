<?php

declare(strict_types=1);

namespace Travelport\Hotel\StructType;

use InvalidArgumentException;
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
    protected ?\Travelport\Hotel\StructType\ShopInformation $ShopInformation = null;
    /**
     * The PolicyInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: PolicyInformation
     * @var \Travelport\Hotel\StructType\PolicyInformation[]
     */
    protected ?array $PolicyInformation = null;
    /**
     * The AccountInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AccountInformation
     * @var \Travelport\Hotel\StructType\AccountInformation|null
     */
    protected ?\Travelport\Hotel\StructType\AccountInformation $AccountInformation = null;
    /**
     * The AgencyInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: AgencyInformation
     * @var \Travelport\Hotel\StructType\AgencyInformation|null
     */
    protected ?\Travelport\Hotel\StructType\AgencyInformation $AgencyInformation = null;
    /**
     * The TravelerInformation
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * - ref: TravelerInformation
     * @var \Travelport\Hotel\StructType\TravelerInformation[]
     */
    protected ?array $TravelerInformation = null;
    /**
     * The CustomProfileInformation
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: CustomProfileInformation
     * @var \Travelport\Hotel\StructType\CustomProfileInformation|null
     */
    protected ?\Travelport\Hotel\StructType\CustomProfileInformation $CustomProfileInformation = null;
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
     * This method is responsible for validating the values passed to the setPolicyInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPolicyInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePolicyInformationForArrayConstraintsFromSetPolicyInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fileFinishingInfoPolicyInformationItem) {
            // validation for constraint: itemType
            if (!$fileFinishingInfoPolicyInformationItem instanceof \Travelport\Hotel\StructType\PolicyInformation) {
                $invalidValues[] = is_object($fileFinishingInfoPolicyInformationItem) ? get_class($fileFinishingInfoPolicyInformationItem) : sprintf('%s(%s)', gettype($fileFinishingInfoPolicyInformationItem), var_export($fileFinishingInfoPolicyInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The PolicyInformation property can only contain items of type \Travelport\Hotel\StructType\PolicyInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set PolicyInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\PolicyInformation[] $policyInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setPolicyInformation(?array $policyInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($policyInformationArrayErrorMessage = self::validatePolicyInformationForArrayConstraintsFromSetPolicyInformation($policyInformation))) {
            throw new InvalidArgumentException($policyInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($policyInformation) && count($policyInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($policyInformation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\PolicyInformation) {
            throw new InvalidArgumentException(sprintf('The PolicyInformation property can only contain items of type \Travelport\Hotel\StructType\PolicyInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->PolicyInformation) && count($this->PolicyInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->PolicyInformation)), __LINE__);
        }
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
     * This method is responsible for validating the values passed to the setTravelerInformation method
     * This method is willingly generated in order to preserve the one-line inline validation within the setTravelerInformation method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateTravelerInformationForArrayConstraintsFromSetTravelerInformation(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $fileFinishingInfoTravelerInformationItem) {
            // validation for constraint: itemType
            if (!$fileFinishingInfoTravelerInformationItem instanceof \Travelport\Hotel\StructType\TravelerInformation) {
                $invalidValues[] = is_object($fileFinishingInfoTravelerInformationItem) ? get_class($fileFinishingInfoTravelerInformationItem) : sprintf('%s(%s)', gettype($fileFinishingInfoTravelerInformationItem), var_export($fileFinishingInfoTravelerInformationItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The TravelerInformation property can only contain items of type \Travelport\Hotel\StructType\TravelerInformation, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set TravelerInformation value
     * @throws InvalidArgumentException
     * @param \Travelport\Hotel\StructType\TravelerInformation[] $travelerInformation
     * @return \Travelport\Hotel\StructType\FileFinishingInfo
     */
    public function setTravelerInformation(?array $travelerInformation = null): self
    {
        // validation for constraint: array
        if ('' !== ($travelerInformationArrayErrorMessage = self::validateTravelerInformationForArrayConstraintsFromSetTravelerInformation($travelerInformation))) {
            throw new InvalidArgumentException($travelerInformationArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($travelerInformation) && count($travelerInformation) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($travelerInformation)), __LINE__);
        }
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
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Hotel\StructType\TravelerInformation) {
            throw new InvalidArgumentException(sprintf('The TravelerInformation property can only contain items of type \Travelport\Hotel\StructType\TravelerInformation, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->TravelerInformation) && count($this->TravelerInformation) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->TravelerInformation)), __LINE__);
        }
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