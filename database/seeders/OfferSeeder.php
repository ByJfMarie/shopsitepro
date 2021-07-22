<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offers')->insert([
            'id' => 1,
            'title' => 'Forfait Maintenance',
            'description' => 'Maintenance de vos site et serveur web (Paiement tout les mois, pour sélectionner d\'autre type de paiement contactez-moi)',
            'description_inline' => '["Intervention sur site web", "Intervention sur serveur d\'hébergement web", "Corrections et résolutions de bugs mineur", "Changement de serveur web"]',
            'price' => '50',
            'icone' => 'fa-tools'

        ]);

        DB::table('offers')->insert([
            'id' => 2,
            'title' => 'Développement De Site Vitrine',
            'description' => 'Développement d\'un site vitrine, sans fonctionalitéees back-end.',
            'description_inline' => '["Développement d\'un site vitrine", "Une ou plusieurs pages possible", "Intégration d\'API publique", "Pas de fonctionalitées \"Back-End\"", "Forfait Maitenance (inclus pendant 6 Mois)"]',
            'price' => '3500',
            'icone' => 'fa-desktop'
        ]);

    }
}
