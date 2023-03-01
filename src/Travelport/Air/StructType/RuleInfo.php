<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
     * @var \Travelport\Air\StructType\ChargesRules|null
     */
    public ?\Travelport\Air\StructType\ChargesRules $ChargesRules = null;
    /**
     * Constructor method for RuleInfo
     * @uses RuleInfo::setChargesRules()
     * @param \Travelport\Air\StructType\ChargesRules $chargesRules
     */
    public function __construct(?\Travelport\Air\StructType\ChargesRules $chargesRules = null)
    {
        $this
            ->setChargesRules($chargesRules);
    }
    /**
     * Get ChargesRules value
     * @return \Travelport\Air\StructType\ChargesRules|null
     */
    public function getChargesRules(): ?\Travelport\Air\StructType\ChargesRules
    {
        return $this->ChargesRules;
    }
    /**
     * Set ChargesRules value
     * @param \Travelport\Air\StructType\ChargesRules $chargesRules
     * @return \Travelport\Air\StructType\RuleInfo
     */
    public function setChargesRules(?\Travelport\Air\StructType\ChargesRules $chargesRules = null): self
    {
        $this->ChargesRules = $chargesRules;
        
        return $this;
    }
}
