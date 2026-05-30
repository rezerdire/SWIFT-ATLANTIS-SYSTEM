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
            [
                'number'   => '01',
                'title'    => 'Royal Miramar Resort',
                'location' => 'Al Fujairah, UAE',
                'category' => 'Resort',
                'image'    => 'https://images.unsplash.com/photo-1582268611958-ebfd161ef9cf?w=900&q=80',
                'desc'     => 'A prestigious 316-room luxury resort development in Al Fujairah, UAE. This landmark hospitality project demanded meticulous coordination of structural, MEP, and finishing trades to deliver a world-class guest experience.',
                'stats'    => [['value' => '316', 'label' => 'Rooms'], ['value' => 'UAE', 'label' => 'Location'], ['value' => 'Luxury', 'label' => 'Category']],
            ],
            [
                'number'   => '02',
                'title'    => 'Damas Hotel',
                'location' => 'Dibba Al Fujairah, UAE',
                'category' => 'Hotel',
                'image'    => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=900&q=80',
                'desc'     => 'A B+G+9 floor hotel development in Dibba Al Fujairah — delivering a modern hospitality structure with full structural, MEP, and fit-out works completed to municipality standards.',
                'stats'    => [['value' => 'B+G+9', 'label' => 'Floors'], ['value' => 'Fujairah', 'label' => 'Emirates']],
            ],
            [
                'number'   => '03',
                'title'    => '2 Residential Buildings',
                'location' => 'Muwaileh, Sharjah, UAE',
                'category' => 'Residential',
                'image'    => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=900&q=80',
                'desc'     => 'Twin B+G+7 residential towers in Muwaileh, Sharjah — a dual-building residential project executed concurrently with coordinated scheduling to optimize delivery timelines.',
                'stats'    => [['value' => '2', 'label' => 'Buildings'], ['value' => 'B+G+7', 'label' => 'Floors']],
            ],
            [
                'number'   => '05',
                'title'    => 'Hotel Apartment',
                'location' => 'Palm Jumeirah, Dubai, UAE',
                'category' => 'Hotel',
                'image'    => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80',
                'desc'     => 'A B+G+8 hotel apartment development on the iconic Palm Jumeirah — one of Dubai\'s most prestigious addresses, delivered with premium finishing standards.',
                'stats'    => [['value' => 'B+G+8', 'label' => 'Floors'], ['value' => 'Palm', 'label' => 'Jumeirah']],
            ],
            [
                'number'   => '10',
                'title'    => '11 Residential Buildings',
                'location' => 'Meydan One, Nadd Al Sheba, Dubai',
                'category' => 'Residential',
                'image'    => 'https://images.unsplash.com/photo-1588880331179-bc9b93a8cb5e?w=900&q=80',
                'desc'     => 'An ambitious 11-building residential complex ranging from 2B+G+7 to 2B+G+10 floors — a major multi-building development in the prestigious Meydan One community.',
                'stats'    => [['value' => '11', 'label' => 'Buildings'], ['value' => 'Meydan', 'label' => 'Community']],
            ],
            [
                'number'   => '08',
                'title'    => '95 Townhouses + Retail Mall',
                'location' => 'Jumeirah Golf Estates, Dubai, UAE',
                'category' => 'Mixed Use',
                'image'    => 'https://images.unsplash.com/photo-1464082354059-27db6ce50048?w=900&q=80',
                'desc'     => 'A landmark mixed-use development comprising 95 luxury townhouses alongside a retail mall at Jumeirah Golf Estates — combining residential excellence with vibrant community retail.',
                'stats'    => [['value' => '95', 'label' => 'Townhouses'], ['value' => '+Mall', 'label' => 'Retail']],
            ],
            [
                'number'   => '12',
                'title'    => 'Al Loloaa Hospital',
                'location' => 'Cairo–Alexandria Desert Road, Egypt',
                'category' => 'Healthcare',
                'image'    => 'https://images.unsplash.com/photo-1586773860418-d37222d8fce3?w=900&q=80',
                'desc'     => 'A G+Mezzanine+5 floor hospital complex on the Cairo–Alexandria Desert Road — demanding the highest standards of structural integrity, MEP coordination, and specialist medical-grade fit-out.',
                'stats'    => [['value' => 'G+M+5', 'label' => 'Floors'], ['value' => 'Egypt', 'label' => 'Location']],
            ],
            [
                'number'   => '13',
                'title'    => 'Jaz Belvedere Resort',
                'location' => 'Sharm El Sheikh, South Sinai, Egypt',
                'category' => 'Resort',
                'image'    => 'https://images.unsplash.com/photo-1520250497591-112f2f40a3f4?w=900&q=80',
                'desc'     => 'A luxury resort development in Sharm El Sheikh under Travco Group — one of Egypt\'s leading hospitality groups. This high-profile project reflects our capability in delivering premium resort construction to international standards.',
                'stats'    => [['value' => 'Travco', 'label' => 'Client'], ['value' => 'Luxury', 'label' => 'Category']],
            ],
        ];
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.projects-slideshow');
    }
}
