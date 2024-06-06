<div class="bg-off-white text-pine min-h-screen">
    <x-navigation.navigation />

    <div class="p-5">
        <h1 class="text-4xl font-bold">{{ $report->name }}</h1>

        @php($report = json_decode(json_encode($report->data)))
        @dump($report)

        @foreach($report as $key => $section)
            @switch($key)
                @case('stacked-bar-chart')
                    <x-school.reports.stacked-bar-chart :report="$report->{'stacked-bar-chart'}" />
                    @break
                @case('scatter-chart')
                    <x-school.reports.scatter-chart :report="$report->{'scatter-chart'}" />
                    @break
            @endswitch
        @endforeach
    </div>
</div>

