@props(['departments'])

<div class="relative overflow-x-auto rounded-t-md">
    <table class="table-fixed w-full">
        <thead class="bg-pine text-white">
        <th class="text-start p-2">Name</th>
        <th class="text-start p-2">Teachers</th>
        </thead>
        <tbody>
        @foreach($departments as $department)
            <tr class="border-b-2 border-pine/50">
                <td class="p-2 font-semibold">{{$department->name}}</td>
                <td class="p-2 font-semibold">{{$department->teachers->count()}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <div class="mt-4">
        {{$departments->links()}}
    </div>
</div>
