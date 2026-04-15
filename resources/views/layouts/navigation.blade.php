<nav style="background: #fff; border-bottom: 1px solid #e5e7eb; padding: 0 24px; height: 64px; display: flex; align-items: center; justify-content: space-between; font-family: 'Segoe UI', sans-serif;">

    {{-- Logo + Titel --}}
    <div style="display: flex; align-items: center; gap: 12px; min-width: 160px;">
            <div style="font-weight: 700; font-size: 16px; color: #111;">PizzaHub</div>
            <div style="font-size: 12px; color: #9ca3af;">Dashboard</div>
    </div>

    {{-- Navigatie links --}}
    <div style="display: flex; align-items: center; gap: 4px;">

        {{-- Overzicht (actief) --}}
        <a href="{{ route('dashboard') }}"
           style="display: inline-flex; align-items: center; gap: 8px; color: #374151; padding: 8px 18px; border-radius: 8px; font-size: 14px; text-decoration: none; transition: background .15s;"
           onmouseover="this.style.background='#f3f4f6'" onmouseout="this.style.background='transparent'">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/>
            </svg>
            Overzicht
        </a>

        {{-- Gerechten Beheren --}}
        <a href="{{ route('gerechten.index') }}"
           style="display: inline-flex; align-items: center; gap: 8px; color: #374151; padding: 8px 18px; border-radius: 8px; font-size: 14px; text-decoration: none; transition: background .15s;"
           onmouseover="this.style.background='#f3f4f6'" onmouseout="this.style.background='transparent'">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M11 9H9V2H7v7H5V2H3v7c0 2.12 1.66 3.84 3.75 3.97V22h2.5v-9.03C11.34 12.84 13 11.12 13 9V2h-2v7zm5-3v8h2.5v8H21V2c-2.76 0-5 2.24-5 4z"/>
            </svg>
            Gerechten Beheren
        </a>

        {{-- Contact Berichten --}}
        <a href="{{ route('contacts.index') }}"
           style="display: inline-flex; align-items: center; gap: 8px; color: #374151; padding: 8px 18px; border-radius: 8px; font-size: 14px; text-decoration: none;"
           onmouseover="this.style.background='#f3f4f6'" onmouseout="this.style.background='transparent'">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M20 2H4c-1.1 0-2 .9-2 2v18l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2z"/>
            </svg>
            Contact Berichten
        </a>

    </div>

    {{-- Rechts: Terug naar website + Uitloggen --}}
    <div style="display: flex; align-items: center; gap: 20px;">
        <a href="{{ route('home') }}"
           style="font-size: 14px; color: #6b7280; text-decoration: none;"
           onmouseover="this.style.color='#111'" onmouseout="this.style.color='#6b7280'">
            Terug naar website
        </a>

        <form method="POST" action="{{ route('logout') }}" style="margin: 0;">
            @csrf
            <button type="submit"
                    style="display: inline-flex; align-items: center; gap: 8px; background: none; border: none; cursor: pointer; font-weight: 700; font-size: 14px; color: #111; padding: 0;">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17 7l-1.41 1.41L18.17 11H8v2h10.17l-2.58 2.58L17 17l5-5-5-5zM4 5h8V3H4c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h8v-2H4V5z"/>
                </svg>
                Uitloggen
            </button>
        </form>
    </div>

</nav>
