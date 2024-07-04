@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="d-flex justify-content-start mb-3">
        <a href="{{ url()->previous() }}" class="btn btn-secondary">
            <i class="fas fa-backward"></i> Back
        </a>
    </div>
    <div class="card">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th>名村</th>
                            <th>Baidu</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($villages as $village)
                            <tr>
                                <td>{{ $village->longname }}</td>
                                <td><a href="{{ $village->baidu }}" target="_blank">Baidu</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@endsection
