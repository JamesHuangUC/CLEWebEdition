<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Course Entity
 *
 * @property int $id
 * @property string $name
 * @property int $units
 * @property bool $summer
 * @property bool $fall
 * @property bool $winter
 * @property bool $spring
 *
 * @property \App\Model\Entity\CourseConcurrent[] $course_concurrents
 * @property \App\Model\Entity\CoursePrerequisite[] $course_prerequisites
 */
class Course extends Entity
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
        'id' => false
    ];
}
