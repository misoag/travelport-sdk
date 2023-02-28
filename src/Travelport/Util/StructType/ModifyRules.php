<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\ModifyRule[]
     */
    protected ?array $ModifyRule = null;
    /**
     * The SupportedModifications
     * @var string[]
     */
    protected ?array $SupportedModifications = null;
    /**
     * The ProviderDefinedModificationType
     * Meta information extracted from the WSDL
     * - documentation: Indicates the actual provider defined modification type which is mapped to Other
     * - use: optional
     * @var string|null
     */
    protected ?string $ProviderDefinedModificationType = null;
    /**
     * Constructor method for ModifyRules
     * @uses ModifyRules::setModifyRule()
     * @uses ModifyRules::setSupportedModifications()
     * @uses ModifyRules::setProviderDefinedModificationType()
     * @param \Travelport\Util\StructType\ModifyRule[] $modifyRule
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
     * @return \Travelport\Util\StructType\ModifyRule[]
     */
    public function getModifyRule(): ?array
    {
        return $this->ModifyRule;
    }
    /**
     * This method is responsible for validating the value(s) passed to the setModifyRule method
     * This method is willingly generated in order to preserve the one-line inline validation within the setModifyRule method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateModifyRuleForArrayConstraintFromSetModifyRule(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $modifyRulesModifyRuleItem) {
            // validation for constraint: itemType
            if (!$modifyRulesModifyRuleItem instanceof \Travelport\Util\StructType\ModifyRule) {
                $invalidValues[] = is_object($modifyRulesModifyRuleItem) ? get_class($modifyRulesModifyRuleItem) : sprintf('%s(%s)', gettype($modifyRulesModifyRuleItem), var_export($modifyRulesModifyRuleItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The ModifyRule property can only contain items of type \Travelport\Util\StructType\ModifyRule, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set ModifyRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ModifyRule[] $modifyRule
     * @return \Travelport\Util\StructType\ModifyRules
     */
    public function setModifyRule(?array $modifyRule = null): self
    {
        // validation for constraint: array
        if ('' !== ($modifyRuleArrayErrorMessage = self::validateModifyRuleForArrayConstraintFromSetModifyRule($modifyRule))) {
            throw new InvalidArgumentException($modifyRuleArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($modifyRule) && count($modifyRule) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($modifyRule)), __LINE__);
        }
        $this->ModifyRule = $modifyRule;
        
        return $this;
    }
    /**
     * Add item to ModifyRule value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\ModifyRule $item
     * @return \Travelport\Util\StructType\ModifyRules
     */
    public function addToModifyRule(\Travelport\Util\StructType\ModifyRule $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\ModifyRule) {
            throw new InvalidArgumentException(sprintf('The ModifyRule property can only contain items of type \Travelport\Util\StructType\ModifyRule, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->ModifyRule) && count($this->ModifyRule) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->ModifyRule)), __LINE__);
        }
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
     * This method is responsible for validating the value(s) passed to the setSupportedModifications method
     * This method is willingly generated in order to preserve the one-line inline validation within the setSupportedModifications method
     * This has to validate that each item contained by the array match the itemType constraint
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateSupportedModificationsForArrayConstraintFromSetSupportedModifications(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $modifyRulesSupportedModificationsItem) {
            // validation for constraint: enumeration
            if (!\Travelport\Util\EnumType\ModificationType::valueIsValid($modifyRulesSupportedModificationsItem)) {
                $invalidValues[] = is_object($modifyRulesSupportedModificationsItem) ? get_class($modifyRulesSupportedModificationsItem) : sprintf('%s(%s)', gettype($modifyRulesSupportedModificationsItem), var_export($modifyRulesSupportedModificationsItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\ModificationType', is_array($invalidValues) ? implode(', ', $invalidValues) : var_export($invalidValues, true), implode(', ', \Travelport\Util\EnumType\ModificationType::getValidValues()));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set SupportedModifications value
     * @uses \Travelport\Util\EnumType\ModificationType::valueIsValid()
     * @uses \Travelport\Util\EnumType\ModificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string[] $supportedModifications
     * @return \Travelport\Util\StructType\ModifyRules
     */
    public function setSupportedModifications(?array $supportedModifications = null): self
    {
        // validation for constraint: array
        if ('' !== ($supportedModificationsArrayErrorMessage = self::validateSupportedModificationsForArrayConstraintFromSetSupportedModifications($supportedModifications))) {
            throw new InvalidArgumentException($supportedModificationsArrayErrorMessage, __LINE__);
        }
        $this->SupportedModifications = $supportedModifications;
        
        return $this;
    }
    /**
     * Add item to SupportedModifications value
     * @uses \Travelport\Util\EnumType\ModificationType::valueIsValid()
     * @uses \Travelport\Util\EnumType\ModificationType::getValidValues()
     * @throws InvalidArgumentException
     * @param string $item
     * @return \Travelport\Util\StructType\ModifyRules
     */
    public function addToSupportedModifications(string $item): self
    {
        // validation for constraint: enumeration
        if (!\Travelport\Util\EnumType\ModificationType::valueIsValid($item)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Travelport\Util\EnumType\ModificationType', is_array($item) ? implode(', ', $item) : var_export($item, true), implode(', ', \Travelport\Util\EnumType\ModificationType::getValidValues())), __LINE__);
        }
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
     * @return \Travelport\Util\StructType\ModifyRules
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
