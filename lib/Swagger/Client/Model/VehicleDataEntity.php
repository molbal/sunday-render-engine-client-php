<?php
/**
 * VehicleDataEntity
 *
 * PHP version 5
 *
 * @category Class
 * @package  Sunday\ArchiveClient
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Sunday Archive Service
 *
 * Sunday Archive Service
 *
 * OpenAPI spec version: 0.0.1-SNAPSHOT
 * Contact: molnar.balint@mdy.hu
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * VehicleDataEntity Class Doc Comment
 *
 * @category    Class */
/** 
 * @package     Sunday\ArchiveClient
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VehicleDataEntity implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VehicleDataEntity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'build_year' => 'int',
        'current_km' => 'int',
        'cylinder_capacity' => 'int',
        'drive_type' => 'string',
        'full_weight' => 'int',
        'id' => 'int',
        'license_plate' => 'string',
        'make' => 'string',
        'number_of_seats' => 'int',
        'own_weight' => 'int',
        'performance' => 'int',
        'type' => 'string',
        'use_type' => 'string',
        'vehicle_exact_type' => 'string',
        'vehicle_identification_number' => 'string',
        'vehicle_type' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'build_year' => 'buildYear',
        'current_km' => 'currentKm',
        'cylinder_capacity' => 'cylinderCapacity',
        'drive_type' => 'driveType',
        'full_weight' => 'fullWeight',
        'id' => 'id',
        'license_plate' => 'licensePlate',
        'make' => 'make',
        'number_of_seats' => 'numberOfSeats',
        'own_weight' => 'ownWeight',
        'performance' => 'performance',
        'type' => 'type',
        'use_type' => 'useType',
        'vehicle_exact_type' => 'vehicleExactType',
        'vehicle_identification_number' => 'vehicleIdentificationNumber',
        'vehicle_type' => 'vehicleType'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'build_year' => 'setBuildYear',
        'current_km' => 'setCurrentKm',
        'cylinder_capacity' => 'setCylinderCapacity',
        'drive_type' => 'setDriveType',
        'full_weight' => 'setFullWeight',
        'id' => 'setId',
        'license_plate' => 'setLicensePlate',
        'make' => 'setMake',
        'number_of_seats' => 'setNumberOfSeats',
        'own_weight' => 'setOwnWeight',
        'performance' => 'setPerformance',
        'type' => 'setType',
        'use_type' => 'setUseType',
        'vehicle_exact_type' => 'setVehicleExactType',
        'vehicle_identification_number' => 'setVehicleIdentificationNumber',
        'vehicle_type' => 'setVehicleType'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'build_year' => 'getBuildYear',
        'current_km' => 'getCurrentKm',
        'cylinder_capacity' => 'getCylinderCapacity',
        'drive_type' => 'getDriveType',
        'full_weight' => 'getFullWeight',
        'id' => 'getId',
        'license_plate' => 'getLicensePlate',
        'make' => 'getMake',
        'number_of_seats' => 'getNumberOfSeats',
        'own_weight' => 'getOwnWeight',
        'performance' => 'getPerformance',
        'type' => 'getType',
        'use_type' => 'getUseType',
        'vehicle_exact_type' => 'getVehicleExactType',
        'vehicle_identification_number' => 'getVehicleIdentificationNumber',
        'vehicle_type' => 'getVehicleType'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const DRIVE_TYPE_PETROL = 'PETROL';
    const DRIVE_TYPE_DIESEL = 'DIESEL';
    const DRIVE_TYPE_HYBRID = 'HYBRID';
    const DRIVE_TYPE_ELECTRIC = 'ELECTRIC';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getDriveTypeAllowableValues()
    {
        return [
            self::DRIVE_TYPE_PETROL,
            self::DRIVE_TYPE_DIESEL,
            self::DRIVE_TYPE_HYBRID,
            self::DRIVE_TYPE_ELECTRIC,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['build_year'] = isset($data['build_year']) ? $data['build_year'] : null;
        $this->container['current_km'] = isset($data['current_km']) ? $data['current_km'] : null;
        $this->container['cylinder_capacity'] = isset($data['cylinder_capacity']) ? $data['cylinder_capacity'] : null;
        $this->container['drive_type'] = isset($data['drive_type']) ? $data['drive_type'] : null;
        $this->container['full_weight'] = isset($data['full_weight']) ? $data['full_weight'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['license_plate'] = isset($data['license_plate']) ? $data['license_plate'] : null;
        $this->container['make'] = isset($data['make']) ? $data['make'] : null;
        $this->container['number_of_seats'] = isset($data['number_of_seats']) ? $data['number_of_seats'] : null;
        $this->container['own_weight'] = isset($data['own_weight']) ? $data['own_weight'] : null;
        $this->container['performance'] = isset($data['performance']) ? $data['performance'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['use_type'] = isset($data['use_type']) ? $data['use_type'] : null;
        $this->container['vehicle_exact_type'] = isset($data['vehicle_exact_type']) ? $data['vehicle_exact_type'] : null;
        $this->container['vehicle_identification_number'] = isset($data['vehicle_identification_number']) ? $data['vehicle_identification_number'] : null;
        $this->container['vehicle_type'] = isset($data['vehicle_type']) ? $data['vehicle_type'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("PETROL", "DIESEL", "HYBRID", "ELECTRIC");
        if (!in_array($this->container['drive_type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'drive_type', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("PETROL", "DIESEL", "HYBRID", "ELECTRIC");
        if (!in_array($this->container['drive_type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets build_year
     * @return int
     */
    public function getBuildYear()
    {
        return $this->container['build_year'];
    }

    /**
     * Sets build_year
     * @param int $build_year Gyártási év
     * @return $this
     */
    public function setBuildYear($build_year)
    {
        $this->container['build_year'] = $build_year;

        return $this;
    }

    /**
     * Gets current_km
     * @return int
     */
    public function getCurrentKm()
    {
        return $this->container['current_km'];
    }

    /**
     * Sets current_km
     * @param int $current_km Km óra állás
     * @return $this
     */
    public function setCurrentKm($current_km)
    {
        $this->container['current_km'] = $current_km;

        return $this;
    }

    /**
     * Gets cylinder_capacity
     * @return int
     */
    public function getCylinderCapacity()
    {
        return $this->container['cylinder_capacity'];
    }

    /**
     * Sets cylinder_capacity
     * @param int $cylinder_capacity Hengerűrtartalom, cm<sup>3</sup>
     * @return $this
     */
    public function setCylinderCapacity($cylinder_capacity)
    {
        $this->container['cylinder_capacity'] = $cylinder_capacity;

        return $this;
    }

    /**
     * Gets drive_type
     * @return string
     */
    public function getDriveType()
    {
        return $this->container['drive_type'];
    }

    /**
     * Sets drive_type
     * @param string $drive_type Meghajtás típusa: Benzin/Diesel
     * @return $this
     */
    public function setDriveType($drive_type)
    {
        $allowed_values = array('PETROL', 'DIESEL', 'HYBRID', 'ELECTRIC');
        if (!in_array($drive_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'drive_type', must be one of 'PETROL', 'DIESEL', 'HYBRID', 'ELECTRIC'");
        }
        $this->container['drive_type'] = $drive_type;

        return $this;
    }

    /**
     * Gets full_weight
     * @return int
     */
    public function getFullWeight()
    {
        return $this->container['full_weight'];
    }

    /**
     * Sets full_weight
     * @param int $full_weight Teljes tömeg
     * @return $this
     */
    public function setFullWeight($full_weight)
    {
        $this->container['full_weight'] = $full_weight;

        return $this;
    }

    /**
     * Gets id
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param int $id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets license_plate
     * @return string
     */
    public function getLicensePlate()
    {
        return $this->container['license_plate'];
    }

    /**
     * Sets license_plate
     * @param string $license_plate Rendszámtábla. Lehetőleg - nélkül
     * @return $this
     */
    public function setLicensePlate($license_plate)
    {
        $this->container['license_plate'] = $license_plate;

        return $this;
    }

    /**
     * Gets make
     * @return string
     */
    public function getMake()
    {
        return $this->container['make'];
    }

    /**
     * Sets make
     * @param string $make Gyártmánya (pl BMW, Mazda)
     * @return $this
     */
    public function setMake($make)
    {
        $this->container['make'] = $make;

        return $this;
    }

    /**
     * Gets number_of_seats
     * @return int
     */
    public function getNumberOfSeats()
    {
        return $this->container['number_of_seats'];
    }

    /**
     * Sets number_of_seats
     * @param int $number_of_seats Szállítható személyek száma
     * @return $this
     */
    public function setNumberOfSeats($number_of_seats)
    {
        $this->container['number_of_seats'] = $number_of_seats;

        return $this;
    }

    /**
     * Gets own_weight
     * @return int
     */
    public function getOwnWeight()
    {
        return $this->container['own_weight'];
    }

    /**
     * Sets own_weight
     * @param int $own_weight Saját tömeg
     * @return $this
     */
    public function setOwnWeight($own_weight)
    {
        $this->container['own_weight'] = $own_weight;

        return $this;
    }

    /**
     * Gets performance
     * @return int
     */
    public function getPerformance()
    {
        return $this->container['performance'];
    }

    /**
     * Sets performance
     * @param int $performance Teljesítmény, lóerőben megadva
     * @return $this
     */
    public function setPerformance($performance)
    {
        $this->container['performance'] = $performance;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type Autó típusa. Pl.: BMW 1-es széria / Volvo XC90 széria / 206 széria
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets use_type
     * @return string
     */
    public function getUseType()
    {
        return $this->container['use_type'];
    }

    /**
     * Sets use_type
     * @param string $use_type Felhasználás módja. Frontend ellenőrizd kérlek
     * @return $this
     */
    public function setUseType($use_type)
    {
        $this->container['use_type'] = $use_type;

        return $this;
    }

    /**
     * Gets vehicle_exact_type
     * @return string
     */
    public function getVehicleExactType()
    {
        return $this->container['vehicle_exact_type'];
    }

    /**
     * Sets vehicle_exact_type
     * @param string $vehicle_exact_type Autó pontos típusa pl.: 120d, XC90 2.4 D, 206 1.4 Generation
     * @return $this
     */
    public function setVehicleExactType($vehicle_exact_type)
    {
        $this->container['vehicle_exact_type'] = $vehicle_exact_type;

        return $this;
    }

    /**
     * Gets vehicle_identification_number
     * @return string
     */
    public function getVehicleIdentificationNumber()
    {
        return $this->container['vehicle_identification_number'];
    }

    /**
     * Sets vehicle_identification_number
     * @param string $vehicle_identification_number Alvázszám, kötelező (17 számjegy, van benne checksum pl: 1GTCS195828195104) több példa: http://randomvin.com/
     * @return $this
     */
    public function setVehicleIdentificationNumber($vehicle_identification_number)
    {
        $this->container['vehicle_identification_number'] = $vehicle_identification_number;

        return $this;
    }

    /**
     * Gets vehicle_type
     * @return string
     */
    public function getVehicleType()
    {
        return $this->container['vehicle_type'];
    }

    /**
     * Sets vehicle_type
     * @param string $vehicle_type Enumeráció. Lehetséges értékek: Személygépjármű (M1), Tehergépjármű (N1), Motorkerékpár (L3e,L4e,L5e,L7e)
     * @return $this
     */
    public function setVehicleType($vehicle_type)
    {
        $this->container['vehicle_type'] = $vehicle_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Sunday\ArchiveClient\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Sunday\ArchiveClient\ObjectSerializer::sanitizeForSerialization($this));
    }
}


