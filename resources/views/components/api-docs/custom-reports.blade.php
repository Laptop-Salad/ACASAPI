<section id="custom-reports" class="space-y-4 my-4">
    <h3 class="font-semibold text-xl">Custom Reports (Coming Soon!)</h3>

    <p>
        If you need to send data to our api to generate a custom report that can be viewed on this
        website then this is the section just for that! The table below shows the data that you
        can supply to this endpoint.
    </p>

    <div class="relative overflow-x-auto">

        <table class="table-fixed w-full">
            <thead class="bg-sage border-b-2 border-pine text-white font-normal">
            <th class="text-start p-2 font-normal">Name</th>
            <th class="text-start p-2 font-normal">Description</th>
            </thead>
            <tbody>
            <tr>
                <td class="p-2">
                    <x-api-docs.code-blocks.custom-reports.statistic-blocks />
                </td>
                <td class="p-2">
                    <img src="assets/statistic-block.png" alt="What statistic blocks look like">
                    <p class="mt-2">
                        Displayed at the top of a report. A statistic block would show the statistic
                        then the name you gave the block.
                    </p>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
</section>
