<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-emerald-900 uppercase tracking-widest hover:bg-white-700 focus:bg-white-700 active:bg-white-900 focus:outline-none focus:ring-2 focus:ring-white-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
