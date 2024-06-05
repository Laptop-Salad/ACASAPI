@props(['teachers'])

<div class="relative overflow-x-auto rounded-t-md">
    <table class="table-fixed w-full">
        <thead class="bg-pine text-white">
        <th class="text-start p-2">Name</th>
        <th class="text-start p-2">Department</th>
        <th class="text-start p-2">Special Role</th>
        </thead>
        <tbody>
        @foreach($teachers as $teacher)
            <tr class="border-b-2 border-pine/50">
                <td class="p-2 font-semibold">{{$teacher->name}}</td>
                <td class="p-2 font-semibold">{{$teacher->department->name}}</td>
                <td class="p-2 font-semibold">{{$teacher->special_role}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{$teachers->links()}}
    </div>
</div>
