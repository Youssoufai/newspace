<?php

namespace App\Livewire\LandingPage;

use Livewire\Component;

class Navbar extends Component
{
    public bool $isMenuOpen = false;

    public function toggleMenu()
    {
        $this->isMenuOpen = ! $this->isMenuOpen;
    }

    public function render()
    {
        return view('livewire.landing-page.navbar');
    }
}
