<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#FF8FA4] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#EF557A] focus:bg-[#EF557A] active:bg-[#292352] focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
