<nav style="background: #fff; border-bottom: 1px solid #e5e7eb; padding: 0 24px; height: 64px; display: flex; align-items: center; justify-content: space-between; font-family: 'Segoe UI', sans-serif;">

    {{-- Logo + Titel --}}
    <div style="display: flex; align-items: center; gap: 12px; min-width: 160px;">
        <div style="width: 42px; height: 42px; background: #f97316; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="white" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/>
            </svg>
        </div>
        <div>
            <div style="font-weight: 700; font-size: 16px; color: #111;">PizzaHub</div>
            <div style="font-size: 12px; color: #9ca3af;">Dashboard</div>
        </div>
    </div>

    {{-- Navigatie links --}}
    <div style="display: flex; align-items: center; gap: 4px;">

        {{-- Overzicht (actief) --}}
        <a href="{{ route('dashboard') }}"
           style="display: inline-flex; align-items: center; gap: 8px; background: #f97316; color: #fff; padding: 8px 18px; border-radius: 8px; font-weight: 600; font-size: 14px; text-decoration: none;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 24 24">
                <path d="M3 3h8v8H3zm0 10h8v8H3zm10-10h8v8h-8zm0 10h8v8h-8z"/>
            </svg>
            Overzicht
        </a>

        {{-- Gerechten Beheren --}}
        <a href="{{ route('menu.index') }}"
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
