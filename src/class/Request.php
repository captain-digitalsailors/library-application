<?php

namespace Com\PaulDevelop\Library\Application;

use Com\PaulDevelop\Library\Common\Base;
use Psr\Http\Message\MessageInterface;
use Psr\Http\Message\StreamInterface;

/**
 * Request
 *
 * @package  Com\PaulDevelop\Library\Application
 * @category Application
 * @author   Rüdiger Scheumann <code@pauldevelop.com>
 * @license  http://opensource.org/licenses/MIT MIT
 *
 * @property RequestInput        $Input
 * @property string              $OriginalPath
 * @property string              $StrippedPath
 * @property ParameterCollection $SystemParameter
 * @property ParameterCollection $PathParameter
 * @property ParameterCollection $GetParameter
 * @property ParameterCollection $PostParameter
 * @property ParameterCollection $PatchParameter
 * @property ParameterCollection $HeaderParameter
 * @property ParameterCollection $FileParameter
 */
//  * @property ConstraintViolationCollection $ConstraintViolationList
class Request extends Base implements MessageInterface
{
    /**
     * @var IRequestInput
     */
    private $input;

    /**
     * @var string
     */
    private $originalPath;

    /**
     * @var string
     */
    private $strippedPath;

    /**
     * @var ParameterCollection
     */
    private $pathParameter;

    /**
     * @var ParameterCollection
     */
    private $systemParameter;

    /**
     * @var ParameterCollection
     */
    private $getParameter;

    /**
     * @var ParameterCollection
     */
    private $postParameter;

    /**
     * @var ParameterCollection
     */
    private $patchParameter;

    /**
     * @var ParameterCollection
     */
    private $headerParameter;

    /**
     * @var ParameterCollection
     */
    private $fileParameter;

//    /**
//     * @var ConstraintViolationCollection
//     */
//    private $constraintViolationList;

    /**
     * @param IRequestInput       $input
     * @param string              $originalPath
     * @param string              $strippedPath
     * @param ParameterCollection $pathParameter
     * @param ParameterCollection $systemParameter
     * @param ParameterCollection $getParameter
     * @param ParameterCollection $postParameter
     * @param ParameterCollection $patchParameter
     * @param ParameterCollection $headerParameter
     * @param ParameterCollection $fileParameter
     */
    // * @param ConstraintViolationCollection $constraintViolationList
    public function __construct(
        IRequestInput $input = null,
        $originalPath = '',
        $strippedPath = '',
        ParameterCollection $pathParameter = null,
        ParameterCollection $systemParameter = null,
        ParameterCollection $getParameter = null,
        ParameterCollection $postParameter = null,
        ParameterCollection $patchParameter = null,
        ParameterCollection $headerParameter = null,
        ParameterCollection $fileParameter = null
    ) {
//        ConstraintViolationCollection $constraintViolationList = null
        $this->input = $input;
        $this->originalPath = $originalPath;
        $this->strippedPath = $strippedPath;
        $this->pathParameter = $pathParameter;
        $this->systemParameter = $systemParameter;
        $this->getParameter = $getParameter;
        $this->postParameter = $postParameter;
        $this->patchParameter = $patchParameter;
        $this->headerParameter = $headerParameter;
        $this->fileParameter = $fileParameter;
//        $this->constraintViolationList = $constraintViolationList;
    }

    /**
     * @return IRequestInput
     */
    protected function getInput()
    {
        return $this->input;
    }

    /**
     * @return string
     */
    protected function getOriginalPath()
    {
        return $this->originalPath;
    }

    /**
     * @return string
     */
    protected function getStrippedPath()
    {
        return $this->strippedPath;
    }

