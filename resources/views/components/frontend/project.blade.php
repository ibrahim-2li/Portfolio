@props(['project'])
<a x-data="{skill: {{ json_encode($project->skill) }} }" href="{{ $project->project_url }}" target="_blank"
    :class="selectedTab == 'all' || selectedTab == projectSkill.id ? 'block' : 'hidden'"
    class="group w-auto max-w-sm overflow-hidden bg-white rounded-lg shadow-lg dark:bg-gray-800">
    <img class="object-cover object-center w-full h-56 ease-in duration-100 group-hover:scale-105"
        src="{{ asset('storage/' . $project->image) }}" alt="avatar">

    <div class="flex  items-center px-10 py-3 bg-gray-900">

        <h1
            class="mx-3 text-lg font-semibold text-white group-hover:text-light-tail-500 dark:group-hover:text-dark-navy-100">
            {{ $project->skills->name }}</h1>
    </div>

    <div class="px-10 py-4">
        <h1
            class="text-xl font-semibold text-gray-800 dark:text-white group-hover:text-light-tail-500 dark:group-hover:text-dark-navy-100">
            {{ $project->name }}</h1>

        <div
            class="flex items-center mt-4 text-gray-700 dark:text-gray-200 group-hover:text-black dark:group-hover:text-white">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-4 h-4">
                <path stroke-linecap="round" stroke-linejoin="round"
                    d="M13.5 6H5.25A2.25 2.25 0 0 0 3 8.25v10.5A2.25 2.25 0 0 0 5.25 21h10.5A2.25 2.25 0 0 0 18 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25" />
            </svg>


            <h1 class="px-2 text-sm group-hover:text-black dark:group-hover:text-white">{{ $project->project_url }}</h1>
        </div>

    </div>
</a>
