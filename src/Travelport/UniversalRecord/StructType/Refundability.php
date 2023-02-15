<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Refundability StructType
 * Meta information extracted from the WSDL
 * - documentation: Refundability/Penalty Fare Rules about this fare component.
 * @subpackage Structs
 */
class Refundability extends AbstractStructBase
{
    /**
     * The Value
     * Meta information extracted from the WSDL
     * - documentation: Currently returned: FullyRefundable (1G,1V), RefundableWithPenalty (1G,1V), Refundable (1P,1J), NonRefundable (1G,1V,1P,1J).Refundable. | Currently returned: FullyRefundable (1G,1V), RefundableWithPenalty (1G,1V), Refundable (1P,1J),
     * NonRefundable (1G,1V,1P,1J).
     * - base: xs:string
     * - use: required
     * @var string
     */
    protected string $Value;
    /**
     * Constructor method for Refundability
     * @uses Refundability::setValue()
     * @param string $value
     */
    public function __construct(string $value)
    {
        $this
            ->setValue($value);
    }
    /**
     * Get Value value
     * @return string
     */
    public function getValue(): string
    {
        return $this->Value;
    }
    /**
     * Set Value value
     * @param string $value
     * @return \Travelport\UniversalRecord\StructType\Refundability
     */
    public function setValue(string $value): self
    {
        // validation for constraint: string
        if (!is_null($value) && !is_string($value)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($value, true), gettype($value)), __LINE__);
        }
        $this->Value = $value;
        
        return $this;
    }
}
