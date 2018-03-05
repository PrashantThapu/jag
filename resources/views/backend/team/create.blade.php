@extends('backend.layouts.app')

@section('title', 'Team')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::open(['route' =>'team.store','class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            @include('backend.team.partials.form', ['header' => 'Add a member'])
            {{ Form::close() }}
        </div>
    </section>
@stop