<button {{ $attributes->merge(['type' => 'submit', 'class' => 'flex bg-nw-blue-700 border-2 border-transparent rounded-full font-semibold text-xs text-white uppercase tracking-widest hover:bg-lime-500 hover:text-nw-blue-900 focus:bg-lime-700 active:bg-lime-500 focus:outline-hidden focus:ring-2 focus:ring-lime-700 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    <div class="h-16 w-16  border-4 rounded-full p-1 text-lg font-semibold flex">
    {{ $slot }}
    </div>
</button>

