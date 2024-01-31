@props(['skills', 'projects'])
<div class="container justify-center items-center mx-auto lg:px-28" x-data="{ selectedTab: 'all' }">
    <nav class="relativ w-full overflow-x-auto mb-12 border-b-2 border-light-tail-100 dark: text-dark-navy-100">
        <ul class="inline-flex">
            <li class="cursor-pointer capitalize m-4">
                <button @click="selectedTab = 'all' "
                    class="w-32 text-center px-4 py-2 bg-red-500 dark:bg-red-500 hover:bg-light-tail-500 text-white rounded-md transition"
                    :class="selectTab == 'all' ? 'bg-light-tail-500' : ''"
                    >All</button>
            </li>
            @foreach ($skills as $projectSkill)
                <li class="cursor-pointer capitalize m-4" x-data="{ projectSkill: {{ json_encode($projectSkill) }} }">
                    <button @click="selectedTab = projectSkill.id "
                        class="w-32 text-center px-4 py-2 bg-red-500 dark:bg-red-500 hover:bg-light-tail-500 text-white rounded-md transition"
                        :class="selectTab == projectSkill.id ? 'bg-light-tail-500' : ''"
                        >{{ $projectSkill->name }}</button>
                </li>
            @endforeach
        </ul>
    </nav>
    <section class=" grid gap-y-12 md:grid-cols-2 md:gap-6 lg:grid-cols-3 lg:gap-2">
        @foreach ($projects as $project)
            <x-frontend.project :project="$project" />
        @endforeach
    </section>
</div>
