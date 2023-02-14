<?php

declare(strict_types=1);

namespace StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealRequest StructType
 * Meta information extracted from the WSDL
 * - documentation: Special meal requests like Vegetarian
 * @subpackage Structs
 */
class MealRequest extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - base: xs:string
     * - length: 4
     * - use: required
     * @var string
     */
    protected string $Type;
    /**
     * Constructor method for MealRequest
     * @uses MealRequest::setType()
     * @param string $type
     */
    public function __construct(string $type)
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return string
     */
    public function getType(): string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \StructType\MealRequest
     */
    public function setType(string $type): self
    {
        // validation for constraint: string
        if (!is_null($type) && !is_string($type)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($type, true), gettype($type)), __LINE__);
        }
        // validation for constraint: length(4)
        if (!is_null($type) && mb_strlen((string) $type) !== 4) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be equal to 4', mb_strlen((string) $type)), __LINE__);
        }
        $this->Type = $type;
        
        return $this;
    }
}
