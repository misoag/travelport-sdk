<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PseudoCityCode StructType
 * Meta information extracted from the WSDL
 * - documentation: The PCC of the host system. | Contains the PCC name which can access or modify the PNR. | 2 to 10 Letter Pseudo City Code
 * - base: xs:string
 * - maxLength: 10
 * - minLength: 2
 * @subpackage Structs
 */
class PseudoCityCode extends AbstractStructBase
{
    /**
     * The _
     * Meta information extracted from the WSDL
     * - documentation: 2 to 10 Letter Pseudo City Code
     * - base: xs:string
     * - maxLength: 10
     * - minLength: 2
     * @var string|null
     */
    protected ?string $_ = null;
    /**
     * Constructor method for PseudoCityCode
     * @uses PseudoCityCode::set_()
     * @param string $_
     */
    public function __construct(?string $_ = null)
    {
        $this
            ->set_($_);
    }
    /**
     * Get _ value
     * @return string|null
     */
    public function get_(): ?string
    {
        return $this->_;
    }
    /**
     * Set _ value
     * @param string $_
     * @return \Travelport\Util\StructType\PseudoCityCode
     */
    public function set_(?string $_ = null): self
    {
        // validation for constraint: string
        if (!is_null($_) && !is_string($_)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($_, true), gettype($_)), __LINE__);
        }
        // validation for constraint: maxLength(10)
        if (!is_null($_) && mb_strlen((string) $_) > 10) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be less than or equal to 10', mb_strlen((string) $_)), __LINE__);
        }
        // validation for constraint: minLength(2)
        if (!is_null($_) && mb_strlen((string) $_) < 2) {
            throw new InvalidArgumentException(sprintf('Invalid length of %s, the number of characters/octets contained by the literal must be greater than or equal to 2', mb_strlen((string) $_)), __LINE__);
        }
        $this->_ = $_;
        
        return $this;
    }
}
