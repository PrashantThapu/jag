@extends('backend.layouts.app')

@section('title', 'Team')

@section('content')
    <section>
        <div class="section-body">
            {{ Form::model($team, ['route' =>['team.update', $team->id],'class'=>'form form-validate','role'=>'form', 'files'=>true, 'novalidate']) }}
            {{ method_field('PUT') }}
            @include('backend.team.partials.form', ['header' => 'Edit team member <span class="text-primary">('.str_limit($team->name, 47).')</span>'])
            {{ Form::close() }}
        </div>
    </section>
@stop