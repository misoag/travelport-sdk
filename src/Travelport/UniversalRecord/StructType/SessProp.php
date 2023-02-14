<?php

declare(strict_types=1);

namespace Travelport\UniversalRecord\StructType;

use InvalidArgumentException;
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
    protected string $nm;
    /**
     * The val
     * Meta information extracted from the WSDL
     * - documentation: Value of the Session Property
     * - use: required
     * @var string
     */
    protected string $val;
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
     * @return \Travelport\UniversalRecord\StructType\SessProp
     */
    public function setNm(string $nm): self
    {
        // validation for constraint: string
        if (!is_null($nm) && !is_string($nm)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($nm, true), gettype($nm)), __LINE__);
        }
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
     * @return \Travelport\UniversalRecord\StructType\SessProp
     */
    public function setVal(string $val): self
    {
        // validation for constraint: string
        if (!is_null($val) && !is_string($val)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($val, true), gettype($val)), __LINE__);
        }
        $this->val = $val;
        
        return $this;
    }
}