    /**
     * @return ParameterCollection
     */
    protected function getPathParameter()
    {
        return $this->pathParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getSystemParameter()
    {
        return $this->systemParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getGetParameter()
    {
        return $this->getParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getPostParameter()
    {
        return $this->postParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getPatchParameter()
    {
        return $this->patchParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getHeaderParameter()
    {
        return $this->headerParameter;
    }

    /**
     * @return ParameterCollection
     */
    protected function getFileParameter()
    {
        return $this->fileParameter;
    }

//    /**
//     * @return ConstraintViolationCollection
//     */
//    protected function getConstraintViolationList()
//    {
//        return $this->constraintViolationList;
//    }

    //region MessageInterface
    /**
     * Retrieves the HTTP protocol version as a string.
     *
     * The string MUST contain only the HTTP version number (e.g., "1.1", "1.0").
     *
     * @return string HTTP protocol version.
     */
    public function getProtocolVersion()
    {
        // TODO: Implement getProtocolVersion() method.
    }

    /**
     * Return an instance with the specified HTTP protocol version.
     *
     * The version string MUST contain only the HTTP version number (e.g.,
     * "1.1", "1.0").
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new protocol version.
     *
     * @param string $version HTTP protocol version
     *
     * @return static
     */
    public function withProtocolVersion($version)
    {
        // TODO: Implement withProtocolVersion() method.
    }

    /**
     * Retrieves all message header values.
     *
     * The keys represent the header name as it will be sent over the wire, and
     * each value is an array of strings associated with the header.
     *
     *     // Represent the headers as a string
     *     foreach ($message->getHeaders() as $name => $values) {
     *         echo $name . ": " . implode(", ", $values);
     *     }
     *
     *     // Emit headers iteratively:
     *     foreach ($message->getHeaders() as $name => $values) {
     *         foreach ($values as $value) {
     *             header(sprintf('%s: %s', $name, $value), false);
     *         }
     *     }
     *
     * While header names are not case-sensitive, getHeaders() will preserve the
     * exact case in which headers were originally specified.
     *
     * @return string[][] Returns an associative array of the message's headers. Each
     *     key MUST be a header name, and each value MUST be an array of strings
     *     for that header.
     */
    public function getHeaders()
    {
        // TODO: Implement getHeaders() method.
    }

    /**
     * Checks if a header exists by the given case-insensitive name.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return bool Returns true if any header names match the given header
     *     name using a case-insensitive string comparison. Returns false if
     *     no matching header name is found in the message.
     */
    public function hasHeader($name)
    {
        // TODO: Implement hasHeader() method.
    }

    /**
     * Retrieves a message header value by the given case-insensitive name.
     *
     * This method returns an array of all the header values of the given
     * case-insensitive header name.
     *
     * If the header does not appear in the message, this method MUST return an
     * empty array.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return string[] An array of string values as provided for the given
     *    header. If the header does not appear in the message, this method MUST
     *    return an empty array.
     */
    public function getHeader($name)
    {
        // TODO: Implement getHeader() method.
    }

    /**
     * Retrieves a comma-separated string of the values for a single header.
     *
     * This method returns all of the header values of the given
     * case-insensitive header name as a string concatenated together using
     * a comma.
     *
     * NOTE: Not all header values may be appropriately represented using
     * comma concatenation. For such headers, use getHeader() instead
     * and supply your own delimiter when concatenating.
     *
     * If the header does not appear in the message, this method MUST return
     * an empty string.
     *
     * @param string $name Case-insensitive header field name.
     *
     * @return string A string of values as provided for the given header
     *    concatenated together using a comma. If the header does not appear in
     *    the message, this method MUST return an empty string.
     */
    public function getHeaderLine($name)
    {
        // TODO: Implement getHeaderLine() method.
    }

    /**
     * Return an instance with the provided value replacing the specified header.
     *
     * While header names are case-insensitive, the casing of the header will
     * be preserved by this function, and returned from getHeaders().
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new and/or updated header and value.
     *
     * @param string          $name  Case-insensitive header field name.
     * @param string|string[] $value Header value(s).
     *
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withHeader($name, $value)
    {
        // TODO: Implement withHeader() method.
    }

    /**
     * Return an instance with the specified header appended with the given value.
     *
     * Existing values for the specified header will be maintained. The new
     * value(s) will be appended to the existing list. If the header did not
     * exist previously, it will be added.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that has the
     * new header and/or value.
     *
     * @param string          $name  Case-insensitive header field name to add.
     * @param string|string[] $value Header value(s).
     *
     * @return static
     * @throws \InvalidArgumentException for invalid header names or values.
     */
    public function withAddedHeader($name, $value)
    {
        // TODO: Implement withAddedHeader() method.
    }

    /**
     * Return an instance without the specified header.
     *
     * Header resolution MUST be done without case-sensitivity.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return an instance that removes
     * the named header.
     *
     * @param string $name Case-insensitive header field name to remove.
     *
     * @return static
     */
    public function withoutHeader($name)
    {
        // TODO: Implement withoutHeader() method.
    }

    /**
     * Gets the body of the message.
     *
     * @return StreamInterface Returns the body as a stream.
     */
    public function getBody()
    {
        // TODO: Implement getBody() method.
    }

    /**
     * Return an instance with the specified message body.
     *
     * The body MUST be a StreamInterface object.
     *
     * This method MUST be implemented in such a way as to retain the
     * immutability of the message, and MUST return a new instance that has the
     * new body stream.
     *
     * @param StreamInterface $body Body.
     *
     * @return static
     * @throws \InvalidArgumentException When the body is not valid.
     */
    public function withBody(StreamInterface $body)
    {
        // TODO: Implement withBody() method.
    }
    //endregion
}
