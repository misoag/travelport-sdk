<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for typeFlexibleTimeSpec StructType
 * Meta information extracted from the WSDL
 * - documentation: A type which can be used for flexible date/time specification -extends the generic type typeTimeSpec to provide extra options for search.
 * @subpackage Structs
 */
class TypeFlexibleTimeSpec extends TypeTimeSpec
{
    /**
     * The SearchExtraDays
     * Meta information extracted from the WSDL
     * - minOccurs: 0
     * @var \Travelport\Util\StructType\SearchExtraDays|null
     */
    protected ?\Travelport\Util\StructType\SearchExtraDays $SearchExtraDays = null;
    /**
     * Constructor method for typeFlexibleTimeSpec
     * @uses TypeFlexibleTimeSpec::setSearchExtraDays()
     * @param \Travelport\Util\StructType\SearchExtraDays $searchExtraDays
     */
    public function __construct(?\Travelport\Util\StructType\SearchExtraDays $searchExtraDays = null)
    {
        $this
            ->setSearchExtraDays($searchExtraDays);
    }
    /**
     * Get SearchExtraDays value
     * @return \Travelport\Util\StructType\SearchExtraDays|null
     */
    public function getSearchExtraDays(): ?\Travelport\Util\StructType\SearchExtraDays
    {
        return $this->SearchExtraDays;
    }
    /**
     * Set SearchExtraDays value
     * @param \Travelport\Util\StructType\SearchExtraDays $searchExtraDays
     * @return \Travelport\Util\StructType\TypeFlexibleTimeSpec
     */
    public function setSearchExtraDays(?\Travelport\Util\StructType\SearchExtraDays $searchExtraDays = null): self
    {
        $this->SearchExtraDays = $searchExtraDays;
        
        return $this;
    }
}
