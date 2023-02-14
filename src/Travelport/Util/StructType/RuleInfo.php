<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
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
     * @var \Travelport\Util\StructType\ChargesRules|null
     */
    protected ?\Travelport\Util\StructType\ChargesRules $ChargesRules = null;
    /**
     * Constructor method for RuleInfo
     * @uses RuleInfo::setChargesRules()
     * @param \Travelport\Util\StructType\ChargesRules $chargesRules
     */
    public function __construct(?\Travelport\Util\StructType\ChargesRules $chargesRules = null)
    {
        $this
            ->setChargesRules($chargesRules);
    }
    /**
     * Get ChargesRules value
     * @return \Travelport\Util\StructType\ChargesRules|null
     */
    public function getChargesRules(): ?\Travelport\Util\StructType\ChargesRules
    {
        return $this->ChargesRules;
    }
    /**
     * Set ChargesRules value
     * @param \Travelport\Util\StructType\ChargesRules $chargesRules
     * @return \Travelport\Util\StructType\RuleInfo
     */
    public function setChargesRules(?\Travelport\Util\StructType\ChargesRules $chargesRules = null): self
    {
        $this->ChargesRules = $chargesRules;
        
        return $this;
    }
}
