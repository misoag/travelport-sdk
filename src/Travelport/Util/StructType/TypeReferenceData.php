<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeReferenceData StructType
 * @subpackage Structs
 */
class TypeReferenceData extends AbstractStructBase
{
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
     * The DeprecatedDate
     * Meta information extracted from the WSDL
     * - documentation: Used to set deprecated date
     * @var string|null
     */
    protected ?string $DeprecatedDate = null;
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
     * Constructor method for typeReferenceData
     * @uses TypeReferenceData::setCode()
     * @uses TypeReferenceData::setDeprecatedDate()
     * @uses TypeReferenceData::setName()
     * @uses TypeReferenceData::setDescription()
     * @param string $code
     * @param string $deprecatedDate
     * @param string $name
     * @param string $description
     */
    public function __construct(string $code, ?string $deprecatedDate = null, ?string $name = null, ?string $description = null)
    {
        $this
            ->setCode($code)
            ->setDeprecatedDate($deprecatedDate)
            ->setName($name)
            ->setDescription($description);
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
     * @return \Travelport\Util\StructType\TypeReferenceData
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
     * Get DeprecatedDate value
     * @return string|null
     */
    public function getDeprecatedDate(): ?string
    {
        return $this->DeprecatedDate;
    }
    /**
     * Set DeprecatedDate value
     * @param string $deprecatedDate
     * @return \Travelport\Util\StructType\TypeReferenceData
     */
    public function setDeprecatedDate(?string $deprecatedDate = null): self
    {
        // validation for constraint: string
        if (!is_null($deprecatedDate) && !is_string($deprecatedDate)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($deprecatedDate, true), gettype($deprecatedDate)), __LINE__);
        }
        $this->DeprecatedDate = $deprecatedDate;
        
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
     * @return \Travelport\Util\StructType\TypeReferenceData
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
     * @return \Travelport\Util\StructType\TypeReferenceData
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
