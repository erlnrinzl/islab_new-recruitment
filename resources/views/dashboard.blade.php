<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="dashboard-content">
        <div class="container">
            @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="row mt-4">
                <div class="col">
                    <h3>Roles to Apply To</h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <a href={{ url('form?form=ispta') }}>
                        <div class=" iscsc-hero hero-2 text-start d-flex align-items-end">
                            <h3 class="large-display ms-3">
                                Information Systems Part-Time</br>
                                Lab Assistant
                            </h3>
                            <h3 class="small-display ms-3">
                                PTA
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href={{ url('form?form=iscsc') }}>
                        <div class="iscsc-hero text-start d-flex align-items-end">
                            <h3 class="large-display ms-3">
                                Information System Case </br>
                                Study Club Member
                            </h3>
                            <h3 class="small-display ms-3">
                                ISCSC
                            </h3>
                        </div>
                    </a>
                </div>
                <div class="col">
                    <a href={{ url('form?form=ispm') }}>
                        <div class="iscsc-hero hero-3 text-start d-flex align-items-end">
                            <h3 class="large-display ms-3">
                                Information System Project </br>
                                Member
                            </h3>
                            <h3 class="small-display ms-3">
                                ISPM
                            </h3>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row mt-4">
                <h3>Current Registration Progress</h3>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <table class="table table-progress text-center">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Stage 1</th>
                                <th scope="col">Stage 2</th>
                                <th scope="col">Stage 3</th>
                                <th scope="col">Overall Progress</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($current_progress as $current_item)
                            <tr>
                                <th>{{ Str::upper($current_item['type']).' - '.$current_item['period_name'] }}</th>
                                @foreach ($current_item['progress'] as $score)
                                    <td>@if (!is_null($score))
                                        {{ $score }}
                                    @else {{ $current_item['status_name'] }}
                                    @endif</td>
                                @endforeach
                                @if(count($current_item['progress']) < 3)
                                    @for ($i = 0; $i < 3-count($current_item['progress']); $i++)
                                        <td>Not Opened Yet</td>
                                    @endfor
                                @endif
                                <td>
                                    {{ number_format($current_item['average_progress']*100, 2) }}%
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-4">
                <h3>Past Application</h3>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <table class="table table-progress text-center">
                        <thead>
                            <tr>
                                <th scope="col">Role</th>
                                <th scope="col">Period</th>
                                <th scope="col">Registration Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($past_reg)>0)
                                @foreach ($past_reg as $past_item)
                                <tr>
                                    <td>{{ Str::upper($past_item['type']) }}</td>
                                    <td>{{ $past_item['period_name'] }}</td>
                                    <td>{{ $past_item['status_name'] }}</td>
                                </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3">You have not applied for IS Laboratory recruitment yet.</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
