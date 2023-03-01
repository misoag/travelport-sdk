<?php

declare(strict_types=1);

namespace Travelport\Air\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SessProp StructType
 * Meta information extracted from the WSDL
 * - documentation: A session property combination
 * @subpackage Structs
 */
class SessProp extends AbstractStructBase
{
    /**
     * The nm
     * Meta information extracted from the WSDL
     * - documentation: Name of the Session Property
     * - use: required
     * @var string
     */
    public string $nm;
    /**
     * The val
     * Meta information extracted from the WSDL
     * - documentation: Value of the Session Property
     * - use: required
     * @var string
     */
    public string $val;
    /**
     * Constructor method for SessProp
     * @uses SessProp::setNm()
     * @uses SessProp::setVal()
     * @param string $nm
     * @param string $val
     */
    public function __construct(string $nm, string $val)
    {
        $this
            ->setNm($nm)
            ->setVal($val);
    }
    /**
     * Get nm value
     * @return string
     */
    public function getNm(): string
    {
        return $this->nm;
    }
    /**
     * Set nm value
     * @param string $nm
     * @return \Travelport\Air\StructType\SessProp
     */
    public function setNm(string $nm): self
    {
        $this->nm = $nm;
        
        return $this;
    }
    /**
     * Get val value
     * @return string
     */
    public function getVal(): string
    {
        return $this->val;
    }
    /**
     * Set val value
     * @param string $val
     * @return \Travelport\Air\StructType\SessProp
     */
    public function setVal(string $val): self
    {
        $this->val = $val;
        
        return $this;
    }
}
