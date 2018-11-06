<?php

use Illuminate\Database\Seeder;
use App\Sector;

class SeedSectorDefault extends Seeder
{

	private $sectors = [
		['id' => 1, 'description' => 'Vendas'],
		['id' => 2, 'description' => 'Administração'],
		['id' => 3, 'description' => 'Suporte'],
		['id' => 4, 'description' => 'Atendimento'],
	]; 
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach ($this->sectors as $sector) {
        	try {
        		Sector::updateOrCreate(array_only($sector, 'id'), $sector);
        		$this->command->info("Setor {$sector['description']} created/updated success");
        	} catch (\Exception $e) {
        		$this->command->error("Setor {$sector['description']} not created/updated");
        	}
        }
    }
}
