<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\CollaborationProposal;

class ProposalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $proposal = new CollaborationProposal();

        $proposal->user_id = '2';
        $proposal->brand = 'Natur Bliss';
        $proposal->image = "http://localhost:8000/img/suncream.jpg";
        // $proposal->category_id = ;
        $proposal->title = 'Lanzamiento de Natur Sol';
        $proposal->description = 'Natur Bliss, una marca de productos naturales para el cuidado de la piel, lanzará Natur Sol, una línea de productos de protección solar y cuidado de la piel diseñada específicamente para aventuras al aire libre';
        $proposal->collab_start_date = '2025-03-01';
        $proposal->collab_end_date = '2025-09-01';
        $proposal->collab_type = 'Co-Branding';
        $proposal->duration = 'Puntual';
        $proposal->compensation = null;
        $proposal->compensation_amount = null;
        $proposal->cost = null;
        $proposal->objectives = 'Mejor conocimiento de la marca y sus valores';
        $proposal->ideal_collaborators = 'Marcas asociadas con el aire libre, vacaciones en la naturaleza, equipaje de aventura';
        $proposal->proposal = 'Queremos lanzar el producto Natur Sol y ofrecer consejos sobre cómo usarlo mejor para aprovechar al máximo el aire libre con protección solar responsable y sostenible';
        $proposal->responsibility = 'Natur Bliss podría colaborar en la promoción de la línea de productos conjuntos a través de campañas de marketing compartidas, actividades al aire libre, eventos de lanzamiento conjunto y colaboraciones con influencers que comparten el interés por la naturaleza y el estilo de vida activo';
        $proposal->planning = null;
        $proposal->operations_and_sales = null;
        $proposal->marketing = null;
        $proposal->economic_agreements = null;
        $proposal->terms_and_conditions = null;
        $proposal->observations = null;
        $proposal->public_or_private = 'Público';
        $proposal->collab_limit = false;
        $proposal->limit = null;
        $proposal->ad_start_date = '2024-04-01';
        $proposal->ad_end_date = '2024-07-01';
        $proposal->send_notification = true;

        $proposal->save();

        $proposal6 = new CollaborationProposal();

        $proposal6->user_id = 8;
        $proposal6->brand = 'Cakery';
        $proposal6->image = "http://localhost:8000/img/cakery-donuts.jpg";
        // $proposal6->category_id = ;
        $proposal6->title = 'Abrimos Cakery en Madrid';
        $proposal6->description = 'Para celebrar la gran apertura de Cakery, una pasteleria de lujo, queremos montar un evento de cinco estrellas con champán, productos de belleza, y mucho más';
        $proposal6->collab_start_date = '2024-09-14';
        $proposal6->collab_end_date = '2024-09-15';
        $proposal6->collab_type = 'Co-Event';
        $proposal6->duration = 'Puntual';
        $proposal6->compensation = null;
        $proposal6->compensation_amount = null;
        $proposal6->cost = null;
        $proposal6->objectives = 'Celebrar y promover la apertura de Cakery';
        $proposal6->ideal_collaborators = 'Marcas de lujo, champán, belleza, esteticistas, cosmetólogas';
        $proposal6->proposal = 'Además de ofrecer nuestros clientes una tarde de lujo. Idealmente, el evento seria a la tarde/noche del día 14 de septiembre en la pasteleria y su terraza';
        $proposal6->responsibility = null;
        $proposal6->planning = null;
        $proposal6->operations_and_sales = null;
        $proposal6->marketing = null;
        $proposal6->economic_agreements = null;
        $proposal6->terms_and_conditions = null;
        $proposal6->observations = null;
        $proposal6->public_or_private = 'Público';
        $proposal6->collab_limit = false;
        $proposal6->limit = null;
        $proposal6->ad_start_date = '2024-03-29';
        $proposal6->ad_end_date = '2024-07-01';
        $proposal6->send_notification = true;

        $proposal6->save();

        $proposal7 = new CollaborationProposal();

        $proposal7->user_id = '1';
        $proposal7->brand = 'TechTalent';
        $proposal7->image = "http://localhost:8000/img/tech-talent.jpg";
        // $proposal7->category_id = ;
        $proposal7->title = 'Celebramos IWD 2025';
        $proposal7->description = 'TechTalent, una fundación de Barcelona que apoya a madres en el ámbito tecnológico, está planeando celebrar el Día Internacional de la Mujer 2025 con un nuevo evento dirigido a fomentar que las mujeres con hijos ingresen al mundo tecnológico. Amigable para niños con un área de juego supervisada, comida y entretenimiento aptos para niños, el evento tiene como objetivo establecer conexiones entre marcas y madres, y ayudar a que la tecnología sea un sector que dé la bienvenida a las habilidades y conocimientos que las madres pueden aportar al mundo tecnológico. Con charlas, comida, networking y más';
        $proposal7->collab_start_date = '2025-03-01';
        $proposal7->collab_end_date = '2025-03-31';
        $proposal7->collab_type = 'Co-Event';
        $proposal7->duration = 'Puntual';
        $proposal7->compensation = null;
        $proposal7->compensation_amount = null;
        $proposal7->cost = null;
        $proposal7->objectives = 'Connectar madres con empresas y marcas del mundo tech';
        $proposal7->ideal_collaborators = 'Marcas, empresas y agencias del mundo tecnológico que quieren contratar madres';
        $proposal7->proposal = 'Ofrecemos una plataforma para connectar empresas y marcas del mundo tech con madres y viceversa en un evento original en Barcelona centro';
        $proposal7->responsibility = null;
        $proposal7->planning = null;
        $proposal7->operations_and_sales = null;
        $proposal7->marketing = null;
        $proposal7->economic_agreements = null;
        $proposal7->terms_and_conditions = null;
        $proposal7->observations = null;
        $proposal7->public_or_private = 'Público';
        $proposal7->collab_limit = false;
        $proposal7->limit = null;
        $proposal7->ad_start_date = '2024-04-01';
        $proposal7->ad_end_date = '2025-03-01';
        $proposal7->send_notification = true;

        $proposal7->save();


        $proposal1 = new CollaborationProposal();

        $proposal1->user_id = '3';
        $proposal1->brand = 'Veg Fest';
        $proposal1->image = "http://localhost:8000/img/vegan-food-fair.jpg";
        // $proposal->category_id = ;
        $proposal1->title = 'Veg Fest Barcelona 2024';
        $proposal1->description = 'Veg Fest es un evento emocionante que queremos lanzar en Barcelona para celebra el Día Internacional Vegano con una amplia variedad de deliciosas opciones de comida vegana, talleres educativos y actividades divertidas';
        $proposal1->collab_start_date = '2024-11-01';
        $proposal1->collab_end_date = '2024-11-03';
        $proposal1->collab_type = 'Co-Event';
        $proposal1->duration = 'Puntual';
        $proposal1->compensation = null;
        $proposal1->compensation_amount = null;
        $proposal1->cost = null;
        $proposal1->objectives = 'Celebrar y promover el Día Internacional Vegano. Destacar la deliciosa y variada comida vegana disponible. Educar al público sobre los beneficios de una dieta basada en plantas para la salud, los animales y el medio ambiente. Fomentar un estilo de vida vegano saludable y sostenible. Apoyar a las empresas locales y promover la economía vegana.';
        $proposal1->ideal_collaborators = 'Restaurantes veganos locales, chefs, bloggers y influencers de comida vegana, grupos de activismo vegano, marcas de productos veganos no alimenticios';
        $proposal1->proposal = 'Veg Fest puede ofrecer una experiencia completa y enriquecedora para los asistentes, al tiempo que promueve un mensaje positivo sobre el veganismo y su impacto en la salud, los animales y el medio ambiente';
        $proposal1->responsibility = 'Responsabilidades de VegFest: Planificación, logística, promoción. Expectativas: Participación, cooperación, profesionalismo, promoción';
        $proposal1->planning = null;
        $proposal1->operations_and_sales = null;
        $proposal1->marketing = 'Promociones en las redes, en grupos locales y publicaciones locales';
        $proposal1->economic_agreements = null;
        $proposal1->terms_and_conditions = null;
        $proposal1->observations = null;
        $proposal1->public_or_private = 'Público';
        $proposal1->collab_limit = false;
        $proposal1->limit = null;
        $proposal1->ad_start_date = '2024-04-04';
        $proposal1->ad_end_date = '2024-10-01';
        $proposal1->send_notification = true;

        $proposal1->save();

        $proposal2 = new CollaborationProposal();

        $proposal2->user_id = 4;
        $proposal2->brand = 'PintArte';
        $proposal2->image = "http://localhost:8000/img/bright-makeup.jpg";
        // $proposal->category_id = ;
        $proposal2->title = 'Makeup urbano en BCN';
        $proposal2->description = 'PintArte, una marca de maquillaje nacido en Barcelona quiere colaborar con otras marcas de la cuidad, sobretodo las que sean más del mundo urbano, como tiendas o marcas de skates, ropa urbana etc para lanzar productos juntos como skates, chandals';
        $proposal2->collab_start_date = '2024-04-01';
        $proposal2->collab_end_date = '2025-04-01';
        $proposal2->collab_type = 'Co-Branding' ;
        $proposal2->duration = 'largo plazo';
        $proposal2->compensation = null;
        $proposal2->compensation_amount = null;
        $proposal2->cost = null;
        $proposal2->objectives = 'Crear un vinculo de marcas urbanas de Barcelona, promover PintArte';
        $proposal2->ideal_collaborators = 'Marcas urbanas de Barcelona';
        $proposal2->proposal = 'Crear un vinculo de marcas urbanas de Barcelona, promover PintArte y dar más visibildad a marcas locales más pequeñas con productos creado en colaboración';
        $proposal2->responsibility = null;
        $proposal2->planning = null;
        $proposal2->operations_and_sales = null;
        $proposal2->marketing = 'Influencers, redes sociales, y también eventos en el futuro';
        $proposal2->economic_agreements = null;
        $proposal2->terms_and_conditions = null;
        $proposal2->observations = null;
        $proposal2->public_or_private = 'Público';
        $proposal2->collab_limit = false;
        $proposal2->limit = null;
        $proposal2->ad_start_date = '2024-03-01';
        $proposal2->ad_end_date = '2024-09-01';
        $proposal2->send_notification = true;

        $proposal2->save();

        $proposal3 = new CollaborationProposal();

        $proposal3->user_id = 5;
        $proposal3->brand = 'Las Amigas del Punto';
        $proposal3->image = "http://localhost:8000/knitting.jpg";
        // $proposal3->category_id = ;
        $proposal3->title = 'Celebramos 10 años tejiendo';
        $proposal3->collab_start_date = '2024-10-19';
        $proposal3->description = 'Nos gustaría celebrar nuestro 10 aniversario con una celebración en un bar o centro civico de Sevilla y pensamos que puede ser una oportunidad de invitar negocios de lana, mercerias, otros grupos de actividades como tejer, coser etc y atraer nuevos miembros al grupo';
        $proposal3->collab_end_date = '2024-10-20';
        $proposal3->collab_type = 'Co-Event';
        $proposal3->duration = 'Puntual';
        $proposal3->compensation = null;
        $proposal3->compensation_amount = null;
        $proposal3->cost = null;
        $proposal3->objectives = 'Promover nuestro grupo y la actividad de tejer';
        $proposal3->ideal_collaborators = 'Un bar o centro civico, tiendas y marcas de lana, tela, negocios de alimentación y bebidas en Sevilla y los alrededores';
        $proposal3->proposal = 'Podemos ofrecer nuestro grupo, familias y amigos para ayudar en la organización y promoción del evento, y tenemos un presupuesto limitado para pagar algo de la comida y alquilar de espacio';
        $proposal3->responsibility = null;
        $proposal3->planning = null;
        $proposal3->operations_and_sales = null;
        $proposal3->marketing = null;
        $proposal3->economic_agreements = null;
        $proposal3->terms_and_conditions = null;
        $proposal3->observations = null;
        $proposal3->public_or_private = 'Público';
        $proposal3->collab_limit = false;
        $proposal3->limit = null;
        $proposal3->ad_start_date = '2024-01-25';
        $proposal3->ad_end_date = '2024-09-01';
        $proposal3->send_notification = true;

        $proposal3->save();

        $proposal4 = new CollaborationProposal();

        $proposal4->user_id = '6';
        $proposal4->brand = 'FRUUT';
        $proposal4->image = "http://localhost:8000/img/fruut-bars.jpg";
        // $proposal4->category_id = ;
        $proposal4->title = 'FRUUT barras energéticas';
        $proposal4->collab_start_date = '2024-01-01';
        $proposal4->collab_end_date = '2024-12-31';
        $proposal4->description = 'Queremos colaborar con tiendas de productos naturales y estudios de deporte, baile, yoga y tal por todo España, para promover nuestras ricas barras energéticas al mundo saludable';
        $proposal4->collab_type = 'Co-Marketing' ;
        $proposal4->duration = 'Largo plazo';
        $proposal4->compensation = 'Descuento';
        $proposal4->compensation_amount = null;
        $proposal4->cost = null;
        $proposal4->objectives = 'Promover nuestras barras de fruta';
        $proposal4->ideal_collaborators = 'Tiendas de ropa de deporte, gimnasios, estudios de yoga, sitios de crossfit...También, tiendas de productos naturales, productos veganos, ferias veganas';
        $proposal4->proposal = 'Promover FRUUT y sus beneficios';
        $proposal4->responsibility = null;
        $proposal4->planning = null;
        $proposal4->operations_and_sales = null;
        $proposal4->marketing = 'Ocupamos de trabajar con influencers y en las redes para promover nuestros colaboradores';
        $proposal4->economic_agreements = null;
        $proposal4->terms_and_conditions = null;
        $proposal4->observations = null;
        $proposal4->public_or_private = 'Público';
        $proposal4->collab_limit = false;
        $proposal4->limit = null;
        $proposal4->ad_start_date = '2024-01-01';
        $proposal4->ad_end_date = '2024-12-31';
        $proposal4->send_notification = true;

        $proposal4->save();

        $proposal5 = new CollaborationProposal();

        $proposal5->user_id = '7';
        $proposal5->brand = 'Zzapas';
        $proposal5->image = "http://localhost:8000/img/sports-shoes.jpg";
        // $proposal5->category_id = ;
        $proposal5->title = 'Innovación tech con Zzapas';
        $proposal5->description = 'Desarollamos un producto que permite a los corredores hacer un seguimiento de sus entrenamientos usando Zzapas equipados con un sensor y un dispositivo technológico';
        $proposal5->collab_start_date = '2023-12-31';
        $proposal5->collab_end_date = '2025-01-01';
        $proposal5->collab_type = 'Co-Branding';
        $proposal5->duration = 'Puntual';
        $proposal5->compensation = null;
        $proposal5->compensation_amount = null;
        $proposal5->cost = null;
        $proposal5->objectives = 'Crear un producto nuevo para corredores';
        $proposal5->ideal_collaborators = 'Marcas de technológia como Apple, Fitbit Inc, Samsung';
        $proposal5->proposal = 'Juntos queremos colaborar en un proyecto de fitness para corredores';
        $proposal5->responsibility = null;
        $proposal5->planning = null;
        $proposal5->operations_and_sales = null;
        $proposal5->marketing = null;
        $proposal5->economic_agreements = null;
        $proposal5->terms_and_conditions = null;
        $proposal5->observations = null;
        $proposal5->public_or_private = 'Público';
        $proposal5->collab_limit = false;
        $proposal5->limit = null;
        $proposal5->ad_start_date = '2024-01-01';
        $proposal5->ad_end_date = '2024-12-31';
        $proposal5->send_notification = true;

        $proposal5->save();

        $proposal8 = new CollaborationProposal();

        $proposal8->user_id = '4';
        $proposal8->brand = 'EvokeX';
        $proposal8->image = "http://localhost:8000/img/perfume.jpg";
        // $proposal8->category_id = ;
        $proposal8->title = 'Lanzamos nueva colonia unisex';
        $proposal8->description = 'Lanzamos una nueva colonia unisex y queremos marcar el evento con fiestas chic por todo de España, exclusivo y cool con un enfoque en los sentidos, como cosas tactiles, olores, música etc';
        $proposal8->collab_start_date = '2024-11-01';
        $proposal8->collab_end_date = '2024-12-15';
        $proposal8->collab_type = 'Co-Event';
        $proposal8->duration = 'Puntual';
        $proposal8->compensation = null;
        $proposal8->compensation_amount = null;
        $proposal8->cost = null;
        $proposal8->objectives = 'Promover EvokeX';
        $proposal8->ideal_collaborators = 'Bares hip, marcas de alcohol, organizaciones con un enfoque en cosas tactiles, como empresas con telas, plumas, música y sonidos';
        $proposal8->proposal = 'Influencers, redes sociales';
        $proposal8->responsibility = null;
        $proposal8->planning = null;
        $proposal8->operations_and_sales = null;
        $proposal8->marketing = null;
        $proposal8->economic_agreements = null;
        $proposal8->terms_and_conditions = null;
        $proposal8->observations = null;
        $proposal8->public_or_private = 'Público';
        $proposal8->collab_limit = false;
        $proposal8->limit = null;
        $proposal8->ad_start_date = '2024-01-01';
        $proposal8->ad_end_date = '2024-12-01';
        $proposal8->send_notification = true;

        $proposal8->save();

        
    }
}

