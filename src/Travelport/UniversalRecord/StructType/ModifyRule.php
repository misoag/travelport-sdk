<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRule StructType
 * Meta information extracted from the WSDL
 * - documentation: Indicates modification rules for the particular modification type.
 * @subpackage Structs
 */
class ModifyRule extends AbstractStructBase
{
    /**
     * The Modification
     * Meta information extracted from the WSDL
     * - documentation: The modificaiton for which this rule group applies.
     * - type: ModificationType
     * - use: required
     * @var string
     */
    public string $Modification;
    /**
     * The AutomaticallyAppliedOnAdd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option will be automatically added to new segments / passengers in the itinerary.
     * - default: false
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $AutomaticallyAppliedOnAdd = null;
    /**
     * The CanDelete
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option can be deleted from the itinerary without segment or passenger modifications
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $CanDelete = null;
    /**
     * The CanAdd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option can be added to the itinerary without segment or passenger modification
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $CanAdd = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the price of the option is refundable.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    public ?bool $Refundable = null;
    /**
     * The ProviderDefinedModificationType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined modification type which is mapped to Other
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderDefinedModificationType = null;
    /**
     * Constructor method for ModifyRule
     * @uses ModifyRule::setModification()
     * @uses ModifyRule::setAutomaticallyAppliedOnAdd()
     * @uses ModifyRule::setCanDelete()
     * @uses ModifyRule::setCanAdd()
     * @uses ModifyRule::setRefundable()
     * @uses ModifyRule::setProviderDefinedModificationType()
     * @param string $modification
     * @param bool $automaticallyAppliedOnAdd
     * @param bool $canDelete
     * @param bool $canAdd
     * @param bool $refundable
     * @param string $providerDefinedModificationType
     */
    public function __construct(string $modification, ?bool $automaticallyAppliedOnAdd = false, ?bool $canDelete = null, ?bool $canAdd = null, ?bool $refundable = null, ?string $providerDefinedModificationType = null)
    {
        $this
            ->setModification($modification)
            ->setAutomaticallyAppliedOnAdd($automaticallyAppliedOnAdd)
            ->setCanDelete($canDelete)
            ->setCanAdd($canAdd)
            ->setRefundable($refundable)
            ->setProviderDefinedModificationType($providerDefinedModificationType);
    }
    /**
     * Get Modification value
     * @return string
     */
    public function getModification(): string
    {
        return $this->Modification;
    }
    /**
     * Set Modification value
     * @param string $modification
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setModification(string $modification): self
    {
        $this->Modification = $modification;
        
        return $this;
    }
    /**
     * Get AutomaticallyAppliedOnAdd value
     * @return bool|null
     */
    public function getAutomaticallyAppliedOnAdd(): ?bool
    {
        return $this->AutomaticallyAppliedOnAdd;
    }
    /**
     * Set AutomaticallyAppliedOnAdd value
     * @param bool $automaticallyAppliedOnAdd
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setAutomaticallyAppliedOnAdd(?bool $automaticallyAppliedOnAdd = false): self
    {
        $this->AutomaticallyAppliedOnAdd = $automaticallyAppliedOnAdd;
        
        return $this;
    }
    /**
     * Get CanDelete value
     * @return bool|null
     */
    public function getCanDelete(): ?bool
    {
        return $this->CanDelete;
    }
    /**
     * Set CanDelete value
     * @param bool $canDelete
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setCanDelete(?bool $canDelete = null): self
    {
        $this->CanDelete = $canDelete;
        
        return $this;
    }
    /**
     * Get CanAdd value
     * @return bool|null
     */
    public function getCanAdd(): ?bool
    {
        return $this->CanAdd;
    }
    /**
     * Set CanAdd value
     * @param bool $canAdd
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setCanAdd(?bool $canAdd = null): self
    {
        $this->CanAdd = $canAdd;
        
        return $this;
    }
    /**
     * Get Refundable value
     * @return bool|null
     */
    public function getRefundable(): ?bool
    {
        return $this->Refundable;
    }
    /**
     * Set Refundable value
     * @param bool $refundable
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setRefundable(?bool $refundable = null): self
    {
        $this->Refundable = $refundable;
        
        return $this;
    }
    /**
     * Get ProviderDefinedModificationType value
     * @return string|null
     */
    public function getProviderDefinedModificationType(): ?string
    {
        return $this->ProviderDefinedModificationType;
    }
    /**
     * Set ProviderDefinedModificationType value
     * @param string $providerDefinedModificationType
     * @return \Travelport\UniversalRecord\StructType\ModifyRule
     */
    public function setProviderDefinedModificationType(?string $providerDefinedModificationType = null): self
    {
        $this->ProviderDefinedModificationType = $providerDefinedModificationType;
        
        return $this;
    }
}
