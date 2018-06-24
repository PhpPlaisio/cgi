<?php

namespace SetBased\Abc\Cgi;

/**
 * Interface for defining classes for obfuscating and un-obfuscating database IDs.
 */
interface Cgi
{
  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory boolean CGI variable.
   *
   * @param string    $name    The name of the CGI variable.
   * @param bool|null $default The default value if the CGI variable is not set.
   *
   * @return bool
   *
   * @api
   * @since 1.0.0
   */
  public function getManBool(string $name, ?bool $default = null): bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the float value of a mandatory CGI variable.
   *
   * @param string     $name    The name of the CGI variable.
   * @param float|null $default The value to be used when the CGI variable is not set.
   *
   * @return float
   *
   * @api
   * @since 1.0.0
   */
  public function getManFloat(string $name, ?float $default = null): float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the integer value of a mandatory obfuscated database ID.
   *
   * @param string   $name    The name of the CGI variable.
   * @param string   $label   An alias for the column holding database ID and must corresponds with label that was used
   *                          to obfuscate the database ID.
   * @param int|null $default The value to be used when the CGI variable is not set.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function getManId(string $name, string $label, ?int $default = null): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the integer value of a mandatory CGI variable.
   *
   * @param string   $name    The name of the CGI variable.
   * @param int|null $default The value to be used when the CGI variable is not set.
   *
   * @return int
   *
   * @api
   * @since 1.0.0
   */
  public function getManInt(string $name, ?int $default = null): int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory CGI variable.
   *
   * For retrieving a CGI variable with a relative URI use {@link getManCgiUrl}.
   *
   * @param string      $name    The name of the CGI variable.
   * @param string|null $default The value to be used when the CGI variable is not set.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getManString(string $name, ?string $default = null): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of a mandatory CGI variable holding an URL.
   *
   * This method will protect against unvalidated redirects, see
   * <https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet>.
   *
   * @param string      $name          The name of the CGI variable.
   * @param string|null $default       The URL to be used when the CGI variable is not set.
   * @param bool        $forceRelative If set the URL must be a relative URL. If the URL is not a relative URL an
   *                                   exception will be thrown.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function getManUrl(string $name, ?string $default = null, bool $forceRelative = true): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional boolean CGI variable.
   *
   * @param string    $name    The name of the CGI variable.
   * @param bool|null $default The default value if the CGI variable is not set.
   *
   * @return bool|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptBool(string $name, ?bool $default = null): ?bool;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the float value of an optional CGI variable holding.
   *
   * @param string     $name    The name of the CGI variable.
   * @param float|null $default The value to be used when the CGI variable is not set.
   *
   * @return float|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptFloat(string $name, ?float $default = null): ?float;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional obfuscated database ID.
   *
   * @param string   $name    The name of the CGI variable.
   * @param string   $label   An alias for the column holding database ID and must corresponds with label that was used
   *                          to obfuscate the database ID.
   * @param int|null $default The value to be used when the CGI variable is not set.
   *
   * @return int|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptId(string $name, string $label, ?int $default = null): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the integer value of an optional CGI variable holding.
   *
   * @param string   $name    The name of the CGI variable.
   * @param int|null $default The value to be used when the CGI variable is not set.
   *
   * @return int|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptInt(string $name, ?int $default = null): ?int;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional CGI variable.
   *
   * For retrieving a CGI variable with a relative URI use {@link getOptCgiUrl}.
   *
   * @param string      $name    The name of the CGI variable.
   * @param string|null $default The value to be used when the CGI variable is not set.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptString(string $name, ?string $default = null): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the value of an optional CGI variable holding an URL.
   *
   * This method will protect against unvalidated redirects, see
   * <https://www.owasp.org/index.php/Unvalidated_Redirects_and_Forwards_Cheat_Sheet>.
   *
   * @param string      $name          The name of the CGI variable.
   * @param string|null $default       The URL to be used when the CGI variable is not set.
   * @param bool        $forceRelative If set the URL must be a relative URL. If the URL is not a relative URL an
   *                                   exception will be thrown.
   *
   * @return string|null
   *
   * @api
   * @since 1.0.0
   */
  public function getOptUrl(string $name, ?string $default = null, bool $forceRelative = true): ?string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string with holding a boolean CGI variable that can be used as a part of a URL.
   *
   * @param string    $name      The name of the boolean CGI variable.
   * @param bool|null $value     The value of the CGI variable.
   * @param bool      $mandatory If true a false value will not result in an empty string.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putBool(string $name, ?bool $value, bool $mandatory = false): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string with holding a floating point CGI variable that can be used as a part of a URL.
   *
   * @param string     $name  The name of the boolean CGI variable.
   * @param float|null $value The value of the CGI variable.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putFloat(string $name, ?float $value): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string with holding a CGI variable that can be used as a part of a URL.
   *
   * @param string      $name  The name of the CGI variable.
   * @param int|null    $value The value of the CGI variable.
   * @param string|null $label The alias for the column holding database ID.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putId(string $name, ?int $value, string $label): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string with holding an integer CGI variable that can be used as a part of a URL.
   *
   * @param string   $name  The name of the CGI variable.
   * @param int|null $value The value of the CGI variable.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putInt(string $name, ?int $value): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns the common leader for all URLs.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putLeader(): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns (virtual) filename based on the slug of a string that can be safely used in an URL.
   *
   * @param string $string    The string.
   * @param string $extension The extension of the (virtual) filename.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putSlugName(?string $string, string $extension = '.html'): string;

  //--------------------------------------------------------------------------------------------------------------------
  /**
   * Returns a string with holding a CGI variable that can be used as a part of a URL.
   *
   * @param string      $name  The name of the CGI variable.
   * @param string|null $value The value of the CGI variable.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putString(string $name, ?string $value): string;

  //--------------------------------------------------------------------------------------------------------------------

  /**
   * Returns a string with holding a CGI variable with an URL as value that can be used as a part of a URL.
   *
   * Note: This method is an alias of {@link putCgiVar}.
   *
   * @param string      $name  The name of the CGI variable.
   * @param string|null $value The value of the CGI variable.
   *
   * @return string
   *
   * @api
   * @since 1.0.0
   */
  public function putUrl(string $name, ?string $value): string;

  //--------------------------------------------------------------------------------------------------------------------
}

//----------------------------------------------------------------------------------------------------------------------
