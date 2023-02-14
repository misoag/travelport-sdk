<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AirSearchAsynchModifiers StructType
 * Meta information extracted from the WSDL
 * - documentation: Controls and switches for the Air Search request for Asynch Request
 * @subpackage Structs
 */
class AirSearchAsynchModifiers extends AbstractStructBase
{
    /**
     * The InitialAsynchResult
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\InitialAsynchResult|null
     */
    protected ?\Travelport\Util\StructType\InitialAsynchResult $InitialAsynchResult = null;
    /**
     * Constructor method for AirSearchAsynchModifiers
     * @uses AirSearchAsynchModifiers::setInitialAsynchResult()
     * @param \Travelport\Util\StructType\InitialAsynchResult $initialAsynchResult
     */
    public function __construct(?\Travelport\Util\StructType\InitialAsynchResult $initialAsynchResult = null)
    {
        $this
            ->setInitialAsynchResult($initialAsynchResult);
    }
    /**
     * Get InitialAsynchResult value
     * @return \Travelport\Util\StructType\InitialAsynchResult|null
     */
    public function getInitialAsynchResult(): ?\Travelport\Util\StructType\InitialAsynchResult
    {
        return $this->InitialAsynchResult;
    }
    /**
     * Set InitialAsynchResult value
     * @param \Travelport\Util\StructType\InitialAsynchResult $initialAsynchResult
     * @return \Travelport\Util\StructType\AirSearchAsynchModifiers
     */
    public function setInitialAsynchResult(?\Travelport\Util\StructType\InitialAsynchResult $initialAsynchResult = null): self
    {
        $this->InitialAsynchResult = $initialAsynchResult;
        
        return $this;
    }
}
