<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctCountReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Determine how many MCT exceptions exist for the search criteria
 * @subpackage Structs
 */
class MctCountReq extends BaseReq
{
    /**
     * The MctSearch
     * Meta information extracted from the WSDL
     * - ref: MctSearch
     * @var \Travelport\Util\StructType\MctSearch|null
     */
    protected ?\Travelport\Util\StructType\MctSearch $MctSearch = null;
    /**
     * Constructor method for MctCountReq
     * @uses MctCountReq::setMctSearch()
     * @param \Travelport\Util\StructType\MctSearch $mctSearch
     */
    public function __construct(?\Travelport\Util\StructType\MctSearch $mctSearch = null)
    {
        $this
            ->setMctSearch($mctSearch);
    }
    /**
     * Get MctSearch value
     * @return \Travelport\Util\StructType\MctSearch|null
     */
    public function getMctSearch(): ?\Travelport\Util\StructType\MctSearch
    {
        return $this->MctSearch;
    }
    /**
     * Set MctSearch value
     * @param \Travelport\Util\StructType\MctSearch $mctSearch
     * @return \Travelport\Util\StructType\MctCountReq
     */
    public function setMctSearch(?\Travelport\Util\StructType\MctSearch $mctSearch = null): self
    {
        $this->MctSearch = $mctSearch;
        
        return $this;
    }
}
