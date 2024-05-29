<div class="bg-off-white text-pine min-h-screen">
    <x-navigation.navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">Card Entries</h1>
        <p class="mt-2 text-pine/75">From {{$school->name}}</p>

        <x-school.menu active="card-entries" :$school />

        <div class="my-4">
            <x-btn wire:confirm="Are you sure you want to delete all card entries?"
                   wire:click="deleteAll">
                Delete All
            </x-btn>
        </div>

        <div class="relative overflow-x-auto rounded-t-md">
            <table class="table-fixed w-full">
                <thead class="bg-pine text-white">
                <th class="text-start p-2">Date</th>
                <th class="text-start p-2">Time</th>
                <th class="text-start p-2">Student Name</th>
                <th class="text-start p-2">Status</th>
                <th class="p-2"></th>
                </thead>
                <tbody>
                @foreach($this->card_entries as $card_entry)
                    <tr class="border-b-2 border-pine/50">
                        <td class="p-2">{{$card_entry->time->toDateString()}}</td>
                        <td class="p-2">{{$card_entry->time->toTimeString()}}</td>
                        <td class="p-2">{{$card_entry->student->name}}</td>

                        {{-- In the future this could be a setting?--}}
                        <td class="p-2"></td>
                        <td>
                            <x-btn wire:click="deleteEntry({{$card_entry->id}})">
                                <i class="fa-solid fa-trash me-2"></i>
                                Delete
                            </x-btn>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
