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
        $proposal->brand = 'NatureBliss';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal->title = 'Lanzamiento de NatureSol, protección solar natural';
        $proposal->description = 'NatureBliss, una marca de productos naturales para el cuidado de la piel, lanzará NatureSol, una línea de productos de protección solar y cuidado de la piel diseñada específicamente para aventuras al aire libre';
        $proposal->collab_start_date = '2025-03-01';
        $proposal->collab_end_date = '2025-09-01';
        $proposal->collab_type = 'Co-Branding';
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
        $proposal->ad_start_date = '2024-04-01';
        $proposal->ad_end_date = '2024-07-01';
        $proposal->send_notification = 'sí';

        $proposal->save();

        $proposal1 = new Proposal();

        $proposal1->user_id = '20';
        // $proposal->category_id = ;
        $proposal->brand = 'VegFest';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal1->title = 'VegFest Barcelona: Celebrando el Día Internacional Vegano';
        $proposal1->description = 'VegFest es un evento emocionante que queremos lanzar en Barcelona para celebra el Día Internacional Vegano con una amplia variedad de deliciosas opciones de comida vegana, talleres educativos y actividades divertidas';
        $proposal1->collab_start_date = '2024-11-01';
        $proposal1->collab_end_date = '2024-11-03';
        $proposal1->collab_type = 'Co-Event';
        $proposal1->duration = 'Puntual';
        $proposal1->compensation = null;
        $proposal1->compensation_amount = null;
        $proposal1->cost = null;
        $proposal1->objectives = 'Celebrar y promover el Día Internacional Vegano. Destacar la deliciosa y variada comida vegana disponible. Educar al público sobre los beneficios de una dieta basada en plantas para la salud, los animales y el medio ambiente. Fomentar un estilo de vida vegano saludable y sostenible. Apoyar a las empresas locales y promover la economía vegana.';
        $proposal1->ideal_collaborators = 'Restaurantes veganos locales, chefs, bloggers y influencers de comida vegana, grupos de activismo vegano, marcas de productos veganos no alimenticios';
        $proposal1->proposal = 'VegFest puede ofrecer una experiencia completa y enriquecedora para los asistentes, al tiempo que promueve un mensaje positivo sobre el veganismo y su impacto en la salud, los animales y el medio ambiente';
        $proposal1->responsibility = 'Responsabilidades de VegFest: Planificación, logística, promoción. Expectativas: Participación, cooperación, profesionalismo, promoción';
        $proposal1->planning = null;
        $proposal1->operations_and_sales = null;
        $proposal1->marketing = 'Promociones en las redes, en grupos locales y publicaciones locales';
        $proposal1->economic_agreements = null;
        $proposal1->terms_and_conditions = null;
        $proposal1->observations = null;
        $proposal1->public_or_private = 'Público';
        $proposal1->collab_limit = 'no';
        $proposal1->limit = null;
        $proposal1->ad_start_date = '2024-04-04';
        $proposal1->ad_end_date = '2024-10-01';
        $proposal1->send_notification = 'sí';

        $proposal1->save();

        $proposal2 = new Proposal();

        $proposal2->user_id = 10;
        // $proposal->category_id = ;
        $proposal->brand = 'MAKE+';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal2->title = 'Promoción de la marca local MAKE+ con otras marcas locales del mundo urbano';
        $proposal2->description = 'MAKE+, una marca de maquillaje nacido en Barcelona quiere colaborar con otras marcas de la cuidad, sobretodo las que sean más del mundo urbano, como tiendas o marcas de skates, ropa urbana etc para lanzar productos juntos como skates, chandals';
        $proposal2->collab_start_date = '2024-04-01';
        $proposal2->collab_end_date = '2025-04-01';
        $proposal2->collab_type = 'Co-Branding' ;
        $proposal2->duration = 'largo plazo';
        $proposal2->compensation = null;
        $proposal2->compensation_amount = null;
        $proposal2->cost = null;
        $proposal2->objectives = 'Crear un vinculo de marcas urbanas de Barcelona, promover MAKE+ y dar más visibildad a marcas locales más pequeñas con productos creado en colaboración';
        $proposal2->ideal_collaborators = 'Marcas urbanas de Barcelona';
        $proposal2->proposal = null;
        $proposal2->responsibility = null;
        $proposal2->planning = null;
        $proposal2->operations_and_sales = null;
        $proposal2->marketing = 'Influencers, redes sociales, y también eventos en el futuro';
        $proposal2->economic_agreements = null;
        $proposal2->terms_and_conditions = null;
        $proposal2->observations = null;
        $proposal2->public_or_private = 'Público';
        $proposal2->collab_limit = 'no';
        $proposal2->limit = null;
        $proposal2->ad_start_date = '2024-03-01';
        $proposal2->ad_end_date = '2024-09-01';
        $proposal2->send_notification = 'sí';

        $proposal2->save();

        $proposal3 = new Proposal();

        $proposal3->user_id = 7;
        // $proposal3->category_id = ;
        $proposal->brand = 'Las Amigas del Punto';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal3->title = 'Celebramos 10 años de Las Amigas del Punto, un grupo de tejer en Madrid';
        $proposal3->description = 'Nos gustaría celebrar nuestro 10 aniversario con una celebración en un bar o centro civico de Madrid y pensamos que puede ser una oportunidad de invitar negocios de lana, mercerias, otros grupos de actividades como tejer, coser etc y atraer nuevos miembros al grupo';
        $proposal3->collab_start_date = '2024-10-19';
        $proposal3->collab_end_date = '2024-10-20';
        $proposal3->collab_type = 'Co-Event';
        $proposal3->duration = 'Puntual';
        $proposal3->compensation = null;
        $proposal3->compensation_amount = null;
        $proposal3->cost = null;
        $proposal3->objectives = 'Promover nuestro grupo y la actividad de tejer';
        $proposal3->ideal_collaborators = 'Un bar o centro civico, tiendas y marcas de lana, tela, negocios de alimentación y bebidas';
        $proposal3->proposal = 'Podemos ofrecer nuestro grupo, familias y amigos para ayudar en la organización y promoción del evento, y tenemos un presupuesto limitado para pagar algo de la comida y alquilar de espacio';
        $proposal3->responsibility = null;
        $proposal3->planning = null;
        $proposal3->operations_and_sales = null;
        $proposal3->marketing = null;
        $proposal3->economic_agreements = null;
        $proposal3->terms_and_conditions = null;
        $proposal3->observations = null;
        $proposal3->public_or_private = 'Público';
        $proposal3->collab_limit = 'no';
        $proposal3->limit = null;
        $proposal3->ad_start_date = '2024-01-25';
        $proposal3->ad_end_date = '2024-09-01';
        $proposal3->send_notification = 'sí';

        $proposal3->save();

        $proposal4 = new Proposal();

        $proposal4->user_id = '12';
        // $proposal4->category_id = ;
        $proposal->brand = 'FRUUT';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal4->title = 'Product placement de FRUUT, barras energéticas hechas completamente de fruta';
        $proposal4->description = 'Para promover nuestras ricas barras energéticas queremos colaborar con tiendas de productos naturales y estudios de deporte, baile, yoga';
        $proposal4->collab_start_date = '2024-01-01';
        $proposal4->collab_end_date = '2024-12-31';
        $proposal4->collab_type = 'Co-Marketing' ;
        $proposal4->duration = 'Largo plazo';
        $proposal4->compensation = 'Descuento';
        $proposal4->compensation_amount = null;
        $proposal4->cost = null;
        $proposal4->objectives = 'Promover nuestras barras de fruta';
        $proposal4->ideal_collaborators = 'Tiendas de ropa de deporte, gimnasios, estudios de yoga, sitios de crossfit...También, tiendas de productos naturales, productos veganos, ferias veganas';
        $proposal4->proposal = null;
        $proposal4->responsibility = null;
        $proposal4->planning = null;
        $proposal4->operations_and_sales = null;
        $proposal4->marketing = 'Ocupamos de trabajar con influencers y en las redes para promover nuestros colaboradores';
        $proposal4->economic_agreements = null;
        $proposal4->terms_and_conditions = null;
        $proposal4->observations = null;
        $proposal4->public_or_private = 'Público';
        $proposal4->collab_limit = 'no';
        $proposal4->limit = null;
        $proposal4->ad_start_date = '2024-01-01';
        $proposal4->ad_end_date = '2024-12-31';
        $proposal4->send_notification = 'sí';

        $proposal4->save();

        $proposal5 = new Proposal();

        $proposal5->user_id = '15';
        // $proposal5->category_id = ;
        $proposal->brand = 'Zapas';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal5->title = 'Innovación para el corredor conectado con Zapas';
        $proposal5->description = 'Desarollamos un producto que permite a los corredores hacer un seguimiento de sus entrenamientos usando Zapas equipados con un sensor y un dispositivo technológico';
        $proposal5->collab_start_date = '2023-12-31';
        $proposal5->collab_end_date = '2025-01-01';
        $proposal5->collab_type = 'Co-Branding';
        $proposal5->duration = 'Puntual';
        $proposal5->compensation = null;
        $proposal5->compensation_amount = null;
        $proposal5->cost = null;
        $proposal5->objectives = 'Crear un producto nuevo para corredores';
        $proposal5->ideal_collaborators = 'Marcas de technológia como Apple, Fitbit Inc, Samsung';
        $proposal5->proposal = null;
        $proposal5->responsibility = null;
        $proposal5->planning = null;
        $proposal5->operations_and_sales = null;
        $proposal5->marketing = null;
        $proposal5->economic_agreements = null;
        $proposal5->terms_and_conditions = null;
        $proposal5->observations = null;
        $proposal5->public_or_private = 'Público';
        $proposal5->collab_limit = 'no';
        $proposal5->limit = null;
        $proposal5->ad_start_date = '2024-01-01';
        $proposal5->ad_end_date = '2024-12-31';
        $proposal5->send_notification = 'sí';

        $proposal5->save();

        $proposal6 = new Proposal();

        $proposal6->user_id = 18;
        // $proposal6->category_id = ;
        $proposal->brand = '';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal6->title = ;
        $proposal6->description = ;
        $proposal6->collab_start_date = ;
        $proposal6->collab_end_date = ;
        $proposal6->collab_type = 'Co-Event';
        $proposal6->duration = ;
        $proposal6->compensation = ;
        $proposal6->compensation_amount = ;
        $proposal6->cost = ;
        $proposal6->objectives = ;
        $proposal6->ideal_collaborators = ;
        $proposal6->proposal = ;
        $proposal6->responsibility = ;
        $proposal6->planning = ;
        $proposal6->operations_and_sales = ;
        $proposal6->marketing = ;
        $proposal6->economic_agreements = ;
        $proposal6->terms_and_conditions = ;
        $proposal6->observations = ;
        $proposal6->public_or_private = ;
        $proposal6->collab_limit = ;
        $proposal6->limit = ;
        $proposal6->ad_start_date = ;
        $proposal6->ad_end_date = ;
        $proposal6->send_notification = ;

        $proposal6->save();

        $proposal7 = new Proposal();

        $proposal7->user_id = ;
        $proposal7->category_id = ;
        $proposal->brand = '';
        $proposal->image = "http://localhost:8000/img/image.jpg";
        $proposal7->title = ;
        $proposal7->description = ;
        $proposal7->collab_start_date = ;
        $proposal7->collab_end_date = ;
        $proposal7->collab_type =  ;
        $proposal7->duration = ;
        $proposal7->compensation = ;
        $proposal7->compensation_amount = ;
        $proposal7->cost = ;
        $proposal7->objectives = ;
        $proposal7->ideal_collaborators = ;
        $proposal7->proposal = ;
        $proposal7->responsibility = ;
        $proposal7->planning = ;
        $proposal7->operations_and_sales = ;
        $proposal7->marketing = ;
        $proposal7->economic_agreements = ;
        $proposal7->terms_and_conditions = ;
        $proposal7->observations = ;
        $proposal7->public_or_private = ;
        $proposal7->collab_limit = ;
        $proposal7->limit = ;
        $proposal7->ad_start_date = ;
        $proposal7->ad_end_date = ;
        $proposal7->send_notification = ;

        $proposal7->save();

        
    }
}
