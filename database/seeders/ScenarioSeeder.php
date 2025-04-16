<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Scenario;
use App\Models\Option;

class ScenarioSeeder extends Seeder
{
    public function run(): void
    {
        $scenario2 = Scenario::create([
            'title' => 'Party vineri seara cu manelist celebru',
            'description' => 'Party vineri seara cu manelist celebru. Se organizează o petrecere într-un club. Intrarea e 50 RON, băuturile extra.'
        ]);
        
        $scenario2->options()->createMany([
            [
                'text' => 'Merg, dar stabilesc un buget clar: maxim 100 RON.',
                'effect_money' => -100,
                'effect_happiness' => 12,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Stau acasă, dar chem câțiva prieteni la mine.',
                'effect_money' => -30,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Refuz – prefer să economisesc pentru altceva.',
                'effect_money' => 0,
                'effect_happiness' => 4,
                'effect_debt' => 0,
                'effect_savings' => 50,
            ],
        ]);
        
        $scenario3 = Scenario::create([
            'title' => 'Prietenii vor la restaurant, tu ai mâncare acasă',
            'description' => 'Prietenii vor la restaurant, tu ai mâncare acasă. Ieșirea costă cam 60 RON. Ai deja gătit acasă, dar e tentant.'
        ]);
        
        $scenario3->options()->createMany([
            [
                'text' => 'Merg cu ei – merită timpul petrecut.',
                'effect_money' => -60,
                'effect_happiness' => 10,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Stau acasă și mănânc ce am.',
                'effect_money' => 0,
                'effect_happiness' => 5,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Le propun să vină la mine – ieftin și distractiv.',
                'effect_money' => -20,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);

        $scenario4 = Scenario::create([
            'title' => 'Trebuie să-ți plătești chiria',
            'description' => 'Trebuie să-ți plătești chiria. Mai ai 3 zile până la scadență și vezi o reducere la un gadget. Ce alegi?',
        ]);
        
        $scenario4->options()->createMany([
            [
                'text' => 'Cumperi gadgetul și te împrumuți pentru chirie.',
                'effect_money' => -200,
                'effect_happiness' => 10,
                'effect_debt' => 200,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Ignori gadgetul și plătești chiria la timp.',
                'effect_money' => 0,
                'effect_happiness' => 6,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Cumperi gadgetul, dar reduci din alte cheltuieli.',
                'effect_money' => -150,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);
        
        $scenario5 = Scenario::create([
            'title' => 'Ai primit 100 RON de la părinți pentru orice vrei',
            'description' => 'Ai primit 100 RON de la părinți pentru orice vrei. Cum gestionezi acești bani bonus?',
        ]);
        
        $scenario5->options()->createMany([
            [
                'text' => 'Îi cheltui rapid pe lucruri mici.',
                'effect_money' => -100,
                'effect_happiness' => 8,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Îi economisești complet.',
                'effect_money' => 0,
                'effect_happiness' => 4,
                'effect_debt' => 0,
                'effect_savings' => 100,
            ],
            [
                'text' => 'Cheltui o parte, economisești o parte.',
                'effect_money' => -50,
                'effect_happiness' => 6,
                'effect_debt' => 0,
                'effect_savings' => 50,
            ],
        ]);
        
        $scenario6 = Scenario::create([
            'title' => 'Vrei să-ți cumperi căști wireless de 250 RON',
            'description' => 'Vrei să-ți cumperi căști wireless de 250 RON. Nu ai mare nevoie, dar îți plac. Le cumperi?',
        ]);
        
        $scenario6->options()->createMany([
            [
                'text' => 'Le cumperi direct – meriți un răsfăț.',
                'effect_money' => -250,
                'effect_happiness' => 10,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Le adaugi în wishlist și aștepți o reducere.',
                'effect_money' => 0,
                'effect_happiness' => 5,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Renunți – nu sunt o prioritate acum.',
                'effect_money' => 0,
                'effect_happiness' => 3,
                'effect_debt' => 0,
                'effect_savings' => 250,
            ],
        ]);
        
        $scenario7 = Scenario::create([
            'title' => 'Ai de ales între spălatul hainelor acasă sau la spălătorie',
            'description' => 'Ai de ales între spălatul hainelor acasă sau la spălătorie. Spălătoria costă 30 RON și e mai comod.',
        ]);
        
        $scenario7->options()->createMany([
            [
                'text' => 'Le speli acasă și economisești.',
                'effect_money' => 0,
                'effect_happiness' => 4,
                'effect_debt' => 0,
                'effect_savings' => 30,
            ],
            [
                'text' => 'Le duci la spălătorie – mai simplu.',
                'effect_money' => -30,
                'effect_happiness' => 6,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Le duci la spălătorie doar luna asta – e criză de timp.',
                'effect_money' => -30,
                'effect_happiness' => 7,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);
        
        $scenario8 = Scenario::create([
            'title' => 'Ai dureri de cap, dar nu ai medicamente',
            'description' => 'Ai dureri de cap, dar nu ai medicamente. Cumperi o cutie de pastile (20 RON) sau aștepți?',
        ]);
        
        $scenario8->options()->createMany([
            [
                'text' => 'Cumperi pastilele imediat.',
                'effect_money' => -20,
                'effect_happiness' => 7,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Aștepți, poate trece cu ceai și somn.',
                'effect_money' => 0,
                'effect_happiness' => 4,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
            [
                'text' => 'Împrumuți o pastilă de la coleg și cumperi altădată.',
                'effect_money' => 0,
                'effect_happiness' => 6,
                'effect_debt' => 0,
                'effect_savings' => 0,
            ],
        ]);

        $scenario9 = Scenario::create([
            'title' => 'Vrei să mergi acasă în weekend',
            'description' => 'Vrei să mergi acasă în weekend. Drumul costă 70 RON. Îți e dor de familie, dar ai și proiecte de făcut și bani limitați.',
        ]);
        $scenario9->options()->createMany([
            ['text' => 'Merg acasă – timpul cu familia e prioritar.', 'effect_money' => -70, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Rămân – termin proiectele și economisesc.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 70],
            ['text' => 'Vorbesc cu ai mei online și merg luna viitoare.', 'effect_money' => 0, 'effect_happiness' => 8, 'effect_debt' => 0, 'effect_savings' => 70],
        ]);
        
        $scenario10 = Scenario::create([
            'title' => 'Apartament mai aproape de facultate',
            'description' => 'Apartament mai aproape de facultate. Găsești un apartament mai aproape, dar e cu 200 RON mai scump pe lună.',
        ]);
        $scenario10->options()->createMany([
            ['text' => 'Mă mut – salvez timp și stres zilnic.', 'effect_money' => -200, 'effect_happiness' => 12, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Rămân unde sunt – costul mai mic e important.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 200],
            ['text' => 'Încerc să negociez cu noul proprietar.', 'effect_money' => -100, 'effect_happiness' => 9, 'effect_debt' => 0, 'effect_savings' => 0],
        ]);
        
        $scenario11 = Scenario::create([
            'title' => 'Ofertă la un curs online de 150 RON',
            'description' => 'Ofertă la un curs online de 150 RON. Te-ar ajuta în carieră, dar ai alte cheltuieli. Investiție sau aștepți?',
        ]);
        $scenario11->options()->createMany([
            ['text' => 'Îl cumpăr – merită pe termen lung.', 'effect_money' => -150, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Aștept altă ofertă – acum nu e momentul.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 150],
            ['text' => 'Îl trec pe wishlist și uit de el pentru o vreme.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0],
        ]);
        
        $scenario12 = Scenario::create([
            'title' => 'Reduceri la supermarket – 2+1 gratis',
            'description' => 'Reduceri la supermarket – 2+1 gratis. Cumperi în avans, deși nu ai nevoie acum, sau păstrezi banii?',
        ]);
        $scenario12->options()->createMany([
            ['text' => 'Profit de ofertă – o să am pe viitor.', 'effect_money' => -60, 'effect_happiness' => 8, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Cumpăr doar ce am nevoie azi.', 'effect_money' => -30, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 30],
            ['text' => 'Nu cumpăr nimic – mai bine păstrez banii.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 60],
        ]);
        
        $scenario13 = Scenario::create([
            'title' => 'Ai spart folia de protecție de la telefon',
            'description' => 'Ai spart folia de protecție de la telefon. Cumperi una nouă (50 RON) sau aștepți până se sparge ecranul?',
        ]);
        $scenario13->options()->createMany([
            ['text' => 'Cumpăr folie nouă imediat.', 'effect_money' => -50, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Aștept – poate nici nu mai sparg nimic.', 'effect_money' => 0, 'effect_happiness' => 3, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Folosești una veche sau improvizezi.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0],
        ]);
        
        $scenario14 = Scenario::create([
            'title' => 'Prietenul tău are nevoie urgentă de bani pentru spital',
            'description' => 'Prietenul tău are nevoie urgentă de bani pentru spital. Îi dai 100 RON din economii sau îl refuzi?',
        ]);
        $scenario14->options()->createMany([
            ['text' => 'Îi dau – sănătatea e mai importantă.', 'effect_money' => -100, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => -100],
            ['text' => 'Îi ofer ajutor în alt mod, nu bani.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Îl refuz – n-am bani de dat acum.', 'effect_money' => 0, 'effect_happiness' => 3, 'effect_debt' => 0, 'effect_savings' => 0],
        ]);
        
        $scenario15 = Scenario::create([
            'title' => 'Ai 3 produse în coșul online, dar eziți să comanzi',
            'description' => 'Ai 3 produse în coșul online, dar eziți să comanzi. Le cumperi acum, aștepți salariul sau le ștergi complet?',
        ]);
        $scenario15->options()->createMany([
            ['text' => 'Finalizez comanda – îmi plac prea mult.', 'effect_money' => -120, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => 0],
            ['text' => 'Aștept salariul – nu e momentul potrivit.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 120],
            ['text' => 'Le șterg – impulsul trece repede.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 120],
        ]);
        $scenario16 = Scenario::create([
            'title' => 'Prietenul tău îți cere 150 RON pentru internet',
            'description' => 'Prietenul tău îți cere 150 RON pentru internet. Spune că îți va returna banii într-o săptămână. Tu mai ai doar 200 RON pentru toată luna.',
        ]);
        $scenario16->options()->createMany([
            [ 'text' => 'Îi dai banii – contează mai mult prietenia.', 'effect_money' => -150, 'effect_happiness' => 9, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Îi dai doar 50 RON – atât îți permiți.', 'effect_money' => -50, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Îl refuzi – nu îți permiți și ai cheltuieli importante.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario17 = Scenario::create([
            'title' => 'Ai rămas fără bani și chiria vine peste 3 zile',
            'description' => 'Ai rămas fără bani și chiria vine peste 3 zile. Te gândești să ceri împrumut 500 RON de la un prieten sau să iei un credit rapid online.',
        ]);
        $scenario17->options()->createMany([
            [ 'text' => 'Împrumuți de la prieten – fără dobândă.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 500, 'effect_savings' => 0 ],
            [ 'text' => 'Apelezi la credit rapid – dar vei plăti mai mult.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 600, 'effect_savings' => 0 ],
            [ 'text' => 'Vinzi ceva din casă pentru a face rost de bani.', 'effect_money' => 300, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario18 = Scenario::create([
            'title' => 'Prietenii vor să ieșiți în weekend, dar nu ai bani',
            'description' => 'Prietenii vor să ieșiți în weekend, dar nu ai bani.   Te gândești să te împrumuți pentru a nu rămâne pe dinafară.',
        ]);
        $scenario18->options()->createMany([
            [ 'text' => 'Te împrumuți și mergi cu ei – n-ai mai ieșit de mult.', 'effect_money' => -100, 'effect_happiness' => 10, 'effect_debt' => 100, 'effect_savings' => 0 ],
            [ 'text' => 'Le explici situația și propui o ieșire mai ieftină.', 'effect_money' => -20, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Refuzi politicos și rămâi acasă.', 'effect_money' => 0, 'effect_happiness' => 3, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario19 = Scenario::create([
            'title' => 'Ai nevoie urgentă de un laptop nou pentru facultate',
            'description' => 'Ai nevoie urgentă de un laptop nou pentru facultate. Nu ai toți banii, dar poți lua unul în rate sau împrumut.',
        ]);
        $scenario19->options()->createMany([
            [ 'text' => 'Cumperi în rate – lunar va fi o presiune.', 'effect_money' => 0, 'effect_happiness' => 10, 'effect_debt' => 2000, 'effect_savings' => 0 ],
            [ 'text' => 'Ceri bani de la părinți sau prieteni.', 'effect_money' => 0, 'effect_happiness' => 7, 'effect_debt' => 1000, 'effect_savings' => 0 ],
            [ 'text' => 'Aștepți până strângi toată suma.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 0, 'effect_savings' => 2000 ],
        ]);
        
        $scenario20 = Scenario::create([
            'title' => 'Prietenul tău îți cere din nou bani a treia oară',
            'description' => 'Prietenul tău îți cere din nou bani a treia oară. Nu ți-a returnat complet datoriile anterioare, dar are din nou nevoie.',
        ]);
        $scenario20->options()->createMany([
            [ 'text' => 'Îi dai iar – ai încredere că are nevoie reală.', 'effect_money' => -100, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => -100 ],
            [ 'text' => 'Îi spui că nu poți până nu returnează restul.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Îi oferi ajutor altfel – mâncare, cazare, sprijin.', 'effect_money' => -30, 'effect_happiness' => 5, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);

        $scenario21 = Scenario::create([
            'title' => 'Ai nevoie urgentă de o vizită la spital',
            'description' => 'Ai nevoie urgentă de o vizită la spital. Te simți rău și e recomandat un control. Cost estimativ: 150 RON.',
        ]);
        $scenario21->options()->createMany([
            [ 'text' => 'Merg imediat – sănătatea e pe primul loc.', 'effect_money' => -150, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Caut o clinică gratuită sau student-friendly.', 'effect_money' => -50, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 100 ],
            [ 'text' => 'Ignor temporar – poate îmi trece de la sine.', 'effect_money' => 0, 'effect_happiness' => 3, 'effect_debt' => 0, 'effect_savings' => 150 ],
        ]);
        
        $scenario22 = Scenario::create([
            'title' => 'S-a rupt patul din cămin',
            'description' => 'S-a rupt patul din cămin. Administrația cere să-l repari sau înlocuiești tu. Cost: 250 RON.',
        ]);
        $scenario22->options()->createMany([
            [ 'text' => 'Îl repari cu un tâmplar local.', 'effect_money' => -150, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 100 ],
            [ 'text' => 'Împrumuți bani pentru unul nou.', 'effect_money' => 0, 'effect_happiness' => 8, 'effect_debt' => 250, 'effect_savings' => 0 ],
            [ 'text' => 'Dorm pe saltea până găsești soluție ieftină.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 250 ],
        ]);
        
        $scenario23 = Scenario::create([
            'title' => 'Trebuie să plătești banchetul de final de an',
            'description' => 'Trebuie să plătești banchetul de final de an. Costul este de 300 RON. E un moment unic, dar destul de scump.',
        ]);
        $scenario23->options()->createMany([
            [ 'text' => 'Plătești – nu vrei să ratezi ocazia.', 'effect_money' => -300, 'effect_happiness' => 12, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Plătești în rate – te descurci cum poți.', 'effect_money' => 0, 'effect_happiness' => 10, 'effect_debt' => 300, 'effect_savings' => 0 ],
            [ 'text' => 'Refuzi – prea scump pentru bugetul tău.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 0, 'effect_savings' => 300 ],
        ]);
        
        $scenario24 = Scenario::create([
            'title' => 'Ai restanță la examen și trebuie să plătești taxa de reexaminare',
            'description' => 'Ai restanță la examen și trebuie să plătești taxa de reexaminare. Costul este 100 RON. Bugetul e deja la limită.',
        ]);
        $scenario24->options()->createMany([
            [ 'text' => 'Plătești taxa – e important să treci.', 'effect_money' => -100, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Ceri părinților un mic ajutor.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 100, 'effect_savings' => 0 ],
            [ 'text' => 'Amâni plata și riști penalizare.', 'effect_money' => 0, 'effect_happiness' => 3, 'effect_debt' => 0, 'effect_savings' => 100 ],
        ]);
        
        $scenario25 = Scenario::create([
            'title' => 'Ți s-a stricat laptopul și ai deadline la proiect',
            'description' => 'Ți s-a stricat laptopul și ai deadline la proiect. Ai de ales între reparație urgentă, închiriere sau apel la colegi.',
        ]);
        $scenario25->options()->createMany([
            [ 'text' => 'Îl repari imediat – 400 RON.', 'effect_money' => -400, 'effect_happiness' => 10, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Îl închiriezi pentru 3 zile – 100 RON.', 'effect_money' => -100, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Rogi un coleg să te lase pe laptopul lui.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario26 = Scenario::create([
            'title' => 'E iarnă și nu mai ai haine groase',
            'description' => 'E iarnă și nu mai ai haine groase. Ai de ales între un set nou, second hand sau împrumut.',
        ]);
        $scenario26->options()->createMany([
            [ 'text' => 'Cumperi haine noi – 300 RON.', 'effect_money' => -300, 'effect_happiness' => 9, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Cumperi second hand – 100 RON.', 'effect_money' => -100, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 200 ],
            [ 'text' => 'Împrumuți de la rude/prieteni.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 300 ],
        ]);
        
        $scenario27 = Scenario::create([
            'title' => 'Ai primit o amendă de 200 RON pentru traversare neregulamentară',
            'description' => 'Ai primit o amendă de 200 RON pentru traversare neregulamentară. Nu o poți contesta. Trebuie să alegi cum te descurci.',
        ]);
        $scenario27->options()->createMany([
            [ 'text' => 'O plătești imediat și înveți lecția.', 'effect_money' => -200, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Împrumuți suma de la un prieten.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 200, 'effect_savings' => 0 ],
            [ 'text' => 'Aștepți și plătești cu penalizare mai târziu.', 'effect_money' => -250, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario28 = Scenario::create([
            'title' => 'Ai pierdut cardul bancar și trebuie înlocuit urgent',
            'description' => 'Ai pierdut cardul bancar și trebuie înlocuit urgent. Emiterea noului card costă 50 RON.',
        ]);
        $scenario28->options()->createMany([
            [ 'text' => 'Plătești și îl recuperezi rapid.', 'effect_money' => -50, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Folosești cash și aștepți finalul lunii.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 0, 'effect_savings' => 50 ],
            [ 'text' => 'Rămâi fără card și te descurci cum poți.', 'effect_money' => 0, 'effect_happiness' => 4, 'effect_debt' => 0, 'effect_savings' => 0 ],
        ]);
        
        $scenario29 = Scenario::create([
            'title' => 'Ți s-a stricat frigiderul din cameră',
            'description' => 'Ți s-a stricat frigiderul din cameră. Ai nevoie de el pentru alimentele tale. Cost reparație: 200 RON.',
        ]);
        $scenario29->options()->createMany([
            [ 'text' => 'Îl repari imediat – ai mâncare perisabilă.', 'effect_money' => -200, 'effect_happiness' => 8, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Folosești frigiderul colegului temporar.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 200 ],
            [ 'text' => 'Te descurci cu alimente neperisabile.', 'effect_money' => 0, 'effect_happiness' => 5, 'effect_debt' => 0, 'effect_savings' => 200 ],
        ]);
        
        $scenario30 = Scenario::create([
            'title' => 'Telefonul tău moare în mijlocul sesiunii',
            'description' => 'Telefonul tău moare în mijlocul sesiunii. Ai nevoie de el pentru comunicare cu colegii și profesori.',
        ]);
        $scenario30->options()->createMany([
            [ 'text' => 'Îți iei un telefon ieftin la ofertă – 400 RON.', 'effect_money' => -400, 'effect_happiness' => 9, 'effect_debt' => 0, 'effect_savings' => 0 ],
            [ 'text' => 'Folosești un telefon vechi de rezervă.', 'effect_money' => 0, 'effect_happiness' => 6, 'effect_debt' => 0, 'effect_savings' => 400 ],
            [ 'text' => 'Împrumuți unul de la un prieten.', 'effect_money' => 0, 'effect_happiness' => 7, 'effect_debt' => 0, 'effect_savings' => 400 ],
        ]);
    }
}
