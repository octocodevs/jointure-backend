<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proposal = new Proposal();

        $proposal->user_id = '5';
        // $proposal->category_id = ;
        $proposal->title = 'Lanzamiento de NatureSol';
        $proposal->description = 'NatureBliss, una marca de productos naturales para el cuidado de la piel, lanzará NatureSol, una línea de productos de protección solar y cuidado de la piel diseñada específicamente para aventuras al aire libre';
        $proposal->collab_start_date = '2025-03-01';
        $proposal->collab_end_date = '2025-09-01';
        $proposal->collab_type = 'Co-branding';
        $proposal->duration = 'Puntual';
        $proposal->compensation = null;
        $proposal->compensation_amount = null;
        $proposal->cost = null;
        $proposal->objectives = 'Mejor conocimiento de la marca y sus valores';
        $proposal->ideal_collaborators = 'Marcas asociadas con el aire libre, vacaciones en la naturaleza, equipaje de aventura';
        $proposal->proposal = 'Queremos lanzar el producto NatureSol y ofrecer consejos sobre cómo usarlo mejor para aprovechar al máximo el aire libre con protección solar responsable y sostenible';
        $proposal->responsibility = 'NatureBliss podría colaborar en la promoción de la línea de productos conjuntos a través de campañas de marketing compartidas, actividades al aire libre, eventos de lanzamiento conjunto y colaboraciones con influencers que comparten el interés por la naturaleza y el estilo de vida activo';
        $proposal->planning = null;
        $proposal->operations_and_sales = null;
        $proposal->marketing = null;
        $proposal->economic_agreements = null;
        $proposal->terms_and_conditions = null;
        $proposal->observations = null;
        $proposal->public_or_private = 'Público';
        $proposal->collab_limit = 'no';
        $proposal->limit = null;
        $proposal->ad_start_date = 2024-04-01;
        $proposal->ad_end_date = 2024-07-01;
        $proposal->send_notification = 'sí';

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = '20';
        // $proposal->category_id = ;
        $proposal->title = 'VegFest Barcelona: Celebrando el Día Internacional Vegano';
        $proposal->description = 'VegFest es un evento emocionante que queremos lanzar en Barcelona para celebra el Día Internacional Vegano con una amplia variedad de deliciosas opciones de comida vegana, talleres educativos y actividades divertidas';
        $proposal->collab_start_date = 2024-11-01;
        $proposal->collab_end_date = 2024-11-03;
        $proposal->collab_type = 'Co-Event';
        $proposal->duration = 'Puntual';
        $proposal->compensation = null;
        $proposal->compensation_amount = null;
        $proposal->cost = null;
        $proposal->objectives = 'Celebrar y promover el Día Internacional Vegano. Destacar la deliciosa y variada comida vegana disponible. Educar al público sobre los beneficios de una dieta basada en plantas para la salud, los animales y el medio ambiente. Fomentar un estilo de vida vegano saludable y sostenible. Apoyar a las empresas locales y promover la economía vegana.';
        $proposal->ideal_collaborators = 'Restaurantes veganos locales, chefs, bloggers y influencers de comida vegana, grupos de activismo vegano, marcas de productos veganos no alimenticios';
        $proposal->proposal = 'VegFest puede ofrecer una experiencia completa y enriquecedora para los asistentes, al tiempo que promueve un mensaje positivo sobre el veganismo y su impacto en la salud, los animales y el medio ambiente';
        $proposal->responsibility = 'Responsabilidades de VegFest: Planificación, logística, promoción. Expectativas: Participación, cooperación, profesionalismo, promoción';
        $proposal->planning = null;
        $proposal->operations_and_sales = null;
        $proposal->marketing = 'Promociones en las redes, en grupos locales y publicaciones locales';
        $proposal->economic_agreements = null;
        $proposal->terms_and_conditions = null;
        $proposal->observations = null;
        $proposal->public_or_private = 'privado';
        $proposal->collab_limit = 'no';
        $proposal->limit = null;
        $proposal->ad_start_date = 2024-04-04;
        $proposal->ad_end_date = 2024-10-01;
        $proposal->send_notification = 'sí';

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = 10;
        // $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();

        $proposal = new Proposal();

        $proposal->user_id = ;
        $proposal->category_id = ;
        $proposal->title = ;
        $proposal->description = ;
        $proposal->collab_start_date = ;
        $proposal->collab_end_date = ;
        $proposal->collab_type =  ;
        $proposal->duration = ;
        $proposal->compensation = ;
        $proposal->compensation_amount = ;
        $proposal->cost = ;
        $proposal->objectives = ;
        $proposal->ideal_collaborators = ;
        $proposal->proposal = ;
        $proposal->responsibility = ;
        $proposal->planning = ;
        $proposal->operations_and_sales = ;
        $proposal->marketing = ;
        $proposal->economic_agreements = ;
        $proposal->terms_and_conditions = ;
        $proposal->observations = ;
        $proposal->public_or_private = ;
        $proposal->collab_limit = ;
        $proposal->limit = ;
        $proposal->ad_start_date = ;
        $proposal->ad_end_date = ;
        $proposal->send_notification = ;

        $proposal->save();
    }
}
