<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public $services = 
    [
        [
        'id' => 1,
        'name' => 'Creazione di una pagina web statica',
        'description' => 'Creazione di una pagina web statica con un design personalizzato, completamente responsive e che funzioni correttamente su tutti i dispositivi. Il servizio include la codifica del design in HTML, CSS e JavaScript.', 
        'deliverables' => 'statica',
        'timeframe' => '2-4', 
        'price' => '€1000',
        'img' => '/media/servizio_01.jpg',
        ],
        [
        'id' => 2, 
        'name' => 'Creazione di una pagina web dinamica',
        'description' => 'Creazione di una pagina web dinamica con funzionalità interattive, come ad esempio moduli di contatto o sistemi di login. Il servizio include la codifica del design in HTML, CSS e JavaScript, nonché lo sviluppo di funzionalità dinamiche utilizzando un linguaggio di programmazione lato server, come PHP.', 
        'deliverables' => 'dinamica',
        'timeframe' => '4-6', 
        'price' => '€2000',
        'img' => '/media/servizio_02.jpg',
        ],
        [
        'id' => 3, 
        'name' => 'Sviluppo di un tema personalizzato per WordPress',
        'description' => "Sviluppo di un tema personalizzato per il CMS WordPress, basato sul design fornito dal cliente o su un design creato ad hoc dal nostro team di sviluppo. Il servizio include la creazione di template per le pagine principali del sito (come l'homepage, la pagina dei servizi, la pagina del blog, ecc.), la personalizzazione del design tramite CSS e l'integrazione di eventuali plugin o widget richiesti dal cliente.", 
        'deliverables' => 'Wordpress',
        'timeframe' => '3-4',
        'price' => '€1500', 
        'img' => '/media/servizio_03.jpg',
        ],
    ];

    public function service_index() {
        return view('services', ['services' => $this->services]);
    }

    public function service_show($id) {
        forEach($this->services as $service) {
            if ($service['id'] == $id) {
                return view('dettaglio', ['service' => $service]);
            };
        };
    }
}