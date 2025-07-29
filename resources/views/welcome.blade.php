<x-layout>
    <div class="space-y-10 pt-6">
        <section class="text-center">
            <h1 class="font-bold text-4xl">Find the Nearest dhaba</h1>
            <form action=" " class="mt-6">
                <input type="text" placeholder="I'm looking for..." class="rounded-xl bg-white/5 border-white/10 px-5 py-4 w-full max-w-xl">
            </form>
        </section>
        <section class="pt-10">
            <x-section-heading>Top Dhabas</x-section-heading>
            <div class="grid lg:grid-cols-3 gap-8 mt-6">
                <x-job-card/>
                <x-job-card/>
                <x-job-card/>
            </div>
        </section>
        <section>
            <x-section-heading>Tags</x-section-heading>
            <div class="mt-6">
            <x-tag>Gluten-Free</x-tag>
            <x-tag>Spicy</x-tag>
            <x-tag>Organic</x-tag>
            <x-tag>Seafood</x-tag>
            <x-tag>BBQ</x-tag>
            <x-tag>Dessert</x-tag>
            <x-tag>Fast-Food</x-tag>
            <x-tag>Italian</x-tag>
            <x-tag>Halal</x-tag>
            <x-tag>Fresh</x-tag>
            </div>
        </section>
        <section>
            <x-section-heading>Recent Jobs</x-section-heading>
            <div class="mt-6 space-y-3">
            <x-job-card-wide/>
            <x-job-card-wide/>
            <x-job-card-wide/>
            </div>
        </section>
    </div>
</x-layout>
