<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Profile;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $profile = new Profile();
        
        $profile->user_id = '1';
        $profile->image = "http://localhost:8000/img/talent-tech-logo.jpg";
        $profile->CIF = 'F12345678';
        $profile->legal_structure = 'Comunidad de bienes';
        $profile->phone_number = '346346346';
        $profile->email_contact = 'techtalent@mail.com';
        $profile->sector = 'Tecnología';
        $profile->activity = null;
        $profile->offer = null;
        $profile->values = null;
        $profile->business_size = 'pequeña empresa';
        $profile->market = 'Provincial';
        $profile->clients = 'B2B y B2C';
        $profile->sales_channels = 'online';
        $profile->description = 'Somos una fundación que apoya gente para entrar en el mundo tech';
        $profile->social_networks_instagram = 'tech_talent';
        $profile->social_networks_linkedin = 'tech_talent';
        $profile->social_networks_x = null;
        $profile->social_networks_facebook = null;
        $profile->social_networks_tiktok = null;
        $profile->social_networks_spotify = null;
        $profile->social_networks_youtube = null;
        $profile->social_networks_pinterest = null;


        $profile->save();

        $profile1 = new Profile();

        $profile1->user_id = '6';
        $profile1->image = "http://localhost:8000/img/fruut-bars-logo.jpg";
        $profile1->CIF = 'A12345678';
        $profile1->legal_structure = 'Sociedad Limitada (S. L.)';
        $profile1->phone_number = '12345688';
        $profile1->email_contact = 'holafruut@mail.com';
        $profile1->sector = 'Alimentación y bebidas';
        $profile1->activity = null;
        $profile1->offer = null;
        $profile1->values = null;
        $profile1->business_size = 'mediana empresa';
        $profile1->market = null;
        $profile1->clients = 'B2B';
        $profile1->sales_channels = 'offline';
        $profile1->description = 'Alimentación natural y vegana';
        $profile1->social_networks_instagram = 'ufood';
        $profile1->social_networks_linkedin = null;
        $profile1->social_networks_x = 'ufood';
        $profile1->social_networks_facebook = 'ufood';
        $profile1->social_networks_tiktok = 'ufood';
        $profile1->social_networks_spotify = null;
        $profile1->social_networks_youtube = null;
        $profile1->social_networks_pinterest = null;


        $profile1->save();

        $profile2 = new Profile();
        
        $profile2->user_id = '2';
        $profile2->image = "http://localhost:8000/img/natur-logo.jpg";
        $profile2->CIF = 'G12345678';
        $profile2->legal_structure = 'Sociedad Limitada Laboral (S. L. L.)';
        $profile2->phone_number = '456789789';
        $profile2->email_contact = 'natur@mail.com';
        $profile2->sector = 'Belleza';
        $profile2->activity = null;
        $profile2->offer = null;
        $profile2->values = null;
        $profile2->business_size = 'gran empresa';
        $profile2->market = null;
        $profile2->clients = 'B2C';
        $profile2->sales_channels = 'online';
        $profile2->description = null;
        $profile2->social_networks_instagram = 'natur';
        $profile2->social_networks_linkedin = null;
        $profile2->social_networks_x = null;
        $profile2->social_networks_facebook = 'natur';
        $profile2->social_networks_tiktok = 'natur';
        $profile2->social_networks_spotify = null;
        $profile2->social_networks_youtube = null;
        $profile2->social_networks_pinterest = null;


        $profile2->save();

        $profile3 = new Profile();
        
        $profile3->user_id = '3';
        $profile3->image = "http://localhost:8000/img/plp-food-logo.jpg";
        $profile3->CIF = 'T12345678';
        $profile3->legal_structure = 'Sociedad Limitada Laboral (S. L. L.)';
        $profile3->phone_number = '457845744';
        $profile3->email_contact = 'plpfood@mail.com';
        $profile3->sector = 'Horeca';
        $profile3->activity = null;
        $profile3->offer = null;
        $profile3->values = null;
        $profile3->business_size = 'gran empresa';
        $profile3->market = null;
        $profile3->clients = 'B2B';
        $profile3->sales_channels = 'offline';
        $profile3->description = null;
        $profile3->social_networks_instagram = 'vegfest';
        $profile3->social_networks_linkedin = null;
        $profile3->social_networks_x = 'vegfest';
        $profile3->social_networks_facebook = null;
        $profile3->social_networks_tiktok = null;
        $profile3->social_networks_spotify = null;
        $profile3->social_networks_youtube = null;
        $profile3->social_networks_pinterest = null;


        $profile3->save();

        $profile4 = new Profile();
        
        $profile->user_id = '4';
        $profile4->image = "http://localhost:8000/img/lipstick-logo.jpg";
        $profile4->CIF = 'F12345678';
        $profile4->legal_structure = 'Sociedad Anónima Laboral (SAL)';
        $profile4->phone_number = '85857485';
        $profile4->email_contact = 'pintarte@mail.com';
        $profile4->sector = 'Belleza';
        $profile4->activity = null;
        $profile4->offer = null;
        $profile4->values = null;
        $profile4->business_size = 'mediana empresa';
        $profile4->market = null;
        $profile4->clients = 'B2C';
        $profile4->sales_channels ='offline';        
        $profile4->description = 'null';
        $profile4->social_networks_instagram = 'pintarte';
        $profile4->social_networks_linkedin = null;
        $profile4->social_networks_x = 'pintarte';
        $profile4->social_networks_facebook = 'pintarte';
        $profile4->social_networks_tiktok = 'pintarte';
        $profile4->social_networks_spotify = 'pintarte';
        $profile4->social_networks_youtube = 'pintarte';
        $profile4->social_networks_pinterest = null;


        $profile4->save();

        $profile5 = new Profile();
        
        $profile5->user_id = '5';
        $profile5->image = "http://localhost:8000/img/knit-logo.jpg";
        $profile5->CIF = 'L12345678';
        $profile5->legal_structure = 'Comunidad de bienes';
        $profile5->phone_number = '252545555';
        $profile5->email_contact = 'lupe@mail.com';
        $profile5->sector = 'Sin ánimo de lucro';
        $profile5->activity = null;
        $profile5->offer = null;
        $profile5->values = 'Tejer es para todos';
        $profile5->business_size = 'micro empresa';
        $profile5->market = null;
        $profile5->clients = 'B2C';
        $profile5->sales_channels = 'offline';
        $profile5->description = 'Un grupo de tejedoras con una pasión para compartir su afición';
        $profile5->social_networks_instagram = 'lasamigasdelpunto';
        $profile5->social_networks_linkedin = null;
        $profile5->social_networks_x = null;
        $profile5->social_networks_facebook = 'lasamigasdelpunto';
        $profile5->social_networks_tiktok = null;
        $profile5->social_networks_spotify = null;
        $profile5->social_networks_youtube = 'lasamigasdelpunto';
        $profile5->social_networks_pinterest = 'lasamigasdelpunto';


        $profile5->save();

        $profile6 = new Profile();
        
        $profile6->user_id = '7';
        $profile6->image = "http://localhost:8000/img/zzapas-logo.jpg";
        $profile6->CIF = 'C12345678';
        $profile6->legal_structure = 'Sociedad Limitada (S. L.)';
        $profile6->phone_number = '748475748';
        $profile6->email_contact = 'zzapas@mail.com';
        $profile6->sector = 'Moda';
        $profile6->activity = null;
        $profile6->offer = null;
        $profile6->values = null;
        $profile6->business_size = 'gran empresa';
        $profile6->market = 'Internacional';
        $profile6->clients = 'B2C';
        $profile6->sales_channels = 'online';
        $profile6->description = 'Zapatos para todas las personas haciendo todas las cosas';
        $profile6->social_networks_instagram = 'zzapas';
        $profile6->social_networks_linkedin = 'zzapas';
        $profile6->social_networks_x = 'zzapas';
        $profile6->social_networks_facebook = 'zzapas';
        $profile6->social_networks_tiktok = 'zzapas';
        $profile6->social_networks_spotify = 'zzapas';
        $profile6->social_networks_youtube = 'zzapas';
        $profile6->social_networks_pinterest = 'zzapas';


        $profile6->save();

        $profile7 = new Profile();
        
        $profile->user_id = '8';
        $profile7->image = "http://localhost:8000/img/cake-logo.jpg";
        $profile7->CIF = 'N12345678';
        $profile7->legal_structure = 'Sociedad Anónima (S. A.)';
        $profile7->phone_number = '3455888745';
        $profile7->email_contact = 'cakery@mail.com';
        $profile7->sector = 'Alimentación y bebidas';
        $profile7->activity = null;
        $profile7->offer = null;
        $profile7->values = 'Pasteles de lujo para una experiencia inolvidable';
        $profile7->business_size = 'pequeña empresa';
        $profile7->market = 'Autonómico';
        $profile7->clients = 'B2C';
        $profile7->sales_channels = 'offline';
        $profile7->description = 'Pasteles de lujo';
        $profile7->social_networks_instagram = 'cakery';
        $profile7->social_networks_linkedin = null;
        $profile7->social_networks_x = 'cakery';
        $profile7->social_networks_facebook = 'cakery';
        $profile7->social_networks_tiktok = 'cakery';
        $profile7->social_networks_spotify = 'cakery';
        $profile7->social_networks_youtube = 'cakery';
        $profile7->social_networks_pinterest = null;


        $profile7->save();

   
    }
}
