<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for RuleInfo StructType
 * Meta information extracted from the WSDL
 * - documentation: Pre pay booking rule information
 * @subpackage Structs
 */
class RuleInfo extends AbstractStructBase
{
    /**
     * The ChargesRules
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * - ref: ChargesRules
     * @var \Travelport\UniversalRecord\StructType\ChargesRules|null
     */
    public ?\Travelport\UniversalRecord\StructType\ChargesRules $ChargesRules = null;
    /**
     * Constructor method for RuleInfo
     * @uses RuleInfo::setChargesRules()
     * @param \Travelport\UniversalRecord\StructType\ChargesRules $chargesRules
     */
    public function __construct(?\Travelport\UniversalRecord\StructType\ChargesRules $chargesRules = null)
    {
        $this
            ->setChargesRules($chargesRules);
    }
    /**
     * Get ChargesRules value
     * @return \Travelport\UniversalRecord\StructType\ChargesRules|null
     */
    public function getChargesRules(): ?\Travelport\UniversalRecord\StructType\ChargesRules
    {
        return $this->ChargesRules;
    }
    /**
     * Set ChargesRules value
     * @param \Travelport\UniversalRecord\StructType\ChargesRules $chargesRules
     * @return \Travelport\UniversalRecord\StructType\RuleInfo
     */
    public function setChargesRules(?\Travelport\UniversalRecord\StructType\ChargesRules $chargesRules = null): self
    {
        $this->ChargesRules = $chargesRules;
        
        return $this;
    }
}
