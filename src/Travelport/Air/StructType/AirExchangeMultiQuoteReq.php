<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirExchangeMultiQuoteReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Request multiple quotes for the exchange of an itinerary. 1P transactions only
 * @subpackage Structs
 */
class AirExchangeMultiQuoteReq extends BaseAirExchangeMultiQuoteReq
{
    /**
     * The Type
     * Meta information extracted from the WSDL
     * - documentation: Type choices are "Detail" or "Summary" Default will be Summary
     * - default: Summary
     * - use: optional
     * @var string|null
     */
    public ?string $Type = null;
    /**
     * Constructor method for AirExchangeMultiQuoteReq
     * @uses AirExchangeMultiQuoteReq::setType()
     * @param string $type
     */
    public function __construct(?string $type = 'Summary')
    {
        $this
            ->setType($type);
    }
    /**
     * Get Type value
     * @return string|null
     */
    public function getType(): ?string
    {
        return $this->Type;
    }
    /**
     * Set Type value
     * @param string $type
     * @return \Travelport\Air\StructType\AirExchangeMultiQuoteReq
     */
    public function setType(?string $type = 'Summary'): self
    {
        $this->Type = $type;
        
        return $this;
    }
}
