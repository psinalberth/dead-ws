<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Http\Model\Credencial;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('credenciais')->delete();

        $credenciais = array(
            ['login' => 'luas', 'email' => 'luas@luas.com', 'password' => Hash::make('luas0101')],
            ['login' => 'hidetoshi', 'email' => 'hidetoshi@domain.com', 'password' => Hash::make('semsenha')]
            );

        foreach ($credenciais as $c) {
            
            Credencial::create($c);
        }

        // $this->call(UserTableSeeder::class);

        Model::reguard();
    }
}
