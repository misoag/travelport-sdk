<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeTicketModifierPercentType StructType
 * Meta information extracted from the WSDL
 * - documentation: Ticketing Modifier used to alter a fare percentage before or during the ticketing operation.
 * @subpackage Structs
 */
class TypeTicketModifierPercentType extends AbstractStructBase
{
    /**
     * The Percent
     * Meta information extracted from the WSDL
     * - documentation: Percent associated with a ticketing modifier | A percentage that can include up to two decimal places
     * - base: xs:string
     * - pattern: ([0-9]{1,2}|100)\.[0-9]{1,2}
     * - use: required
     * @var string
     */
    protected string $Percent;
    /**
     * Constructor method for typeTicketModifierPercentType
     * @uses TypeTicketModifierPercentType::setPercent()
     * @param string $percent
     */
    public function __construct(string $percent)
    {
        $this
            ->setPercent($percent);
    }
    /**
     * Get Percent value
     * @return string
     */
    public function getPercent(): string
    {
        return $this->Percent;
    }
    /**
     * Set Percent value
     * @param string $percent
     * @return \Travelport\Util\StructType\TypeTicketModifierPercentType
     */
    public function setPercent(string $percent): self
    {
        // validation for constraint: string
        if (!is_null($percent) && !is_string($percent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($percent, true), gettype($percent)), __LINE__);
        }
        // validation for constraint: pattern(([0-9]{1,2}|100)\.[0-9]{1,2})
        if (!is_null($percent) && !preg_match('/([0-9]{1,2}|100)\\.[0-9]{1,2}/', $percent)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a literal that is among the set of character sequences denoted by the regular expression /([0-9]{1,2}|100)\\.[0-9]{1,2}/', var_export($percent, true)), __LINE__);
        }
        $this->Percent = $percent;
        
        return $this;
    }
}
