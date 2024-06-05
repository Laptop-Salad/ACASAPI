@props(['students'])

<div class="relative overflow-x-auto rounded-t-md">
    <table class="table-fixed w-full">
        <thead class="bg-pine text-white">
        <th class="text-start p-2">Name</th>
        <th class="text-start p-2">House</th>
        <th class="text-start p-2">Points</th>
        </thead>
        <tbody>
        @foreach($students as $student)
            <tr class="border-b-2 border-pine/50">
                <td class="p-2 font-semibold">
                    <a class="text-blue-500 font-semibold"
                       href="{{route('school.student.points', [$this->school, $student])}}">
                        {{$student->name}}
                    </a>
                </td>
                <td class="p-2 font-semibold">{{$student->house->name}}</td>
                <td class="p-2">{{$student->points->sum('points')}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{$students->links()}}
    </div>
</div>
