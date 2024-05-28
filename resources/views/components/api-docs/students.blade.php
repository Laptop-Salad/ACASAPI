<section id="students" class="space-y-4 my-4">
    <h3 class="font-semibold text-xl">Students</h3>

    <div class="relative overflow-x-auto">
        <table class="table-fixed w-full">
            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
            <th class="text-start p-2 font-normal">Endpoint</th>
            <th class="text-start p-2 font-normal">Description</th>
            <th class="text-start p-2 font-normal">Methods</th>
            </thead>
            <tbody>
            <tr>
                <td class="p-2"><x-api-docs.technical>/students</x-api-docs.technical></td>
                <td class="p-2">Get all students in a given school.</td>
                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
            </tr>
            <tr>
                <td class="p-2"><x-api-docs.technical>/students/{student uuid}</x-api-docs.technical></td>
                <td class="p-2">Get a single student.</td>
                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
            </tr>
            <tr>
                <td class="p-2"><x-api-docs.technical>/students/{student uuid}/card-entries</x-api-docs.technical></td>
                <td class="p-2">
                    Get or upload to a single students card entries. By doing:
                    <span class="block"><x-api-docs.technical>{ date : ddmmyyyy hhiiss }</x-api-docs.technical>.</span>
                </td>
                <td class="p-2 space-x-2">
                    <x-api-docs.technical>GET</x-api-docs.technical>
                    <x-api-docs.technical>POST</x-api-docs.technical>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
