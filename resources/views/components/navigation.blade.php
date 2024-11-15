<ul>
    <li><a class="{{request()->routeIs('home') ? 'text-gray-400' : ''}}" href="{{ route('home') }}">Home</a></li>
    <li><a class="{{request()->routeIs('posts.*') ? 'text-gray-400' : ''}}" href="{{ route('posts.index') }}">Blog</a></li>
    <li><a class="{{request()->routeIs('about') ? 'text-gray-400' : ''}}" href="{{ route('about') }}">Nosotros</a></li>
    <li><a class="{{request()->routeIs('contact') ? 'text-gray-400' : ''}}" href="{{ route('contact') }}">Contacto</a></li>
</ul>