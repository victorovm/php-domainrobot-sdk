<?php
/**
 * SignatureHashAlgorithmConstants
 *
 * PHP version 5
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domainrobot JSON API
 *
 * Domainrobot JSON API for managing: Domains, SSL            Certificates, DNS and            much more.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.12-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Domainrobot\Model;
use \Domainrobot\ObjectSerializer;

/**
 * SignatureHashAlgorithmConstants Class Doc Comment
 *
 * @category Class
 * @package  Domainrobot
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SignatureHashAlgorithmConstants
{
    /**
     * Possible values of this enum
     */
    const SHA1 = 'SHA1';
    const SHA2 = 'SHA2';
    const SHA2_FULL_CHAIN = 'SHA2_FULL_CHAIN';
    const UNKNOWN = 'UNKNOWN';
    const SHA384 = 'SHA384';
    const SHA512 = 'SHA512';
    const SHA256 = 'SHA256';
    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SHA1,
            self::SHA2,
            self::SHA2_FULL_CHAIN,
            self::UNKNOWN,
            self::SHA384,
            self::SHA512,
            self::SHA256,
        ];
    }
}


