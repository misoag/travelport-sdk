<?php

declare(strict_types=1);

namespace Travelport\Util\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MctLookupReq StructType
 * Meta information extracted from the WSDL
 * - documentation: Search for MCT time values
 * @subpackage Structs
 */
class MctLookupReq extends BaseReq
{
    /**
     * The MctSearch
     * Meta information extracted from the WSDL
     * - choice: MctSearch | MctQuery
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: MctSearch
     * @var \Travelport\Util\StructType\MctSearch|null
     */
    protected ?\Travelport\Util\StructType\MctSearch $MctSearch = null;
    /**
     * The MctQuery
     * Meta information extracted from the WSDL
     * - choice: MctSearch | MctQuery
     * - choiceMaxOccurs: 1
     * - choiceMinOccurs: 1
     * - minOccurs: 0
     * - ref: MctQuery
     * @var \Travelport\Util\StructType\MctQuery|null
     */
    protected ?\Travelport\Util\StructType\MctQuery $MctQuery = null;
    /**
     * Constructor method for MctLookupReq
     * @uses MctLookupReq::setMctSearch()
     * @uses MctLookupReq::setMctQuery()
     * @param \Travelport\Util\StructType\MctSearch $mctSearch
     * @param \Travelport\Util\StructType\MctQuery $mctQuery
     */
    public function __construct(?\Travelport\Util\StructType\MctSearch $mctSearch = null, ?\Travelport\Util\StructType\MctQuery $mctQuery = null)
    {
        $this
            ->setMctSearch($mctSearch)
            ->setMctQuery($mctQuery);
    }
    /**
     * Get MctSearch value
     * @return \Travelport\Util\StructType\MctSearch|null
     */
    public function getMctSearch(): ?\Travelport\Util\StructType\MctSearch
    {
        return isset($this->MctSearch) ? $this->MctSearch : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMctSearch method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMctSearch method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMctSearchForChoiceConstraintsFromSetMctSearch($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MctQuery',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MctSearch can\'t be set as the property %s is already set. Only one property must be set among these properties: MctSearch, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MctSearch value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctSearch $mctSearch
     * @return \Travelport\Util\StructType\MctLookupReq
     */
    public function setMctSearch(?\Travelport\Util\StructType\MctSearch $mctSearch = null): self
    {
        // validation for constraint: choice(MctSearch, MctQuery)
        if ('' !== ($mctSearchChoiceErrorMessage = self::validateMctSearchForChoiceConstraintsFromSetMctSearch($mctSearch))) {
            throw new InvalidArgumentException($mctSearchChoiceErrorMessage, __LINE__);
        }
        if (is_null($mctSearch) || (is_array($mctSearch) && empty($mctSearch))) {
            unset($this->MctSearch);
        } else {
            $this->MctSearch = $mctSearch;
        }
        
        return $this;
    }
    /**
     * Get MctQuery value
     * @return \Travelport\Util\StructType\MctQuery|null
     */
    public function getMctQuery(): ?\Travelport\Util\StructType\MctQuery
    {
        return isset($this->MctQuery) ? $this->MctQuery : null;
    }
    /**
     * This method is responsible for validating the value passed to the setMctQuery method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMctQuery method
     * This has to validate that the property which is being set is the only one among the given choices
     * @param mixed $value
     * @return string A non-empty message if the values does not match the validation rules
     */
    public function validateMctQueryForChoiceConstraintsFromSetMctQuery($value): string
    {
        $message = '';
        if (is_null($value)) {
            return $message;
        }
        $properties = [
            'MctSearch',
        ];
        try {
            foreach ($properties as $property) {
                if (isset($this->{$property})) {
                    throw new InvalidArgumentException(sprintf('The property MctQuery can\'t be set as the property %s is already set. Only one property must be set among these properties: MctQuery, %s.', $property, implode(', ', $properties)), __LINE__);
                }
            }
        } catch (InvalidArgumentException $e) {
            $message = $e->getMessage();
        }
        
        return $message;
    }
    /**
     * Set MctQuery value
     * This property belongs to a choice that allows only one property to exist. It is
     * therefore removable from the request, consequently if the value assigned to this
     * property is null, the property is removed from this object
     * @throws InvalidArgumentException
     * @param \Travelport\Util\StructType\MctQuery $mctQuery
     * @return \Travelport\Util\StructType\MctLookupReq
     */
    public function setMctQuery(?\Travelport\Util\StructType\MctQuery $mctQuery = null): self
    {
        // validation for constraint: choice(MctSearch, MctQuery)
        if ('' !== ($mctQueryChoiceErrorMessage = self::validateMctQueryForChoiceConstraintsFromSetMctQuery($mctQuery))) {
            throw new InvalidArgumentException($mctQueryChoiceErrorMessage, __LINE__);
        }
        if (is_null($mctQuery) || (is_array($mctQuery) && empty($mctQuery))) {
            unset($this->MctQuery);
        } else {
            $this->MctQuery = $mctQuery;
        }
        
        return $this;
    }
}
