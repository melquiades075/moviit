<?php

use Illuminate\Database\Seeder;

use App\Models\Clients;

use App\Models\Technicians;

use App\Models\Visits;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->clients();

        $this->technicians();

        $this->visits();

    }

    public function clients()
    {

        $data = [

            ['name' => 'Alexis Sanchez'],

            ['name' => 'Arturo Vidal'],

            ['name' => 'Salomon Rondon'],

            ['name' => 'Tomas Rincon']

        ];

        foreach ($data as $key) 
        {

            Clients::create($key);

        }


    }

    public function technicians()
    {

        $data = [

            [
                'name'        => 'Zinedine Zidane',

                'available'   => 1
            ],

            [
                'name'        => 'Josep Guardiola',

                'available'   => 1
            ],

            [
                'name'        => 'Jose Mourinho',

                'available'   => 1
            ],

            [
                'name'        => 'Carletto Ancelotti',

                'available'   => 1
            ],


        ];

        foreach ($data as $key) 
        {

            Technicians::create($key);

        }

    }    

    public function visits()
    {

        $data = [

            [
                'clientId'          => '1',

                'technicianId'      => '1',

                'date'              => '2017-01-13',

                'waterUsage'        => '69.65',

                'electricityUsage'  => '40.76',

                'cost'   => '65780'
            ],


            [
                'clientId'          => '2',

                'technicianId'      => '1',

                'date'              => '2017-01-14',

                'waterUsage'        => '69.65',

                'electricityUsage'  => '40.76',

                'cost'   => '150000'
            ],

            [
                'clientId'          => '3',

                'technicianId'      => '1',

                'date'              => '2017-01-15',

                'waterUsage'        => '69.65',

                'electricityUsage'  => '40.76',

                'cost'   => '150000'
            ],


            [
                'clientId'          => '1',

                'technicianId'      => '2',

                'date'              => '2017-05-09',

                'waterUsage'        => '5.65',

                'electricityUsage'  => '100.76',

                'cost'   => '50000'
            ],

            [
                'clientId'          => '2',

                'technicianId'      => '2',

                'date'              => '2017-03-15',

                'waterUsage'        => '60.65',

                'electricityUsage'  => '50.76',

                'cost'   => '250000'
            ],

            [
                'clientId'          => '3',

                'technicianId'      => '2',

                'date'              => '2017-03-18',

                'waterUsage'        => '20.65',

                'electricityUsage'  => '10.76',

                'cost'   => '85670'
            ],

            [
                'clientId'          => '4',

                'technicianId'      => '2',

                'date'              => '2017-02-15',

                'waterUsage'        => '35.65',

                'electricityUsage'  => '132.76',

                'cost'   => '100000'
            ],

            [
                'clientId'          => '4',

                'technicianId'      => '3',

                'date'              => '2017-01-01',

                'waterUsage'        => '2.65',

                'electricityUsage'  => '4.76',

                'cost'   => '15000'
            ],

            [
                'clientId'          => '2',

                'technicianId'      => '3',

                'date'              => '2017-01-02',

                'waterUsage'        => '222.65',

                'electricityUsage'  => '42.76',

                'cost'   => '1500'
            ],

            [
                'clientId'          => '2',

                'technicianId'      => '3',

                'date'              => '2017-01-02',

                'waterUsage'        => '222.65',

                'electricityUsage'  => '42.76',

                'cost'   => '1500'
            ],

            [
                'clientId'          => '1',

                'technicianId'      => '4',

                'date'              => '2017-01-02',

                'waterUsage'        => '222.65',

                'electricityUsage'  => '42.76',

                'cost'   => '1500'
            ],


        ];

        foreach ($data as $key) 
        {

            Visits::create($key);

        }
    }

}
