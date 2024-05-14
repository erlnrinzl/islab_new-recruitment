@extends('layouts.main')
@section('title', 'Form PTA')
@section('container')
    <div class="container mt-5 pb-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="card-title px-2 py-3">IS Part-Time Lab Assistant Registration Form</h3>
                        <p class="card-text px-2">Please fill in the necessary info below to register.</p>
                    </div>
                    <div class="card-body px-4 py-3">

                        <form method="POST" action="/form">

                            @csrf

                            <div class="mb-3">
                                <label for="studentId" class="form-label">Student ID:</label>
                                <input type="text" class="form-control" id="studentId" value="2602162453" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">Name:</label>
                                <input type="text" class="form-control" id="name" value="Brayen Fredgin Cahyadi"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Email:</label>
                                <input type="email" class="form-control" id="email" value="brayen.cahyadi@binus.ac.id"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="region" class="form-label">Region:</label>
                                <input type="text" class="form-control" id="region" value="Bekasi" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="jurusan" class="form-label">Jurusan:</label>
                                <input type="text" class="form-control" id="jurusan"
                                    value="Business Information Technology" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="period" class="form-label">Period:</label>
                                <input type="text" class="form-control" id="period" value="2023/2024 Even Semester"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="role" class="form-label">Role:</label>
                                <input type="text" class="form-control" id="role" value="IS Part-Time Lab Assistant"
                                    readonly>
                            </div>
                            <div class="mb-3">
                                <label for="courseOption" class="form-label">Course Option <span
                                        class="text-danger">*</span>:</label>
                                <select class="form-select" id="courseOption" required>
                                    <option value=""disabled selected>Select a course</option>
                                    <option value="streaming 1">Streaming 1</option>
                                    <option value="streaming 2">Streaming 2</option>
                                    <option value="streaming 3">Streaming 3</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number for WhatsApp <span
                                        class="text-danger">*</span>:</label>
                                <input type="tel" class="form-control" id="phoneNumber" required>
                            </div>
                            <div class="mb-3">
                                <label for="currentAddress" class="form-label">Current Address <span
                                        class="text-danger">*</span>:</label>
                                <textarea class="form-control" id="currentAddress" rows="3" required></textarea>
                            </div>
                            <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                <button type="submit" class="btn btn-primary">Register</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
