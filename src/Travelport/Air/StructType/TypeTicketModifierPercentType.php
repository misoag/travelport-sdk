<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

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
    public string $Percent;
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
     * @return \Travelport\Air\StructType\TypeTicketModifierPercentType
     */
    public function setPercent(string $percent): self
    {
        $this->Percent = $percent;
        
        return $this;
    }
}
