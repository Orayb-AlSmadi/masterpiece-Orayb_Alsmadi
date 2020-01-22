@extends('layouts.app')

@section('content')
<div class="container" style="margin-top: 50px; margin-bottom: 50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Car</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{route('car.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Brand </label>
                            <input type="text" class="form-control"  name="brand" required>

                            <label> Year </label>
                            <input type="number" class="form-control"  name="year" required>

                            <label> Price per day (JOD) </label>
                            <input type="number" class="form-control" min="50" max="200" name="price" required>

                            <label> Mileage </label>
                            <input type="number" class="form-control"  name="mileage" required>

                            <label> transmission </label>
                            <select class="custom-select" name="transmission">
                                <option value="Automatic">Automatic</option>
                                <option value="Manual">Manual</option>
                            </select>

                            <label> Seats </label>
                            <input type="number" class="form-control"  min="2" max="9" name="seats" required>

                            <label> luggage </label>
                            <input type="number" class="form-control" min="2" max="9" name="luggage" required>

                            <label> Fuel </label>
                            <select class="custom-select" name="fuel">
                                <option value="Petrol">Petrol</option>
                                <option value="Diesel">Diesel</option>
                            </select>

                            <label> Description </label>
                            <input type="text-area" class="form-control"  name="description">

                            <label> Image </label>
                            <input type="file" class="form-control"  name="image" required>
                        </div>

                        <button type="submit" class="btn btn-info"> Add Car </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
