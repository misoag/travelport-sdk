<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ReferenceDataItem StructType
 * @subpackage Structs
 */
class ReferenceDataItem extends AbstractStructBase
{
    /**
     * The Deprecated
     * Meta information extracted from the WSDL
     * - documentation: Indicates if the reference data item is deprecated.
     * - use: required
     * @var bool
     */
    protected bool $Deprecated;
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: The code of the reference data item. | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - type: common:StringLength1to128
     * - use: required
     * @var string
     */
    protected string $Code;
    /**
     * The AdditionalInfo
     * Meta information extracted from the WSDL
     * - maxOccurs: 999
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\AdditionalInfo[]
     */
    protected ?array $AdditionalInfo = null;
    /**
     * The Name
     * Meta information extracted from the WSDL
     * - documentation: The name of the reference data item. | Used for Character Strings, length 1 to 128.
     * - base: xs:string
     * - maxLength: 128
     * - minLength: 1
     * - type: common:StringLength1to128
     * @var string|null
     */
    protected ?string $Name = null;
    /**
     * The Description
     * Meta information extracted from the WSDL
     * - documentation: The description of the reference data item. | Used for Character Strings, length 1 to 255.
     * - base: xs:string
     * - maxLength: 255
     * - minLength: 1
     * - type: common:StringLength1to255
     * @var string|null
     */
    protected ?string $Description = null;
    /**
     * Constructor method for ReferenceDataItem
     * @uses ReferenceDataItem::setDeprecated()
     * @uses ReferenceDataItem::setCode()
     * @uses ReferenceDataItem::setAdditionalInfo()
     * @uses ReferenceDataItem::setName()
     * @uses ReferenceDataItem::setDescription()
     * @param bool $deprecated
     * @param string $code
     * @param \Travelport\Util\StructType\AdditionalInfo[] $additionalInfo
     * @param string $name
     * @param string $description
     */
    public function __construct(bool $deprecated, string $code, ?array $additionalInfo = null, ?string $name = null, ?string $description = null)
    {
        $this
            ->setDeprecated($deprecated)
            ->setCode($code)
            ->setAdditionalInfo($additionalInfo)
            ->setName($name)
            ->setDescription($description);
    }
    /**
     * Get Deprecated value
     * @return bool
     */
    public function getDeprecated(): bool
    {
        return $this->Deprecated;
    }
    /**
     * Set Deprecated value
     * @param bool $deprecated
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function setDeprecated(bool $deprecated): self
    {
        // validation for constraint: boolean
        if (!is_null($deprecated) && !is_bool($deprecated)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($deprecated, true), gettype($deprecated)), __LINE__);
        }
        $this->Deprecated = $deprecated;
        
        return $this;
    }
    /**
     * Get Code value
     * @return string
     */
    public function getCode(): string
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param string $code
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function setCode(string $code): self
    {
        // validation for constraint: string
        if (!is_null($code) && !is_string($code)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($code) && mb_strlen((string) $code) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $code)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($code) && mb_strlen((string) $code) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
    /**
     * Get AdditionalInfo value
     * @return \Travelport\Util\StructType\AdditionalInfo[]
     */
    public function getAdditionalInfo(): ?array
    {
        return $this->AdditionalInfo;
    }
    /**
     * This method is responsible for validating the values passed to the setAdditionalInfo method
     * This method is willingly generated in order to preserve the one-line inline validation within the setAdditionalInfo method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateAdditionalInfoForArrayConstraintsFromSetAdditionalInfo(?array $values = []): string
    {
        if (!is_array($values)) {
            return '';
        }
        $message = '';
        $invalidValues = [];
        foreach ($values as $referenceDataItemAdditionalInfoItem) {
            // validation for constraint: itemType
            if (!$referenceDataItemAdditionalInfoItem instanceof \Travelport\Util\StructType\AdditionalInfo) {
                $invalidValues[] = is_object($referenceDataItemAdditionalInfoItem) ? get_class($referenceDataItemAdditionalInfoItem) : sprintf('%s(%s)', gettype($referenceDataItemAdditionalInfoItem), var_export($referenceDataItemAdditionalInfoItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The AdditionalInfo property can only contain items of type \Travelport\Util\StructType\AdditionalInfo, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set AdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalInfo[] $additionalInfo
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function setAdditionalInfo(?array $additionalInfo = null): self
    {
        // validation for constraint: array
        if ('' !== ($additionalInfoArrayErrorMessage = self::validateAdditionalInfoForArrayConstraintsFromSetAdditionalInfo($additionalInfo))) {
            throw new InvalidArgumentException($additionalInfoArrayErrorMessage, __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($additionalInfo) && count($additionalInfo) > 999) {
            throw new InvalidArgumentException(sprintf('Invalid count of %s, the number of elements contained by the property must be less than or equal to 999', count($additionalInfo)), __LINE__);
        }
        $this->AdditionalInfo = $additionalInfo;
        
        return $this;
    }
    /**
     * Add item to AdditionalInfo value
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\AdditionalInfo $item
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function addToAdditionalInfo(\Travelport\Util\StructType\AdditionalInfo $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Travelport\Util\StructType\AdditionalInfo) {
            throw new InvalidArgumentException(sprintf('The AdditionalInfo property can only contain items of type \Travelport\Util\StructType\AdditionalInfo, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        // validation for constraint: maxOccurs(999)
        if (is_array($this->AdditionalInfo) && count($this->AdditionalInfo) >= 999) {
            throw new InvalidArgumentException(sprintf('You can\'t add anymore element to this property that already contains %s elements, the number of elements contained by the property must be less than or equal to 999', count($this->AdditionalInfo)), __LINE__);
        }
        $this->AdditionalInfo[] = $item;
        
        return $this;
    }
    /**
     * Get Name value
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->Name;
    }
    /**
     * Set Name value
     * @param string $name
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function setName(?string $name = null): self
    {
        // validation for constraint: string
        if (!is_null($name) && !is_string($name)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($name, true), gettype($name)), __LINE__);
        }
        // validation for constraint: maxLength(128)
        if (!is_null($name) && mb_strlen((string) $name) > 128) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 128', mb_strlen((string) $name)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($name) && mb_strlen((string) $name) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $name)), __LINE__);
        }
        $this->Name = $name;
        
        return $this;
    }
    /**
     * Get Description value
     * @return string|null
     */
    public function getDescription(): ?string
    {
        return $this->Description;
    }
    /**
     * Set Description value
     * @param string $description
     * @return \Travelport\Util\StructType\ReferenceDataItem
     */
    public function setDescription(?string $description = null): self
    {
        // validation for constraint: string
        if (!is_null($description) && !is_string($description)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($description, true), gettype($description)), __LINE__);
        }
        // validation for constraint: maxLength(255)
        if (!is_null($description) && mb_strlen((string) $description) > 255) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 255', mb_strlen((string) $description)), __LINE__);
        }
        // validation for constraint: minLength(1)
        if (!is_null($description) && mb_strlen((string) $description) < 1) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 1', mb_strlen((string) $description)), __LINE__);
        }
        $this->Description = $description;
        
        return $this;
    }
}
