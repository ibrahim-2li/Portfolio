<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Projects') }}
        </h2>
    </x-slot>

    <div class="py-10">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 text-gray-800 dark:text-gray-200">

            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('projects.create') }}"
                class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white">
                New Projects
                </a>
                </div>

        <div class="overflow-x-auto relative shadow-md sm:rounded-lg" bis_skin_checked="1">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="bg-white text-xs text-gray-700 uppercase bg-gray-10 dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class=" px-6 py-4">
                             Name
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Skill
                        </th>
                        <th scope="col" class="px-6 py-4">
                            Image
                        </th>
                        <th scope="col" class="px-6 py-4">

                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($projects as $project)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{$project->name}}
                        </th>
                        <td class="px-6 py-4">

                            {{$project->skills->name}}
                        </td>
                        <td class="px-6 py-4">
                            <img src="{{asset('storage/'.$project->image)}}" class="w-12 h-12">
                        </td>
                        <td class="flex justify-end px-6 py-4 ">
                        <a href="{{route('projects.edit',$project->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-3">Edit</a>
                        <form method="POST" action="{{route('projects.destroy',$project->id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="font-medium text-red-600 dark:text-blue-500 hover:underline mr-3"
                            onclick="return confirm('Are You Sure ?')"
                            >Delete</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>
                            <h2>No Projects </h2>
                        </td>
                    </tr>
                    @endforelse

                </tbody>
            </table>
        </div>


        </div>
    </div>
</x-app-layout>
