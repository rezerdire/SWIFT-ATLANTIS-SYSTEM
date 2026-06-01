<?php

namespace App\Livewire;

use Livewire\Component;

class ProjectsSlideshow extends Component
{
    /** @var array<int, array<string, mixed>> */
    public array $slides = [];

    public function mount(): void
    {
        $this->slides = [
 
    // ─────────────────────────────────────────────
    // UNITED ARAB EMIRATES
    // ─────────────────────────────────────────────
    [
        'number'   => '01',
        'title'    => 'Royal Miramar Resort',
        'location' => 'Al Aqah, Al Fujairah, UAE',
        'category' => 'Resort',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/1.png',
        'desc'     => 'A prestigious 316-room luxury resort development in Al Aqah, Al Fujairah — comprising the main building, staff building, and club house. This landmark hospitality project demanded meticulous coordination of structural, MEP, and finishing trades to deliver a world-class guest experience.',
        'stats'    => [
            ['value' => '316', 'label' => 'Rooms'],
            ['value' => 'UAE',  'label' => 'Location'],
            ['value' => 'Luxury', 'label' => 'Category'],
        ],
    ],
    [
        'number'   => '02',
        'title'    => 'Damas Hotel',
        'location' => 'Dibba Al Fujairah, UAE',
        'category' => 'Hotel',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/2.png',
        'desc'     => 'A B+G+7 floor hotel development in Dibba Al Fujairah — delivering a modern hospitality structure with full structural, MEP, and fit-out works completed to municipality standards.',
        'stats'    => [
            ['value' => 'B+G+7', 'label' => 'Floors'],
            ['value' => 'Fujairah', 'label' => 'Emirates'],
        ],
    ],
    [
        'number'   => '03',
        'title'    => '2 Residential Buildings',
        'location' => 'Muwaileh Commercial, Sharjah, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/3.png',
        'desc'     => 'Twin B+G+7 residential towers in Muwaileh Commercial, Sharjah — a dual-building residential project executed concurrently with coordinated scheduling to optimize delivery timelines.',
        'stats'    => [
            ['value' => '2',    'label' => 'Buildings'],
            ['value' => 'B+G+7', 'label' => 'Floors'],
        ],
    ],
    [
        'number'   => '04',
        'title'    => 'Residential Building',
        'location' => 'Al Khan, Sharjah, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/4.png',
        'desc'     => 'A high-rise residential tower (G+5P+15 typical floors) in Al Khan, Sharjah — a landmark multi-storey development delivering premium residential units with full structural and fit-out works.',
        'stats'    => [
            ['value' => 'G+5P+15', 'label' => 'Floors'],
            ['value' => 'Sharjah',  'label' => 'Emirates'],
        ],
    ],
    [
        'number'   => '05',
        'title'    => '2 Residential Buildings',
        'location' => 'Jesco, Sharjah, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/5.png',
        'desc'     => 'Two compact G+1 residential buildings in Jesco, Sharjah — a dual-building residential project efficiently delivered within a tight footprint.',
        'stats'    => [
            ['value' => '2',   'label' => 'Buildings'],
            ['value' => 'G+1', 'label' => 'Floors'],
        ],
    ],
    [
        'number'   => '06',
        'title'    => 'Hotel Apartment',
        'location' => 'Palm Jumeirah, Dubai, UAE',
        'category' => 'Hotel',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/6.png',
        'desc'     => 'A B+G+8 hotel apartment development on the iconic Palm Jumeirah — one of Dubai\'s most prestigious addresses, delivered with premium finishing standards under the Royal Bay brand.',
        'stats'    => [
            ['value' => 'B+G+8', 'label' => 'Floors'],
            ['value' => 'Palm',  'label' => 'Jumeirah'],
        ],
    ],
    [
        'number'   => '07',
        'title'    => '2 Residential Buildings',
        'location' => 'Nadd Al Hamar, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/7.png',
        'desc'     => 'Twin B+G+7 residential buildings in Nadd Al Hamar, Dubai — a concurrent dual-building delivery with coordinated structural and MEP works.',
        'stats'    => [
            ['value' => '2',    'label' => 'Buildings'],
            ['value' => 'B+G+7', 'label' => 'Floors'],
        ],
    ],
    [
        'number'   => '08',
        'title'    => 'Gold Factory',
        'location' => 'Jabel Ali, Dubai, UAE',
        'category' => 'Industrial',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/8.png',
        'desc'     => 'A G+2 gold manufacturing facility in Jabel Ali, Dubai — a specialist industrial project combining large-span factory floor construction with premium office and operational fit-out.',
        'stats'    => [
            ['value' => 'G+2',     'label' => 'Floors'],
            ['value' => 'Jabel Ali', 'label' => 'Dubai'],
        ],
    ],
    [
        'number'   => '09',
        'title'    => '95 Townhouses + Retail Mall',
        'location' => 'Jumeirah Golf Estates, Dubai, UAE',
        'category' => 'Mixed Use',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/9.jpeg',
        'desc'     => 'A landmark mixed-use development comprising 95 luxury townhouses alongside a retail mall at Jumeirah Golf Estates — combining residential excellence with vibrant community retail.',
        'stats'    => [
            ['value' => '95',   'label' => 'Townhouses'],
            ['value' => '+Mall', 'label' => 'Retail'],
        ],
    ],
    [
        'number'   => '10',
        'title'    => 'Residential Building',
        'location' => 'Studio City, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/10.jpeg',
        'desc'     => 'A B+G+8 residential building in Studio City, Dubai — a modern mid-rise development featuring premium finishes and full MEP coordination.',
        'stats'    => [
            ['value' => 'B+G+8',      'label' => 'Floors'],
            ['value' => 'Studio City', 'label' => 'Dubai'],
        ],
    ],
    [
        'number'   => '11',
        'title'    => '11 Residential Buildings',
        'location' => 'Meydan One, Nadd Al Sheba, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/11.jpeg',
        'desc'     => 'An ambitious 11-building residential complex ranging from 2B+G+7 to 2B+G+10 floors in the prestigious Meydan One community, Nadd Al Sheba — a major multi-building development requiring highly coordinated scheduling and delivery.',
        'stats'    => [
            ['value' => '11',    'label' => 'Buildings'],
            ['value' => 'Meydan', 'label' => 'Community'],
        ],
    ],
 
    // ─────────────────────────────────────────────
    // KSA – JEDDA
    // ─────────────────────────────────────────────
    [
        'number'   => '12',
        'title'    => 'Residential Building',
        'location' => 'Jeddah, Saudi Arabia',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/12.jpeg',
        'desc'     => 'A G+4 floors + roof residential building in Jeddah, KSA — designed and constructed to Saudi municipality standards with full structural, MEP, and architectural fit-out works.',
        'stats'    => [
            ['value' => 'G+4+Roof', 'label' => 'Floors'],
            ['value' => 'KSA',      'label' => 'Location'],
        ],
    ],
 
    // ─────────────────────────────────────────────
    // EGYPT
    // ─────────────────────────────────────────────
    [
        'number'   => '13',
        'title'    => 'Al Loloaa Hospital',
        'location' => 'Wadi Al Natron, Cairo–Alexandria Desert Road, Egypt',
        'category' => 'Healthcare',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/13.jpeg',
        'desc'     => 'A G+Mezzanine+5 floor hospital complex in Wadi Al Natron on the Cairo–Alexandria Desert Road — demanding the highest standards of structural integrity, MEP coordination, and specialist medical-grade fit-out.',
        'stats'    => [
            ['value' => 'G+M+5', 'label' => 'Floors'],
            ['value' => 'Egypt',  'label' => 'Location'],
        ],
    ],
    [
        'number'   => '14',
        'title'    => 'Residential Building Design',
        'location' => '6 October, Cairo–Ismailia Desert Road, Egypt',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/14.jpeg',
        'desc'     => 'A B+G+7 residential building design for the 6 October Association on the Cairo–Ismailia Desert Road — a full architectural design and supervision project.',
        'stats'    => [
            ['value' => 'B+G+7', 'label' => 'Floors'],
            ['value' => 'Egypt',  'label' => 'Location'],
        ],
    ],
    [
        'number'   => '15',
        'title'    => 'Residential Building Design',
        'location' => 'Mansoura City, Egypt',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/15.jpeg',
        'desc'     => 'Front elevation design for a B+G+11 residential tower in Mansoura City, Egypt — delivering a striking contemporary façade for a prominent urban development.',
        'stats'    => [
            ['value' => 'B+G+11',  'label' => 'Floors'],
            ['value' => 'Mansoura', 'label' => 'Egypt'],
        ],
    ],
    [
        'number'   => '16',
        'title'    => 'Villa',
        'location' => 'New Cairo, Egypt',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/16.jpeg',
        'desc'     => 'A B+G+2+roof private villa in New Cairo, Egypt — a fully custom residential project executed with premium architectural finishes and detailed structural works.',
        'stats'    => [
            ['value' => 'B+G+2+Roof', 'label' => 'Floors'],
            ['value' => 'New Cairo',   'label' => 'Egypt'],
        ],
    ],
    [
        'number'   => '17',
        'title'    => 'Villa Ain Al Sokhna',
        'location' => 'Ain Al Sokhna, Egypt',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/17.jpeg',
        'desc'     => 'A G+1+roof villa in Ain Al Sokhna, Egypt — a luxury beachside residential project featuring resort-style landscaping and premium construction finishes.',
        'stats'    => [
            ['value' => 'G+1+Roof',    'label' => 'Floors'],
            ['value' => 'Ain Al Sokhna', 'label' => 'Egypt'],
        ],
    ],
    [
        'number'   => '18',
        'title'    => 'Villa Design',
        'location' => 'Tahta, Suhaj, Egypt',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/18.jpeg',
        'desc'     => 'A G+3+roof villa design in Tahta, Suhaj, Egypt — an architectural design project delivering multiple façade options to an elegant classical aesthetic.',
        'stats'    => [
            ['value' => 'G+3+Roof', 'label' => 'Floors'],
            ['value' => 'Suhaj',    'label' => 'Egypt'],
        ],
    ],
    [
        'number'   => '19',
        'title'    => 'Jaz Belvedere Resort',
        'location' => 'Sharm El Sheikh, South Sinai, Egypt',
        'category' => 'Resort',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/19.jpeg',
        'desc'     => 'A luxury resort development in Sharm El Sheikh under Travco Group — one of Egypt\'s leading hospitality groups. This high-profile project reflects our capability in delivering premium resort construction to international standards.',
        'stats'    => [
            ['value' => 'Travco', 'label' => 'Client'],
            ['value' => 'Luxury', 'label' => 'Category'],
        ],
    ],
    [
        'number'   => '20',
        'title'    => 'Samaya & Lamaya Resorts',
        'location' => 'Marsa Alam, Red Sea, Egypt',
        'category' => 'Resort',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/empty.jpg',
        'desc'     => 'Twin luxury resort developments — Samaya and Lamaya — under Travco Group in Marsa Alam, Red Sea. A dual-resort project showcasing extensive experience in large-scale hospitality construction.',
        'stats'    => [
            ['value' => '2',     'label' => 'Resorts'],
            ['value' => 'Travco', 'label' => 'Client'],
        ],
    ],
 
    // ─────────────────────────────────────────────
    // SWIFT ATLANTIS – OWN PROJECTS (21–24)
    // ─────────────────────────────────────────────
    [
        'number'   => '21',
        'title'    => '10 Villas – MBR City District One',
        'location' => 'Mohamed Bin Rashid Al Maktoum City, District One, Phase 3B, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/21.jpeg',
        'desc'     => 'Construction of 10 G+1 luxury villas at Mohamed Bin Rashid Al Maktoum City, District One, Phase 3B — one of Dubai\'s most prestigious villa communities, established by Swift Atlantis Contracting LLC.',
        'stats'    => [
            ['value' => '10',   'label' => 'Villas'],
            ['value' => 'G+1',  'label' => 'Floors'],
            ['value' => 'MBR City', 'label' => 'Dubai'],
        ],
    ],
    [
        'number'   => '22',
        'title'    => 'Residential Villa',
        'location' => 'Jabal Ali Hills, Saih Shuaib 1, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/empty.jpg',
        'desc'     => 'A B+G+1 luxury residential villa at Plot No. 5131647, Jabal Ali Hills, Saih Shuaib 1 — a contemporary high-spec private residence established by Swift Atlantis Contracting LLC.',
        'stats'    => [
            ['value' => 'B+G+1',    'label' => 'Floors'],
            ['value' => 'Jabal Ali', 'label' => 'Dubai'],
        ],
    ],
    [
        'number'   => '23',
        'title'    => '28 Villas – AlQutaina Compound',
        'location' => 'AlQutaina Governmental Residential Compound, Sharjah, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/empty.jpg',
        'desc'     => 'Establishment of 28 G+1 villas within the AlQutaina Governmental Residential Compound in Sharjah (366 Villas total), under the Sharjah Housing Programme. Consultant: Sharjah Housing Programme.',
        'stats'    => [
            ['value' => '28',     'label' => 'Villas'],
            ['value' => 'G+1',    'label' => 'Floors'],
            ['value' => 'Sharjah', 'label' => 'UAE'],
        ],
    ],
    [
        'number'   => '24',
        'title'    => '96 Villas – Damac Lagoons',
        'location' => 'Damac Lagoons, Dubai, UAE',
        'category' => 'Residential',
        'image'    => 'Images/PROJECTS-COVER-PHOTO/empty.jpg',
        'desc'     => 'Construction of 96 villas at Damac Lagoons, Dubai — an ongoing high-profile villa community project under Consultant Jouzy Consulting Engineers, currently under construction by Swift Atlantis Contracting LLC.',
        'stats'    => [
            ['value' => '96',   'label' => 'Villas'],
            ['value' => 'Damac', 'label' => 'Lagoons'],
            ['value' => 'Dubai', 'label' => 'UAE'],
        ],
    ],
];

    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.projects-slideshow');
    }
}
