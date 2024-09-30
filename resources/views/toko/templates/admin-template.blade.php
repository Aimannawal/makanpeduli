@include('toko.templates.header')

<aside class="w-64 bg-white border h-screen fixed p-4">
    <h1 class="text-2xl font-bold mb-4">Menu Toko</h1>
    <ul class="space-y-2">
        <li>
            <a href="" class=" hover:bg-cyan-500 hover:text-white p-2 rounded-md block">
                <i class="fas fa-store me-2"></i>
                Sumbang
            </a>
        </li>
    </ul>
</aside>

<div class="content bg-gray-100 h-[200vh] ms-64">
    @yield('content')
</div>

@include('toko.templates.footer')
