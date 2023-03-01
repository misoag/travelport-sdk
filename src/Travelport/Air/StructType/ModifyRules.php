<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ModifyRules StructType
 * Meta information extracted from the WSDL
 * - documentation: Groups the modification rules for the Option
 * @subpackage Structs
 */
class ModifyRules extends AbstractStructBase
{
    /**
     * The ModifyRule
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * @var \Travelport\Air\StructType\ModifyRule[]
     */
    public ?array $ModifyRule = null;
    /**
     * The SupportedModifications
     * @var string[]
     */
    public ?array $SupportedModifications = null;
    /**
     * The ProviderDefinedModificationType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined modification type which is mapped to Other
     * - use: optional
     * @var string|null
     */
    public ?string $ProviderDefinedModificationType = null;
    /**
     * Constructor method for ModifyRules
     * @uses ModifyRules::setModifyRule()
     * @uses ModifyRules::setSupportedModifications()
     * @uses ModifyRules::setProviderDefinedModificationType()
     * @param \Travelport\Air\StructType\ModifyRule[] $modifyRule
     * @param string[] $supportedModifications
     * @param string $providerDefinedModificationType
     */
    public function __construct(?array $modifyRule = null, ?array $supportedModifications = null, ?string $providerDefinedModificationType = null)
    {
        $this
            ->setModifyRule($modifyRule)
            ->setSupportedModifications($supportedModifications)
            ->setProviderDefinedModificationType($providerDefinedModificationType);
    }
    /**
     * Get ModifyRule value
     * @return \Travelport\Air\StructType\ModifyRule[]
     */
    public function getModifyRule(): ?array
    {
        return $this->ModifyRule;
    }
    /**
     * Set ModifyRule value
     * @param \Travelport\Air\StructType\ModifyRule[] $modifyRule
     * @return \Travelport\Air\StructType\ModifyRules
     */
    public function setModifyRule(?array $modifyRule = null): self
    {
        $this->ModifyRule = $modifyRule;
        
        return $this;
    }
    /**
     * Add item to ModifyRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Air\StructType\ModifyRule $item
     * @return \Travelport\Air\StructType\ModifyRules
     */
    public function addToModifyRule(\Travelport\Air\StructType\ModifyRule $item): self
    {
        $this->ModifyRule[] = $item;
        
        return $this;
    }
    /**
     * Get SupportedModifications value
     * @return string[]
     */
    public function getSupportedModifications(): ?array
    {
        return $this->SupportedModifications;
    }
    /**
     * Set SupportedModifications value
     * @param string[] $supportedModifications
     * @return \Travelport\Air\StructType\ModifyRules
     */
    public function setSupportedModifications(?array $supportedModifications = null): self
    {
        $this->SupportedModifications = $supportedModifications;
        
        return $this;
    }
    /**
     * Add item to SupportedModifications value
     * @uses \Travelport\Air\EnumType\ModificationType::valueIsValid()
     * @uses \Travelport\Air\EnumType\ModificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Air\StructType\ModifyRules
     */
    public function addToSupportedModifications(string $item): self
    {
        $this->SupportedModifications[] = $item;
        
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
     * @return \Travelport\Air\StructType\ModifyRules
     */
    public function setProviderDefinedModificationType(?string $providerDefinedModificationType = null): self
    {
        $this->ProviderDefinedModificationType = $providerDefinedModificationType;
        
        return $this;
    }
}
