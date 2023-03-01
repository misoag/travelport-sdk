<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * - documentation: Currently returned: FullyRefundable (1G,1V), RefundableWithPenalty (1G,1V), Refundable (1P), NonRefundable (1G,1V,1P).Refundable. | Currently returned: FullyRefundable (1G,1V), RefundableWithPenalty (1G,1V), Refundable (1P),
     * NonRefundable (1G,1V,1P).
     * - base: xs:string
     * - use: required
     * @var string
     */
    public string $Value;
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
     * @return \Travelport\Air\StructType\Refundability
     */
    public function setValue(string $value): self
    {
        $this->Value = $value;
        
        return $this;
    }
}
