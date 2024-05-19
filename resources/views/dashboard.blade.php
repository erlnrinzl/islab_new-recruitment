<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <section class="dashboard-content">
        <div class="container">
            <div class="row mt-4">
                <div class="col">
                    <h3>Roles to Apply To</h3>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col">
                    <a href="formISCSC">
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
                    <a href="formPTA">
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
                    <a href="formISPM">
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
                            <tr>
                                <th>ISPM</th>
                                <td>75</td>
                                <td>In Review</td>
                                <td>-</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <th>ISPTA</th>
                                <td>75</td>
                                <td>In Review</td>
                                <td>-</td>
                                <td>50%</td>
                            </tr>
                            <tr>
                                <th>ISCSC</th>
                                <td>75</td>
                                <td>In Review</td>
                                <td>-</td>
                                <td>50%</td>
                            </tr>
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
                            <tr>
                                <th>ISPM</th>
                                <td>2022/2023</td>
                                <td>Rejected</td>
                            </tr>
                            <tr>
                                <th>ISCSC</th>
                                <td>2022/2023</td>
                                <td>Rejected</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
