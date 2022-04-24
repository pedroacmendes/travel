<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * TripsFixture
 */
class TripsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'trip_id' => 1,
                'user_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'url_maps' => 'Lorem ipsum dolor sit amet',
                'date_from' => '2022-04-24',
                'date_to' => '2022-04-24',
                'creation_date' => '2022-04-24 10:27:08',
            ],
        ];
        parent::init();
    }
}
