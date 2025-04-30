<nav class="main-nav">
    <ul class="parent-nav">
        <li>
            <a class="nav-link" href="{{ route("home") }}">
                <span class="rolling-text">HOME</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route("about") }}">
                <span class="rolling-text">ABOUT</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route("services") }}">
                <span class="rolling-text">SERVICES</span>
            </a>
        </li>
        <li>
            <a class="nav-link" href="{{ route("contact") }}">
                <span class="rolling-text">CONTACT</span>
            </a>
        </li>
        {{-- Removed dropdowns and links to non-existent routes --}}
    </ul>
</nav>

