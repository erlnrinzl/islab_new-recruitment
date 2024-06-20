<x-app-layout>
    <x-slot name="title">{{ __('Registration Form') }} {{ strtoupper($recruitment->type_slug) }}</x-slot>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('') }}
        </h2>
    </x-slot>

    <div class="container mt-2 pb-5 bg-white">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header">
                        <h3 class="card-title px-2 py-3">{{ $recruitment->type_name }} Registration Form
                        </h3>
                        <p class="card-text px-2">Please fill in the necessary info below to register.</p>
                    </div>
                    <div class="card-body px-4 py-3">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="row mb-3">
                                <div class="col-md-4">
                                    <label for="studentId" class="form-label">Student ID:</label>
                                    <input type="text" class="form-control" id="studentId" value="{{ $student->nim }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="name" class="form-label">Name:</label>
                                    <input type="text" class="form-control" id="name" value="{{ $student->name }}" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="email" class="form-label">Email:</label>
                                    <input type="email" class="form-control" id="email" value="{{ $student->email }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="region" class="form-label">Region:</label>
                                    <input type="text" class="form-control" id="region" value="{{ $student->region->region_name }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="jurusan" class="form-label">Jurusan:</label>
                                    <input type="text" class="form-control" id="jurusan" value="{{ $student->major->major_name }}" disabled>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <label for="period" class="form-label">Period:</label>
                                    <input type="text" class="form-control" id="period" value="{{ $recruitment->period_name }}" disabled>
                                </div>
                                <div class="col-md-6">
                                    <label for="role" class="form-label">Role:</label>
                                    <input type="text" class="form-control" id="role" value="{{ $recruitment->type_name }}" disabled>
                                </div>
                            </div>
                            {{-- <div class="row mb-3">
                                @foreach ($course_required as $course)
                                    <div class="col-md-{{ 12/count($course_required) }}">
                                        <label for="course{{ $course->id }}" class="form-label">{{ $course->course_name }} Score:</label>
                                        <input type="text" class="form-control" id="course{{ $course->id }}" value="{{ $course->course_score_min }}" disabled>
                                    </div>
                                @endforeach
                            </div> --}}
                            <div class="mb-3">
                                <label for="stream_course" class="form-label">Course Option <span class="text-danger">*</span>:</label>
                                <select class="form-select" id="stream_course" name="stream_course" required>
                                    <option value="" disabled @if ($student->streamcourse_id == null)
                                        selected
                                    @endif>Select a course</option>
                                    @foreach ($stream_course as $course)
                                        <option value="{{ $course->id }}" @if ($student->streamcourse_id == $course->id)
                                            selected
                                        @endif>{{ $course->stream_course_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">Phone Number for WhatsApp <span class="text-danger">*</span>:</label>
                                <input type="tel" class="form-control" id="phone" name="phone" @if ($student->phone != null)
                                    value="{{ $student->phone }}"
                                @endif required>
                            </div>
                            <div class="mb-3">
                                <label for="domicile" class="form-label">Current Address (Domicile)<span class="text-danger">*</span>:</label>
                                <textarea class="form-control" id="domicile" name="domicile" rows="3" required>@if ($student->domicile != null){{ $student->domicile }}@endif</textarea>
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
</x-app-layout>
