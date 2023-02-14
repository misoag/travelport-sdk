<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MealPlan StructType
 * Meta information extracted from the WSDL
 * - documentation: Meal plan.
 * @subpackage Structs
 */
class MealPlan extends AbstractStructBase
{
    /**
     * The Code
     * Meta information extracted from the WSDL
     * - documentation: Meal plan code. Uses Open Travel Code List Meal Plan Type (MPT). Encode/decode data in Util ReferenceDataRetrieveReq TypeCode=“HotelMealPlans”. | Refers to Open Travel Code
     * - base: xs:positiveInteger
     * @var int|null
     */
    protected ?int $Code = null;
    /**
     * Constructor method for MealPlan
     * @uses MealPlan::setCode()
     * @param int $code
     */
    public function __construct(?int $code = null)
    {
        $this
            ->setCode($code);
    }
    /**
     * Get Code value
     * @return int|null
     */
    public function getCode(): ?int
    {
        return $this->Code;
    }
    /**
     * Set Code value
     * @param int $code
     * @return \Travelport\UniversalRecord\StructType\MealPlan
     */
    public function setCode(?int $code = null): self
    {
        // validation for constraint: int
        if (!is_null($code) && !(is_int($code) || ctype_digit($code))) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($code, true), gettype($code)), __LINE__);
        }
        $this->Code = $code;
        
        return $this;
    }
}
