<div class="bg-off-white text-pine min-h-screen">
    <x-navigation.navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">{{ $student->name }}</h1>
        <p class="mt-2 text-pine/75">From {{$student->house->name}} of {{$school->name}}</p>

            <div class="mt-4">
            <table class="table-fixed w-full">
                <thead class="bg-pine text-white">
                <th class="text-start p-2">Teacher</th>
                <th class="text-start p-2">Type</th>
                <th class="text-start p-2">Points Awarded</th>
                <th class="text-start p-2">Comment</th>
                </thead>
                <tbody>
                @foreach($student->points->sortBy('date') as $point)
                    <tr class="border-b-2 border-pine/50">
                        <td>{{$point->teacher->name}}</td>
                        <td>{{$point->type}}</td>
                        <td>{{$point->points}}</td>
                        <td>{{$point->comment}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
