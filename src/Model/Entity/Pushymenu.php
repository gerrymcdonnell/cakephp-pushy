<?php
namespace Gerrymcdonnell\Pushy\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pushymenu Entity.
 *
 * @property int $id
 * @property string $title
 * @property string $controller
 * @property string $action
 * @property string $plugin
 * @property \Cake\I18n\Time $created
 * @property \Gmcd\Pushy\Model\Entity\PushymenusItem[] $pushymenus_items
 */
class Pushymenu extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
