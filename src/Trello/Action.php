<?php namespace Trello;

use Trello\Exception\ValidationsFailed;

/**
 * Trello action
 * Reads and manages actions
 *
 * @package    Trello
 * @subpackage Models
 * @copyright  2014 Steven Maguire
 *
 */
class Action extends Model
{
    /**
     * Id
     *
     * @var string $id
     */
    protected $id;

    /**
     * Creating member id
     *
     * @var string $idMemberCreator
     */
    protected $idMemberCreator;

    /**
     * Data
     *
     * @var stdClass $data
     */
    protected $data;

    /**
     * Action type
     *
     * @var string $type
     */
    protected $type;

    /**
     * Action timestamp
     *
     * @var string $date
     */
    protected $date;

    /**
     * Creating member entity
     *
     * @var stdClass $memberCreator
     */
    protected $memberCreator;
}
