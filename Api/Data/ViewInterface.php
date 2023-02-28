<?php
namespace Operations\Crud\Api\Data;

interface ViewInterface
{
    /**#@+
     * Constants for keys of data array. Identical to the name of the getter in snake case
     */
    const ID                   = 'id';
    const NAME                 = 'name';
    const EMAIL                = 'email';
    const TELEPHONE            = 'telephone';
    const STATUS               = 'status';

    /**#@-*/
    /**
     * Get Title
     *
     * @return string|null
     */
    public function getName();

    /**
     * Get Content
     *
     * @return string|null
     */
    public function getEmail();

    /**
     * Get Created At
     *
     * @return string|null
     */
    
    public function getTelephone();

    /**
     * Get ID
     *
     * @return int|null
     */

    public function getStatus();

    /**
     * Get ID
     *
     * @return int|null
     */
    public function getId();

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setName($name);

    /**
     * Set Content
     *
     * @param string $content
     * @return $this
     */
    public function setEmail($email);

    /**
     * Set Crated At
     *
     * @param int $createdAt
     * @return $this
     */
    public function setTelephone($telephone);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setStatus($status);

    /**
     * Set ID
     *
     * @param int $id
     * @return $this
     */
    public function setId($id);
}
