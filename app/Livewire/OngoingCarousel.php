<?php

namespace App\Livewire;

use Livewire\Component;

class OngoingCarousel extends Component
{
    /** @var array<int, array<string, mixed>> */
    public array $projects = [];

    public function mount(): void
    {
        $this->projects = [
            [
                'id'       => 'PROJ-2024-01',
                'title'    => 'Residential Villa Complex',
                'location' => 'Al Barsha South, Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1504307651254-35680f356dfd?w=700&q=80',
                'type'     => 'Residential',
                'status'   => 'In Progress',
                'status_color' => 'bg-blue text-white',
                'floors'   => 'G+1 + Roof Terrace',
                'started'  => 'Q1 2024',
                'target'   => 'Q4 2025',
                'hover_border' => 'hover:border-blue/40',
            ],
            [
                'id'       => 'PROJ-2024-02',
                'title'    => 'Commercial Office Building',
                'location' => 'Business Bay, Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=700&q=80',
                'type'     => 'Commercial',
                'status'   => 'Structural Phase',
                'status_color' => 'bg-gold text-navy',
                'floors'   => 'B+G+12 Floors',
                'started'  => 'Q3 2024',
                'target'   => 'Q2 2026',
                'hover_border' => 'hover:border-gold/40',
            ],
            [
                'id'       => 'PROJ-2025-01',
                'title'    => 'G+1 Residential Compound',
                'location' => 'Al Quoz, Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=700&q=80',
                'type'     => 'Residential',
                'status'   => 'Finishing Phase',
                'status_color' => 'bg-sky text-navy',
                'floors'   => 'G+1 + Landscaped Podium',
                'started'  => 'Q4 2023',
                'target'   => 'Q3 2025',
                'hover_border' => 'hover:border-sky/40',
            ],
            [
                'id'       => 'PROJ-2025-02',
                'title'    => 'Retail + Residential Development',
                'location' => 'Jumeirah Village Circle, Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1560179707-f14e90ef3623?w=700&q=80',
                'type'     => 'Mixed Use',
                'status'   => 'In Progress',
                'status_color' => 'bg-blue text-white',
                'floors'   => 'B+G+6 Floors',
                'started'  => 'Q1 2025',
                'target'   => 'Q1 2027',
                'hover_border' => 'hover:border-blue/40',
            ],
            [
                'id'       => 'PROJ-2025-03',
                'title'    => 'Luxury Hotel Apartments',
                'location' => 'Downtown Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?w=700&q=80',
                'type'     => 'Hospitality',
                'status'   => 'Foundation Phase',
                'status_color' => 'bg-blue text-white',
                'floors'   => 'B+G+18 Floors',
                'started'  => 'Q2 2025',
                'target'   => 'Q4 2027',
                'hover_border' => 'hover:border-blue/40',
            ],
            [
                'id'       => 'PROJ-2025-04',
                'title'    => 'Industrial Warehouse Complex',
                'location' => 'Al Quoz Industrial, Dubai, UAE',
                'image'    => 'https://images.unsplash.com/photo-1590674899484-d5640e854abe?w=700&q=80',
                'type'     => 'Industrial',
                'status'   => 'In Progress',
                'status_color' => 'bg-blue text-white',
                'floors'   => 'G+Mezzanine',
                'started'  => 'Q3 2025',
                'target'   => 'Q1 2026',
                'hover_border' => 'hover:border-blue/40',
            ],
        ];
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.ongoing-carousel');
    }
}
