<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CreateAirlineFeeMcoRsp StructType
 * @subpackage Structs
 */
class CreateAirlineFeeMcoRsp extends BaseRsp
{
    /**
     * The MCO
     * Meta information extracted from the WSDL
     * - ref: common:MCO
     * @var \Travelport\Util\StructType\MCO|null
     */
    protected ?\Travelport\Util\StructType\MCO $MCO = null;
    /**
     * Constructor method for CreateAirlineFeeMcoRsp
     * @uses CreateAirlineFeeMcoRsp::setMCO()
     * @param \Travelport\Util\StructType\MCO $mCO
     */
    public function __construct(?\Travelport\Util\StructType\MCO $mCO = null)
    {
        $this
            ->setMCO($mCO);
    }
    /**
     * Get MCO value
     * @return \Travelport\Util\StructType\MCO|null
     */
    public function getMCO(): ?\Travelport\Util\StructType\MCO
    {
        return $this->MCO;
    }
    /**
     * Set MCO value
     * @param \Travelport\Util\StructType\MCO $mCO
     * @return \Travelport\Util\StructType\CreateAirlineFeeMcoRsp
     */
    public function setMCO(?\Travelport\Util\StructType\MCO $mCO = null): self
    {
        $this->MCO = $mCO;
        
        return $this;
    }
}
