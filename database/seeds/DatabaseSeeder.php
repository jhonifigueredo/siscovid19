<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CidadesTableACSeeder::class);
        $this->call(CidadesTableALSeeder::class);
        $this->call(CidadesTableAMSeeder::class);
        $this->call(CidadesTableAPSeeder::class);
        $this->call(CidadesTableCESeeder::class);
        $this->call(CidadesTableDFSeeder::class);
        $this->call(CidadesTableESSeeder::class);
        $this->call(CidadesTableGOSeeder::class);
        $this->call(CidadesTableMASeeder::class);
        $this->call(CidadesTableMGSeeder::class);
        $this->call(CidadesTableMSSeeder::class);
        $this->call(CidadesTableMTSeeder::class);
        $this->call(CidadesTablePASeeder::class);
        $this->call(CidadesTablePBSeeder::class);
        $this->call(CidadesTablePESeeder::class);
        $this->call(CidadesTablePISeeder::class);
        $this->call(CidadesTablePRSeeder::class);
        $this->call(CidadesTableRJSeeder::class);
        $this->call(CidadesTableRNSeeder::class);
        $this->call(CidadesTableROSeeder::class);
        $this->call(CidadesTableRRSeeder::class);
        $this->call(CidadesTableRSSeeder::class);
        $this->call(CidadesTableSCSeeder::class);
        $this->call(CidadesTableSESeeder::class);
        $this->call(CidadesTableSPSeeder::class);
        $this->call(CidadesTableTOSeeder::class);
        $this->call(CidadesTableBASeeder::class);
        $this->call(EstadosTableSeeder::class);
    }
}
