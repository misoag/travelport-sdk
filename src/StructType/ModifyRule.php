<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
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
    protected string $Modification;
    /**
     * The AutomaticallyAppliedOnAdd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option will be automatically added to new segments / passengers in the itinerary.
     * - default: false
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $AutomaticallyAppliedOnAdd = null;
    /**
     * The CanDelete
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option can be deleted from the itinerary without segment or passenger modifications
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CanDelete = null;
    /**
     * The CanAdd
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the option can be added to the itinerary without segment or passenger modification
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $CanAdd = null;
    /**
     * The Refundable
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the price of the option is refundable.
     * - type: xs:boolean
     * - use: optional
     * @var bool|null
     */
    protected ?bool $Refundable = null;
    /**
     * The ProviderDefinedModificationType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined modification type which is mapped to Other
     * - type: xs:string
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedModificationType = null;
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
     * @uses \EnumType\ModificationType::valueIsValid()
     * @uses \EnumType\ModificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $modification
     * @return \StructType\ModifyRule
     */
    public function setModification(string $modification): self
    {
        // validation for constraint: enumeration
        if (!\EnumType\ModificationType::valueIsValid($modification)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \EnumType\ModificationType', is_array($modification) ? implode(', ', $modification) : var_export($modification, true), implode(', ', \EnumType\ModificationType::getValidValues())), __LINE__);
        }
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
     * @return \StructType\ModifyRule
     */
    public function setAutomaticallyAppliedOnAdd(?bool $automaticallyAppliedOnAdd = false): self
    {
        // validation for constraint: boolean
        if (!is_null($automaticallyAppliedOnAdd) && !is_bool($automaticallyAppliedOnAdd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($automaticallyAppliedOnAdd, true), gettype($automaticallyAppliedOnAdd)), __LINE__);
        }
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
     * @return \StructType\ModifyRule
     */
    public function setCanDelete(?bool $canDelete = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canDelete) && !is_bool($canDelete)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canDelete, true), gettype($canDelete)), __LINE__);
        }
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
     * @return \StructType\ModifyRule
     */
    public function setCanAdd(?bool $canAdd = null): self
    {
        // validation for constraint: boolean
        if (!is_null($canAdd) && !is_bool($canAdd)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($canAdd, true), gettype($canAdd)), __LINE__);
        }
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
     * @return \StructType\ModifyRule
     */
    public function setRefundable(?bool $refundable = null): self
    {
        // validation for constraint: boolean
        if (!is_null($refundable) && !is_bool($refundable)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($refundable, true), gettype($refundable)), __LINE__);
        }
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
     * @return \StructType\ModifyRule
     */
    public function setProviderDefinedModificationType(?string $providerDefinedModificationType = null): self
    {
        // validation for constraint: string
        if (!is_null($providerDefinedModificationType) && !is_string($providerDefinedModificationType)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($providerDefinedModificationType, true), gettype($providerDefinedModificationType)), __LINE__);
        }
        $this->ProviderDefinedModificationType = $providerDefinedModificationType;
        
        return $this;
    }
}
