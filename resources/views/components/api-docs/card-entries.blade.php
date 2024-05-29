<section id="card-entries" class="space-y-4 my-4">
    <h3 class="font-semibold text-xl">Card Entries</h3>

    <div class="relative overflow-x-auto">
        <table class="table-fixed w-full">
            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
            <th class="text-start p-2 font-normal">Endpoint</th>
            <th class="text-start p-2 font-normal">Description</th>
            <th class="text-start p-2 font-normal">Methods</th>
            </thead>
            <tbody>
            <tr>
                <td class="p-2"><x-api-docs.technical>/card-entries</x-api-docs.technical></td>
                <td class="p-2">Get all card entries for a given school.</td>
                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
            </tr>
            <tr>
                <td class="p-2"><x-api-docs.technical>student/{student id}/card-entries/date/{date}</x-api-docs.technical></td>
                <td class="p-2">Get all the card entries for a given date in the format:
                    <x-api-docs.technical>DDMMYYYHHMMSS</x-api-docs.technical>.</td>
                <td class="p-2"><x-api-docs.technical>GET</x-api-docs.technical></td>
            </tr>
            <tr>
                <td class="p-2"><x-api-docs.technical>/card-entries/{card entry id}</x-api-docs.technical></td>
                <td class="p-2">Get a card entry by ID.</td>
                <td class="p-2 space-x-2">
                    <x-api-docs.technical>GET</x-api-docs.technical>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
