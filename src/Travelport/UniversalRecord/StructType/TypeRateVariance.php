<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeRateVariance StructType
 * @subpackage Structs
 */
class TypeRateVariance extends AbstractStructBase
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Supported values are 'percentage.1P. Future release 'amopunt'.
     * - use: required
     * @var string
     */
    public string $Type;
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Represents value of user permitted variance for sell success. eg. "5.00" = 5% variance on the supplier estimated total amount response will be successful. 1P.
     * - use: required
     * @var float
     */
    public float $Value;
    /**
     * The Apply
     * Meta information extracted from the WSDL
     * - documentation: Variance to response amount; 'high', 'low' or 'both. 1P.
     * - use: required
     * @var string
     */
    public string $Apply;
    /**
     * Constructor method for typeRateVariance
     * @uses TypeRateVariance::setType()
     * @uses TypeRateVariance::setValue()
     * @uses TypeRateVariance::setApply()
     * @param string $type
     * @param float $value
     * @param string $apply
     */
    public function __construct(string $type, float $value, string $apply)
    {
        $this
            ->setType($type)
            ->setValue($value)
            ->setApply($apply);
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
     * @return \Travelport\UniversalRecord\StructType\TypeRateVariance
     */
    public function setType(string $type): self
    {
        $this->Type = $type;
        
        return $this;
    }
    /**
     * Get Value value
     * @return float
     */
    public function getValue(): float
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param float $value
     * @return \Travelport\UniversalRecord\StructType\TypeRateVariance
     */
    public function setValue(float $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
    /**
     * Get Apply value
     * @return string
     */
    public function getApply(): string
    {
        return $this->Apply;
    }
    /**
     * Set Apply value
     * @param string $apply
     * @return \Travelport\UniversalRecord\StructType\TypeRateVariance
     */
    public function setApply(string $apply): self
    {
        $this->Apply = $apply;
        
        return $this;
    }
}
