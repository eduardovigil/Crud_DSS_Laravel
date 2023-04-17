@extends('layouts.app')

@section('template_title')
    {{ $employee->name ?? "{{ __('Show') Employee" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Employee</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('employees.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $employee->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $employee->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Edad:</strong>
                            {{ $employee->edad }}
                        </div>
                        <div class="form-group">
                            <strong>Salario:</strong>
                            {{ $employee->salario }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
