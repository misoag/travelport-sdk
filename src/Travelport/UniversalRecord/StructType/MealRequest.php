<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

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
    public string $Type;
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
     * @return \Travelport\UniversalRecord\StructType\MealRequest
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
