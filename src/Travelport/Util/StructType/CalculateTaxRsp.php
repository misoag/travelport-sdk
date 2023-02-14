<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CalculateTaxRsp StructType
 * Meta information extracted from the WSDL
 * - documentation: Response containg calculated total of base prices and taxes
 * @subpackage Structs
 */
class CalculateTaxRsp extends BaseRsp
{
    /**
     * The CalculateTaxResult
     * Meta information extracted from the WSDL
     * - ref: CalculateTaxResult
     * @var \Travelport\Util\StructType\CalculateTaxResult|null
     */
    protected ?\Travelport\Util\StructType\CalculateTaxResult $CalculateTaxResult = null;
    /**
     * Constructor method for CalculateTaxRsp
     * @uses CalculateTaxRsp::setCalculateTaxResult()
     * @param \Travelport\Util\StructType\CalculateTaxResult $calculateTaxResult
     */
    public function __construct(?\Travelport\Util\StructType\CalculateTaxResult $calculateTaxResult = null)
    {
        $this
            ->setCalculateTaxResult($calculateTaxResult);
    }
    /**
     * Get CalculateTaxResult value
     * @return \Travelport\Util\StructType\CalculateTaxResult|null
     */
    public function getCalculateTaxResult(): ?\Travelport\Util\StructType\CalculateTaxResult
    {
        return $this->CalculateTaxResult;
    }
    /**
     * Set CalculateTaxResult value
     * @param \Travelport\Util\StructType\CalculateTaxResult $calculateTaxResult
     * @return \Travelport\Util\StructType\CalculateTaxRsp
     */
    public function setCalculateTaxResult(?\Travelport\Util\StructType\CalculateTaxResult $calculateTaxResult = null): self
    {
        $this->CalculateTaxResult = $calculateTaxResult;
        
        return $this;
    }
}
