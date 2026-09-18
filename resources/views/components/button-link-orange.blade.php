<a  {{ $attributes->merge([ 'class' => 'inline-flex items-center px-4 py-2 bg-orange-400 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-orange-300 hover:text-nw-blue-900 focus:bg-lime-700 active:bg-lime-500 focus:outline-hidden focus:ring-2 focus:ring-lime-700 focus:ring-offset-2 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</a>
